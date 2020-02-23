@extends('plantilla')
@section('seccion')
    
       
                <div class='row centrar'>
                    <form method=GET action={{'temperaturas'}}>
                             <div class='col-12'>
                                <input class='tamano' id='Postal'  type='number' name='codigoPostal' placeholder="Introduce el código Postal">
                            </div>
                            <div id='boton' class='col-12'>
                                <input id='consulta' class='tamano consultar' type='submit' value='Consultar'>  
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