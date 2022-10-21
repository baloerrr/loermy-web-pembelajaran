<?php

require('../config/config.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
    <style>
    section {
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
    }

    .card {
        flex: 0 0 250px;
        margin: 10px;
        border: 1px solid #03387e;
        box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
        background-color: #154c79;
        border-radius: 10px;
    }

    .image-container {
        flex: 0 0 90px;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #000000;
        display: flex;
        justify-content: center;
    }

    .card img {
        object-fit: cover;
        margin: 5px;
        border-radius: 20px;
    }

    .card p {
        padding: 0 20px 20px;
        font-family: 'Nova Square', cursive;
        font-style: italic;
    }

    .card h5 {
        margin-top: 0rem;
    }

    .card .btn {
        background: #bae4a4;
        border: 0;
        color: black;
        padding: 10px;
        width: 100%;
        border-radius: 50px;
        font-size: 1.3rem;
        display: flex;
        justify-content: center;
        text-decoration: none;
    }

    .btn:hover {
        cursor: pointer;
        box-shadow: 0 0.4rem 1.4rem 0 rgba(8, 114, 244, 0.6);
        transform: translateY(-0.1rem);
        transition: transform 150ms;
    }

    .text p {
        margin: 10px 0;
    }

    .main {
        flex: 1;
        display: flex;
        align-items: center;
    }

    .right {
        padding: 40px 40px;
    }

    .right img {
        width: 100%;
    }

    .left {
        max-width: 60%;
        padding: 40px 64px;
    }

    .title {
        color: #fff;
        font-weight: bold;
        font-size: 3.2em;
        width: 50%;
        letter-spacing: 2px;
        margin-bottom: 25px;
    }

    .left p {
        color: #fff;
        font-size: 1.1em;
        letter-spacing: 0.7px;
        line-height: 32px;
        margin-bottom: 30px;
    }

    @media screen and (max-width: 768px) {
        .main {
            display: flex;
            flex-direction: column;
        }

        .main img {
            margin: auto;
        }

        .card {
            margin-left: 4rem;
        }
    }
    </style>
    <!-- <link rel="stylesheet" href="../../src/css/about.css"> -->
    <link rel="stylesheet" href="../../src/css/footer.css">
    <link rel="stylesheet" href="../../src/css/navbar.css">
    <script src="https://kit.fontawesome.com/439b1bb2f3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../src/image/logo.png">
</head>

<body>
    <?php require('../config/navbar.php') ?>

    <section class="main">
        <div data-aos="fade-up-right" class="left">
            <h1 class="title">Sejarah Loermy</h1>
            <p>Loermy adalah wadah atau tempat untuk belajar pemrograman
                gratis berbahasa Indonesia
                yang berisi video-video pembelajaran pemrograman web .<br> Loermy ini dibuat oleh tiga orang yaitu Akbar
                Adityah, Ginar, dan Saniyah guna mengikuti perlombaan Web Development di kampus. Selain untuk ajang
                perlombaan, website Loermy ini dibuat untuk membantu dalam hal pendidikan khususnya di bidang teknologi
                komputer
                sehingga dapat meningkatkan kualitas dan mutu pendidikan di Indonesia.</p>
        </div>
        <div data-aos="fade-up-left" class="right">
            <img src="../../src/image/about.png" alt="">
        </div>
    </section>

    <section>
        <h1 data-aos="fade-up-right" class="title" style="margin-left: 3.5rem;">Tentang Kita</h1>
        <div class=" container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card" data-aos="fade-up-right" style="width: 18rem;">
                        <div class="image-container">
                            <img src="../../src/image/ginar.png" width="250" height="250" class="card-img-top"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mohd. Ginar Risky</h5>
                            <p class="card-text">"Bersiaplah untuk menjadi
                                orang yang
                                terpuruk nantinya, jika kau selalu menikmati kemalasan hari ini"</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" data-aos="fade-down" style="width: 18rem;">
                        <div class="image-container">
                            <img src="../../src/image/akbar.png" width="300" height="250" class="card-img-top"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Muhammad Akbar Adityah</h5>
                            <p class="card-text">"Lupakan kenangan bersamanya,
                                saatnya
                                keluar dari zona nyamanmu sehingga kamu lupa cara untuk kembali."</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" data-aos="fade-up-left" style="width: 18rem;">
                        <div class="image-container">
                            <img src="../../src/image/saniyah.png" width="250" height="250" class="card-img-top"
                                alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Saniyah Nur Azizah</h5>
                            <p class="card-text">“Kalau mau menunggu sampai
                                siap, kita
                                akan menghabiskan sisa hidup kita hanya untuk menunggu.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('../config/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>