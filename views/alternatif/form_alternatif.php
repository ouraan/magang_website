<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternatif | Form Input</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles/style_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="../dashboard.php">Magang<span>.</span></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../views/dashboard.php">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../views/dashboard.php">WP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../views/dashboard.php">SAW</a>
                    </li>
                </ul>
                <div class="d-flex ml-auto">
                    <a class="nav-link" href="../../models/user/logout.php">Log out<i class="fa fa-sign-out pl-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid my-5"  id="div-reserv">
        <form action="../../models/alternatif/insert_alternatif.php" method="POST">
            <div class="card mb-5">
                <div class="card-header">
                    <h5>Alternatif</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">ID Alternatif</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="ID Alternatif" name="id_alternatif" value=""/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Alternatif</label>
                        <input type="text" class="form-control mt-1 py-4" placeholder="Nama Alternatif" name="nama_alternatif" value=""/>
                    </div>
                    <div class="button-group">
                        <button type="submit" name="insert" class="btn text-white shadow-sm" id="btn-count">Input Alternatif</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>