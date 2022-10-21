<?php
    session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'quiz_database');

// register user
    $alert = '';
    $validasi = '';

    if(isset($_POST['daftar'])) {
        $username = stripslashes(htmlspecialchars($_POST['username']));
        $username = mysqli_escape_string($conn, $username);
        $nickname = stripslashes(htmlspecialchars($_POST['nickname']));
        $nickname = mysqli_escape_string($conn, $nickname);
        $password = stripslashes(htmlspecialchars($_POST['password']));
        $password = mysqli_escape_string($conn, $password);
        $password2 = stripslashes(htmlspecialchars($_POST['password2']));
        $password2 = mysqli_escape_string($conn, $password2);

        if(!empty(trim($username)) && !empty(trim($nickname)) && !empty(trim($password) && !empty(trim($password2)))) {

            if($password == $password2) {
                if(cekUsername($conn, $username) == 0) {
                    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    
                    $query = "INSERT INTO data_user VALUES ('', '$username', '$nickname', '$hashPassword', 'user')";
                    $result = mysqli_query($conn, $query);
    
                    if($result) {
                        $_SESSION['success'] = "Daftar Berhasil";
                        header('location: ../page/login.php');
                    } else {
                        $_SESSION['status'] = "Daftar Gagal";
                    }
                } else {
                    $_SESSION['status'] = "Username Telah Terdaftar";;
                }
            } else {
                $_SESSION['status'] = "Password Tidak Sama";
            }

        } else {
            $_SESSION['status'] = "Input Tidak Boleh Kosong";
        }
    }

    function cekUsername($conn, $username) {
        $username = mysqli_escape_string($conn, $username);
        $query = "SELECT username FROM data_user WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if($result) {
            return mysqli_num_rows($result);
        }
    }

    // function nickname($conn, $nickname) {
    //     $nickname = mysqli_escape_string($conn, $nickname);
    //     $query = "SELECT nickname FROM data_user WHERE nickname = '$nickname'";
    //     $result = mysqli_query($conn, $query);


    // }


    // Multiuser Login
    $alert2 = '';
    if(isset($_POST['masuk'])) {
        $username = stripslashes(htmlspecialchars($_POST['username']));
        $username = mysqli_escape_string($conn, $username);
        $password = stripslashes(htmlspecialchars($_POST['password']));
        $password = mysqli_escape_string($conn, $password);

        if(!empty(trim($username) && !empty(trim($password)))) {
            
            $query = "SELECT * FROM data_user WHERE username = '$username'";
            $data = mysqli_query($conn, $query);
            $dataArr = mysqli_fetch_assoc($data);

            if($dataArr['level'] == "admin") {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "admin";
                header("Location: ../admin/admin.php");
            } else if($dataArr['level'] == "user") {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "user";
                header("Location: ../../loermy.php");
            } else {
                $_SESSION['status'] = "Gagal Masuk";
            }
        } else {
            $_SESSION['status'] = "Input Tidak Boleh Kosong";;
        }
    }


//    kirim contact
if(isset($_POST['kirim'])) {
    $username = stripslashes(htmlspecialchars($_POST['username']));
    $username = mysqli_escape_string($conn, $username);
    $message =  stripslashes(htmlspecialchars($_POST['message']));
    $message = mysqli_escape_string($conn, $message);

    $query = "INSERT INTO contact_table VALUES ('','$username', '$message')";

    $result = mysqli_query($conn, $query);

    if($result) {
        return "<script>alert('Pesan Terkirim')</script>";
        header('location: ../../loermy.php');
    }
}
    
?>