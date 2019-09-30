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
            <div class="col-md-12 vh-100" style="background-image: url('/users/images/bg2.jpeg');background-repeat: no-repeat;background-size: cover; background-position: center;"></div>
        </div>
        <div class="col-md-8 p-5 text-center color-primary">
            <h1>SELAMAT DATANG <br>DI ONLINE SURVEY BOARD</h1>
            <p class="my-3">
                PT.Pelabuhan Indonesia IV (Persero) saat ini akan melakukan SURVEY KEPUASAN, KETIDAKPUASAN,
                LOYALITAS, dan KETERIKATAN PELANGGAN untuk mendapatkan masukan dari pelanggan
                <br>terkait kualitas layanan yang diterima.
                <br>
                <br>Hasil survey ini akan menjadi dasar kami dalam merumuskan strategi
                <br>peningkatan kualitas layanan kepada pelanggan dimasa depan
                <br>Atas ketersediaan bapak/ibu kami ucapkan terimakasih.
            </p>
            <a href="/responden/non-petikemas/main-survey" class="btn btn-primary">Mulai</a>
            <div class="col-md-12 my-5 px-5 justify-content-around">
                <div class="col-md-3">
                    <img src="{{ asset('users/images/pelindo4-logo.png') }}">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('users/images/havara-logo.png') }}">
                </div>
            </div>
        </div>
    </div>
</body>
</html>