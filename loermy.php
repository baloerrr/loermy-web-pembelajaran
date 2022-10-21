<?php

require('./public/config/config.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loermy</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nova+Square&display=swap');

    body {
        font-family: 'Nova Square', cursive;
    }

    .btn2 {
        border: none;
        outline: none;
        background-color: #b9e4a5;
        color: black;
        padding: 18px 32px;
        font-weight: bold;
        letter-spacing: 3px;
        text-transform: uppercase;
        border-radius: 50px;
        box-shadow: 0 20px 35px rgba(25, 53, 90, 1);
    }

    .btn2:hover {
        background-color: rgba(8, 114, 244, 0.6);
        color: #fff;
        cursor: pointer;
        box-shadow: 0 0.4rem 1.4rem 0 rgba(8, 114, 244, 0.6);
        transform: translateY(-0.1rem);
        transition: transform 150ms;
    }

    .btn2[disabled]:hover {
        cursor: not-allowed;
        box-shadow: none;
        transform: none;
    }
    </style>

    <link rel="stylesheet" href="./src/css/landingpage.css">
    <link rel="stylesheet" href="./src/css/footer.css">
    <link rel="stylesheet" href="./src/css/navbar.css">
    <script src="https://kit.fontawesome.com/439b1bb2f3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="./src/image/logo.png">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img class="image" src="./src/image/logo.png" width="40px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="loermy.php">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./public/page/menu.php">Belajar</a>
                    <li class="nav-item">
                        <a class="nav-link" href="./public/page/about.php">Tentang</a>
                    <li class="nav-item">
                        <a class="nav-link" href="./public/page/contact.php">Kontak</a>
                    </li>
                    <li>
                        <?php 

                        if(isset($_SESSION['username'])) {
                        ?>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username'] ?>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" style="color:#222 ;"
                                        href="./public/page/logout.php">Keluar</a></li>
                            </ul>
                        </div>

                        <?php
                        } else {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./public/page/login.php">Masuk</a>
                    </li>
                    <?php
                        }
                        
                    ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="main">
        <div data-aos="fade-up-right" class="left">
            <h1 class="title">Loermy</h1>
            <p>Loermy adalah wadah atau tempat untuk belajar pemrograman web
                gratis berbahasa Indonesia
                yang
                seru, mudah, aman dan tentunya sangat interaktif.</p>
            <a href="../page/menu.php" style="text-decoration: none;" class="btn2">Belajar Sekarang</a>
        </div>
        <div data-aos="fade-up-left" class="right">
            <img src="./src/image/image1.png" alt="">
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <h3>Loermy</h3>
            <p>"Belajar coding di Loermy" - "Belajar koding di Loermy" - "Belajar pemrograman di Loermy"
                "Perluas pengetahuan dan rasakan manfaatnya" - "Perbanyak kenalan dan rasakan keajaibannya"
                "Belajar coding berbahasa indonesia" - "Belajar koding berbahasa indonesia"</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div>
                <p>Loermy dibuat dengan 👨‍💻 🤔 ❤️ 🎶 ☕<br>
                    Loermy dibuat di kota ⛅</p>
            </div>
        </div>
        <hr>
        <div class="footer-bottom"
            style="padding: 3px; background-color:#1e1c41; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <p>copyright 2022</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>