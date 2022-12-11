<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOWROOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <div class="row">
        <div class="col sm-7">
            <img class="mh-100" src="/images/toyota.png" width="100%" height="100%">
        </div>
        <div class="col sm-1">
            <h1>Login</h1>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required
                        value="{{ old('email') }}">
                    @error('email')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pass">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="exampleInputpassword1" aria-describedby="passwordHelp" name="password" required
                        value="{{ old('password') }}">
                    @error('password')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <p>Belum Punya Akun?<a href="/register">Register</a></p>
            </form>
        </div>
    </div>
</body>

</html>
