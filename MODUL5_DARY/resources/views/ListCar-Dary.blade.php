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
        <h1>My Show Room</h1>
        <p>List Show room - 1202204205</p>
        <div class="row">
            @foreach ($list as $car)
                <div class="col-sm-4">
                    <div class="card d-block" style="width: 18rem; margin-bottom: 10%; height: 30rem;">
                        <img src="/images/{{ $car->image }}" class="card-img-top" alt="..."
                            style="width: 18rem; height: 18rem; object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->name }}</h5>
                            <p class="card-text">{{ $car->description }}</p>
                            <a href="/mycar/detail/{{ $car->id }}" class="btn btn-primary">Detail</a>
                            <a href="/mycar/delete/{{ $car->id }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
