<?php
    include "../config.php";

    if(isset($_POST['insert'])){
        $id_bobot = $_POST['id_bobot'];
        $id_kriteria = $_POST['id_kriteria'];
        $value = $_POST['value'];
        $insert = "INSERT INTO tb_bobot VALUES('".$id_bobot."', '".$id_kriteria."', '".$value."')";
        $exec_query = $koneksi->query($insert);
        if($exec_query){
            header('location: ../../views/bobot/data_bobot.php');
        }
    }
?>