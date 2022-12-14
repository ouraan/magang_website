<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix | Data</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles/style_read.css">
</head>
<body>
    <div class="container-fluid py-4" id="div-detail">
        <div class="card mb-5">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2">Detail Matrix</h5>
                    <a href="matrix/form_matrix.php" class="btn text-white shadow-sm">Add Matrix</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Matrix</th>
                            <th scope="col">ID Alternatif</th>
                            <th scope="col">ID Bobot</th>
                            <th scope="col">ID Skala</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM tb_matrixkeputusan ORDER BY id_matrix";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_matrix'] ?></td>
                                        <td><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['id_bobot'] ?></td>
                                        <td><?php echo $data_read['id_skala'] ?></td>
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