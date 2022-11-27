<?php
session_start();
require "../config/connector_user.php";
require "../config/connector.php";

$showroom1 = query1("SELECT * FROM user_dary");

if (!isset($_SESSION["login"])) {
  header("Location: Login-Dary.php");
  exit;
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
  <div class="container text-justify">
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col">
        <?php

        foreach ($showroom1 as $s) : ?>
          <h1>Selamat Datang Di Show Room <?= $s["nama"]; ?></h1>
        <?php endforeach; ?>
        <p>Mobil murah dan terjangkau</p>
        <a class="btn btn-primary" href="Add-Dary.php">My Car</a>
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="col">
              <img src="../images/logo-ead.png" width="100px" height="25px">
            </div>
            <div class="col">
              <p>Dary_1202204205</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <img src="../images/raize.png" width="500px" height="400px">
      </div>
    </div>
  </div>

</body>

</html>