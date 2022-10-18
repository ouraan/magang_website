<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking | Detail</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles/style_read.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-4 shadow-sm">
        <a href="../../index.php" class="navbar-brand ml-5">MAGANG</a>
    </nav>

    <div class="container-fluid py-5" id="div-detail">
        <div class="card mb-5">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2">Ranking</h5>
                    <div>
                        <a href="result_matrixkeputusan.php" class="btn btn-warning text-white shadow-sm">Matrix Keputusan</a>
                        <a href="result_normalisasi.php" class="btn btn-dark text-white shadow-sm">Normalisasi</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Alternatif</th>
                            <th scope="col">Nama Alternatif</th>
                            <th scope="col">Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "../../models/config.php";
                            $read = "SELECT * FROM vranking";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['nama_alternatif'] ?></td>
                                        <td><?php echo $data_read['ranking'] ?></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>