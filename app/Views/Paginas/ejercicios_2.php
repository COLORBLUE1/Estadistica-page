<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans+Condensed:300|Raleway|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.icons8.com/arcade/64/graph.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estadistica_all.css">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100vh;
        }

        #izquierda {
            float: left;
            width: 20%;
            height: 100vh;
         
            
    background-color: #2c2c49;
  
    top: 0;
    border-radius: 0px 5px 5px 0px;

}
        

        #derecha {
            float: left;
            width: 80%;
            height: 100vh;
        }

        iframe {
            width: 100%;
            height: calc(100% - 40px); /* Ajusta según el espacio de padding en el div */
            border: none; /* Quita el borde del iframe si no es necesario */
        }
    </style>
    <title>Página Dividida con iframes</title>
</head>
<body>
    <div id="izquierda">
        <!-- Contenido de la parte izquierda -->
       
            <h1 class="tabla_title">Tabla de Contenido</h1>
            <br>
            <ul type=none>
                <li><a href="#titulo_pb">Probabilidad</a></li>
                <li><a href="#titulo_cv">Clasificación de variables</a></li>
                <li><a href="#titulo_dn">Distribución normal</a></li>
                <li><a href="#titulo_va">Variable aleatoria</a></li>
                <li><a href="#titulo_db">Distribución Binomial</a></li>
                <li><a href="#titulo_ie">Inferencia estadística</a></li>
                <li><a href="#titulo_tlc">Teorema Limite Central y Estimación</a></li>
                <li><a href="#titulo_ic">Intervalos de confianza</a></li>
            </ul>
        
    </div>
    <div id="derecha">
        <!-- Contenido de la parte derecha con iframe -->
        <iframe src="estadistica_2"></iframe>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/all.js"></script>
    <script src="assets/js/intervalo_cal.js"></script>
    <script src="assets/js/modales_(z).js"></script>
    <script src="assets/js/modales_(t).js"></script>
    <script src="assets/js/modales_(p).js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
                    AOS.init();
                </script>
 

</body>
</html>
