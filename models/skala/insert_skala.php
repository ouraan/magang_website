<?php
    include "../config.php";

    if(isset($_POST['insert'])){
        $id_skala = $_POST['id_skala'];
        $value = $_POST['value'];
        $keterangan = $_POST['keterangan'];
        $insert = "INSERT INTO tb_skala VALUES('".$id_skala."', '".$value."', '".$keterangan."')";
        $exec_query = $koneksi->query($insert);
        if($exec_query){
            header('location: ../../views/skala/data_skala.php');
        }
    }
?>