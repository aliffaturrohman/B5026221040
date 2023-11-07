<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
    <script>
        function validate() {
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");
            if (isNaN(nrp.value) )  {
                nrp.focus();
                msg.innerHTML = "NRP harus berupa angka";
                nrp.placeholder = "Contoh 234561241";
                return false;
            }

            if(nrp.value.length != 10){
                msg.innerHTML = "NRP harus 10 digit";
                return false;
            }

            return true;
        }
    </script>

</head>

<body>

    <div class="container">
        <div class="jumbotron">
            Form validasi adalah mencegah pengiriman data ke server jika ada yang invalid/tidak sesuai constrain
            database
        </div>
        <form action="" method="get" onsubmit="return validate()">
            <div class="form-group">
                <div id="msg"></div>
                <label for="nrp">NRP</label>
                <input type="text" class="form-control" id="nrp" >
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
