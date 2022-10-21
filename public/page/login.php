<?php

require('../config/config.php');

if(isset($_SESSION['username'])) {
    header('../../loermy.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
        font-family: antaro;
    }

    body {
        margin: 0;
        padding: 0;
    }

    section {
        width: 100%;
        min-height: 100vh;
        background: rgb(30, 28, 65);
        background: linear-gradient(90deg, rgba(30, 28, 65, 1) 0%, rgba(25, 53, 90, 1) 51%);
        margin-top: 2rem;
    }

    form {
        margin: auto;
        max-width: 330px;
        height: 470px;
        box-shadow: 10px 10px 15px #0000002f;
        background-color: #fff;
        border-radius: 1em;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    form input {
        outline: none;
        border: none;
        background-color: transparent;
        border-bottom: 1px solid rgba(0, 0, 0, 0.292);
        width: 70%;
        padding: 5px;
        font-size: 1.2em;
    }

    form h3 {
        font-size: 28px;
        color: rgb(23, 22, 22);
        font-weight: 600;
    }

    form p span a {
        color: #000000;
        font-weight: bold;
        cursor: pointer;
    }

    form p span a:hover {
        color: rgb(255, 2, 2);
    }

    form button {
        font-size: 3rem;
        padding: 2rem 0;
        width: 70%;
        text-align: center;
        margin-bottom: 1rem;
        text-decoration: none;
        color: black;
        border: none;
        background: linear-gradient(90deg, rgb(18, 92, 255)0%, rgb(0, 102, 255));
        border-radius: 50px;

    }

    form button:hover {
        cursor: pointer;
        box-shadow: 0 0.4rem 1.4rem 0 rgba(8, 114, 244, 0.6);
        transform: translateY(-0.1rem);
        transition: transform 150ms;
    }
    </style>
    <title>Masuk</title>
    <link rel="stylesheet" href="../../src/css/authentication.css">
    <link rel="stylesheet" href="../../src/css/footer.css">
    <link rel="stylesheet" href="../../src/css/navbar.css">
    <script src="https://kit.fontawesome.com/439b1bb2f3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../src/image/logo.png">
</head>

<body>
    <?php require('../config/navbar.php') ?>

    <section>
        <form action="" method="post">
            <h3>Selamat Datang</h3>
            <?php if(isset($_SESSION['status'])) {
                ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $_SESSION['status'] ?>
            </div>
            <?php
            unset($_SESSION['status'] );
            } ?>
            <input type="text" name="username" id="username" placeholder="username">
            <input type="password" name="password" id="password" placeholder="password">
            <button class="btn login" type="submit" name="masuk"
                style="color: #fff; font-size:1.5em; border-radius: 50px;">Masuk</button>
            <p>Belum punya akun?<a style="text-decoration: none;" href="../../public/page/register.php">Daftar</a></p>
        </form>
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
</body>

</html>