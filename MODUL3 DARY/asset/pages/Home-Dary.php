<?php require "../config/connector.php";
require "../config/show.php";
require "../config/insert.php"; ?>
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link active" aria-current="page" href="Add-Dary.php">My Car</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container text-justify">
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col">
        <h1>Selamat Datang Di Show Room Dary</h1>
        <p>Mobil murah dan terjangkau</p>
        <a class="btn btn-primary" href="ListCar-Dary.php">My Car</a>
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