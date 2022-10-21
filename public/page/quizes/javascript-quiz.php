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
    <link rel="stylesheet" href="../../../src/css/game.css">
    <link rel="shortcut icon" href="../../../src/image/logo.png">
</head>

<body>
    <section>
        <div class="container">
            <div id="game" class="justify-center flex-column">
                <div id="head">
                    <div class="head-item">
                        <p class="head-prefix">
                            Score
                        </p>
                        <h1 class="head-main-text" id="score">
                            0
                        </h1>

                    </div>
                    <div class="head-item">

                        <p id="progressText" class="head-prefix">
                            Question
                        </p>
                        <h2 id="timer" class="head-main-text">
                            Time: 20
                        </h2>

                    </div>
                </div>
                <h1 id="question" class="question">Apa jawaban dari pertanyaan ini?</h1>
                <div class="pilgan-container">
                    <p class="pilgan-prefix"></p>
                    <p class="pilgan-text" data-number="1"></p>
                </div>
                <div class="pilgan-container">
                    <p class="pilgan-prefix"></p>
                    <p class="pilgan-text" data-number="2"></p>
                </div>
                <div class="pilgan-container">
                    <p class="pilgan-prefix"></p>
                    <p class="pilgan-text" data-number="3"></p>
                </div>
                <div class="pilgan-container">
                    <p class="pilgan-prefix"></p>
                    <p class="pilgan-text" data-number="4"></p>
                </div>
            </div>
        </div>
    </section>

    <script src="../../../src/js/javascript-quiz.js"></script>
</body>

</html>