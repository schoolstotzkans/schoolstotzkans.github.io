<!DOCTYPE html>
<html>
    <head>
        <link href="../styles/index.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title>About Schoolstotzka</title>
    </head>
    <body>
        <?php include('../elements/header.html'); ?> <!-- Nothing between here -->

        <div class = "main">
            <?php include('../elements/navbar.html'); ?> <!-- And here -->
    <div class = "parentFigureStyle">
        <a href="request_games.php"> <!-- Games Request -->
            <figure class = "figurestyle">
                <img src="../images/controller.png" alt="Games and Animations Request Page">
                <figcaption>Request a game or animation.</figcaption>
            </figure>
        </a>
        <a href="request_fix.php"> <!-- Fix Request -->
            <figure class = "figurestyle">
                <img src="../images/fix.png" alt="Request a fix for a website bug page">
                <figcaption>Inform us about website problems.</figcaption>
            </figure>
        </a>
    </div>
        </div> <!-- And nothing after here -->
        <?php include('../elements/footer.html'); ?>
    </body>
</html>
