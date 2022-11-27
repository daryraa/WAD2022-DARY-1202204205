<?php
require "../config/connector_user.php";
require "../config/connector.php";
require "../config/edit_user.php";
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: Login-Dary.php");
  exit;
}

$id = $_GET['id'];
$showroom1 = query1("SELECT * FROM user_dary");
// var_dump($showroom1);die;

if (isset($_POST["submit"])) {
  if (profil($_POST) > 0) {
    // echo " 
    // <script>
    //     alert('Data berhasil diubah');
    //     document.location.href = 'Home-Dary.php';
    // </script>";

    echo mysqli_error($connector1);
  } else {
    echo " 
        <script>
            alert('Data gagal diubah');
            document.location.href = 'profil-Dary.php';
        </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SHOWROOM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <script>
    function myregistx() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }

    function myregisty() {
      var y = document.getElementById("konfirmasi");
      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="navbar-brand " aria-current="page" href="Home-Dary.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="ListCar-Dary.php">My Car</a>
          </li>
        </ul>
        <span class="navbar-text">
          <?php foreach ($showroom1 as $bebas) : ?>
            <div class="dropdown">
              <button type="button" class="btn btn-light"><a style="text-decoration: none; color :black;" href="Add-Dary.php">Add Car</a></button>
              <button class="btn dropdown-toggle btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= mb_strimwidth($bebas["nama"], 0, 10, "..."); ?>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-dark" href="profil-dary.php?id=<?= $bebas["id"]; ?>">Profil</a></li>
              <?php endforeach; ?>
              <li><a class="dropdown-item text-dark" href="HomeAwal-Dary.php">Logout</a></li>
              </ul>
            </div>
        </span>
      </div>
    </div>
  </nav>
<?php

$showroom1 = query1("SELECT * FROM user_dary WHERE id = '$id'")[0];
?>
  <div class="container">
    <div class="row">
      <div class="col offset-md-0">
        <br>
        <br>
        <br>
        <form action="" method="POST">
          <input type="hidden" name="id" value="<?= $showroom1['id']; ?>">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="
                    <?= $showroom1['email']; ?>">
          </div>
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $showroom1['nama']; ?>">
          </div>
          <div class="form-group">
            <label for="tel">Nomor Handphone</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="<?= $showroom1['no_hp']; ?>">
          </div>
          <div class="form-group">
            <label for="pass">Kata Sandi</label>
            <input type="password" class="form-control" id="pass" name="pass">
            <input type="checkbox" onclick="myregistx()">Show Password
          </div>
          <div class="form-group">
            <label for="konfirmasi">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="konfirmasi" name="konfirmasi">
          </div>
          <br>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Simpan perubahan?')">Simpan</button>

      </div>

    </div>
  </div>
</body>

</html>