<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us - Utopia College of Health</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
        include "db.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            $sql = "INSERT INTO messages (name, email, message)
                    VALUES ('$name', '$email', '$message')";

            if (mysqli_query($conn, $sql)) {

                echo "<p style='color: green; text-align: center;'>
                        Thank you, $name! Your message has been received.
                    </p>";

            } else {

                echo "<p style='color: red; text-align: center;'>
                        Sorry, something went wrong.
                    </p>";
            }
        }
    ?>

    <?php
        include_once 'nav.php';
    ?>

    <section class="contact">

        <div class="section-title">
            <h2>Contact Us</h2>
            <p>
                We would love to hear from you.
            </p>
        </div>


        <div class="contact-container">

            <div class="contact-card">

                <h3>Our Address</h3>

                <p>
                    📍 College Address
                </p>

            </div>


            <div class="contact-card">

                <h3>Phone Number</h3>

                <p>
                    📞 +234 XXX XXX XXXX
                </p>

            </div>


            <div class="contact-card">

                <h3>Email Address</h3>

                <p>
                    ✉️ info@college.com
                </p>

            </div>

        </div>


        <div class="contact-form">

            <h2>Send Us a Message</h2>

            <form action="contact.php" method="post">

                <label for="name">Full Name</label>
                <input type="text" id="name" name="name"
                    placeholder="Enter your full name" required>


                <label for="email">Email Address</label>
                <input type="email" id="email" name="email"
                    placeholder="Enter your email" required>


                <label for="message">Message</label>
                <textarea id="message" name="message"
                    placeholder="Write your message..." rows="6"
                    required></textarea>


                <button type="submit">
                    Send Message
                </button>

            </form>

        </div>

    </section>
<?php
    include_once 'footer.php';
?>

</body>

</html>