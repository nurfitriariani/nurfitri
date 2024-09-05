<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-details {
            margin-top: 20px;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <form action="/detailproduk">
    <div class="container product-details">
    <h4>{{ $produk->name }}</h4>
        <div class="row">
            <div class="col-md-6 product-image">
                <img src="{{ asset('/storage/image/'.$produk?->foto) }}" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- <p class="text-muted">Kategori : <span>{{$produk->kategori}}</span></p> -->
                <h4> Harga : Rp. {{$produk->harga}} </h4>
                <p>{{$produk->deskripsi}}</p>
                
                <!-- <h5>Detail Produk</h5>
                <ul>
                    <li>Brand: {{$produk->brand}}</li>
                    <li>Warna: {{$produk->warna}}</li>
                    <li>Stok: {{$produk->stok}}<li>
                </ul> -->
                <div class="form-group">
                    <label for="quantity">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" value="1" min="1">
                </div>
                
                <div class="text-center">
                    <a href="/checkout" class="btn btn-primary">CheckOut</a>
                    <a href="/keranjang" class="btn btn-primary">Masukkan Keranjang</a>
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </form>
</body>
</html>