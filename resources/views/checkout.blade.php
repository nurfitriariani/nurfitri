<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .checkout-form {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
    </style>
</head>
    <form action="/checkout">
    <body>
    <div class="container">
        <div class="checkout-form">
            <h2 class="text-center">Checkout</h2>
            <form>
                <div class="form-group">
                    <label for="fullName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="phoneNumber">No Handphone</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Masukkan no hp">
                </div>
                <h4>Alamat Anda</h4>
                <div class="form-group">
                    <label for="address">Provinsi, Kota, Kecamatan</label>
                    <input type="text" class="form-control" id="address" placeholder="Masukkan provinsi, kota, kecamatan">
                </div>
                <div class="form-group">
                    <label for="city">Nama Jalan, Gedung</label>
                    <input type="text" class="form-control" id="city" placeholder="Masukkan nama jalan, gedung ">
                </div>
                <div class="form-group">
                    <label for="city">Detail lainnya</label>
                    <input type="text" class="form-control" id="city" placeholder="Masukkan detail lainnya">
                </div>
                <div class="form-group">
                    <label for="kode">Kode pos</label>
                    <input type="text" class="form-control" id="kode" placeholder="Masukkan kode pos">
                </div>
                <h4>Metode Pembayaran</h4>
                <div class="form-group">
                <label for="country" class="form-label">Pilih Metode Pembayaran</label>
                <select class="form-select" id="country" required>
                    <option value="">COD</option>
                    <option value="">Transfer</option>
                </select>
                </label>
                </div>
                <div class="form-group text-center">
                 <a href="/finalcheckout" class="btn btn-primary">CheckOut</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</form>
</html>