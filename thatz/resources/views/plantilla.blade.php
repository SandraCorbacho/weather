<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thatzads</title>

<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/48df33f511.js" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../resources/css/style.css">

</head>
<body class='bg fuente'>
    <div class='container-fluid '>
       <div class='row'>
            <div class='col-12 centrar' id='titulo'>
                 <img src='../resources/img/ThatzWeather.png'>
            </div>  
        </div>
        <div class='row'>
            <div class='col-12'>
                <div class='row centrar' id='parrafo1'>
                    <div id='caja2' class='col-4 '>
                     <p>Enteráte del tiempo en la zona exacta que te interesa buscando por código postal</p>
                    </div>
                </div>
       @yield('seccion')
       <script src="../resources/js/weather.js"></script>
    </div>
</body>
</html>