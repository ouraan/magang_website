<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix | Form Input</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles/style_form.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-4 shadow-sm">
        <a href="../../index.php" class="navbar-brand ml-5">MAGANG</a>
    </nav>

    <div class="container-fluid my-5"  id="div-reserv">
        <form action="../../models/matrix/insert_matrix.php" method="POST">
            <div class="card mb-5">
                <div class="card-header">
                    <h5>Matrix Keputusan</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">ID Matrix</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="ID Matrix" name="id_matrix" value=""/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">ID Alternatif</label>
                        <select name="id_alternatif" id="" class="form-control">
                            <?php
                                include "../../models/config.php";
                                $read = "SELECT * FROM tb_alternatif";
                                $read_query = $koneksi->query($read);
                                while($data_query = $read_query->fetch_array()){?>
                                    <option value="<?php echo $data_query['id_alternatif']?>"><?php echo $data_query['nama_alternatif']?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">ID Bobot</label>
                        <select name="id_bobot" id="" class="form-control">
                            <?php
                                include "../../models/config.php";
                                $read = "SELECT * FROM tb_bobot";
                                $read_query = $koneksi->query($read);
                                while($data_query = $read_query->fetch_array()){?>
                                    <option value="<?php echo $data_query['id_bobot']?>"><?php echo $data_query['value']?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">ID Skala</label>
                        <select name="id_skala" id="" class="form-control">
                            <?php
                                include "../../models/config.php";
                                $read = "SELECT * FROM tb_skala";
                                $read_query = $koneksi->query($read);
                                while($data_query = $read_query->fetch_array()){?>
                                    <option value="<?php echo $data_query['id_skala']?>"><?php echo $data_query['keterangan']?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="button-group">
                        <button type="submit" name="insert" class="btn btn-warning text-white shadow-sm" id="btn-count">Input Matrix</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>