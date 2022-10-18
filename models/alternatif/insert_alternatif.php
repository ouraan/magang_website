<?php
    include "../config.php";

    if(isset($_POST['insert'])){
        $id_alternatif = $_POST['id_alternatif'];
        $nama_alternatif = $_POST['nama_alternatif'];
        $insert = "INSERT INTO tb_alternatif VALUES('".$id_alternatif."', '".$nama_alternatif."')";
        $exec_query = $koneksi->query($insert);
        if($exec_query){
            header('location: ../../views/alternatif/data_alternatif.php');
        }
    }
?>