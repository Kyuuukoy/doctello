<?php
// Start session to access logged-in user details
session_start();

if (isset($_POST['reserv-submit'])) {

    // 1. Guard against unauthenticated submissions
    if (!isset($_SESSION['userId'])) {
        header("Location: ../reserv.php?error=notloggedin");
        exit();
    }

    require 'dbh.inc.php';

    $reserv = trim($_POST['reserv']);
    $userId = $_SESSION['userId'];

    // 2. Validate input
    if (empty($reserv)) {
        header("Location: ../reserv.php?error=emptyfield");
        exit();
    }

    // 3. Insert reservation associated with the active user ID
    $sql = "INSERT INTO reservation (uId, reservType) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../reserv.php?error=sqlerror");
        exit();
    }

    // Bind parameters: "is" -> integer (userId), string (reservType)
    mysqli_stmt_bind_param($stmt, "is", $userId, $reserv);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // 4. Redirect with success flag
    header("Location: ../reserv.php?reserv=success");
    exit();

} else {
    // Direct access redirect
    header("Location: ../reserv.php");
    exit();
}