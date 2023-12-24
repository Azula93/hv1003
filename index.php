
<?php
    // con este codigo se enlazan los datos de las paginas mencionadas 👇
    require_once("c://wamp64/www/login/view/head/header.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HV 1003</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    
    <div class="nabar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.html">pag 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pag2.html">pag 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pag3.html">pag 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pag4.html">pag 4</a>
            </li>
    </div>
    </ul><br>
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-sm-7">
            </div>
            <div class="col-sm-5 encabezado">
                <h1>HOJA DE VIDA</h1>
                <P>PARA SOLICITUD DE EMPLEO</P>
            </div>
        </div>
    </div><br><br>
    <div class="container">
        <form class=" row g-3 primer">
            <div id="fecha-container" class="col-md-3 prueba1">
                <label for="fecha-input" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha-input">
            </div>
            <div class="col-md-6 prueba6">
                <label for="input" class="form-label">Empleo o cargo en el que está interesado</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="col-md-3 prueba3">
                <label for="input" class="form-label">Código cargo</label>
                <input type="text" class="form-control" id="input">
            </div>
        </form>
    </div>
    <br>
    <div class="container">

        <div class="row segundo">
            <div class="col-sm-8 ">
                <h3>l. INFORMACIÓN GENERAL</h3>
            </div>
            <div class="col-sm-4">
                <p>(*) Respuesta opcional</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <form class=" row g-3 primer">
            <div class="row">
                <div class="col-md-5 prueba5">
                    <label for="input" class="form-label">Apellido(s) del aspirante</label>
                    <input type="text" class="form-control" id="input">
                    <hr>
                    <label for="input" class="form-label">Dirección domicilio / Barrio</label>
                    <input type="text" class="form-control" id="input">
                    <hr>
                    <label for="input" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="input">
                    <hr>
                    <label for="input" class="form-label">Correo electrónico</label>
                    <input type="text" class="form-control" id="input">

                </div>
                <div class="col-md-3 prueba4">
                    <label for="input" class="form-label">Nombre(s) del aspirante</label>
                    <input type="text" class="form-control" id="input">
                    <hr>
                    <label for="input" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="input">
                    <hr>
                    <label for="input" class="form-label">No. Celular</label>
                    <input type="text" class="form-control" id="input">
                    <hr>
                    <label for="input" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="input">

                </div>
                <div class="foto col-md-4 ">
                    <img src="img/foto-hv.png" width="300px" alt="">
                </div>

                <div id="fecha-container" class="col-md-5 prueba2">
                    <label for="input" class="form-label">Profesión, ocupación u oficio</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-3 prueba6">
                    <label for="input" class="form-label">(*) Estado civil</label>
                    <input type="text" class="form-control" id="input">
                </div>
                <div class="col-md-4 prueba3">
                    <label for="input" class="form-label">Código cargo</label>
                    <input type="text" class="form-control" id="input">

                </div>
            </div>
        </form>
    </div>
    <br>

    <div class="container">
        <div class="row segundo ">
            <div class="col-sm-7 ">
                <h3>DOCUMENTACION</h3>
            </div>
            <div class="col-sm-5">
                <p>(**) Respuesta opcional</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container prueba7 ">
        <form class=" row g-3 primer ">
            <div class="col-md-2 ">
                <label for="cedula" class="form-label">Cedula de Ciudadania</label>
                <input class="form-check-input" type="checkbox" id="cedula" value="" aria-label="...">
                <label for="cedula" class="form-label">Extranjeria</label>
                <input class="form-check-input" type="checkbox" id="cedula" value="" aria-label="...">
            </div>
            <div class="col-md-3 p7">
                <label for="numero">N.</label>
                <input type="text" class="linea" id="input">
                <label for="numero">expedida en:</label>
                <input type="text" class="linea" id="input">
            </div>
            <div class="col-md-4 ">
                <label for="cedula" class="">(**) Libreta militar Nº</label>
                <input class="linea" type="text" id="imput" value="" aria-label="...">
                <label for="cedula" class="">Distrito N.</label>
                <input class="linea" type="text" id="imput" value="" aria-label="...">
            </div>
            <div class="col-md-2 ">
                <label for="cedula" class="form-label">Primera Clase</label>
                <input class="form-check-input" type="checkbox" id="cedula" value="" aria-label="...">
                <label for="cedula" class="form-label">Segunda clase</label>
                <input class="form-check-input" type="checkbox" id="cedula" value="" aria-label="...">
            </div>
            <div id="fecha-container" class="col-md-3 prueba8-1">
                <label for="input" class="form-label">Tarjeta profesional Nº</label>
                <input type="text" class="form-control " id="input">
            </div>
            <div class="  col-md-3 prueba8-2">
                <label for="input" class=" row form-label ">.   ¿Tiene vehículo?</label>
                si <input class=" form-check-input" type="checkbox" id="si" value="" aria-label="...">
                no <input class=" form-check-input" type="checkbox" id="no" value="" aria-label="...">
            </div>
            <div id="fecha-container" class="col-md-3 prueba8-3 ">
                <label for="input" class="form-label">Licencia de conducción Nº</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="col-md-3 prueba8-4">
                <label for="input" class="form-label ">Categoría</label>
                <input type="text" class="form-control" id="input">
            </div>
    </div>
    </form>
    </div>

    <br>
    <div class="container col-12 ">
        <div class="row segundo">
            <div class="col-sm-5 ">
                <h3>II. INFORMACIÓN PERSONAL</h3>
            </div>

        </div>
    </div>
    <br>
    <div class="container prueba7">
        <form class=" row g-3 primer ">
            <div class=" col-md-3 pbordes">
                <label for="input" class="row form-label">¿Está trabajando actualmente?</label>
                si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">

            </div>
            <div class="col-md-4 pbordes1">
                <label for="input" class="form-label">¿En qué empresa?</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="col-md-2 pbordes ">
                <label for=""> Empleado <input class="form-check-input" type="checkbox" id="si" value=""
                        aria-label="..."></label>

                <label for=""> Independiente <input class="form-check-input" type="checkbox" id="no" value=""
                        aria-label="..."></label>

            </div>
            <div class="col-md-3 pbordes1 ">
                <label for="input" class="form-label">Nombre(s) del aspirante</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class=" col-md-2 pbordes ">
                <label for="input" class="row form-label">¿Trabajó antes en
                    esta empresa?</label>
                si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">

            </div>
            <div class=" col-md-2 pbordes">
                <label for="input" class="row form-label text-center">¿Solicitó empleo antes en
                    esta empresa?</label>
                si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">

            </div>
            <div id="fecha-container" class="col-md-3 pbordes ">
                <label for="fecha-input" class="form-label ">Fecha</label>
                <input type="date" class="form-control" id="fecha-input">
            </div>
            <div class=" col-md-2 pbordes1">
                <label for="input" class="row form-label text-center">¿Lo recomienda alguien
                    de esta empresa?</label>
                si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">

            </div>
            <div class="col-md-3  pbordes1">
                <label for="cedula" class="">Nombre</label>
                <input class="linea" type="text" id="imput" value="" aria-label="...">
                <label for="cedula" class="">Dependencia</label>
                <input class="linea" type="text" id="imput" value="" aria-label="...">
            </div>

            <div class=" col-md-2 pbordes1">
                <label for="input" class=" form-label">¿Tiene parientes
                    que trabajan en
                    esta empresa?</label>

            </div>

            <div class="row col-md-1 pbordes1">
                <label for="input" class=" form-label"></label>
                <div> si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                </div>
                <div>
                    no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                </div>
            </div>
            <div class=" row col-md-3 pbordes1">
                <label for="cedula" class="">Nombre</label>
                <input class="linea" type="text" id="imput" value="" aria-label="...">
                <label for="cedula" class="">Dependencia</label>
                <input class="linea" type="text" id="imput" value="" aria-label="...">
            </div>

            <div class=" col-md-6  bbordes">
                <label for="input" class=" form-label ">¿Cómo tuvo conocimiento de la existencia de la vacante?</label>
               <div> Anuncio <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                amigo <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                </div>
                <div>Por medio de agencia <input class=" form-check-input" type="checkbox" id="si" value="" aria-label="...">
                 otro <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                <label for="cedula" class="">cual</label>
                <input class="linea" type="text" id="imput" value="" aria-label="...">
                </div>
                
            </div>
           
            <div class="small col-md-5 pbordes ">
                <label for="input" class="form-label">¿En qué ciudad o población ha vivido la mayor parte de su vida?</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="small col-md-4 pbordes ">
                <label for="input" class="form-label">¿En qué ciudades o regiones del país ha trabajado?</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="col-md-2 pbordes1 ">
                <label for="input" class="small form-label">¿Aceptaría trabajar en una ciudad o
                sitio distinto al inicialmente contratado</label>
            </div>
            <div class="row col-md-1 pbordes1">
                <label for="input" class=" form-label"></label>
                <div> si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                </div>
                <div>
                    no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                </div>
            </div>
            <div class=" col-md-3 pbordes">
                
                <div>Vive en casa :
                    ¿Familiar? <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                </div>
                <div>¿Propia? <input class=" form-check-input" type="checkbox" id="si" value="" aria-label="...">
                    ¿Alquilada? <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                    
                </div>
            
            </div>
            <div class="small col-md-4 pbordes ">
                <label for="input" class="form-label">Nombre del arrendador</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="small col-md-2 pbordes ">
                <label for="input" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="small col-md-3 pbordes1 ">
                <label for="input" class="form-label">¿Hace cuánto tiempo reside en este lugar?</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class=" col-md-2 pbordes1">
                <label for="input" class=" form-label">¿Actualmente tiene algún
                ingreso adicional?</label>
            
            </div>
            
            <div class="row col-md-1 pbordes1">
                <label for="input" class=" form-label"></label>
                <div> si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                </div>
                <div>
                    no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                </div>
            </div>
            <div class=" col-md-5 pbordes ">
                <label for="input" class="form-label">Descríbalo e indique su valor mensual</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class="  col-md-4 pbordes1">
                <div><label for="input" class="small row form-label text-center">. ¿Cuánto suman sus obligaciones económicas mensuales?</label>
                </div>
            <label for="cedula" class="">$</label>
            <input class="" type="text" id="imput" value="" aria-label="...">
            </div>

            <div class=" col-md-8 pbordes ">
                <label for="input" class="form-label">¿Por qué conceptos?</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class=" col-md-4 pbordes1">
                <div><label for="input" class="row form-label">. ¿Cuánto es su aspiración salarial</label>
                </div>
                <label for="cedula" class="">$</label>
                <input class="" type="text" id="imput" value="" aria-label="...">
            </div>
            <div class=" col-md-5 pbordes ">
                <label for="input" class="form-label">¿Cuál(es) es(son) su(s) principal(es) afición(es)?</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class=" col-md-2 pbordes1">
                <label for="input" class="row form-label">. ¿Practica algún deporte?</label>
                si <input class="form-check-input" type="checkbox" id="si" value="" aria-label="...">
                no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
            
            </div>
            <div class=" col-md-5 pbordes1 ">
                <label for="input" class="form-label">¿Cuál(es)?</label>
                <input type="text" class="form-control" id="input">
            </div>
            <div class=" col-md-12 pbordes1">
                <label for="input" class=" form-label">¿Alguna vez ha obtenido distinciones o reconocimientos por su desempeño en actividades deportivas, culturales, sociales,
                etc.?</label>
                <div>si <input class=" form-check-input" type="checkbox" id="si" value="" aria-label="...">
                    no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                    <label for="cedula" class="">¿Cuál(es)?</label>
                    <input class="linea" type="text" id="imput" value="" aria-label="...">
                </div>
            
            </div>
            <div class=" col-md-12 ">
                <label for="input" class=" form-label">¿Pertenece a algún tipo de asociación comunitaria, deportiva, cultural, etc.?</label>
                <div>si <input class=" form-check-input" type="checkbox" id="si" value="" aria-label="...">
                    no <input class="form-check-input" type="checkbox" id="no" value="" aria-label="...">
                    <label for="cedula" class="">¿Cuál(es)?</label>
                    <input class="linea" type="text" id="imput" value="" aria-label="...">
                </div>
            
            </div>
        </form>
    </div>

    </div>
    <br>
    <div class="container">
    
        <div class="row segundo">
            <div class="col-sm-2 ">
                <h3>OBJETIVO</h3>
            </div>
            <div class="col-sm-10">
                <p>Mencione brevemente que expectativas tiene a nivel laboral, educativo y personal e indique como planea hacerlas
                realidad.</p>
            </div><div class=" col-md-12 ">
            <input class="form-control" type="text" id="imput" value="" aria-label="...">
        </div>
        <div class=" col-md-12 ">
            <input class="form-control" type="text" id="imput" value="" aria-label="...">
        </div>
        <div class=" col-md-12 ">
            <input class="form-control" type="text" id="imput" value="" aria-label="...">
        </div>
        </div>
        
        
    </div>
    <br>
    <br>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="index.js"></script>
</body>

</html>