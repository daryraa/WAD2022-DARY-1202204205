<?php
require "../config/connector.php";
require "../config/edit.php";
require "../config/show.php";

$showroom = query("SELECT * FROM showroom_dary_table")[0];


if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo " 
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'ListCar-Dary.php';
        </script>";
    } else {
        echo " 
        <script>
            alert('Data gagal diubah');
            document.location.href = 'ListCar-Dary.php';
        </script>";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD RENTAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Home-Dary.php">Home</a>
                    <a class="nav-link active" aria-current="page" href="Add-Dary.php">My Car</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col offset-md-1">
            <h1><?php echo $showroom["nama_mobil"]; ?></h1>
            <p style="color: grey">Tambah Baru mobil anda ke list show room</p>
            <img src="../images/<?php echo $showroom["foto_mobil"]; ?>" width="500px" height="400px">
        </div>

        <div class="col offset-md-0">
            <br>
            <br>
            <br>
            <form action="" method="POST">
                <input type="hidden" name="id_mobil" value="<?= $showroom["id_mobil"]; ?>">
                <div class="form-group">
                    <label for="nama_mobill"><b>Nama Mobil</b></label>
                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="<?= $showroom["nama_mobil"]; ?>">
                </div>
                <div class="form-group">
                    <label for="pemilik_mobil"><b>Nama Pemilik</b></label>
                    <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil" value="<?= $showroom["pemilik_mobil"]; ?>">
                </div>
                <div class="form-group">
                    <label for="merk_mobil"><b>Merk</b></label>
                    <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" value="<?= $showroom["merk_mobil"]; ?>">
                </div>
                <div class="form-group">
                    <label for="tanggal_beli">Book Date</label>
                    <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli" value="<?= $showroom["tanggal_beli"]; ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $showroom["deskripsi"]; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="foto_mobil" class="form-label"><b>Foto</b></label>
                    <img src="../images/<?=$showroom['foto_mobil'];?>">
                    <input class="form-control" type="file" id="foto_mobil" name="foto_mobil" readonly>
                </div>
                <div class="form-group">
                    <label for="status_pembayaran"><b>Status Pembayaran</b></label><br>
                    <input type="radio" id="Lunas" name="status_pembayaran" value="<?= $showroom["status_pembayaran"]; ?>">
                    <label for="Lunas">Lunas</label>
                    <input type="radio" id="belum" name="status_pembayaran" value="<?= $showroom["status_pembayaran"]; ?>">
                    <label for="belum">belum lunas</label>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Simpan perubahan?')">Simpan</button>
                <a href="ListCar-Dary.php" class="btn btn-danger">Cancel</a>

        </div>


    </div>

</body>

</html>