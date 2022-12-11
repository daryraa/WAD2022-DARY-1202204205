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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    @include('partials.navbar')


    <div class="container">
        <div class="row">
            <div class="col offset-sm-">
                <h1>Tambah Mobil</h1>
                <p style="color: grey">Tambah Baru mobil anda ke list show room</p>
                <form action="/mycar/add" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_mobil"><b>Nama Mobil</b></label>
                        <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"
                            placeholder="Toyota Avanza" required>
                    </div>
                    <div class="form-group">
                        <label for="pemilik_mobil"><b>Nama Pemilik</b></label>
                        <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil"
                            placeholder="Dary_1202204205">
                    </div>
                    <div class="form-group">
                        <label for="merk_mobil"><b>Merk</b></label>
                        <input type="text" class="form-control" id="merk_mobil" name="merk_mobil"
                            placeholder="Avanza">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_beli">Book Date</label>
                        <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli"
                            placeholder="11/12/2022">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                    </div>
                    <div class="form-group">

                        <label for="foto_mobil" class="form-label"><b>Foto</b></label>

                        <input class="form-control" type="file" id="foto_mobil" name="foto_mobil">
                    </div>
                    <div class="form-group">
                        <label for="status_pembayaran"><b>Status Pembayaran</b></label><br>
                        <input type="radio" id="Lunas" name="status_pembayaran" value="Lunas" checked>
                        <label for="Lunas">Lunas</label>
                        <input type="radio" id="belum" name="status_pembayaran" value="Belum-Lunas">
                        <label for="belum">belum lunas</label>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </div>
        </div>

    </div>

</body>

</html>
