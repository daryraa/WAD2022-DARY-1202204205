<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOWROOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    @include('partials.navbar')

    <div class="container">
        <div class="row">
            <div class="col offset-md-0">
                <br>
                <br>
                <br>
                <form action="/mycar/profil{{ auth()->user()->id }}" method="get">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ auth()->user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ auth()->user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone</label>
                        <input type="tel" class="form-control" id="no_hp" name="no_hp"
                            value="{{ auth()->user()->no_hp }}">
                    </div>
                    <div class="form-group">
                        <label for="pass">Kata Sandi</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                        <input type="checkbox" onclick="myregistx()">Show Password
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="konfirmasi" name="konfirmasi">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit"
                        onclick="return confirm('Simpan perubahan?')">Simpan</button>

            </div>

        </div>
    </div>
</body>

</html>
