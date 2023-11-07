<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Title</title>
    <script src="{{asset('calculatorAssets/script.js')}}"></script>
</head>

<body class="bg-light">

    <div class="container">
        <h1>Operasi Bilangan</h1>
        <div class="form-group">
            <label for="bil1">Bilangan 1:</label>
            <input type="number" class="form-control" id="bil1">
        </div>
        <div class="form-group">
            <label for="bil2">Bilangan 2:</label>
            <input type="number" class="form-control" id="bil2">
        </div>
    </div>

    <div class="container">
        <h1>Hasil Operasi: <span id="hasil"></span></h1>
        <input type="button" value="penjumlahan" class="btn btn-dark" onclick="tambah();">
        <input type="button" value="perkalian" class="btn btn-dark" onclick="kali();">
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
