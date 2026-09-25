<?php
    require "header.php";
?>

<main class="auth-wrapper">
    <div class="auth-card">
        
        <div class="auth-header">
            <h2>Create an Account</h2>
            <p class="auth-subtitle">Fill in your details below to get started.</p>
        </div>

        <?php
            // Error Alerts
            if (isset($_GET['error'])) {
                $errorMsg = '';
                switch ($_GET['error']) {
                    case "emptyfields":
                        $errorMsg = "Please fill in all required fields.";
                        break;
                    case "invaliduidmail":
                        $errorMsg = "Invalid username and e-mail address.";
                        break;
                    case "invaliduid":
                        $errorMsg = "Invalid username format.";
                        break;
                    case "invalidmail":
                        $errorMsg = "Please enter a valid e-mail address.";
                        break;
                    case "passwordcheck":
                        $errorMsg = "Your passwords do not match.";
                        break;
                    case "usertaken":
                        $errorMsg = "That username is already taken.";
                        break;
                }
                if ($errorMsg) {
                    echo '<div class="alert alert-danger" role="alert">
                            <svg class="alert-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                            <span>' . $errorMsg . '</span>
                          </div>';
                }
            }

            // Success Alerts
            if (isset($_GET['signup']) && $_GET['signup'] == "success") {
                echo '<div class="alert alert-success" role="alert">
                        <svg class="alert-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span>Signup successful! You can now log in.</span>
                      </div>';
            }

            if (isset($_GET["newpwd"]) && $_GET["newpwd"] == "passwordupdated") {
                echo '<div class="alert alert-success" role="alert">
                        <svg class="alert-icon" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        <span>Your password has been reset successfully!</span>
                      </div>';
            }
        ?>

        <form action="includes/signup.inc.php" method="post" class="signup-form">
            
            <div class="form-row">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Jane" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Doe" required>
                </div>
            </div>

            <div class="form-group">
                <label for="uid">Username</label>
                <input type="text" id="uid" name="uid" placeholder="janedoe" required>
            </div>

            <div class="form-group">
                <label for="mail">Email Address</label>
                <input type="email" id="mail" name="mail" placeholder="jane@example.com" required>
            </div>

            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="tel" id="number" name="number" placeholder="+1 (555) 000-0000">
            </div>

            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd" placeholder="••••••••" required>
            </div>

            <div class="form-group">
                <label for="pwd-repeat">Confirm Password</label>
                <input type="password" id="pwd-repeat" name="pwd-repeat" placeholder="••••••••" required>
            </div>

            <button type="submit" name="signup-submit" class="btn btn-primary btn-block">
                Create Account
            </button>
        </form>

    </div>
</main>

<?php
    require "footer.php";
?>