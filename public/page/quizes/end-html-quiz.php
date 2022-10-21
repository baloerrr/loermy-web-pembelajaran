<?php 

require('../../config/config.php');


if(!isset($_SESSION['username'])) {
    header('location: ../login.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link rel="stylesheet" href="../../../src/css/app.css">
    <script src="https://kit.fontawesome.com/439b1bb2f3.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../../src/image/logo.png">
</head>

<body>
    <div class="container">
        <div id="end" class="flex-center flex-column">
            <h1 id="finalScore">0</h1>
            <a href="../../page/quizes/end-html-quiz.php" class="btn">Main Lagi</a>
            <a href="../../page/menu.php" class="btn">Menu</a>
        </div>
    </div>
    <script src="../../../src/js/end-html-quiz.js"></script>
</body>

</html>