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
    <div class="container d-flex" style="background-color:white;">
        <div class="col-md-10 mx-5 text-center color-primary">
            <h1>Submit hasil survey anda berhasil</h1>
            <button class="btn btn-primary my-4 redirect" onclick="redirect();">OK</button>
        </div>
    </div>
<script type="text/javascript">
    function redirect(){
        window.top.location.href = "http://localhost:8000/responden/non-petikemas/end-survey";
    }
</script>
</body>
</html>