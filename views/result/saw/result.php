<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAW | Result</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/styles/style_read.css">
</head>
<body>
    <div class="container-fluid py-4" id="div-detail">
        <div class="card mb-5">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2">Matrix Keputusan</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Matrix</th>
                            <th scope="col">ID Alternatif</th>
                            <th scope="col">Nama Alternatif</th>
                            <th scope="col">ID Kriteria</th>
                            <th scope="col">Nama Kriteria</th>
                            <th scope="col">ID Bobot</th>
                            <th scope="col">Value</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM vmatrixkeputusan";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_matrix'] ?></td>
                                        <td><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['nama_alternatif'] ?></td>
                                        <td><?php echo $data_read['id_kriteria'] ?></td>
                                        <td><?php echo $data_read['nama_kriteria'] ?></td>
                                        <td><?php echo $data_read['id_bobot'] ?></td>
                                        <td><?php echo $data_read['value'] ?></td>
                                        <td><?php echo $data_read['nilai'] ?></td>
                                        <td><?php echo $data_read['keterangan'] ?></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="div-detail">
        <div class="card mb-5">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2">Normalisasi</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Matrix</th>
                            <th scope="col">ID Alternatif</th>
                            <th scope="col">Nama Alternatif</th>
                            <th scope="col">ID Kriteria</th>
                            <th scope="col">Nama Kriteria</th>
                            <th scope="col">ID Bobot</th>
                            <th scope="col">Value</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Normalisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM vnormalisasi";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_matrix'] ?></td>
                                        <td><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['nama_alternatif'] ?></td>
                                        <td><?php echo $data_read['id_kriteria'] ?></td>
                                        <td><?php echo $data_read['nama_kriteria'] ?></td>
                                        <td><?php echo $data_read['id_bobot'] ?></td>
                                        <td><?php echo $data_read['value'] ?></td>
                                        <td><?php echo $data_read['nilai'] ?></td>
                                        <td><?php echo $data_read['keterangan'] ?></td>
                                        <td><?php echo $data_read['normalisasi'] ?></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4" id="div-detail">
        <div class="card mb-5">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2">Ranking</h5>
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