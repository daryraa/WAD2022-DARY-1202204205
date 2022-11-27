<?php
require "../config/connector_user.php";
require "../config/connector.php";
require "../config/edit.php";


session_start();
if (!isset($_SESSION["login"])) {
  header("Location: Login-Dary.php");
  exit;
}

$showroom = query("SELECT * FROM showroom_dary_table");
$showroom1 = query1("SELECT * FROM user_dary");

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
  <div class="container">
    <h1>My Show Room</h1>
    <p>List Show room - 1202204205</p>


    <div class="row">
      <?php foreach ($showroom as $row) : ?>
        <div class="col-sm-4">
          <div class="card" style="margin-bottom: 10%;">
            <img src="../images/<?= $row["foto_mobil"]; ?>" class="card-img-top" width="150px" height="250px">
            <div class="card-body">
              <p class="card-text"><?= $row["deskripsi"]; ?></p>
              <a href="Detail-Dary.php?id=<?= $row["id_mobil"]; ?>" class="btn btn-primary">Detail</a>
              <a href="../config/delete.php?id_mobil=<?= $row["id_mobil"]; ?>" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

</body>

</html>

<!--  -->