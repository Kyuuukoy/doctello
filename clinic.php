<?php
    require "header.php";
    date_default_timezone_set('Asia/Manila');
?>

<main class="main-content">
    <?php if (isset($_SESSION['userId'])): ?>
        
        <!-- Hero / Intro Section -->
        <section id="introcontainer" class="hero-section">
            <div id="titlebox">
                <h1 id="titlebox_title">Lorem Ipsum Clinic</h1>
                <h3 id="titlebox_description">
                    Sed quis volutpat ligula. Phasellus commodo cursus quam vitae semper. Vivamus mi est, eleifend nec facilisis a, facilisis et est.
                </h3>
                
                <h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
                <p class="categorybox_details_address">Phasellus commodo cursus.</p>

                <div id="buttonbox" style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                    <a href="reserv.php" class="btn btn-primary">Place Reservation</a>
                    <a href="#" class="btn btn-outline">Chat</a>
                </div>
            </div>

            <div id="cimagebox">
                <img src="resources/rec.jpg" id="imagebox_image" alt="Clinic Overview">
            </div>
        </section>

        <!-- Category / Nearby Clinics Carousel Section -->
        <section id="categorycontainer" class="section-spacing">
            <div class="categorybox">
                <div class="categorybox_header">
                    <h2>Clinics Near You</h2>
                    <a href="seeall.php" class="btn btn-outline">See All</a>
                </div>

                <div class="categorybox_carousel">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="categorybox_option">
                            <a href="clinic.php" class="categorybox_details_a">
                                <img src="resources/rec.jpg" class="categorybox_image" alt="Clinic Thumbnail">
                                <h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
                                <h3 class="categorybox_details_name">Lorem Ipsum</h3>
                                <p class="categorybox_details_description">Sed quis volutpat ligula.</p>
                                <p class="categorybox_details_address">Phasellus commodo cursus.</p>
                            </a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- Comments & Reviews Section -->
        <section class="section-spacing">
            <h2 id="comments_title">Reviews</h2>

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="signup-form" style="max-width: 600px; margin-top: 1rem;">
                <input type="hidden" name="uid" value="<?php echo htmlspecialchars($_SESSION['userId']); ?>">
                <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s"); ?>">
                
                <div class="form-group">
                    <label for="message">Leave a review:</label>
                    <textarea id="message" name="message" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: var(--radius-md); font-family: var(--font-sans);" placeholder="Write your thoughts..."></textarea>
                </div>

                <button id="message-button" type="submit" name="submit" class="btn btn-primary" style="margin-top: 0.75rem;">Post Comment</button>
            </form>
        </section>

    <?php else: ?>
        
        <!-- Logged Out State -->
        <section class="auth-wrapper">
            <div class="auth-card">
                <div class="auth-header">
                    <h2>Access Restricted</h2>
                    <p class="auth-subtitle">Please log in or register to view page details and schedule clinic appointments.</p>
                </div>
            </div>
        </section>

    <?php endif; ?>
</main>

<?php
    require "footer.php";
?>