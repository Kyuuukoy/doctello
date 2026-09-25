<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/logo.jpg" type="image/x-icon">
    <title>Home | Doctello</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Source+Serif+4:wght@600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-container">
            
            <a href="index.php" class="logo-link">
                <img src="resources/logo.jpg" alt="Doctello Logo" id="logo_image">
            </a>

            <nav class="nav-container">
                <?php if (isset($_SESSION['userId'])): ?>
                    
                    <ul class="nav-links">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>

                    <form action="includes/logout.inc.php" method="post" class="auth-form logout-form">
                        <button type="submit" name="logout-submit" class="btn btn-secondary">Logout</button>
                    </form>

                <?php else: ?>

                    <form action="includes/login.inc.php" method="post" class="auth-form login-form">
                        <div class="input-group">
                            <input type="text" name="mailuid" placeholder="Username..." required>
                        </div>
                        <div class="input-group">
                            <input type="password" name="pwd" placeholder="Password..." required>
                        </div>
                        <button type="submit" name="login-submit" class="btn btn-primary">Log In</button>
                    </form>

                    <a href="signup.php" class="btn btn-outline">Sign Up</a>

                <?php endif; ?>
            </nav>
            
        </div>
    </header>

</body>
</html>