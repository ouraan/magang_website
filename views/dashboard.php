<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAGANG</title>
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles/style_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">Magang<span>.</span></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php?view">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php?metode=WP">WP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php?metode=SAW">SAW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php?metode=Topsis">Topsis</a>
                    </li>
                </ul>
                <div class="d-flex ml-auto">
                    <a class="nav-link" href="../models/user/logout.php">Log out<i class="fa fa-sign-out pl-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-5" id="div-content">
        <?php
            include "../models/config.php";
            if(isset($_GET['metode'])){
                if($_GET['metode'] == 'WP'){
                    include "result/wp/result.php";
                }
                else if($_GET['metode'] == 'SAW'){
                    include "result/saw/result.php";
                }
                else if($_GET['metode'] == 'Topsis'){
                    include "result/topsis/result.php";
                }
            }
            else if(isset($_GET['view'])){
                include "alternatif/data_alternatif.php";
                include "bobot/data_bobot.php";
                include "kriteria/data_kriteria.php";
                include "skala/data_skala.php";
                include "matrix/data_matrix.php";
            }
            else{
                echo "
                    <h2>Dashboard</h2>
                    <p>This is the landing of this page. Choose a menu above to show the data and results.</p>
                ";
            }
        ?>
    </div>
</body>
</html>