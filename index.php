<?php include 'getjoke.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Placeholder for Louella's portfolio. Get a new daily dad joke every day.">
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <title>Portfolio Placeholder - LouellaDev</title>
</head>

<body>
    <div class="allcontent">
        <main class="wrapper">
            <div class="textbox">
                <h1>Daily Dad Joke:</h1>
                <p><?php echo $actualjoke?></p>
            </div>
        </main>
        <footer>
            <p class="madeby">Made by <a href="https://bio.link/lovelacecoding">Louella</p></a>
        </footer>
    </div>
</body>

</html>