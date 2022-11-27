<?php
require "../config/connector_user.php";
require "../config/connector.php";
require "../config/registrasi.php";

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo " 
        <script>
            alert('Anda Berhasil Registrasi');
            document.location.href = 'Login-Dary.php';
        </script>";
    } else {
        echo mysqli_error($connector);
        // "<script>
        //     alert('Gaga');
        //     document.location.href = 'Add-Dary.php';
        // </script>";
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
    <style>
        body,
        html {
            height: 100%;
        }

        .bg {

            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
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

    <div class="row h-100">
        <div class="col sm-7">
            <img class="mh-100" src="../images/toyota.png" width="100%" height="100%">
        </div>
        <div class="col sm-1">
            <h1>Register</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="tel">Nomor Handphone</label>
                    <input type="tel" class="form-control" id="tel" name="tel">
                </div>
                <div class="form-group">
                    <label for="pass">Kata Sandi</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                    <input type="checkbox" onclick="myregistx()">Show Password
                </div>
                <div class="form-group">
                    <label for="konfirmasi">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control" id="konfirmasi" name="konfirmasi">
                    <input type="checkbox" onclick="myregisty()">Show Password
                </div>
                <br>

                <button type="submit" class="btn btn-primary" name="register">Submit</button>
                <br> <br>
                <p>Anda sudah punya akun?<a href="Login-Dary.php">Login</a></p>
        </div>
    </div>


</body>

</html>