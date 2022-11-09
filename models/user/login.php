<?php
    include '../config.php';

    session_start();
    if(isset($_SESSION['username'])){
        header("location:../../views/dashboard.php");
    }
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query_login = "SELECT * FROM tb_user WHERE email='$email' AND password='$password'";
        $cek = $koneksi->query($query_login);
        if(mysqli_num_rows($cek) > 0){
            $row = mysqli_fetch_assoc($cek);
            $_SESSION['username'] = $row['username'];
            header("location:../../views/dashboard.php");
        }	
        else{
            header("location:../../index.php");	
        }
    }
?>