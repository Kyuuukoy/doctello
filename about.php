<?php
    require "header.php";
?>

<main class="main-content">
    <?php if (isset($_SESSION['userId'])): ?>
        
        <section class="hero-section">
            <div id="aboutbox">
                <h1 id="aboutbox_title">About Doctello</h1>
                
                <p id="aboutbox_description">
                    Doctello is a free online web application that lets users make online health consultation reservations at clinics in their immediate vicinity.
                </p>
                
                <p>
                    The platform provides detailed information about various specialized medical practices—ranging from pediatric care to geriatric expertise. 
                    Doctello directly places your reservation requests into the clinic's reception management system for prompt verification.
                </p>

                <p>
                    Users can easily browse participating clinics, view real-time operational status (open or closed), and check exact daily operating hours for consultations.
                </p>
            </div>

            <div id="imagebox">
                <img src="resources/Online-doctor-consultation.jpg" id="imagebox_image" alt="Doctello Clinic Reception Area">
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