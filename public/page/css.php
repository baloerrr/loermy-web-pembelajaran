<?php 

require('../config/config.php');

if(!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CSS</title>
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/footer.css">
    <link rel="stylesheet" href="../../src/css/navbar.css">
    <script src="https://kit.fontawesome.com/439b1bb2f3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../src/image/logo.png">
</head>

<body>
    <?php require('../config/navbar.php')  ?>

    <main>
        <section class="container">
            <section class="main-video">
                <video src="../../src/video/css-videos/01.CSS Dasar - 1 - Pendahuluan.mp4" controls autoplay></video>
                <h3 class="title">Title of the playing Video.</h3>
            </section>

            <section class="video-playlist">
                <h3 class="title">CSS Dasar</h3>
                <p>10 video &nbsp; . &nbsp; 1j 58m 38d</p>
                <div class="videos">

                </div>
            </section>
        </section>
    </main>

    <?php require('../config/footer.php')  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="../../src/js/css.js"></script>
</body>

</html>