<?php
require "../config/connector_user.php";
require "../config/connector.php";
session_start();

if (isset($_COOKIE['id']) && isset($_COOKIE['email'])) {
    $id = $_COOKIE['id'];
    $email = $_COOKIE['email'];

    // ambil username berdasarkan id
    $result = mysqli_query($connector1, "SELECT email FROM user_dary WHERE id = $id");
    $test = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($email === $test['email']) {
        $_SESSION['login'] = true;
    }
}


if (isset($_SESSION["login"])) {
    header("Location: Home-Dary.php");
    exit;
}
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $result = mysqli_query($connector1, "SELECT * FROM user_dary WHERE user_dary.email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        //cek pass
        $test = mysqli_fetch_assoc($result);
        if ($test["passwords"] === $pass) {
            //set session 
            $_SESSION["login"] = true;


            //cek remember me
            if (isset($_POST['remember'])) {
                setcookie('id', $test['id'], time() + 120);
                setcookie('email', $test['email'], time() + 120);
            }
            header("Location: Home-Dary.php");
            exit;
        }
    }
    $error = true;
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
            /* The image used */
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <div class="row">
        <div class="col sm-7">
            <img class="mh-100" src="../images/toyota.png" width="100%" height="100%">
        </div>
        <div class="col sm-1">
            <?php if (isset($error)) : ?>
                <p style="color : red; font-style:italic;">username / password salah</p>
            <?php endif; ?>
            <h1>Login</h1>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="pass">Kata Sandi</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>

                </div>



                <br>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <p>Belum Punya Akun?<a href="Register-Dary.php">Register</a></p>
            </form>
        </div>
    </div>
</body>

</html>