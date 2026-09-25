<?php
// session_start();
// $userId = $_SESSION["userId"] ?? null;

include "db.php";

$result = mysqli_query(
    $conn,
    "SELECT id, name, email, message, created_at
     FROM messages
     ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="./css/style.css">
    <style>
        .admin {
            padding: 60px 30px;
            background-color: #f5f7fa;
            min-height: 100vh;
        }

        .admin-container {
            max-width: 1200px;
            margin: auto;
        }

        .admin h1 {
            text-align: center;
            color: #064e3b;
            margin-bottom: 10px;
        }

        .admin h2 {
            color: #064e3b;
            margin-bottom: 25px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .message-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .message-table th,
        .message-table td {
            padding: 15px;
            border: 1px solid #e5e7eb;
            text-align: left;
            vertical-align: top;
        }

        .message-table th {
            background-color: #064e3b;
            color: white;
        }

        .message-table tr:hover {
            background-color: #ecfdf5;
        }

</style>
    
</head>

<body>

<section class="admin">

    <div class="admin-container">

        <h1>Admin Dashboard</h1>

        <h2>Contact Messages</h2>

        <?php if (mysqli_num_rows($result) > 0): ?>

            <div class="table-wrapper">

                <table class="message-table">

                    <thead>

                        <tr>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Message</th>

                            <th>Date</th>

                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php while ($row = mysqli_fetch_assoc($result)): ?>

                            <tr>

                                <td>
                                    <?= htmlspecialchars($row['name']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($row['email']) ?>
                                </td>

                                <td>
                                    <?= nl2br(htmlspecialchars($row['message'])) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($row['created_at']) ?>
                                </td>
                                <td>
                                    <a href="reply.php?id=<?= $row['id'] ?>">Reply</a>
                                </td>

                            </tr>

                        <?php endwhile; ?>

                    </tbody>

                </table>

            </div>

        <?php else: ?>

            <p>No messages found.</p>

        <?php endif; ?>

    </div>

</section>

</body>

</html>