<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thatzads</title>

<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
<script>
window.onload=function(){
    this.document.getElementById('consulta').addEventListener('click',consultaTiempo);
}
function consultaTiempo(){
   var codigoPostal=document.getElementById('codigoPostal').value
    espanol=codigoPostal.substr(0,2);
   
    if((espanol>=01&&espanol<=52)&&codigoPostal.length==5){
        alert('ok')
    }
    else{
        alert('introduce un códgo postal español y/o válido')
    }
}
</script>
<style>
body, html {
    height: 100vh;
  }
  .bg {
    /* The image used */
    background-image: url("../resources/img/fondo-desktop.png");
  
     /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .centrar{
      text-align: center;
      justify-content: center;
  }
  #caja2{
      font-size: 18;
      font-weight: bold;
      line-height: 24px;
      color:#ffffff;
    
  }
  .color1{
      background-color: #ffffff;
   
  
  }
  .color2{
      background-color: aqua;
      
     
  }
  .color3{
  background-color: blue;
  }
  #codigoPostal{
      background: transparent;
      color:white;
      padding-left: 25px;
      width: 527px;
  height: 48px;
  border-radius: 4px;
  border: 1px solid #ffffff;
  margin-bottom: 25px;;
      
      
  }
  .tamano{
      width: 527px;
     
  }
  .consultar{
      background-color: #00bde0;
      border:none;
      box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
      border-radius: 4px;
      color:#ffffff;
      height: 48px;
      font-size: 24px;
  font-weight: 700;
  
  }
  .fuente{
      font-family: 'Muli', sans-serif;
      color:#ffffff
  }
  .lluvia{
      width: 217px;
  height: 24px;
  font-size: 18px;
  font-weight: 700;
  line-height: 24px;
  margin-top: 140px;
  }
  ::placeholder { color:#ffffff; 
      vertical-align: center;
      font-size: 18px;
      font-weight: 400;
   
  ;}
  #titulo{
      margin-bottom: 50px;
     margin-top: 70px;
  }
  #parrafo1{
      margin-bottom: 50px;
  }
  
  .posicion{
      position: relative;
     left: 230px;
     bottom: 40px;
  }
</style>
</head>
<body class='bg fuente'>
    <div class='container-fluid '>
       @yield('seccion')
        
    </div>
</body>
</html>