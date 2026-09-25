<?php

session_start();

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $stmt = mysqli_prepare(
        $conn,
        "SELECT id, username, `password` FROM admins WHERE username = ?"
    );

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        if (password_verify($password, $row["password"])) {

            $_SESSION["admin"] = true;
            $_SESSION["admin_username"] = $row["username"];
            $_SESSION["userId"] = $row["id"];

            header("Location: admin.php");
            exit;

        } else {

            $error = "Invalid username or password.";

        }

    } else {

        $error = "Invalid username or password.";

    }

    mysqli_stmt_close($stmt);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<section class="admin-login">

    <div class="login-box">

        <h1>Admin Login</h1>
        <?php if (isset($error)): ?>

        <p style="color: red; text-align: center; margin-bottom: 15px;">
        <?= htmlspecialchars($error) ?></p>

        <?php endif; ?>

        <form action="admin_login.php" method="POST">

            <label>Username</label>

            <input type="text" name="username" placeholder="Enter username" required>

            <label>Password</label>

            <input type="password" name="password" placeholder="Enter password" required>

            <button type="submit">Login</button>

        </form>

    </div>

</section>

</body>

</html>