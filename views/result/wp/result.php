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
                    <h5 class="mt-2">Normalisasi Terbobot</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Bobot</th>
                            <th scope="col">ID Kriteria</th>
                            <th scope="col">Value</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Normalisasi Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM wp_normalisasiterbobot";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_bobot'] ?></td>
                                        <td><?php echo $data_read['id_kriteria'] ?></td>
                                        <td><?php echo $data_read['value'] ?></td>
                                        <td><?php echo $data_read['jumlah'] ?></td>
                                        <td><?php echo $data_read['normalisasi_w'] ?></td>
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
                    <h5 class="mt-2">Nilai Pangkat</h5>
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
                            <th scope="col">Normalisasi Bobot</th>
                            <th scope="col">Pangkat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM wp_pangkat";
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
                                        <td><?php echo $data_read['normalisasi_w'] ?></td>
                                        <td><?php echo $data_read['pangkat'] ?></td>
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
                    <h5 class="mt-2">Nilai S</h5>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Alternatif</th>
                            <th scope="col">Nama Alternatif</th>
                            <th scope="col">Nilai S</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM wp_nilais";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['nama_alternatif'] ?></td>
                                        <td><?php echo $data_read['nilais'] ?></td>
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
                            <th scope="col">Nama Alternatif</th>
                            <th scope="col">Nilai V</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $read = "SELECT * FROM wp_nilaiv";
                            $exec_read = $koneksi->query($read);
                            while($data_read = $exec_read->fetch_array()){
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $data_read['id_alternatif'] ?></td>
                                        <td><?php echo $data_read['nama_alternatif'] ?></td>
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