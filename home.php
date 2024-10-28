<!DOCTYPE html>
<html>
    <head> 
        <title>CAPT HOME DESIGN</title>
        <link rel="stylesheet" href="overallCSS.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <?php require "HandF/header.php"; ?>
        </header>
        <br>

        <section>
            <div class ="section-column">
                <h2> <!-- Change Content -->
                    Join Us in Learning!
                </h2>
                <div class="section-side">
                    <p><!-- Change Content -->
                        Our conferences help our community collaborate with and educate each other on new therapeutic methods.
                    </p>
                </div>
                <div class="section-side">
                    Place for counter
                </div>
            </div>
            <br>
            <div class ="section-column">
                <div class="section-side">
                    <img id="stock1" src="images/stock1.jpg" alt="A man at a conference"
                          width="450" height="275"/>
                </div>
                <div class="section-item">
                    <h3><!-- Change Content -->
                        Subscribe to partake in the events!
                    </h3>
                </div>
                <div class="section-item">
                    <button class="CTA" onclick="document.location = 'Subscription'">CTA</button>
                </div>
                <div class="section-side"></div><!-- Change Content -->
                <div class="section-side"></div><!-- Change Content -->
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
