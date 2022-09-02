<?php
    require_once '../koneksi.php';
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $refresh = header("Location:../register.php");

    if(empty($nama)){
        setcookie('error_register', 'Nama anda kosong', time() + 2, "/");
        echo $refresh;
    }else if(empty($email)){
        setcookie('error_register', 'Email anda kosong', time() + 2, "/");
        echo $refresh;
    }else if(empty($password)){
        setcookie('error_register', 'Password anda kosong', time() + 2, "/");
        echo $refresh;
    }else if(empty($confirm_password)){
        setcookie('error_register', 'Konfirmasi password anda kosong', time() + 2, "/");
        echo $refresh;
    }else if($password != $confirm_password){
        setcookie('error_register', 'Password dan Konfirmasi password tidak sama', time() + 2, "/");
        echo $refresh;
    }else{
        $checkUser = $conn->prepare("SELECT * FROM user WHERE email=:email");
        $checkUser->bindValue(':email', $email);
        $checkUser->execute();
        if($checkUser->rowCount()){
            setcookie('error_register', 'Akun Email sudah terdaftar', time() + 2, "/");
            echo $refresh;
        }else{
            setcookie('error_register', '', time() + 2, "/");
            $hashedpass = password_hash($password, PASSWORD_DEFAULT);
            
        }
    }
?>