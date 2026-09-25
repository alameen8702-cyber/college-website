<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: adminlogin.php");
    exit;
}

include "db.php";

if (!isset($_GET["id"])) {
    die("Message ID not found.");
}

$id = intval($_GET["id"]);

$stmt = mysqli_prepare(
    $conn,
    "SELECT id, name, email, message, reply
     FROM messages
     WHERE id = ?"
);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$message = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

if (!$message) {
    die("Message not found.");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $reply = trim($_POST["reply"]);

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;

        $mail->Username = "utopiacollegeofhealth@gmail.com";

        $mail->Password = "college website";

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom(
            "utopiacollegeofhealth@gmail.com",
            "Utopia College of Health"
        );

        $mail->addAddress(
            $message["email"],
            $message["name"]
        );

        $mail->isHTML(true);

        $mail->Subject = "Reply from Utopia College of Health";

        $mail->Body = "
            <h2>Utopia College of Health</h2>

            <p>Dear " . htmlspecialchars($message["name"]) . ",</p>

            <p>" . nl2br(htmlspecialchars($reply)) . "</p>

            <br>

            <p>Regards,<br>
            Utopia College of Health</p>
        ";

        $mail->AltBody = $reply;

        $mail->send();


        $update = mysqli_prepare(
            $conn,
            "UPDATE messages
             SET reply = ?, replied_at = NOW()
             WHERE id = ?"
        );

        mysqli_stmt_bind_param(
            $update,
            "si",
            $reply,
            $id
        );

        mysqli_stmt_execute($update);

        mysqli_stmt_close($update);

        header("Location: admin.php");
        exit;


    } catch (Exception $e) {

        $error = "Email could not be sent. Please check your Gmail settings and App Password.";

    }
}

?>