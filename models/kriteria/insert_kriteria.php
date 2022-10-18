<?php
    include "../config.php";

    if(isset($_POST['insert'])){
        $id_kriteria = $_POST['id_kriteria'];
        $nama_kriteria = $_POST['nama_kriteria'];
        $insert = "INSERT INTO tb_kriteria VALUES('".$id_kriteria."', '".$nama_kriteria."')";
        $exec_query = $koneksi->query($insert);
        if($exec_query){
            header('location: ../../views/kriteria/data_kriteria.php');
        }
    }
?>