<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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


    <h1 class="text-center card-title my-3">{{ $movie['name'] }}</h1>

    <div class="container">
        <div class="row my-5 justify-content-center align-content-center">
            {{-- immagine --}}
            <div class="col-6 d-flex justify-content-center">
                <img class="img-fluid" src="/media/{{ $movie['url'] }}" alt="{{ $movie['name'] }}">
            </div>
            <div class="col-6 d-flex flex-column">
                <p class="card-text">{{ $movie['director'] }}</p>
                <p class="card-text">{{ $movie['year'] }}</p>
                <p class="card-text">{{ $movie['genre'] }}</p>
                <p class="card-text">{{ $movie['duration'] }}</p>
                <p class="card-text">{{ $movie['description'] }}</p>
            </div>
        </div>
    </div>





    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>