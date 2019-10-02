<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey Pelanggan Pelindo 4</title>
    <link rel="stylesheet" href="{{ asset('users/css/style.css') }}">
</head>
<body>
    <div class="container d-flex">
        <div class="col-md-4">
            <div class="col-md-12 vh-100" style="background-image: url('/users/images/bg4.jpg');background-repeat: no-repeat;background-size: cover; background-position: center;"></div>
        </div>
        <div class="col-md-8 p-5 text-center color-primary">
            <img style="width: 20%;" src="{{ asset('users/images/pelindo4-logo.png') }}"> <h1>SELAMAT DATANG<br>DI SURVEY PELANGGAN ONLINE</h1>
            <p class="my-3">
                PT. Pelabuhan Indonesia IV (Persero) saat ini akan melakukan <b> SURVEY KEPUASAN, KETIDAKPUASAN,
                LOYALITAS, dan KETERIKATAN PELANGGAN </b> untuk mendapatkan masukan dari pelanggan
                <br>terkait kualitas layanan yang diterima.
                <br>
                <br>
                 <b>Hasil survey ini akan menjadi dasar bagi PELINDO IV dalam merumuskan program kerja
                <br>peningkatan kualitas layanan kepada seluruh pelanggan di masa depan.
                <br>Atas kerjasama Bapak/Ibu, kami mengucapkan terimakasih.</b>
            </p>
            <a href="/responden/kapal/main-survey" class="btn btn-primary">Mulai</a>
            <div class="col-md-12 my-5 px-5 justify-content-around">
                <div class="col-md-6">
                        <h5 style="font-weight:200;">This Online Survey Conducted By :</h5> <br>
                        <img style="width: 40%;" src="{{ asset('users/images/havara-logo.png') }}">
                </div>
            </div>
        </div>
    </div>
</body>
</html>