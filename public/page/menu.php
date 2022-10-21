<?php

require('../config/config.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nova+Square&display=swap');

    section {
        width: 100%;
        margin-bottom: 2rem;
    }

    .judul {
        margin-top: 4rem;
        color: #fff;
        text-align: center;
        font-size: 1.5rem;
        /* font-family: 'Nova Square', cursive; */
    }

    .card {
        flex: 0 0 250px;
        margin: 10px;
        border: 1px solid #03387e;
        box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
        background-color: #03387e;
        border-radius: 20px;
    }

    .image-container {
        flex: 0 0 90px;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #ccc;
        display: flex;
        justify-content: center;
    }

    .card img {
        width: 215px;
        height: 188px;
        margin: 15px;
    }

    .card p {
        padding: 0 20px 20px;
        font-family: 'Nova Square', cursive;
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
        margin: 1.5rem 0;
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

    @media screen and (max-width: 768px) {
        .card {
            margin: auto;
            margin-bottom: 2rem;
        }
    }
    </style>

    <!-- <link rel="stylesheet" href="../css/menu.css"> -->
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

    <section data-aos="fade-down" class="judul">
        <h1>Belajar Ngoding di Loermy</h1>
    </section>


    <section class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="card " data-aos="fade-right" style="width: 18rem;">
                    <div class="image-container">
                        <img src="../../src/image/html.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Belajar HTML</h5>
                        <p class="card-text">HyperText Markup Language yang biasa disingkat HTML adalah bahasa markah
                            yang sangat berguna untuk
                            membuat sebuah halaman (kerangka) website. Jika kalian ingin membuat website, maka kalian
                            wajib
                            belajar bahasa markah ini.</p>
                        <a href="../page/html.php" class="btn btn-primary">Belajar Sekarang</a>
                        <a href="../page/quizes/html-quiz.php" class="btn btn-primary">Kuis HTML</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card " data-aos="fade-down" style="width: 18rem;">
                    <div class="image-container">
                        <img src="../../src/image/css.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Belajar CSS</h5>
                        <p class="card-text">Cascading Style Sheets yang biasa disingkat CSS adalah sekumpulan kode yang
                            digunakan untuk
                            men-design bahasa markup seperti HTML. Cascading Style Sheets (CSS) sangat berguna sekali
                            mengelola UI/UX sebuah website..</p>
                        <a href="../page/css.php" class="btn btn-primary">Belajar Sekarang</a>
                        <a href="../page/quizes/css-quiz.php" class="btn btn-primary">Kuis CSS</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card " data-aos="fade-left" style="width: 18rem;">
                    <div class="image-container">
                        <img src="../../src/image/js.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Belajar Javascript</h5>
                        <p class="card-text">JavaScript adalah bahasa pemrograman tingkat tinggi dan dinamis. JavaScript
                            populer di internet dan
                            dapat bekerja di sebagian besar penjelajah website populer. JavaScript dapat disisipkan di
                            dalam
                            halaman website.</p>
                        <a href="../page/javascript.php" class="btn btn-primary">Belajar Sekarang</a>
                        <a href="../page/quizes/javascript-quiz.php" class="btn btn-primary">Kuis Javascript</a>
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