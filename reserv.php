<?php
    require "header.php";
?>

<main class="main-content">
    <div class="auth-wrapper">
        <section class="auth-card">
            
            <header class="auth-header">
                <h2>Place Reservation</h2>
                <p class="auth-subtitle">Book your healthcare needs with us</p>
            </header>

            <?php
            // Feedback Alert Logic
            if (isset($_GET['reserv']) && $_GET['reserv'] == "success") {
                echo '
                <div class="alert alert-success" role="alert">
                    <svg class="alert-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Reservation Submitted Successfully!</span>
                </div>';
            } elseif (isset($_GET['error'])) {
                $errorMessage = "An error occurred. Please try again.";

                if ($_GET['error'] == "emptyfield") {
                    $errorMessage = "Please enter valid reservation details!";
                } elseif ($_GET['error'] == "sqlerror") {
                    $errorMessage = "Database error. Please try again later.";
                } elseif ($_GET['error'] == "notloggedin") {
                    $errorMessage = "You must be logged in to make a reservation.";
                }

                echo '
                <div class="alert alert-danger" role="alert">
                    <svg class="alert-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>' . htmlspecialchars($errorMessage) . '</span>
                </div>';
            }
            ?>

            <?php if (isset($_SESSION['userId'])): ?>

                <form action="includes/reserv.inc.php" method="post" class="signup-form">
                    <div class="form-group">
                        <label for="reserv">Reservation Details</label>
                        <input type="text" id="reserv" name="reserv" placeholder="Enter reservation/consultation details here..." required>
                    </div>

                    <button type="submit" name="reserv-submit" class="btn btn-primary btn-block">
                        Submit Reservation
                    </button>
                </form>

            <?php else: ?>

                <div class="alert alert-danger">
                    <svg class="alert-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m0 0v2m0-2h2m-2 0H10m11 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>You are logged out! Please log in to place a reservation.</span>
                </div>

            <?php endif; ?>

        </section>
    </div>
</main>

<?php
    require "footer.php";
?>