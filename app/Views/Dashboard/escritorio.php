<!--  
    TArjeta 1

    {Historia 
    Teorema 
    Demostracin}
    
    Tarjeta 2

    {3 ejercicios y 1 de PVI
    Video tutorial explicativo}
    
    
    Tarjeta 3

    {Examen}

-->

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans+Condensed:300|Raleway|Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.icons8.com/arcade/64/graph.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OS-DATE</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="width: 100%; color:#00fdf9;" class="cuerpa">
    <section>
        <br>
        <br><br>
        <br><br>
        <div class='jumbotron' style="backdrop-filter: blur(10px);
    background-color:rgba(250, 250, 250, 0.2);  text-align:center; Width:90% ">
            <h3 class='display-4 relawayStandart text-light shadow-sm'>ESTADISTICA
            </h3>
        </div>
        </div>
        <h5 class="instruc" style=" 
 text-align:center;
 font-size:11px;">Da click sobre las tarjetas, para ver su contenido</h5>
        <div class="container">
            <div class="card">
                <div class="content">
                    <h2>01</h2>
                    <h3>Historia</h3>
                    <p> En 1666 Sir Isaac Newton (1642-1727), fue el primero en desarrollar métodos matemáticos para
                        resolver
                        problemas de esta índole. Inventó su propia versión del cálculo para explicar el movimiento de
                        los
                        planetas alrededor del Sol.</p>
                    <a href="carga_historia">Leer mas</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2>02</h2>
                    <h3>Ejercicios</h3>
                    <p>
                        El método sirve para encontrar soluciones parciales completas, no soluciones generales,
                        dependientes de un conjunto numerable de constantes arbitrarias, lo cual permite resolver
                        tanto problemas de valor inicial como problemas de frontera.</p>
                    <a href="carga_ejercicios">Ver ejercicios</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2>03</h2>
                    <h3>Examen</h3>
                    <p>Consideremos la ecuación y-y'=0, lo primero que debemos hacer es reescribir y' como un
                        cociente de diferenciales \frac{dy}{dx}, de esta forma, reescribimos la ecuación de la
                        siguiente maneras....</p>
                    <a href="carga_examenes">Realizar examen</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.6.1/vanilla-tilt.min.js"></script>
        <script>
            VanillaTilt.init(document.querySelectorAll(".card"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 1
            });
        </script>
</body>
<br><br>
<br><br>
<footer>
    <div>
        <br><br>
        <p class="credits">Abel Sol - Hugo Ledesma - Maria Ortiz<br><b>@Derechos reservados ¡mi papacho!</b></p>
    </div>
</footer>
<style>
    .credits {
        text-align: center;
    }

    /* Rules for sizing the icon. */
    .material-icons.md-18 {
        font-size: 18px;
    }

    .material-icons.md-24 {
        font-size: 24px;
    }

    .material-icons.md-36 {
        font-size: 36px;
    }

    .material-icons.md-48 {
        font-size: 48px;
    }

    /* Jumbotron */
    section .jumbotron {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    /* Rules for using icons as black on a light background. */
    .material-icons.md-dark {
        color: rgba(0, 0, 0, 0.54);
    }

    .material-icons.md-dark.md-inactive {
        color: rgba(0, 0, 0, 0.26);
    }

    /* Rules for using icons as white on a dark background. */
    .material-icons.md-light {
        color: rgba(255, 255, 255, 1);
    }

    .material-icons.md-light.md-inactive {
        color: rgba(255, 255, 255, 0.3);
    }

    .robotoStandart {
        font-family: 'Roboto', sans-serif;
    }

    .relawayStandart {
        font-family: 'Raleway', sans-serif;
    }

    .openSansCondensed {
        font-family: 'Open Sans Condensed', sans-serif;
    }

    .crimsonStandart {
        font-family: 'Crimson Text', serif;
    }


    #primary_nav_wrap {
        margin-top: 15px
    }

    #primary_nav_wrap ul {
        list-style: none;
        position: relative;
        float: left;
        margin: 0;
        padding: 0
    }

    #primary_nav_wrap ul a {

        display: block;
        color: white;
        text-decoration: none;
        font-weight: 700;
        font-size: 12px;
        line-height: 32px;
        padding: 0 15px;
        font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif
    }

    #primary_nav_wrap ul li {
        border-radius: 10px;
        position: relative;
        float: left;
        margin: 0;
        padding: 0
    }

    #primary_nav_wrap ul ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        border-radius: 5px;
        -webkit-backdrop-filter: blur(10px);
        /* Safari 9+ */
        backdrop-filter: blur(10px);
        /* Chrome and Opera */
        background-color: rgba(255, 255, 255, 0.3);
        padding: 0
    }

    #primary_nav_wrap ul ul li {
        float: none;
        width: 200px
    }

    #primary_nav_wrap ul ul a {
        line-height: 120%;
        padding: 10px 15px
    }

    #primary_nav_wrap ul ul ul {
        top: 0;
        left: 100%
    }

    #primary_nav_wrap ul li:hover>ul {
        display: block
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body::-webkit-scrollbar {
        width: 10px;
        /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
        background: #161623;
        /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
        backdrop-filter: blur(10px);
        /* Chrome and Opera */
        background-color: rgba(255, 255, 255, 0.3);
        /* color of the scroll thumb */
        border-radius: 20px;
        /* roundness of the scroll thumb */
        border: 3px solid #161623;
        /* creates padding around scroll thumb */
    }

    body {

        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #161623;
    }

    body::before {
        content: '';
        position: absolute;
        top: 30%;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(#f00, #f0f);
        clip-path: circle(10% at right 50%);
    }

    body::after {
        content: '';
        position: absolute;
        top: -100px;
        left: -80px;
        width: 100%;
        height: 100%;
        background: linear-gradient(#2196f3, #e91e63);
        clip-path: circle(10% at 10% 10%);
    }

    .container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1200px;
        flex-wrap: wrap;
        z-index: 1;
    }

    .container .card {
        position: relative;
        width: 280px;
        height: 400px;
        margin: 30px;
        box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.1);
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        border-top: 1px solid rgba(255, 255, 255, 0.5);
        border-left: 1px solid rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
    }

    .container .card .content {
        padding: 20px;
        text-align: center;
        transform: translateY(100px);
        opacity: 0;
        transition: 0.5s;
    }

    .container .card:hover .content {
        transform: translateY(0px);
        opacity: 1;
    }

    .container .card .content h2 {
        position: absolute;
        top: -60px;
        right: 30px;
        font-size: 8em;
        color: rgba(255, 255, 255, 0.05);
        pointer-events: none;
    }

    .container .card .content h3 {
        font-size: 1.8em;
        color: #fff;
        z-index: 1;
    }

    .container .card .content p {
        font-size: 1em;
        color: #fff;
        font-weight: 300;
    }

    .container .card .content a {
        position: relative;
        display: inline-block;
        padding: 8px 20px;
        margin-top: 15px;
        background: #fff;
        color: #000;
        border-radius: 20px;
        text-decoration: none;
        font-weight: 500;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

    }
</style>