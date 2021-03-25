<!DOCTYPE html>
<html>
    <head>
        <link href="../styles/index.css" rel="stylesheet">
        <link href="../styles/games.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title>Schoolstotzka Entertainment</title>
    </head>
    <body>
        <?php include('../elements/header.html'); ?> <!-- Nothing between here -->

        <div class = "main">
            <?php include('../elements/navbar.html'); ?> <!-- And here -->
            <h1>Alien Hominid</h1>
            <embed src="../games/alien_hominid.swf"></embed>
            <p>Description:</p><p class = "description"><br><br>Your UFO has crash landed, and the FBI is out to get you! Time to take them out!<br><br>Controls:<br><br>Use the arrows to run around and aim your gun. The 'a' key shoots and the 's' key jumps. When jumping over an enemy, press DOWN and 's' to do a freak attack!<br><br>****HINTS****<br><br>* You can ride enemy heads past roadblocks. they can run right through while they are freaking out!<br><br>* Eat enemy skulls in front of other enemies while on their shoulders -- their friend's reaction will give you a free cheapshot!<br><br>* If all else fails, you can try crawling your way to the end like the scum you are! haha
        </div> <!-- And nothing after here -->
        <?php include('../elements/footer.html'); ?>
        <script src="../scripts/ruffle.js"></script>
    </body>
</html>
