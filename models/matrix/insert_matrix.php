<?php
    include "../config.php";

    if(isset($_POST['insert'])){
        $id_matrix = $_POST['id_matrix'];
        $id_alternatif = $_POST['id_alternatif'];
        $id_bobot = $_POST['id_bobot'];
        $id_skala = $_POST['id_skala'];
        $insert = "INSERT INTO tb_matrixkeputusan VALUES('".$id_matrix."', '".$id_alternatif."', '".$id_bobot."', '".$id_skala."')";
        $exec_query = $koneksi->query($insert);
        if($exec_query){
            header('location: ../../views/matrix/data_matrix.php');
        }
    }
?>