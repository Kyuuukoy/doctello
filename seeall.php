<?php
	require "header.php";
?>

<main class="main-content">
	<?php if (isset($_SESSION['userId'])): ?>

		<section id="filtercontainer" aria-label="Search Filters">
			<div id="filterbox">
				<button type="button" class="btn btn-outline filterbox_button">Location</button>
				<button type="button" class="btn btn-outline filterbox_button">Day</button>
				<button type="button" class="btn btn-outline filterbox_button">Time</button>
			</div>
		</section>

		<section id="categorycontainer" class="section-spacing">
			<div class="categorybox">
				
				<div class="categorybox_header">
					<div class="categorybox_title">
						<h2>Clinics and Labs near you</h2>
					</div>
				</div>

				<div class="categorybox_carousel">
					<?php for ($i = 0; $i < 8; $i++): ?>
						<article class="categorybox_option">
							<a href="clinic.php" class="categorybox_details_a">
								<img src="resources/rec.jpg" alt="Clinic photo" class="categorybox_image">
								<h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
								<h3 class="categorybox_details_name">Lorem Ipsum</h3>
								<p class="categorybox_details_description">Sed quis volutpat ligula.</p>
								<p class="categorybox_details_address">Phasellus commodo cursus.</p>
							</a>
						</article>
					<?php endfor; ?>
				</div>

			</div>
		</section>

	<?php else: ?>

		<div class="auth-wrapper">
			<div class="auth-card">
				<div class="alert alert-danger" role="alert">
					<p>Please log in to view available clinics near you.</p>
				</div>
			</div>
		</div>

	<?php endif; ?>
</main>

<?php
	require "footer.php";
?>