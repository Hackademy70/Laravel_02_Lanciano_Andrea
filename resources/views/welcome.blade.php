<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Mio CSS -->
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
            <!-- ICONA per mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Link NAVBAR -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chi-siamo') }}">Chi Siamo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <!-- prima riga -->
            @foreach ($movies as $movie)
                <div class="col-4 d-flex my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/media/{{ $movie['url'] }}" class="card-img-top" alt="{{ $movie['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['name'] }}</h5>
                            <p class="card-text">{{ $movie['director'] }}</p>
                            <p class="card-text">{{ $movie['year'] }}</p>
                            <p class="card-text">{{ $movie['genre'] }}</p>
                            <p class="card-text">{{ $movie['duration'] }}</p>
                            <a href="{{route("servizi", [ 'id' => $movie['id'] ])}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




    


    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
