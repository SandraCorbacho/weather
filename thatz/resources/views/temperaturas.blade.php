<?php
$codigoPostal=$_GET['codigoPostal'];

// require "conexionweather.php";

//     $sql="SELECT * FROM tiempo ORDER BY temperatura";
    

//     $resultado=mysqli_query($conexionweather,$sql)or die(mysqli_error($conexionweather));
//     $tiempo=array();
//     while ($datostiempo=mysqli_fetch_assoc($resultado)) {
//         array_push($tiempo, $datostiempo);
//     }
   
//     $respuesta="<ol class='numeracion' >";
//     for($c=0;$c<=4&&$c<count($tiempo);$c++){
//         $respuesta.=" <li > <div class='col-12 borde2'>
//         <div class='row'>
//              <div class='col-3 grande'>
//         ".$tiempo[$c]['temperatura']."º
//         </div>
//         <div class='col-9 pequeno'>
//        <span class='letra'> CP:</span> ".$tiempo[$c]['codigo_postal']."<br>
//        <span class='letra'>Ciudad: </span>".$tiempo[$c]['ciudad']."
//         </div>
//         </div>
//     </div></li>";
        
       
    //}
    
?>
@extends('plantilla')
@section('seccion')
<div id='resumenTiempo' class='container-fluid '>
        <div class='row alineacion '>
            <div class='col-xl-7 col-md-11 tiempo margenes0 '>
                <div class='row justify-content-center '>
                    <div id='movilCaja1' class='col-xl-4 col-xs-12 altura justificar '> <span>Código Postal: <span id='codPost' class='negrita'></span></span> <br> <span>Ciudad: <span id='ciudad' class='negrita'></span>
                    </div>
                    <div class='col-xl-4 col-xs-12 '>
                            <div class='col-12'>
                                <img class='imgbuscador' id='lupaBuscador' src='../resources/img/shape.png'>
                                <input id='codigoBusqueda' class='buscador' type='number' name='codigoPostal' placeholder="Introduce el código Postal">
                            </div>
                            
                           
                    </div>
                </div>
                <div class='row centrar'>
                    <div class='col-xl-3 xol-md-2 col-xs-12 '>
                        <div class='centrar espacio'>Ahora</div>
                        <div class=' container-fluid'>
                            <div class='row'>
                            <div class='col-xl-6 col-xm-6 col-xs-6 ' id='icono'>IMG</div>
                            <div class='col-xl-6 col-md-6 col-xs-4 '>
                                <div class='col-10 tamano2' id='descripTiempo'>descrip1</div>
                                <div class='col-10 tamano1' id='temp'></div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class='col-xl-4 col-xs-12 borde sinborde'>
                    <div class='centrar espacio'>Próximas horas</div>
                    <div class='row altura2 ' >
                    
                        <div class='col-3 alturaInterior '>
                            <div class='espaciosHoy'>Ahora</div>
                            <div id='iconoHoy'>img</div>
                            <div class='descripTam' id='descripTiempoHoy'>descrip2</div>
                            <div class='temp' id='tempHoy'>temp</div>
                        </div>
                        <div class='col-3 alturaInterior borde'>
                            <div class='espaciosHoy'>18:00</div>
                            <div>img</div>
                            <div class='descripTam'>descrip</div>
                            <div class='temp'>temp</div>
                        </div>
                        <div class='col-3 alturaInterior borde'>
                            <div class='espaciosHoy'>19:00</div>
                            <div>img</div>
                            <div class='descripTam'>descrip</div>
                            <div class='temp'>temp</div>
                        </div>
                        <div class='col-3 alturaInterior borde'>
                            <div class='espaciosHoy'>20:00</div>
                            <div>img</div>
                            <div class='descripTam'>descrip</div>
                            <div class='temp'>temp</div>
                        </div>
                    </div>
                    </div>
                    <div class='col-xl-5 col-xs-12 borde sinborde '>
                    <div class='centrar espacio'>Próximos 5 días</div>
                    <div class='row'>
                        <div class='col-3  alturaInterior'>
                            <div class='espaciosHoy'>Ahora</div>
                            <div>img</div>
                            <div class='descripTam'>descrip</div>
                            <div class='temp'>temp</div>
                        </div>
                        <div class='col-3  alturaInterior borde '>
                            <div class='espaciosHoy'>mañana</div>
                            <div>img</div>
                            <div class='descripTam'>descrip</div>
                            <div class='temp'>temp</div>
                        </div>
                        <div class='col-3  alturaInterior borde'>
                            <div class='espaciosHoy'>dia+2</div>
                            <div>img</div>
                            <div class='descripTam' >descrip</div>
                            <div class='temp'>temp</div>
                        </div>
                        <div class='col-3  alturaInterior borde'>
                            <div class='espaciosHoy'>dia+3</div>
                            <div >img</div>
                            <div class='descripTam'>descrip</div>
                            <div class='temp'>temp</div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
            <div class='col-xl-4 col-md-11 col-xs-10 tiempo alturas margenes0'>
                
                <div class='col-12 margen'><p>Top 5 de las zonas más frías según tus búsquedas</p></div>
                   
                
                
                </div>
               
            </div>
        </div>
    </div>
    
  
@endsection
