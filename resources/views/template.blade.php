<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Mpitt</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Rabbani Official</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a href="/keranjang" class="btn btn-primary">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage/image/b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang Di Rabbani Official</h5>
                    <p>Ayo Di Pilih Dan Jangan Lupa Beli Yahhhh</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage/image/c.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang Di Rabbani Official</h5>
                    <p>Ayo Di Pilih Dan Jangan Lupa Beli Yahhhh</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage/image/d.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang Di Rabbani Official</h5>
                    <p>Ayo Di Pilih Dan Jangan Lupa Beli Yahhhh</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container my-5">
        <h2 class="text-center"></h2>
        <div class="row">
            @foreach ($produk as $key => $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('storage/image/'.$item->foto)}}"alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                        <p class="card-text">Rp.{{ $item->harga }}</p>
                        <a href="/detailproduk/{{ $item->id }}" class="btn btn-primary">Beli</a>
                        <a href="/keranjang" class="btn btn-primary">Masukkan Keranjang</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Rabbani Official. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
