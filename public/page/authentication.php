<?php

require('../config/config.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    section {
        width: 100%;
        min-height: 100vh;
        background: rgb(30, 28, 65);
        background: linear-gradient(90deg, rgba(30, 28, 65, 1) 0%, rgba(25, 53, 90, 1) 51%);
    }

    .form-modal {
        position: relative;
        width: 450px;
        min-height: auto;
        margin-top: 4em;
        left: 50%;
        transform: translateX(-50%);
        background: #fff;
        border-radius: 20px;
        border-bottom-right-radius: 20px;
        box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .form-modal button {
        cursor: pointer;
        position: relative;
        text-transform: capitalize;
        font-size: 1em;
        z-index: 2;
        outline: none;
        background-color: #fff;
        transition: 0.2s;
    }

    .form-modal .login,
    .form-modal .signup {
        background-color: #154c79 default;
        color: #fff;
    }

    .btn {
        border: none;
        outline: none;
        background-color: #b9e4a5;
        color: black;
        padding: 18px 32px;
        font-weight: bold;
        letter-spacing: 3px;
        text-transform: uppercase;
        border-radius: 50px;
        /* box-shadow: 0 20px 35px rgba(25, 53, 90, 1); */
    }

    .btn:hover {
        background-color: rgba(8, 114, 244, 0.6);
        color: #fff;
        cursor: pointer;
        box-shadow: 0 0.4rem 1.4rem 0 rgba(8, 114, 244, 0.6);
        transform: translateY(-0.1rem);
        transition: transform 150ms;
    }

    .btn[disabled]:hover {
        cursor: not-allowed;
        box-shadow: none;
        transform: none;
    }
    </style>
    <title>Authentication</title>
    <link rel="stylesheet" href="../../src/css/authentication.css">
    <link rel="stylesheet" href="../../src/css/footer.css">
    <link rel="stylesheet" href="../../src/css/navbar.css">
    <script src="https://kit.fontawesome.com/439b1bb2f3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php require('../config/navbar.php') ?>

    <section>

        <div class="form-modal">

            <div class="form-toggle">
                <button id="login-toggle" onclick="toggleLogin()">Masuk</button>
                <button id="signup-toggle" onclick="toggleSignup()">Daftar</button>
            </div>

            <div id="login-form">
                <form action="" method="POST">
                    <input type="text" name="username" id="username" placeholder="username">
                    <input type="password" name="password" id="password" placeholder="password">
                    <button class="btn login" type="submit" name="masuk">Masuk</button>
                    <hr />
                </form>
            </div>

            <div id="signup-form">
                <form action="" method="POST">
                    <?php echo $alert; ?>
                    <input type="text" name="username" id="username" placeholder="username">
                    <input type="text" name="nickname" id="nickname" placeholder="nickname">
                    <input type="password" name="password" id="password" placeholder="password">
                    <input type="password" name="password2" id="password2" placeholder="Confirm Password">
                    <button id="daftarButton" class="btn signup" type="submit" name="daftar">Daftar</button>
                    <hr />
                </form>
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

    <script>
    function toggleSignup() {
        document.getElementById("login-toggle").style.backgroundColor = "#fff";
        document.getElementById("login-toggle").style.color = "#222";
        document.getElementById("signup-toggle").style.backgroundColor = "#a948a9";
        document.getElementById("signup-toggle").style.color = "#fff";
        document.getElementById("login-form").style.display = "none";
        document.getElementById("signup-form").style.display = "block";
    }

    function toggleLogin() {
        document.getElementById("login-toggle").style.backgroundColor = "#a948a9";
        document.getElementById("login-toggle").style.color = "#fff";
        document.getElementById("signup-toggle").style.backgroundColor = "#fff";
        document.getElementById("signup-toggle").style.color = "#222";
        document.getElementById("signup-form").style.display = "none";
        document.getElementById("login-form").style.display = "block";
    }
    </script>
</body>

</html>



#154c79