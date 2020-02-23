
// if(<?=$codigoPostal?>!=null){
// var codigoPostal=parseInt(<?=$codigoPostal?>);
// 

// }
var codigoPostal={{$codigoPostal}};
console.log(codigoPostal)
llamadaApi(codigoPostal);
var main;
var nombre;
var wind;
var coord;
var temperatura;

document.getElementById('lupaBuscador').addEventListener('click',Api)

function Api(){
   
    var codigo=document.getElementById('codigoBusqueda').value
    llamadaApi(codigo)
    
}

function llamadaApi(codigoPostal){
    
   
    //if(codigoPostal.length==4){
        var weatherURL = "http://api.openweathermap.org/data/2.5/weather?zip=0"+codigoPostal+",es&appid=1ebe8fb6c5d2654d9ceb6e243540f115&lang= es"

    //}else{
    //var weatherURL = "http://api.openweathermap.org/data/2.5/weather?zip="+codigoPostal+",es&appid=1ebe8fb6c5d2654d9ceb6e243540f115&lang= es"

    //}
     fetch(weatherURL)
                    .then(function(respuesta){
                        if(respuesta.ok){
                            return respuesta.json();
                        }else{
                            throw "error en la peticion";
                        }                    
                    })
                    .then(function(datos){
                        console.log(datos)
                       //console.log(datos.weather.description)
                       tiempo=datos.weather
                       
                        main = datos.main;
                        nombre=datos.name
                        wind = datos.wind;
                        coord = datos.coord;
                        temperatura=parseInt(eval(main.temp)-273);
                        tiempo=tiempo[0];
                        tiempo=tiempo['main']
                      
                            switch(tiempo){
                                case 'Clouds':
                                    icono="<i class='fas fa-cloud'></i>";
                                    descripcion='Nubes'
                                    break;
                                case 'Rain':
                                    icono="<i class='fas fa-tint'></i>";
                                    descripcion='Lluvia'
                                    break;
                                case 'Clear':
                                    icono="<i class='fas fa-sun'></i>";
                                    descripcion='Despejado'
                                    break;
                                case 'Snow':
                                    icono="<i class='fas fa-snowflake'></i>";
                                    descripcion='Nieve'
                                    break;
                            }
                        document.getElementById('descripTiempo').innerHTML=descripcion
                        document.getElementById('temp').innerHTML=temperatura+"º";
                        document.getElementById('icono').innerHTML=icono;
                        document.getElementById('icono').classList.add('fa-4x')
                        document.getElementById('codPost').innerHTML=codigoPostal;
                        document.getElementById('ciudad').innerHTML=datos.name;
                        document.getElementById('tempHoy').innerHTML=temperatura;
                        document.getElementById('iconoHoy').classList.add('fa-2x')
                        document.getElementById('descripTiempoHoy').innerHTML=descripcion
                        document.getElementById('iconoHoy').innerHTML=icono;
                                        
                      
                        var datos= new FormData;
                            datos.append('nombre',nombre)
                            datos.append('temperatura',temperatura)
                            datos.append('main',main)
                            datos.append('wind',wind)
                            datos.append('icono',icono)
                            datos.append('codigoPostal',codigoPostal)
                            
                            fetch('guardarDatos.php',{
                                method:'POST',
                                body:datos
                            })

                            .then(function(respuesta){
                                if(respuesta.ok){
                                    return respuesta.text()
                                }else {
                                    throw "error en la peticion"
                                }
                            })
                            .then(function(datos){
                               
                            })
                        .catch(function(error){
                            alert(error)
                        })
                
                    })

                    .catch(function(error){
                        alert(error)
                    })
                   

})
}
          // llamadaApiHora(codigoPostal)
function llamadaApiHora(codigoPostal){
    
    codigoPostal=codigoPostal.toString()
    if(codigoPostal.length==4){
        var weatherURL ="https://samples.openweathermap.org/data/2.5/forecast/hourly?zip=0"+codigoPostal+"&appid=e7aad011f924cc369b24b3ab685b021a"

    }else{
    var weatherURL = "https://samples.openweathermap.org/data/2.5/forecast/hourly?zip="+codigoPostal+"&appid=e7aad011f924cc369b24b3ab685b021a"
                     
    }
     fetch(weatherURL)
                    .then(function(respuesta){
                        if(respuesta.ok){
                            return respuesta.json();
                        }else{
                            throw "error en la peticion";
                        }                    
                    })
                    .then(function(datos){
                        console.log(datos)
                    })

                    .catch(function(error){
                        alert(error)
                    })
                   

} 
             