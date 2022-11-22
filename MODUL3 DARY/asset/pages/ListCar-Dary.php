<?php
require "../config/connector.php";
require "../config/edit.php";
require "../config/show.php";

$showroom = query("SELECT * FROM showroom_dary_table");


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
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="Home-Dary.php">Home</a>
          <a class="nav-link active" aria-current="page" href="Add-Dary.php">My Car</a>

          <a class="btn btn-light float-end" aria-current="page" href="Add-Dary.php">Add Car</a>
        </div>
      </div>
    </div>
  </nav>
  <h1>My Show Room</h1>
  <p>List Show room - 1202204205</p>

  
    <div class="row">
    <?php foreach ($showroom as $row) : ?>
      <div class="col-sm-4">
        <div class="card" style="margin-bottom: 10%;">
          <img src="../images/<?= $row["foto_mobil"]; ?>" class="card-img-top"  width="150px" height="250px">
          <div class="card-body">
            <p class="card-text"><?= $row["deskripsi"]; ?></p>
            <a href="Detail-Dary.php?id=<?=$row["id_mobil"];?>" class="btn btn-primary">Detail</a>
            <a href="../config/delete.php?id_mobil=<?= $row["id_mobil"]; ?>" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  
  

</body>

</html>

<!--  -->