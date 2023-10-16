<!--  
    Tarjeta 3

    {Examen}

-->

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans+Condensed:300|Raleway|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.icons8.com/arcade/64/graph.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="<?php echo base_url() . 'preguntas' ?>"></script>
    <!--
            
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░░░░▄▄▄▄▄▄▄░░░░░░░░░
░░░░░░░░░▄▀▀▀░░░░░░░▀▄░░░░░░░
░░░░░░░▄▀░░░░░░░░░░░░▀▄░░░░░░
░░░░░░▄▀░░░░░░░░░░▄▀▀▄▀▄░░░░░
░░░░▄▀░░░░░░░░░░▄▀░░██▄▀▄░░░░
░░░▄▀░░▄▀▀▀▄░░░░█░░░▀▀░█▀▄░░░
░░░█░░█▄▄░░░█░░░▀▄░░░░░▐░█░░░
░░▐▌░░█▀▀░░▄▀░░░░░▀▄▄▄▄▀░░█░░
░░▐▌░░█░░░▄▀░░░░░░░░░░░░░░█░░
░░▐▌░░░▀▀▀░░░░░░░░░░░░░░░░▐▌░
░░▐▌░░░░░░░░░░░░░░░▄░░░░░░▐▌░
░░▐▌░░░░░░░░░▄░░░░░█░░░░░░▐▌░
░░░█░░░░░░░░░▀█▄░░▄█░░░░░░▐▌░
░░░▐▌░░░░░░░░░░▀▀▀▀░░░░░░░▐▌░
░░░░█░░░░░░░░░░░░░░░░░░░░░█░░
░░░░▐▌▀▄░░░░░░░░░░░░░░░░░▐▌░░
░░░░░█░░▀░░░░░░░░░░░░░░░░▀░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 
-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOOLS</title>
    <link rel="stylesheet" href="styles.css">






</head>

