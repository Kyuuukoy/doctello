<?php
session_start();

// Make sure to include your database connection file
require_once 'dbh.inc.php'; 

if (isset($_POST['submit'])) {
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = trim($_POST['message']);

    // Ensure the message isn't empty before inserting
    if (!empty($message)) {
        $sql = "INSERT INTO comments (uid, date, message) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $uid, $date, $message);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }

    // Redirect back to the page
    header("Location: ../derma.php?comment=success");
    exit();
} else {
    header("Location: ../derma.php");
    exit();
}