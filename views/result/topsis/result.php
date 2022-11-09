<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP | Result</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/styles/style_read.css">
</head>
<body>
    <div class="container-fluid py-4" id="div-detail">
        <div class="card mb-5">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <h5 class="mt-2">Pembagi</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Kriteria</th>
                            <th scope="col">Nama Kriteria</th>
                            <th scope="col">Bagi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM topsis_pembagi";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_kriteria'] ?></td>
                                        <td><?php echo $data_read['nama_kriteria'] ?></td>
                                        <td><?php echo $data_read['bagi'] ?></td>
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
                            $read = "SELECT * FROM topsis_normalisasi";
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
                    <h5 class="mt-2">Terbobot</h5>
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
                            <th scope="col">Terbobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM topsis_terbobot";
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
                                        <td><?php echo $data_read['terbobot'] ?></td>
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
                    <h5 class="mt-2">Maxmin</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Matrix</th>
                            <th scope="col">ID Kriteria</th>
                            <th scope="col">Nama Kriteria</th>
                            <th scope="col">Maximum</th>
                            <th scope="col">Minimum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM topsis_maxmin";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_matrix'] ?></td>
                                        <td><?php echo $data_read['id_kriteria'] ?></td>
                                        <td><?php echo $data_read['nama_kriteria'] ?></td>
                                        <td><?php echo $data_read['maximum'] ?></td>
                                        <td><?php echo $data_read['minimum'] ?></td>
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
                    <h5 class="mt-2">Sipsin</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Alternatif</th>
                            <th scope="col">DPlus</th>
                            <th scope="col">DMin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM topsis_sipsin";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['dplus'] ?></td>
                                        <td><?php echo $data_read['dmin'] ?></td>
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
                    <h5 class="mt-2">Nilai V</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Alternatif</th>
                            <th scope="col">DPlus</th>
                            <th scope="col">DMin</th>
                            <th scope="col">Nilai V</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM topsis_nilaiv";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['dplus'] ?></td>
                                        <td><?php echo $data_read['dmin'] ?></td>
                                        <td><?php echo $data_read['nilaiv'] ?></td>
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