<body class="cuerpa" style="color:white">
    <div class='jumbotron' style="backdrop-filter: blur(10px);
    background-color:rgba(250, 250, 250, 0.2); position:absolute">
        <h3 class='display-4 relawayStandart text-light shadow-sm'>HERAMIENTAS</h3>
    </div>
    <div data-aos="zoom-out-up" class="buttons" style="margin-top:30% !important;">
        <!-- Botones para abrir los modales -->
        <button type="button" class="btn btn-success" onclick="openModal(1)">Calcular intervalo de confianza (Z)</button>
        <button type="button" class="btn btn-success" onclick="openModal(2)">Calcular intervalo de confianza (t de Student)</button>
        <button type="button" class="btn btn-success" onclick="openModal(3)">Abrir Formulario 3</button>
        <button type="button" class="btn btn-success" onclick="openModal(4)">Abrir Formulario 4</button>
    </div>
    </div>
    <!-- Modales -->
    <div id="myModal1" class="modal" style="color:#000">
        <div class="modal-content">
            <span class="close" onclick="closeModal(1)">&times;</span>
            <h1>Calculadora de Intervalo de Confianza</h1>
            <form>
                <!-- Contenido del primer formulario -->
                <!-- <div>
                            <label for="mean">Media poblacional (μ):</label>
                            <input type="number" id="mean" step="0.01" required>
                            <div class="error" id="mean-error"></div>
                        </div>
                        <div>
                            <label for="stddev">Desviación estándar poblacional (σ):</label>
                            <input type="number" id="stddev" step="0.01" required>
                            <div class="error" id="stddev-error"></div>
                        </div>
                        <div>
                            <label for="sample-size">Tamaño de muestra (n):</label>
                            <input type="number" id="sample-size" required>
                            <div class="error" id="sample-size-error"></div>
                        </div>
                        <div>
                            <label for="confidence-level">Nivel de confianza (1-α):</label>
                            <input type="number" id="confidence-level" required>
                            <div class="error" id="confidence-level-error"></div>
                        </div>
                        <div>
                            <label for="z-value">Valor de z:</label>
                            <input type="number" id="z-value" step="0.01" required>
                            <div class="error" id="z-value-error"></div>
                        </div>
                        <br><br>
                        <div>
                            <h3>Intervalos de confianza</h3>
                            <p>Límite Superior (LS): <span id="upper-limit"></span></p>
                            <p>Límite Inferior (LI): <span id="lower-limit"></span></p>
                        </div>

                        <script>
                            // Obtén referencias a los elementos
                            const meanInput = document.getElementById('mean');
                            const stddevInput = document.getElementById('stddev');
                            const sampleSizeInput = document.getElementById('sample-size');
                            const confidenceLevelInput = document.getElementById('confidence-level');
                            const zValueInput = document.getElementById('z-value');
                            const lowerLimitSpan = document.getElementById('lower-limit');
                            const upperLimitSpan = document.getElementById('upper-limit');

                            // Agrega un detector de eventos 'input' a cada input
                            meanInput.addEventListener('input', validateInputs);
                            stddevInput.addEventListener('input', validateInputs);
                            sampleSizeInput.addEventListener('input', validateInputs);
                            confidenceLevelInput.addEventListener('input', validateInputs);
                            zValueInput.addEventListener('input', validateInputs);

                            function validateInputs() {
                                validateInput(meanInput, 'mean-error');
                                validateInput(stddevInput, 'stddev-error');
                                validateInput(sampleSizeInput, 'sample-size-error');
                                validateInput(confidenceLevelInput, 'confidence-level-error');
                                validateInput(zValueInput, 'z-value-error');

                                if (meanInput.validity.valid && stddevInput.validity.valid && sampleSizeInput.validity.valid && confidenceLevelInput.validity.valid && zValueInput.validity.valid) {
                                    calculateCI();
                                } else {
                                    lowerLimitSpan.innerText = '';
                                    upperLimitSpan.innerText = '';
                                }
                            }

                            function validateInput(input, errorId) {
                                const errorElement = document.getElementById(errorId);
                                if (input.validity.valueMissing) {
                                    input.setCustomValidity('Este campo es requerido.');
                                    errorElement.innerText = 'Este campo es requerido.';
                                    errorElement.classList.add('error-text');
                                } else {
                                    input.setCustomValidity('');
                                    errorElement.innerText = '';
                                    errorElement.classList.remove('error-text');
                                }
                            }

                            function calculateCI() {
                                const mean = parseFloat(meanInput.value);
                                const stddev = parseFloat(stddevInput.value);
                                const sampleSize = parseFloat(sampleSizeInput.value);
                                const confidenceLevel = parseFloat(confidenceLevelInput.value);
                                const z = parseFloat(zValueInput.value);

                                const marginOfError = z * (stddev / Math.sqrt(sampleSize));

                                const lowerLimit = mean - marginOfError;
                                const upperLimit = mean + marginOfError;

                                lowerLimitSpan.innerText = `LI: ${lowerLimit}`;
                                upperLimitSpan.innerText = `LS: ${upperLimit}`;
                            }
                        </script>  -->
            </form>
        </div>
    </div>
    <div id="myModal2" class="modal" style="color:#000">
        <div class="modal-content">
            <span class="close" onclick="closeModal(2)">&times;</span>
            <form>
                <!-- Contenido del segundo formulario -->
                <h1>Calculadora de Intervalo de Confianza (t de Student)</h1>
                <div>
                    <label for="mean">Media poblacional (μ):</label>
                    <input type="number" id="mean" step="0.01" required>
                    <div class="error" id="mean-error"></div>
                </div>
                <div>
                    <label for="stddev">Desviación estándar poblacional (σ):</label>
                    <input type="number" id="stddev" step="0.01" required>
                    <div class="error" id="stddev-error"></div>
                </div>
                <div>
                    <label for="sample-size">Tamaño de muestra (n):</label>
                    <input type="number" id="sample-size" required>
                    <div class="error" id="sample-size-error"></div>
                </div>
                <div>
                    <label for="confidence-level">Nivel de confianza (1-α):</label>
                    <input type="number" id="confidence-level" step="0.001" required>
                    <div class="error" id="confidence-level-error"></div>
                </div>
                <div>
                    <label for="z-value">Valor de t:</label>
                    <input type="number" id="z-value" step="0.000001" required>
                    <div class="error" id="z-value-error"></div>
                </div>
                <br><br>
                <div>
                    <h3>Intervalos de confianza</h3>
                    <p>Límite Superior (LS): <span id="upper-limit"></span></p>
                    <p>Límite Inferior (LI): <span id="lower-limit"></span></p>
                </div>

                <script>
                    // Obtén referencias a los elementos
                    const meanInput = document.getElementById('mean');
                    const stddevInput = document.getElementById('stddev');
                    const sampleSizeInput = document.getElementById('sample-size');
                    const confidenceLevelInput = document.getElementById('confidence-level');
                    const zValueInput = document.getElementById('z-value');
                    const lowerLimitSpan = document.getElementById('lower-limit');
                    const upperLimitSpan = document.getElementById('upper-limit');

                    // Agrega un detector de eventos 'input' a cada input
                    meanInput.addEventListener('input', validateInputs);
                    stddevInput.addEventListener('input', validateInputs);
                    sampleSizeInput.addEventListener('input', validateInputs);
                    confidenceLevelInput.addEventListener('input', validateInputs);
                    zValueInput.addEventListener('input', validateInputs);

                    function validateInputs() {
                        validateInput(meanInput, 'mean-error');
                        validateInput(stddevInput, 'stddev-error');
                        validateInput(sampleSizeInput, 'sample-size-error');
                        validateInput(confidenceLevelInput, 'confidence-level-error');
                        validateInput(zValueInput, 'z-value-error');

                        if (meanInput.validity.valid && stddevInput.validity.valid && sampleSizeInput.validity.valid && confidenceLevelInput.validity.valid && zValueInput.validity.valid) {
                            calculateCI();
                        } else {
                            lowerLimitSpan.innerText = '';
                            upperLimitSpan.innerText = '';
                        }
                    }

                    function validateInput(input, errorId) {
                        const errorElement = document.getElementById(errorId);
                        if (input.validity.valueMissing) {
                            input.setCustomValidity('Este campo es requerido.');
                            errorElement.innerText = 'Este campo es requerido.';
                            errorElement.classList.add('error-text');
                        } else {
                            input.setCustomValidity('');
                            errorElement.innerText = '';
                            errorElement.classList.remove('error-text');
                        }
                    }

                    function calculateCI() {
                        const mean = parseFloat(meanInput.value);
                        const stddev = parseFloat(stddevInput.value);
                        const sampleSize = parseFloat(sampleSizeInput.value);
                        const confidenceLevel = parseFloat(confidenceLevelInput.value);
                        const z = parseFloat(zValueInput.value);

                        const marginOfError = z * (stddev / Math.sqrt(sampleSize));

                        const lowerLimit = mean - marginOfError;
                        const upperLimit = mean + marginOfError;

                        lowerLimitSpan.innerText = `LI: ${lowerLimit}`;
                        upperLimitSpan.innerText = `LS: ${upperLimit}`;
                    }
                </script>
            </form>
        </div>
    </div>
    <div id="myModal3" class="modal" style="color:#000">
        <div class="modal-content">
            <span class="close" onclick="closeModal(3)">&times;</span>
            <h2>Completa el formulario 3</h2>
            <form>
                <!-- Contenido del tercer formulario -->
            </form>
        </div>
    </div>
    <div id="myModal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal(4)">&times;</span>
            <h2>Completa el formulario 4</h2>
            <form>
                <!-- Contenido del cuarto formulario -->
            </form>
        </div>
    </div>
    <div id="myModal5" class="modal" style="color:#000">
        <div class="modal-content">
            <span class="close" onclick="closeModal(5)">&times;</span>
            <h2>Completa el formulario 5</h2>
            <form>
                <!-- Contenido del quinto formulario -->
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        function openModal(modalNumber) {
            document.getElementById('myModal' + modalNumber).style.display = 'block';
        }

        function closeModal(modalNumber) {
            document.getElementById('myModal' + modalNumber).style.display = 'none';
        }
    </script>
