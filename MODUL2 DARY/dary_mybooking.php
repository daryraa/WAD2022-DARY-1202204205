<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    position: absolute;
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
  <h1 style="text-align: center; padding: 10px">THANK YOU DARY_1202204205 FOR RESERVING</h1> <br>
  <h5 style="text-align: center; padding: 10px">PLEASE DOUBLE CHECK YOUR RESERVATION DETAILS</h3>
  <?php
  $nama = $_POST['nama'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $number = $_POST['number'];
  $phone = $_POST['tel'];
  $select = $_POST['select'];
  $asuransi = $_POST['asuransi'];
  ?>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Booking Number</th>
          <th scope="col">Nama</th>
          <th scope="col">Check in</th>
          <th scope="col">Check Out</th>
          <th scope="col">No Handphone</th>
          <th scope="col">Type</th>
          <th scope="col">Services</th>
          <th scope="col">Total Prices</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo (rand()) ?></td>
          <td><?php echo $nama ?></td>
          <td><?php echo $date . " " . $time ?></td>
          <td><?php echo date('Y-m-d', strtotime($date . ' +' . $number . 'days')) . " " . $time ?></td>
          <td><?php echo $phone ?></td>
          <td><?php echo $select ?></td>
          <td><?php echo $asuransi ?></td>
        </tr>
      </tbody>
    </table>
    <div class="mb-3">
      <div class="d-flex justify-content-center ">
        <a href="dary_booking.php" class="btn btn-primary btn-lg btn-block">Kembali</a>
      </div>
    </div>
  </div>
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