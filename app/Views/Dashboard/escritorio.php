<!--  
    Tarjeta 1

    {3 ejercicios y 1 de PVI
    Video tutorial explicativo}
    
    
    Tarjeta 2

    {Examen}

-->

<head>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans+Condensed:300|Raleway|Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.icons8.com/arcade/64/graph.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/escritorio_all.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATISTICAL STUDY</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body >
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

    <!-- Ventana emerjente version beta-->
    <div class="modal" id="modal">
        <div class="modal-content">
            <p>Esta es una versión beta, y no determina la calidad del producto final.</p>
        </div>
    </div>

    <section style="width: 100%;">
        <nav id='menu'>
            <input type='checkbox' />
            <label style="color:white">&#8801;<span style="color:white">Menu</span></label>
            <ul>
                <li><a href='/'>Inicio</a></li>
                <li><a href='#'>Sobre mi</a></li>
                <li><a href='#'>Categorías<font-size='1'>&#9660;</font-size></a>
                    <ul class='menus'>
                        <li><a href='#'>Categoría 1</a></li>
                        <li><a href='#'>Categoría 2</a></li>
                        <li><a href='#'>Categoría 3</a></li>
                    </ul>
                </li>
                <li><a href='#'>Contacto</a></li>
                <li style="margin-left: 5px; margin-right: 5px; margin-top:5px;"><a style="background-color: blue; width: 100px; height: 30px; border-radius: 10px; right: 15px;" href='#'>Acceder</a></li>
            </ul>
        </nav>
        <br><br>
        <br>

        <!-- Ventana emerjente "version beta"-->
        <script>
            window.onload = function() {
                // Desactivar el scroll
                document.body.style.overflow = 'hidden';

                var ventanaEmergente = document.getElementById("ventana-emergente");
                setTimeout(function() {
                    document.body.style.overflow = 'visible';
                    ventanaEmergente.style.display = "none";
                }, 3000); // La ventana emergente se cerrará automáticamente después de 5 segundos (5000 milisegundos)
            };

            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#scroll').fadeIn();
                    } else {
                        $('#scroll').fadeOut();
                    }
                });
                $('#scroll').click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600);
                    return false;
                });
            });
        </script>

        
        <style>
            .ventana-emergente {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                backdrop-filter: blur(10px);
                background-color: while;
                z-index: 9999;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .ventana-emergente-contenido {
                background-color: white;
                color: #333;
                padding: 40px;
                border-radius: 10px;
                border: 5px solid red;
            }
        </style>
        <div id="ventana-emergente" class="ventana-emergente">
            <div class="ventana-emergente-contenido">
                <p>Esta es una versión beta y no determina la calidad del producto final</p>
            </div>
        </div>
        <br>
        <br><br>

        <div style="text-align:center; Width:100%">
            <h3 class='display-4 relawayStandart text-light shadow-sm'>S T A T I S T I C A L - S T U D Y
            </h3>
            <br><br>
            <br><br>
        </div>
        </div>
        <h5 data-aos="zoom-in" class="instruc" style=" text-align:center; font-size:15px; ">
            Da click sobre las tarjetas, para ver su contenido</h5>
        <div data-aos="zoom-in-right" class="container">
            <div class="card">
                <div class="content">
                    <h2>01</h2>
                    <h3>Ejercicios y actividades</h3>
                    <p>
                        Indica cuáles variables son cualitativas y cuáles cuantitativas.</p>
                    <a href="carga_ejercicios">Ver ejercicios</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2>02</h2>
                    <h3>Examen</h3>
                    <p>¿Crees poder resolver este examen con eficacion y velosidad?.</p>
                    <a href="carga_examenes">Realizar examen</a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2>03</h2>
                    <h3>Herramientas</h3>
                    <p>¿Crees poder resolver este examen con eficacion y velosidad?.</p>
                    <a href="calculadoras">Ver herramientas</a>
                </div>
            </div>
        </div>
        <br><br>
        <br><br>
        <section class="tarjeta_sol" style="width: 650px; height: 750px;  border-top-right-radius:70px; opacity: 80%;
 border-bottom-right-radius:70px;">
            <div class="card_2" style="width: 18rem; height: 500px;" data-aos="zoom-in">
                <img src="https://www.goinn.com.co/Goinn/assets/img/HOMBRE1.png" class="card-img-top" alt="...">
                <div class="card-body" data-aos="zoom-out-right">
                    <!--Tarjeta maria-->
                    <h5 class="card-title">Camilo Sol.</h5>
                    <p class="card-text">Un texto de ejemplo rápido para colocal cerca del título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Un elemento</li>
                    <li class="list-group-item">Un segundo elemento</ /li>
                    <li class="list-group-item">Un tercer elemento</ /li>
                </ul>

            </div>

        </section>
        <br>

        <section class="cursos" style=" display: flex;
  justify-content: center;
  align-items: center; text-align: center;">
            <div data-aos="zoom-in" id="curso_id">
                <h3>¿Que quieres aprender hoy 😀?</h3>
                <br><br>
                <a href="#" target="_blank"><img src="https://previews.123rf.com/images/aprillrain/aprillrain2212/aprillrain221200612/196177803-imagen-de-caricatura-de-un-astronauta-sentado-en-una-luna-ilustraci%C3%B3n-de-alta-calidad.jpg" class='imgRedonda' /></a>
                <a href="#" target="_blank"><img src="https://previews.123rf.com/images/aprillrain/aprillrain2212/aprillrain221200612/196177803-imagen-de-caricatura-de-un-astronauta-sentado-en-una-luna-ilustraci%C3%B3n-de-alta-calidad.jpg" class='imgRedonda' /></a>
                <a href="#" target="_blank"><img src="https://previews.123rf.com/images/aprillrain/aprillrain2212/aprillrain221200612/196177803-imagen-de-caricatura-de-un-astronauta-sentado-en-una-luna-ilustraci%C3%B3n-de-alta-calidad.jpg" class='imgRedonda' /></a>
                <a href="#" target="_blank"><img src="https://previews.123rf.com/images/aprillrain/aprillrain2212/aprillrain221200612/196177803-imagen-de-caricatura-de-un-astronauta-sentado-en-una-luna-ilustraci%C3%B3n-de-alta-calidad.jpg" class='imgRedonda' /></a>
                <a href="#" target="_blank"><img src="https://previews.123rf.com/images/aprillrain/aprillrain2212/aprillrain221200612/196177803-imagen-de-caricatura-de-un-astronauta-sentado-en-una-luna-ilustraci%C3%B3n-de-alta-calidad.jpg" class='imgRedonda' /></a>
            </div>
        </section>

        <div class="container mt-4" data-aos="fade-up" data-aos-duration="3000" style="margin-top: 500px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicadores de carrusel -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Contenido de carrusel -->

                <div class="carousel-inner" style="margin-top: 500px;">
                    <div class="carousel-item active">
                        <img src="https://www.sidn.es/images/shutterstock_299892884_2.jpg" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.masscience.com/wp-content/uploads/2019/12/chart-4065756_1920-1080x675.jpg" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.cognodata.com/wp-content/uploads/2019/07/estadistica-descriptiva-e-inferencial.jpg" alt="Imagen 3">
                    </div>
                </div>
                <!-- Controles de carrusel -->
                <span class="carousel-control-prev-icon"></span>
                <span class="carousel-control-next-icon"></span>
            </div>
        </div>

        <br>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.6.1/vanilla-tilt.min.js"></script>
        <script>
            VanillaTilt.init(document.querySelectorAll(".card"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 1
            });
        </script>
        <script src="js/desplegable.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="js/show_search.js" type="text/javascript"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</body>
<br><br>
<br><br>
<footer style="backdrop-filter: blur(10px);
    background-color:black;  text-align:center; color:white;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 item" style="text-decoration: none;">
                <h3 style="color:whitesmoke">Services</h3>
                <ul>
                    <li><a target="_blank" href="https://www.instagram.com/camilo_abel1/">Web design</a></li>
                    <li><a target="_blank" href="#">Development</a></li>
                    <li><a target="_blank" href="https://www.000webhost.com/">Hosting</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <h3>About</h3>
                <ul>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-6 item text">
                <h3>STATISTICAL STUDY</h3>
                <p>Somos tu mejor obcion si lo que quieres es fortalecer los conocimientos frente a las estadisticas,
                    las estadisticas son un campo amplio
                    en el cual puedes aprender muchas cosas que pueden ofreserte
                    gran fortaleza en e sector empleo.</p>
            </div>
            <div class="bar">
                <br><br>
                <p>Abel Sol<br><b>@Derechos reservados ¡mi papacho!</b></p>
            </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/escritorio.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- iniciar libreria AOS -->
<script>
AOS.init();
</script>