@extends('plantilla')
@section('seccion')
    
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
                <div class='row centrar'>
                    <form>
                            <div class='col-12'>
                                <input class='tamano' id='codigoPostal'  type='number' name='codigoPostal' placeholder="Introduce el código Postal">
                            </div>
                            <div id='boton' class='col-12'>
                                <input id='consulta' class='tamano consultar' type='button' value='Consultar'>
                               
                            </div>
                            <img class='posicion' src='../resources/img/shape.png'>
                    </form>
                </div>
                <div class='row centrar'>
                    <div class='col-6 lluvia'>
                        <p>¡Que la lluvia no te pare!</p>
                    </div>
                </div>
            </div>
        </div>
        
@endsection 