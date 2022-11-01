<?php
    if(!isset($_GET["img"])){
        $_GET["img"]= "calya";
    }
    if(!isset($_GET["calya"])){
        $_GET["calya"]= Null;
    }
        if(!isset($_GET["raize"])){
        $_GET["raize"]= Null;
    }
    if(!isset($_GET["avanza"])){
        $_GET["avanza"]= Null;
    }

  ?>


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
    #content {
        float: left;
        width: 60%;
        height: 400px;
        font-size: 1.5em;
        text-align: center;
        padding-top: 20px;
    }

    
    #sidebar {
        float: right;
        width: 40%;
        padding-top: 20px;

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
    <h1 style="text-align: center; padding: 10px">RENT YOUR CAR NOW</h1> <br>

    <div id="content">
        <img src="<?=$_GET['img'];?>.png" alt="calya.png">
    </div>
    <div id="sidebar">
        <form action="dary_mybooking.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="Dary Ramadhan Abdussalam_1202204205" readonly>
            </div>
            <div class="form-group">
                <label for="date">Book Date</label>
                <input type="date" class="form-control" id="date" name="date" value=" " >
            </div>
            <div class="form-group">
                <label for="time">Start Time</label>
                <input type="time" class="form-control" id="time" name="time"value=" " >
            </div>
            <div class="form-group">
                <label for="number">Duration(Days)</label>
                <input type="number" class="form-control" id="number" name="number"value=" " >
            </div>
            <div class="form-group">
                <label for="select" class="form-label">Jenis Mobil</label>
                <select id="select" class="form-select" name="select"value=" " >
                    <option value="Toyota Calya"<?=$_GET["calya"]?>>Toyota Calya</option>
                    <option value="Toyota Raize"<?=$_GET["raize"]?>>Toyota Raize</option>
                    <option value="Toyota Avanza"<?=$_GET["avanza"]?>>Toyota Avanza</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tel">Phone Number:</label>
                <input type="tel" class="form-control" id="tel" name="tel"  value="">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="heal" value="Health Protocol" id ="heal" >Health Protocol/Rp 25.000</label><br>
                <label><input type="checkbox" name="drive" value="Driver"id ="drive" >Driver/Rp 100.000</label><br>
                <label><input type="checkbox" name="fuel" value="Fuel Filled" id ="fuel">Fuel Filled/Rp 250.000</label>
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg btn-block" href="dary_mybooking.php">Book now</button>
            </div>
        </form>
        <br>
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