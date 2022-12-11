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

    <div class="row">
        <div class="col offset-md-1">
            <h1></h1>
            <p style="color: grey">Detail Mobil </p>
            <img src="/images/{{ $carData->image }}" width="500px" height="400px">
        </div>

        <div class="col offset-md-0">
            <br>
            <br>
            <br>
            <form action="/mycar/edit/{{ $carData->id }}" method="get">
                @csrf
                <div class="form-group">
                    <label for="nama_mobill"><b>Nama Mobil</b></label>
                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"
                        value="{{ $carData->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="pemilik_mobil"><b>Nama Pemilik</b></label>
                    <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil"
                        value="{{ $carData->owner }}" readonly>
                </div>
                <div class="form-group">
                    <label for="merk_mobil"><b>Merk</b></label>
                    <input type="text" class="form-control" id="merk_mobil" name="merk_mobil"
                        value="{{ $carData->brand }}" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_beli">Book Date</label>
                    <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli"
                        value="{{ $carData->purchase_date }}" readonly>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" readonly>{{ $carData->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status_pembayaran"><b>Status Pembayaran</b></label><br>
                    <input type="radio" id="Lunas" name="status_pembayaran" value="Lunas"
                        {{ $carData->status == 'Lunas' ? 'checked' : 'disabled' }}>
                    <label for="Lunas">Lunas</label>
                    <input type="radio" id="belum" name="status_pembayaran" value="Belum-Lunas"
                        {{ $carData->status == 'Belum-Lunas' ? 'checked' : 'disabled' }}>
                    <label for="belum">belum lunas</label>
                </div>
                <br>
                <br>
                <a class="btn btn-danger" href="/mycar" role="button">Cancel</a>
                <button class="btn btn-primary" type="submit" role="button">Edit</button>
        </div>
    </div>
</body>

</html>
