<!DOCTYPE html>
<html>
    <head>
        <link href="../styles/index.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title>Schoolstotzka Entertainment</title>
    </head>
    <body>
        <?php include('../elements/header.html'); ?> <!-- Nothing between here -->

        <div class = "main">
            <?php include('../elements/navbar.html'); ?> <!-- And here -->
            <div class = "parentFigureStyle"> <!-- Best Games according to Schoolstotzkan Leaders -->
                <a href="../game_sites/alien_hominid.php">
                    <figure class = "figurestyle">
                        <img src="../images/games/alien_hominid.png" alt="Game 1">
                        <figcaption>Alien Hominid</figcaption>
                    </figure>
                </a>
                <a href="../game_sites/bloxorz.php">
                    <figure class = "figurestyle">
                        <img src="../images/games/bloxorz.png" alt="Game 2">
                        <figcaption>Bloxorz</figcaption>
                    </figure>
                </a>
            </div>
        </div> <!-- And nothing after here -->
        <?php include('../elements/footer.html'); ?>
    </body>
</html>
