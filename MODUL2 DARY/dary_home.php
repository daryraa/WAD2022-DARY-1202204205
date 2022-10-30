<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
  li {
    text-align: center;
  }

  btn btn-primary {
    align-items: center;
  }

  #footer {
    display: flex;
    background-color: lightblue;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50px;
    width: 100%;
    justify-content: center;
    align-items: center;


  }
</style>

<body>
  <header>
    <nav style="background-color:black" class="navbar navbar-expand-lg sticky-top">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a style="color: white;" class="nav-link active" href="dary_home.php">Home</a>
            <a style="color: white;" class="nav-link active" href="dary_booking.php">Booking</a>
            <a style="color: white;" class="nav-link active" href="dary_mybooking.php">My Booking</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <h1 style="text-align: center; padding: 10px">WELCOME TO EAD RENT</h1> <br>
  <h3 style="text-align: center; padding: 10px">FIND YOUR BEST DEAL, HERE!</h3>

  <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
    <div class="col-sm-6">
      <div class="card">
        <img style="margin: 43px 50px; width: 350px;" src="raize.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Raize</h5>
          <p class="card-text">Rp. 400.000 per Hari</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Matic</li>
          <li class="list-group-item">1.000 cc</li>
          <li class="list-group-item">7 Kursi</li>
        </ul>
        <div class="card-footer">
          <a href="dary_booking.php?img=raize&raize=selected" class="btn btn-primary">Book now</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <img style="margin: 50px 50px; width: 350px;" src="calya.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Calya</h5>
          <p class="card-text">Rp. 500.000 per Hari</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Matic</li>
          <li class="list-group-item">1.197 cc</li>
          <li class="list-group-item">7 Kursi</li>
        </ul>
        <div class="card-footer">
          <a href="dary_booking.php?img=calya&calya=selected" class="btn btn-primary">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <img style="margin: 35px 50px; width: 350px;" src="avanza.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">avanza</h5>
          <p class="card-text">Rp. 600.000 per Hari</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Matic</li>
          <li class="list-group-item">1.300cc</li>
          <li class="list-group-item">7 Kursi</li>
        </ul>
        <div class="card-footer">
          <a href="dary_booking.php?img=avanza&avanza=selected" class="btn btn-primary">Book now</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>

  <footer id="footer">
    <div>
      <br>
      <p style="text-align: center;">Created by Dary Ramadhan Abdussalam_1202204205</p>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>