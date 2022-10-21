<?php

require('../config/config.php')

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    textarea {
        border: 1px solid rgba(0, 0, 0, 0.292);
        outline: none;
    }
    </style>
    <title>Kontak</title>
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
            <h3>Contact us</h3>
            <input type="text" name="username" id="username" placeholder="username">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Tinggalkan Pesan Anda"></textarea>
            <!-- <input type="text" class="message" name="message" id="nickname" placeholder="Tinggalkan Pesan Anda"> -->
            <button id="daftarButton" class="btn signup" type="submit" name="kirim"
                style="color: #fff; font-size:1.5em; border-radius: 50px;">Kirim</button>
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