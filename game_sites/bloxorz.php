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
            <h1>Bloxorz</h1>
            <embed src="https://archive.org/download/bloxors/bloxors.swf"></embed>
            <p>Description:</p><p class = description>You are a 1x2 piece of metal, and you have to fit in a square hole.<br><br>Try to get through as many holes as possible, with as little moves as you can!<br><br></p>
        </div> <!-- And nothing after here -->
        <?php include('../elements/footer.html'); ?>
        <script src="../scripts/ruffle.js"></script>
    </body>
</html>
