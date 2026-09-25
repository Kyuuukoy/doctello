<?php
    require "header.php";
?>

<main class="main-content">
    <?php if (isset($_SESSION['userId'])): ?>

        <!-- Hero / Intro Section -->
        <section id="introcontainer" class="hero-section">
            <div id="titlebox">
                <h1 id="titlebox_title">Doctello</h1>
                <p id="titlebox_description">
                    Doctello is a free online web application that lets users make online health consultation reservations at clinics near their vicinity. Doctello contains comprehensive information on clinics spanning various medical specialties—from pediatric care to geriatrics.
                </p>

                <search id="searchbox">
                    <form action="search.php" method="GET" class="auth-form" style="width: 100%;">
                        <input type="text" id="searchbox_searchbar" name="query" placeholder="Look for Clinics, Doctors, or Specialties...">
                        <button type="submit" id="searchbox_searchbutton" class="btn btn-primary">Search</button>
                    </form>
                </search>
            </div>

            <div id="imagebox">
                <img src="resources/DiverseWorkplaceHealthcare-SocialMedia-v2-1200x630-c-center.png" id="imagebox_image" alt="Doctello Health Consultation">
            </div>
        </section>

        <!-- Clinics Section -->
        <section id="categorycontainer" class="section-spacing">
            <div class="categorybox">
                <div class="categorybox_header">
                    <div class="categorybox_title">
                        <h2>Clinics Near You</h2>
                    </div>
                    <div class="categorybox_seeall">
                        <a href="seeall.php?type=clinics" class="btn-outline btn">See All</a>
                    </div>
                </div>

                <div class="categorybox_carousel">
                    <article class="categorybox_option">
                        <a href="derma.php" class="categorybox_details_a">
                            <img src="resources/derma.jpg" alt="Private Dermatology MD" class="categorybox_image">
                            <h4 class="categorybox_details_openhours">FRI, 9:00 AM - 6:00 PM</h4>
                            <h3 class="categorybox_details_name">Private Dermatology MD</h3>
                            <p class="categorybox_details_description">Sed quis volutpat ligula.</p>
                            <p class="categorybox_details_address">Montebello Rd., Apas, Cebu City, 6000 Cebu</p>
                        </a>
                    </article>

                    <article class="categorybox_option">
                        <a href="clinic.php?id=1" class="categorybox_details_a">
                            <img src="resources/rec.jpg" alt="Clinic Preview" class="categorybox_image">
                            <h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
                            <h3 class="categorybox_details_name">Lorem Ipsum Clinic</h3>
                            <p class="categorybox_details_description">Sed quis volutpat ligula.</p>
                            <p class="categorybox_details_address">Phasellus commodo cursus.</p>
                        </a>
                    </article>

                    <article class="categorybox_option">
                        <a href="clinic.php?id=2" class="categorybox_details_a">
                            <img src="resources/rec.jpg" alt="Clinic Preview" class="categorybox_image">
                            <h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
                            <h3 class="categorybox_details_name">Lorem Ipsum Health</h3>
                            <p class="categorybox_details_description">Sed quis volutpat ligula.</p>
                            <p class="categorybox_details_address">Phasellus commodo cursus.</p>
                        </a>
                    </article>
                </div>
            </div>

            <!-- Laboratories Section -->
            <div class="categorybox">
                <div class="categorybox_header">
                    <div class="categorybox_title">
                        <h2>Laboratories Near You</h2>
                    </div>
                    <div class="categorybox_seeall">
                        <a href="seeall.php?type=labs" class="btn-outline btn">See All</a>
                    </div>
                </div>

                <div class="categorybox_carousel">
                    <article class="categorybox_option">
                        <a href="clinic.php?id=3" class="categorybox_details_a">
                            <img src="resources/rec.jpg" alt="Laboratory Preview" class="categorybox_image">
                            <h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
                            <h3 class="categorybox_details_name">Central Diagnostics</h3>
                            <p class="categorybox_details_description">Sed quis volutpat ligula.</p>
                            <p class="categorybox_details_address">Phasellus commodo cursus.</p>
                        </a>
                    </article>

                    <article class="categorybox_option">
                        <a href="clinic.php?id=4" class="categorybox_details_a">
                            <img src="resources/rec.jpg" alt="Laboratory Preview" class="categorybox_image">
                            <h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
                            <h3 class="categorybox_details_name">City Lab Services</h3>
                            <p class="categorybox_details_description">Sed quis volutpat ligula.</p>
                            <p class="categorybox_details_address">Phasellus commodo cursus.</p>
                        </a>
                    </article>

                    <article class="categorybox_option">
                        <a href="clinic.php?id=5" class="categorybox_details_a">
                            <img src="resources/rec.jpg" alt="Laboratory Preview" class="categorybox_image">
                            <h4 class="categorybox_details_openhours">WED, 9:00 AM - 12:00 PM</h4>
                            <h3 class="categorybox_details_name">BioCare Laboratory</h3>
                            <p class="categorybox_details_description">Sed quis volutpat ligula.</p>
                            <p class="categorybox_details_address">Phasellus commodo cursus.</p>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!-- Category Buttons Section -->
        <section id="browsecontainer" class="section-spacing">
            <div class="browsebox_header">
                <h2>Browse by Category</h2>
            </div>
            <div class="browsebox_grid">
                <a href="search.php?category=dermatology" class="btn btn-outline">Dermatology</a>
                <a href="search.php?category=family-medicine" class="btn btn-outline">Family Medicine</a>
                <a href="search.php?category=pediatrics" class="btn btn-outline">Pediatrics</a>
                <a href="search.php?category=cardiology" class="btn btn-outline">Cardiology</a>
                <a href="search.php?category=neurology" class="btn btn-outline">Neurology</a>
                <a href="search.php?category=orthopedics" class="btn btn-outline">Orthopedics</a>
            </div>
        </section>

    <?php else: ?>

        <!-- Logged Out View -->
        <section class="auth-wrapper">
            <div class="auth-card">
                <div class="auth-header">
                    <h2>Welcome to Doctello</h2>
                    <p class="auth-subtitle">Please log in to browse local clinics and book consultations.</p>
                </div>
                <div class="alert alert-danger">
                    <svg class="alert-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <span>You are currently logged out.</span>
                </div>
            </div>
        </section>

    <?php endif; ?>
</main>

<?php
    require "footer.php";
?>