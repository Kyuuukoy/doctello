<?php
	require "header.php";
	require "includes/dbh.inc.php";
	// require "includes/comment.inc.php";
	require "includes/getcomment.inc.php";

	date_default_timezone_set('Asia/Manila');
?>

<main class="main-content">
	<?php if (isset($_SESSION['userId'])): ?>
		
		<!-- Clinic Hero / Header Section -->
		<section class="hero-section">
			<div id="titlebox">
				<h1 id="titlebox_title">Private Dermatology MD</h1>
				<p id="titlebox_description">
					Sed quis volutpat ligula. Phasellus commodo cursus quam vitae semper. Vivamus mi est, eleifend nec facilisis a, facilisis et est. Mauris faucibus convallis massa, et iaculis quam dignissim sit amet.
				</p>

				<div class="hours-card" style="background: var(--bg-surface); padding: 1.25rem; border-radius: var(--radius-md); border: 1px solid var(--border-color); margin-bottom: 1.5rem;">
					<h3 style="margin-top:0; margin-bottom: 0.75rem;">Operating Hours</h3>
					<p class="categorybox_details_openhours"><strong>SUN:</strong> CLOSED</p>
					<p class="categorybox_details_openhours"><strong>MON - SAT:</strong> 9:00 AM - 6:00 PM</p>
					<p class="categorybox_details_address" style="margin-top: 0.75rem;">
						📍 Montebello Rd., Apas, Cebu City, 6000 Cebu
					</p>
				</div>

				<div id="buttonbox" style="display: flex; gap: 1rem;">
					<a href="reserv.php" class="btn btn-primary">Place Reservation</a>
					<a href="#" class="btn btn-outline">Chat</a>
				</div>
			</div>

			<div id="cimagebox">
				<img src="resources/derma.jpg" id="imagebox_image" alt="Dermatology Clinic">
			</div>
		</section>

		<!-- Clinic Location & Maps Section -->
		<section class="section-spacing">
			<h2>Location Map</h2>
			<div id="mapsbox" style="margin-top: 1rem;">
				<img src="resources/derma-map.jpg" id="mapsbox_image" style="width: 100%; max-height: 400px; object-fit: cover; border-radius: var(--radius-lg); border: 1px solid var(--border-color);" alt="Clinic Map Location">
			</div>
		</section>

		<!-- Nearby Clinics Carousel Grid -->
		<!-- Reviews Section -->
		<section class="section-spacing">
			<h2 id="comments_title">Reviews & Feedback</h2>

			<!-- Submit Comment Form -->
			<form method="POST" action="includes/comment.inc.php" class="signup-form" style="margin-top: 1.5rem; margin-bottom: 2rem;">
				<input type="hidden" name="uid" value="<?php echo isset($_SESSION['userUid']) ? $_SESSION['userUid'] : 'Anonymous'; ?>">
				<input type="hidden" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>">

				<div class="form-group">
					<label for="message">Leave a review</label>
					<textarea id="message" name="message" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: var(--radius-md); font-family: var(--font-sans);" placeholder="Share your experience with this clinic..." required></textarea>
				</div>

				<div>
					<button id="message-button" type="submit" name="submit" class="btn btn-primary">Submit Comment</button>
				</div>
			</form>

			<!-- Display Comments List -->
			<div class="comments-list">
				<?php getComments($conn); ?>
			</div>
		</section>

	<?php else: ?>
		
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