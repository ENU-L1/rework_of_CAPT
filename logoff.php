<?php
$_SESSION["toggle"] = 'loggedoff';
session_start();
// remove all session variables
session_unset();

//destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="overallCSS.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <?php require "HandF/header.php"; ?>
        </header>
        <br>

        <section id="content">
            <div class ="section-column">
                <h2> <!-- Change Section Heading -->
                    About Us
                </h2>
                <div class="section-side">
                    You have been logged out 
                    <br>
                    <br>
                    <h4> Would you like to <a href='LogIn.php'>Log In</a> ? </h4> <br>
                    <h4> Or would you like to go back to the <a href='index.php'>first page</a> ? </h4>
                </div>
                <div class="section-side"><!-- Picture -->
                    <img class="wideImg" src="images/stock2.jpg" alt="Someone finding medical information on a handheld tablet device"/> <!-- src changes picture -->
                </div>
                <br>
                <div id="line" class="section-side">
                    <h3>Heading</h3><!-- Change Heading -->
                </div>
                <div class="section-side"><!-- Rewrite Content -->
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>
        </section>

        <footer>
            <?php require "HandF/footer.php"; ?>
        </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>
