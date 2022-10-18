<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriteria | Form Input</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles/style_form.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-4 shadow-sm">
        <a href="../../index.php" class="navbar-brand ml-5">MAGANG</a>
    </nav>

    <div class="container-fluid my-5"  id="div-reserv">
        <form action="../../models/kriteria/insert_kriteria.php" method="POST">
            <div class="card mb-5">
                <div class="card-header">
                    <h5>Kriteria</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">ID Kriteria</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="ID Kriteria" name="id_kriteria" value=""/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Kriteria</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="Nama Kriteria" name="nama_kriteria" value=""/>
                    </div>
                    <div class="button-group">
                        <button type="submit" name="insert" class="btn btn-warning text-white shadow-sm" id="btn-count">Input Kriteria</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>