<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAGANG</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles/style_index.css">
</head>
<body>
    <div class="container-fluid banner">
        <nav class="navbar navbar-expand-lg py-4">
            <a href="#" class="navbar-brand ml-5 py-0 bg-white">M</a>
        </nav>
        <div class="text-center text-white" id="banner-group-text">
            <h1 id="banner-title">Magang<span>.<span></h1>
            <p>See the intern qualification</p>
            <br>
            <!-- <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="views/alternatif/data_alternatif.php">Alternatif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/kriteria/data_kriteria.php">Kriteria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/skala/data_skala.php">Skala</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/bobot/data_bobot.php">Bobot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/matrix/data_matrix.php">Matrix</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/result/result_matrixkeputusan.php">Result</a>
                </li>
            </ul> -->
            <a href="#div-login"></a>
        </div>
    </div>
    <div class="container-fluid my-5"  id="div-login">
        <form action="models/user/login.php" method="POST">
            <div class="card mb-5 p-5 border-0">
                <div class="text-group mb-4 text-center">
                    <h2>Welcome back!</h2>
                    <p class="text-muted">Please login to use start using the services.</p>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control mt-1 py-4 border-0" placeholder="Email" name="email"/>
                </div>
                <div class="mb-4">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control mt-1 py-4 border-0" placeholder="password" name="password"/>
                </div>
                <div class="button-group text-right">
                    <button type="submit" name="login" class="btn text-white shadow-sm" id="btn-submit">LOG IN</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>