</body>

</html>
<br>

</body>
<br><br>

<style>
    .error-text {
        width: 19%;
        background-color: ff0000;
        border-radius: 5px;
        color: white;
        text-align: center;
    }

    .buttons {
        display: flex;
        gap: 10px;
        /* Espacio entre los botones */
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

    .modal {
        display: none;
        position: fixed;
        background-color: rgba(0, 0, 0, 0.5);
        /* Fondo semitransparente */
        z-index: 100;
        overflow: auto;
        /* Agrega scroll cuando sea necesario */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    /* Estilos para el contenido del modal */
    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        width: 50%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-height: 80%;
        /* Altura máxima del modal */
        overflow-y: auto;
        /* Agrega scroll en el contenido si es necesario */
    }

    /* Estilos para el botón de cerrar */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    /* Estilos para el botón de cerrar cuando se pasa el mouse sobre él */
    .close:hover {
        color: black;
        text-decoration: none;
        cursor: pointer;
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

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #161623;
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

    /* PREGUNTAS CSS */
    @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap');

    * {
        box-sizing: border-box;
        font-family: 'Mochiy Pop One';
    }

    h1 {
        width: fit-content;
        text-align: center;
        margin: 40px auto;
        border-radius: 60px;
        padding: 20px 30px;
    }

    /* PANTALLA INICIO */
    #pantalla-inicial {

        display: block;
        text-align: center;
        font-size: 30px;
    }

    #pantalla-inicial {
        margin: 60px 0;
    }

    .btn {
        border: none;
        background: #580078;
        color: #fff;
        padding: 10px 20px;
        border-radius: 50px;
        cursor: pointer;
        transition: .5s;
    }

    .btn:hover {
        transform: scale(1.1);
    }

    /* PANTALLA juego */
    #pantalla-juego {
        display: none;
    }

    .pantalla-juego {
        max-width: 800px;
        margin: 50px auto;
        text-align: center;
    }

    .pantalla-juego img {
        max-width: 400px;
        width: 100%;
    }

    .opciones {
        max-width: 400px;
        margin: auto;
    }

    .opcion {
        display: flex;
        position: relative;
        align-items: center;
        max-width: 400px;
        margin: 30px auto;
        cursor: pointer;
    }

    .opcion .letra {
        background-color: #2196f3;
        width: 50px;
        height: 50px;
        font-size: 30px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        color: #fff;
        text-align: center;
        border-radius: 50%;
        line-height: 35px;
        border: 5px solid #fff;
        position: relative;
    }

    .opcion .nombre {
        background: #fff;
        width: 100%;
        font-size: 25px;
        position: absolute;
        margin-left: 30px;
        z-index: -2;
        color: #000;
        font-family: Arial, Helvetica, sans-serif;
        border-radius: 0 20px 20px 0;
        padding: 7px 0 7px 30px;
    }

    /* clases que se aplicará cuando haya acertada la opcion  */
    .opcion .nombreAcertada {
        background-color: greenyellow;
        color: white;
    }

    .opcion .letraAcertada {
        background-color: greenyellow;
        color: white;
    }

    /* clases que se aplicaran cuando se equivoque en la opcion elegida */
    .opcion .nombreNoAcertada {
        background-color: red;
        color: white;
    }

    .opcion .letraNoAcertada {
        background-color: red;
        color: white;
    }

    /* PANTALLA final */
    #pantalla-final {
        display: none;
        text-align: center;
    }

    #pantalla-final #numCorrectas {
        background-color: greenyellow;
        display: inline-block;
        width: 50px;
        color: black;
        height: 50px;
        border-radius: 50%;
        border: 5px solid #fff;
    }

    #pantalla-final #numIncorrectas {
        color: black;
        background-color: red;
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 5px solid #fff;
    }
</style>