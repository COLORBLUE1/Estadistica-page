<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans+Condensed:300|Raleway|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.icons8.com/arcade/64/graph.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <!--

    Temas de la pagina orden:

            Probabilidad
            Clasificación de variables
            Distribución normal
            Variable aleatoria
            Distribución Binomial
            inferencia estadística
            Teorema Limite Central y Estimación
            intervalos de confianza
 
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOOLS</title>

</head>

<body>
    <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="title" style="text-align: center;  margin-top:100px; ">
        <h3 class='display-4 relawayStandart text-light shadow-sm'> Estadistica 2</h3>
    </div>
    <section class="cont_inicial">
        <p data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0" class="intro">Bienvenido a nuestra plataforma de herramientas de cálculo y teoría! Aquí encontrarás una colección de herramientas útiles para realizar una amplia variedad de cálculos en diversas áreas, así como una sólida base teórica para comprender los principios subyacentes. Ya sea que seas un estudiante, un profesional, o simplemente alguien interesado en explorar
            conceptos matemáticos y científicos, nuestra plataforma está diseñada para ayudarte a resolver
            problemas, realizar análisis y aprender más sobre los fundamentos que respaldan estas herramientas.</p>
        <br>
        <br>
        <div class="content_indice">
            <h1>Tabla de Contenido</h1>
            <br>
            <ul class="content_indice" type=none>
                <li><a href="#titulo_pb">Probabilidad</a></li>
                <li><a href="#section2">Sección 2</a></li>
                <li><a href="#titulo_ic">intervalos de confianza</a></li>
            </ul>
        </div>
        <br>

        <br><br>
        <!-- Modales -->
        <div id="myModal1" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal(1)">&times;</span>
                <form>
                    <!-- Contenido del primer formulario -->
                    <br>
                    <h1>Calculadora de Intervalo de Confianza (Z)</h1>
                    <div>
                        <br>
                        <div class="error-message" id="mean-error"></div>
                        <br>
                        <label for="mean">Media poblacional (μ):</label>
                        <input type="number" id="mean" step="0.01" required>
                    </div>
                    <br>
                    <div>
                        <br>
                        <div class="error-message" id="stddev-error"></div>
                        <br>
                        <label for="stddev">Desviación estándar poblacional (σ or s):</label>
                        <input type="number" id="stddev" step="0.01" required>
                    </div>
                    <br>
                    <div>
                        <br>
                        <div class="error-message" id="sample-size-error"></div>
                        <br>
                        <label for="sample-size">Tamaño de muestra (n):</label>
                        <input type="number" id="sample-size" required>
                    </div>
                    <br>
                    <div>
                        <br>
                        <div class="error-message" id="confidence-level-error"></div>
                        <br>
                        <label for="confidence-level">Nivel de confianza (1-α):</label>
                        <input type="number" id="confidence-level" required>
                    </div>
                    <br>
                    <div>
                        <br>
                        <div class="error-message" id="z-value-error"></div>
                        <br>
                        <label for="z-value">Valor de z:</label>
                        <input type="number" id="z-value" step="0.0001" required>
                    </div>
                    <br><br>
                    <div>
                        <img class="modal-content" id="modalImage" src="http://drive.google.com/uc?export=view&id=" alt="Imagen">
                        <h2>Intervalos de confianza</h2>
                        <p>Intervalo Superior (LS): <span id="upper-limit"></span></p>
                        <p>Intervalo Inferior (LI): <span id="lower-limit"></span></p>
                        <h2>Interoretacion corta:</h2>
                        <span id="interpre"></span>
                    </div>

                    <script>
                        // Obtén referencias a los elementos
                        const meanInput = document.getElementById('mean');
                        const stddevInput = document.getElementById('stddev');
                        const sam pleSizeInput = document.getElementById('sample-size');
                        const confidenceLevelInput = document.getElementById('confidence-level');
                        const zValueInput = document.getElementById('z-value');
                        const lowLimitSpan = document.getElementById('lower-limit');
                        const upLimitSpan = document.getElementById('upper-limit');
                        const interpre = document.getElementById('interpre');
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
                                lowLimitSpan.innerText = '';
                                upLimitSpan.innerText = '';
                            }
                        }

                        function validateInput(input, errorId) {
                            const errorElement = document.getElementById(errorId);
                            if (input.validity.valueMissing) {
                                input.setCustomValidity('Este campo es requerido ⬇️. ');
                                errorElement.innerText = 'Este campo es requerido ⬇️.';
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

                            const lowLimit = (mean - marginOfError).toFixed(2);
                            const upLimit = (mean + marginOfError).toFixed(2);

                            lowLimitSpan.innerText = `LI: ${lowLimit}`;
                            upLimitSpan.innerText = `LS: ${upLimit}`;
                            var string = "Tenemos una seguridad del " + confidenceLevel + "% " + " para este caso, nuestros intervalos estarian entre \n" + "{" + lowLimit + "  ;  " + upLimit + "}";
                            interpre.innerText = string;
                        }
                    </script>
                </form>
            </div>
        </div>
        <div>
            <div>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal(2)">&times;</span>
                        <form>
                            <!-- Contenido del segundo formulario -->
                            <h1>Calculadora de Intervalo de Confianza (t de Student)</h1>
                            <div>
                                <br>
                                <div id="sample-mean-error" class="error-message"></div>
                                <br>
                                <label for="sample-mean">Media muestral (X̄):</label>
                                <input type="number" id="sample-mean" step="0.0001" required>
                            </div>
                            <div>
                                <br>
                                <div id="sample-size-t-error" class="error-message"></div>
                                <br>
                                <label for="sample-size-t">Tamaño de muestra (n):</label>
                                <input type="number" id="sample-size-t" step="0.00001" required>
                            </div>
                            <div>
                                <br>
                                <div id="confidence-level-t-error" class="error-message"></div>
                                <br>
                                <label for="confidence-level-t">Nivel de confianza (1-α):</label>
                                <input type="number" id="confidence-level-t" step="0.000001" required>
                            </div>
                            <div>
                                <br>
                                <div id="sample-standard-deviation-t-error" class="error-message"></div>
                                <br>
                                <label for="sample-standard-deviation-t">Desviación estándar muestral (s):</label>
                                <input type="number" id="sample-standard-deviation-t" step="0.000001" required>
                            </div>
                            <div>
                                <br>
                                <div id="sample-standard-deviation-t-error" class="error-message"></div>
                                <br>
                                <label for="valor_t">Valor de t (t):</label>
                                <input type="number" id="valor_t" step="0.00001" required>
                            </div>
                            <div>
                                <h2>Intervalos de confianza</h2>
                                <br>
                                <p>Intervalo Inferior (LI): <span id="t-lower-limit"></span></p>
                                <p>Intervalo Superior (LS): <span id="t-upper-limit"></span></p><br>
                                <h2>Interoretacion corta:</h2>
                                <span id="interpre_t"></span>
                            </div>
                            <script>
                                const valor_tInput = document.getElementById('valor_t');
                                const sampleMeanInput = document.getElementById('sample-mean');
                                const sampleSizeTInput = document.getElementById('sample-size-t');
                                const confidenceLevelTInput = document.getElementById('confidence-level-t');
                                const sampleStandardDeviationTInput = document.getElementById('sample-standard-deviation-t');
                                const tLowerLimitSpan = document.getElementById('t-lower-limit');
                                const tUpperLimitSpan = document.getElementById('t-upper-limit');

                                valor_tInput.addEventListener('input', validateInputs);
                                sampleMeanInput.addEventListener('input', validateInputs);
                                sampleSizeTInput.addEventListener('input', validateInputs);
                                confidenceLevelTInput.addEventListener('input', validateInputs);
                                sampleStandardDeviationTInput.addEventListener('input', validateInputs);

                                function validateInputs() {
                                    validateInput(valor_tInput, 'sample-mean-error');
                                    validateInput(sampleMeanInput, 'sample-mean-error');
                                    validateInput(sampleSizeTInput, 'sample-size-t-error');
                                    validateInput(confidenceLevelTInput, 'confidence-level-t-error');
                                    validateInput(sampleStandardDeviationTInput, 'sample-standard-deviation-t-error');

                                    if (valor_tInput.validity.valid && sampleMeanInput.validity.valid && sampleSizeTInput.validity.valid && confidenceLevelTInput.validity.valid && sampleStandardDeviationTInput.validity.valid) {
                                        calculateTInterval();
                                    } else {
                                        tLowerLimitSpan.innerText = '';
                                        tUpperLimitSpan.innerText = '';
                                    }
                                }

                                function validateInput(input, errorId) {
                                    const errorElement = document.getElementById(errorId);
                                    if (input.validity.valueMissing) {
                                        input.setCustomValidity('Este campo es requerido ⬇️.');
                                        errorElement.innerText = 'Este campo es requerido ⬇️.';
                                    } else {
                                        input.setCustomValidity('');
                                        errorElement.innerText = '';
                                    }
                                }

                                function calculateTInterval() {

                                    const sampleMean = parseFloat(sampleMeanInput.value);
                                    const sampleSize = parseFloat(sampleSizeTInput.value);
                                    const confidenceLevel = parseFloat(confidenceLevelTInput.value);
                                    const sampleStandardDeviation = parseFloat(sampleStandardDeviationTInput.value);
                                    const valor_t = parseFloat(valor_tInput.value);

                                    const marginOfError = valor_t * (sampleStandardDeviation / Math.sqrt(sampleSize));

                                    const tlowerLimit = (sampleMean - marginOfError).toFixed(2);
                                    const tupperLimit = (sampleMean + marginOfError).toFixed(2);

                                    tLowerLimitSpan.innerText = `LI: ${tlowerLimit}`;
                                    tUpperLimitSpan.innerText = `LS: ${tupperLimit}`;

                                    var string_t = "Tenemos una seguridad del " + confidenceLevel + "% " + " para este caso, nuestros intervalos estarian entre \n" + "{" + tlowerLimit + " ; " + tupperLimit + "}";
                                    interpre_t.innerText = string_t;

                                }

                                function calculateTCriticalValue(confidenceLevel, degreesOfFreedom) {
                                    // Aquí deberías implementar la obtención del valor crítico de t, ya sea desde una tabla de distribución t o una función en tu entorno de desarrollo.
                                    return 0; // Reemplaza esto con el valor crítico de t adecuado.
                                }
                            </script>
                        </form>
                    </div>
                </div>
                <div id="myModal3" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal(3)">&times;</span>
                        <h1>Calculadora de Intervalo de Confianza Proporcional (Z)</h1>
                        <form>
                            <!-- Contenido del tercer formulario -->
                            <div>
                                <br>
                                <div id="population-proportion-error" class="error-message"></div>
                                <br>
                                <label for="population-proportion">Proporción poblacional (p):</label>
                                <input type="number" id="population-proportion" required>
                            </div>
                            <div>
                                <br>
                                <div id="sample-size-z-error" class="error-message"></div>
                                <br>
                                <label for="sample-size-z">Tamaño de muestra (n):</label>
                                <input type="number" id="sample-size-z" required>
                            </div>
                            <div>
                                <br>
                                <div id="confidence-level-z-error" class="error-message"></div>
                                <br>
                                <label for="confidence-level-z">Nivel de confianza (1-α):</label>
                                <input type="number" id="confidence-level-z" required>
                            </div>

                            <div class="salida">

                                <h2>Intervalos de confianza</h2>
                                <br>
                                <p>Intervalo Inferior (LI): <span id="z-lower-limit"></span></p>
                                <p>Intervalo Superior (LS): <span id="z-upper-limit"></span></p>
                                <br>
                                <h2>Interoretacion corta:</h2>
                                <span id="interpre_p"></span>
                            </div>
                            <script>
                                const populationProportionInput = document.getElementById('population-proportion');
                                const sampleSizeZInput = document.getElementById('sample-size-z');
                                const confidenceLevelZInput = document.getElementById('confidence-level-z');
                                const zLowerLimitSpan = document.getElementById('z-lower-limit');
                                const zUpperLimitSpan = document.getElementById('z-upper-limit');

                                populationProportionInput.addEventListener('input', validateInputs);
                                sampleSizeZInput.addEventListener('input', validateInputs);
                                confidenceLevelZInput.addEventListener('input', validateInputs);

                                function validateInputs() {
                                    validateInput(populationProportionInput, 'population-proportion-error');
                                    validateInput(sampleSizeZInput, 'sample-size-z-error');
                                    validateInput(confidenceLevelZInput, 'confidence-level-z-error');

                                    if (populationProportionInput.validity.valid && sampleSizeZInput.validity.valid && confidenceLevelZInput.validity.valid) {
                                        calculateZInterval();
                                    } else {
                                        zLowerLimitSpan.innerText = '';
                                        zUpperLimitSpan.innerText = '';
                                    }
                                }

                                function validateInput(input, errorId) {
                                    const errorElement = document.getElementById(errorId);
                                    if (input.validity.valueMissing) {
                                        input.setCustomValidity('Este campo es requerido ⬇️.');
                                        errorElement.innerText = 'Este campo es requerido ⬇️.';
                                    } else {
                                        input.setCustomValidity('');
                                        errorElement.innerText = '';
                                    }
                                }

                                function calculateZInterval() {
                                    const populationProportion = parseFloat(populationProportionInput.value);
                                    const sampleSizeZ = parseFloat(sampleSizeZInput.value);
                                    const confidenceLevelZ = parseFloat(confidenceLevelZInput.value);

                                    const zValue = calculateZCriticalValue(confidenceLevelZ);

                                    const marginOfError = zValue * Math.sqrt((populationProportion * (1 - populationProportion)) / sampleSizeZ);

                                    const lowerLimit = (populationProportion - marginOfError).toFixed(2);
                                    const upperLimit = (populationProportion + marginOfError).toFixed(2);

                                    zLowerLimitSpan.innerText = `LI: ${lowerLimit}`;
                                    zUpperLimitSpan.innerText = `LS: ${upperLimit}`;

                                    var string_t = "Tenemos una seguridad del " + confidenceLevelZ + "% " + " para este caso, nuestros intervalos estarian entre \n" + "{" + lowerLimit + "  ;  " + upperLimit + "}";
                                    interpre_p.innerText = string_t;
                                }

                                function calculateZCriticalValue(confidenceLevel) {
                                    // Aquí deberías implementar la obtención del valor crítico de Z, ya sea desde una tabla de distribución Z o una función en tu entorno de desarrollo.
                                    return 0; // Reemplaza esto con el valor crítico de Z adecuado.
                                }
                            </script>
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

                        // Cambiar la URL de la imagen a la que desees mostrar en el modal.
                        const imageUrl = 'https://i.blogs.es/ceda9c/dalle/450_1000.jpg';

                        modal.style.display = 'block';
                        modalImage.src = imageUrl;
                    }

                    function closeModal(modalNumber) {
                        document.getElementById('myModal' + modalNumber).style.display = 'none';
                    }
                </script>
    </section>

    <!-- SECTION PROBABILIDAD-->

    <section class="PROBABILIDAD">
        <h1 class="titulos_h1" id="titulo_pb">Probabilidad</h1>
        <br><br>

    </section>

    <br>
    <section class="intervalo_sect">
        <h1 id="titulo_ic" class="titulos_h1">Intervalos de confianza</h1>
        <br><br>
        <!-- Primer metodo espacio-->
        <div data-aos="zoom-in">
            <h3>Intervalo de confianza (Z)</h3>
            <p class="inter_z">Explicación: Este tipo de intervalo de confianza se utiliza cuando conoces la desviación estándar
                poblacional (σ) y tu muestra sigue una distribución normal.<br>
                <br>Fórmula: El intervalo de confianza (Z) se calcula como:<br> <br>LI = X̄ - Z * (σ / √n)<br><br>LS = X̄ + Z * (σ / √n)<br>
                <br>
                Cuándo usarlo: Debes usar el intervalo de confianza (Z) cuando tengas una muestra grande o conocias la desviación estándar poblacional y la distribución de la muestra es normal.
            </p>
            <p class="inter_z"> Detalles:<br>
                <br>(X̄) es la media muestral.<br>
                <br>(Z) es el valor crítico de la distribución normal estándar. <br>Este valor se obtiene de tablas de la distribución Z o utilizando software estadístico.<br>
                <br>(σ) es la desviación estándar poblacional conocida.<br>
                <br>(n) es el tamaño de la muestra.<br>
            </p>
            <br>
            <div data-aos="zoom-in-left" class="buttons">
                <!-- Botones para abrir los modales -->
                <button type="button" class="btn btn-success" onclick="openModal(1)">Calcular intervalo de confianza (Z)</button>
            </div>
        </div>
        <br>
        <hr>
        <br>

        <!-- Segundo metodo espacio-->

        <div data-aos="zoom-in-right">
            <h3>Intervalo de confianza (t)</h3>
            <p class="inter_z">Explicación: Este tipo de intervalo de confianza se utiliza cuando no conoces la desviación estándar poblacional (σ) y tu muestra sigue una distribución normal. En su lugar, utilizas la desviación estándar de la muestra (s) para estimar la poblacional.<br>
                <br>Fórmula: El intervalo de confianza (t) se calcula como:<br> <br>LI = X̄ - t * (s / √n)<br><br>LS = X̄ + t * (s / √n)<br>
                <br>
                Cuándo usarlo: Debes usar el intervalo de confianza (t) cuando no conozcas la desviación estándar poblacional y la distribución de la muestra sea normal.
            </p>
            <p class="inter_z"> Detalles:<br>
                <br>(X̄) es la media muestral.<br>
                <br>(t) es el valor crítico de la distribución t de Student. Este valor depende del nivel de confianza y los grados de libertad, y se obtiene de tablas de la distribución t o utilizando software estadístico.<br>
                <br>(s) es la desviación estándar de la muestra.<br>
                <br>(n) es el tamaño de la muestra.<br>
            </p>
            <br>
            <div data-aos="zoom-in-left" class="buttons">
                <!-- Botones para abrir los modales -->
                <button type="button" class="btn btn-success" onclick="openModal(2)">Calcular intervalo de confianza (t de Student)</button>
            </div>
        </div>
        <br>
        <hr><br>

        <!-- Tercer metodo espacio-->
        <div data-aos="zoom-in-left">
            <h3>Intervalo de Confianza Proporcional (Z)</h3>
            <p class="inter_z">Explicación: Este tipo de intervalo de confianza se utiliza para estimar la proporción de una población cuando tienes una muestra grande y conoces la desviación estándar poblacional.<br>
                <br>Fórmula: El intervalo de confianza proporcional (Z) se calcula como:<br> <br>LI = p - Z * √((p(1-p) / n))<br><br>LS = p + Z * √((p(1-p) / n))<br>
                <br>
                Cuándo usarlo: Debes usar el intervalo de confianza proporcional (Z) cuando quieras estimar la proporción de una población y tengas una muestra grande conociendo la desviación estándar poblacional.
            </p>

            <p class="inter_z"> Detalles:<br>
                <br>(P) es la proporción de la población de interés (por ejemplo, la proporción de personas que cumplen con cierta condición en la población).<br>
                <br>(Z) es el valor crítico de la distribución normal estándar, obtenido de tablas de la distribución Z o software estadístico.<br>
                <br>(n) es el tamaño de la muestra.<br>
            </p>
            <div data-aos="zoom-in-left" class="buttons">
                <!-- Botones para abrir los modales -->
                <button type="button" class="btn btn-success" onclick="openModal(3)">Calcular intervalo de confianza proporciona</button>
            </div>
            <br>
        </div>
    </section>


    <br><br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type='text/javascript'>
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
        .intervalo_sect {
            background-color: #1e1e31;
            margin-top: 200px;
            padding-top: 200px;
        }

        .titulos_h1 {
            margin-top: 100px;
            text-align: center;
            color: #ffffff;
            text-transform: uppercase;
            word-spacing: 20px;
            letter-spacing: 10px;
        }


        /* BackToTop button css */
        #scroll {
            position: fixed;
            right: 10px;
            bottom: 10px;
            cursor: pointer;
            width: 50px;
            height: 50px;
            background-color: #3498db;
            text-indent: -9999px;
            display: none;
            -webkit-border-radius: 60px;
            -moz-border-radius: 60px;
            border-radius: 60px
        }

        #scroll span {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -12px;
            height: 0;
            width: 0;
            border: 8px solid transparent;
            border-bottom-color: #ffffff
        }

        #scroll:hover {
            background-color: #e74c3c;
            opacity: 1;
            filter: "alpha(opacity=100)";
            -ms-filter: "alpha(opacity=100)";
        }
    </style>
    </head>

    <body>
        <!-- BackToTop Button -->
        <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
    </body>
    <script>
        const tableOfContents = document.getElementById("table-of-contents");

        tableOfContents.addEventListener("click", (event) => {
            if (event.target.tagName === "A") {
                event.preventDefault();
                const targetId = event.target.getAttribute("href").substring(1);
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            }
        });


        $(document).ready(function() {
            irArriba();
        }); //Hacia arriba

        function irArriba() {
            $('.ir-arriba').click(function() {
                $('body,html').animate({
                    scrollTop: '0px'
                }, 1000);
            });
            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    $('.ir-arriba').slideDown(600);
                } else {
                    $('.ir-arriba').slideUp(600);
                }
            });
            $('.ir-abajo').click(function() {
                $('body,html').animate({
                    scrollTop: '1000px'
                }, 1000);
            });
        }
    </script>
    <!-- Boton hacia arriba -->
    <a class="ir-arriba" javascript:void(0) title="Volver arriba">
        <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
        </span>
    </a>

</html>
</body>
<br><br>
<style>
    /*Flecha para hacer la pagina hacia arriba*/
    .ir-arriba {
        display: none;
        background-repeat: no-repeat;
        font-size: 20px;
        color: black;
        cursor: pointer;
        position: fixed;
        bottom: 10px;
        right: 10px;
        z-index: 2;
    }

    .content_indice {
        text-align: center;
        color: #ffffff !important;
    }

    .salida {
        text-align: center;
    }

    h2 {
        color: #000;
        text-align: center;
    }

    .buttons {
        margin-top: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h4 {
        text-align: center;
        margin-top: 150px;
        color: #fff
    }

    h3 {
        text-align: center;
        color: #fff;
        margin-top: 100px;
    }

    p {

        text-align: center;
        display: block;
        margin-left: auto !important;
        margin-right: auto;
    }

    .error-message {
        color: white;
        background-color: #ff7c00;
        width: 230px;
        border-radius: 10px;
        text-align: center;
    }

    input {
        border-style: solid;
        border-radius: 12px;
    }

    label {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Paragraph */
    .intro {
        color: #fff;
        width: 500px;
        height: 350px;
        margin-top: 100px;
        display: flex;
        align-items: center;
        left: auto !important;
        margin-right: auto !important;
        margin-left: auto !important;
        text-align: center;
    }

    .inter_z {
        color: white;
        width: 500px;
        height: 350px;
        display: flex;
        align-items: center;
        left: auto !important;
        margin-right: auto !important;
        margin-left: auto !important;
        text-align: center;
    }

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
    }

    body::-webkit-scrollbar-track {
        background: #161623;
        /* color of the tracking area */
    }

    /* Horizontal Rule */
    hr {
        background-color: #ffffff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        width: 50%;
        height: 2px;
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
        color: #000;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    /* Estilos para el contenido del modal */
    .modal-content {
        background-color: #fbfdee;
        margin: 15% auto;
        padding: 20px;
        color: #000;
        width: 50%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-height: 80%;
        /* Altura máxima del modal */
        overflow-y: auto;
        /* Agrega scroll en el contenido si es necesario */
    }

    /* Estilos para el botón de cerrar */
    .close {
        color: #000;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    /* Estilos para el botón de cerrar cuando se pasa el mouse sobre él */
    .close:hover {
        color: red;
        text-decoration: none;
        cursor: pointer;
    }


    body {

        background: #161623;
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
</style>