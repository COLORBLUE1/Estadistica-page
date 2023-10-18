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

</head>

<body>
    <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="title" style="text-align: center;  margin-top:100px; ">
        <h3 style="text-align: center;" class='display-4 relawayStandart text-light shadow-sm'> H E R A M I E N T A S </h3>
    </div>
    <section class="cont_inicial">
        <p data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0" class="intro">Bienvenido a nuestra plataforma de herramientas de cálculo y teoría! Aquí encontrarás una colección de herramientas útiles para realizar una amplia variedad de cálculos en diversas áreas, así como una sólida base teórica para comprender los principios subyacentes. Ya sea que seas un estudiante, un profesional, o simplemente alguien interesado en explorar conceptos matemáticos y científicos, nuestra plataforma está diseñada para ayudarte a resolver problemas, realizar análisis y aprender más sobre los fundamentos que respaldan estas herramientas.</p>
        <br><br>
        <h4 style="text-align: center; margin-top:150px; color:#fff">Calculadoras</h4>
        <div data-aos="zoom-in-left" class="buttons" style="margin-top:100px; display: flex;
        justify-content: center;
        align-items: center;">
            <!-- Botones para abrir los modales -->
            <button type="button" class="btn btn-success" onclick="openModal(1)">Calcular intervalo de confianza (Z)</button>
            <button type="button" class="btn btn-success" onclick="openModal(2)">Calcular intervalo de confianza (t de Student)</button>
            <button type="button" class="btn btn-success" onclick="openModal(3)">Abrir Formulario 3</button>
            <button type="button" class="btn btn-success" onclick="openModal(4)">Abrir Formulario 4</button>
        </div>
        <!-- Modales -->
        <div id="myModal1" class="modal" style="color:#000">
            <div class="modal-content">
                <span class="close" onclick="closeModal(1)">&times;</span>
                <form>
                    <!-- Contenido del primer formulario -->
                    <br>
                    <div>
                        <div class="error" id="mean-error"></div>
                        <br>
                        <label for="mean">Media poblacional (μ):</label>
                        <input type="number" id="mean" step="0.01" required>
                    </div>
                    <br>
                    <div>
                        <div class="error" id="stddev-error"></div>
                        <br>
                        <label for="stddev">Desviación estándar poblacional (σ or s):</label>
                        <input type="number" id="stddev" step="0.01" required>
                    </div>
                    <br>
                    <div>
                        <div class="error" id="sample-size-error"></div>
                        <br>
                        <label for="sample-size">Tamaño de muestra (n):</label>
                        <input type="number" id="sample-size" required>
                    </div>
                    <br>
                    <div>
                        <div class="error" id="confidence-level-error"></div>
                        <br>
                        <label for="confidence-level">Nivel de confianza (1-α):</label>
                        <input type="number" id="confidence-level" required>
                    </div>
                    <br>
                    <div>
                        <div class="error" id="z-value-error"></div>
                        <br>
                        <label for="z-value">Valor de z:</label>
                        <input type="number" id="z-value" step="0.01" required>
                    </div>
                    <br><br>
                    <div>
                        <h3>Intervalos de confianza</h3>
                        <p>Límite Superior (LS): <span id="upper-limit"></span></p>
                        <p>Límite Inferior (LI): <span id="lower-limit"></span></p>
                        <h3>Interoretacion corta:</h3>
                        <span id="interpre"></span>
                    </div>

                    <script>
                        // Obtén referencias a los elementos
                        const meanInput = document.getElementById('mean');
                        const stddevInput = document.getElementById('stddev');
                        const sampleSizeInput = document.getElementById('sample-size');
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

                            const lowLimit = mean - marginOfError;
                            const upLimit = mean + marginOfError;

                            lowLimitSpan.innerText = `LI: ${lowLimit}`;
                            upLimitSpan.innerText = `LS: ${upLimit}`;
                            var string = "Tenemos una seguridad del " + confidenceLevel + "% " + " para este caso, nuestros intervalos estarian entre \n" + lowLimit + "  ----------------  " + upLimit;
                            interpre.innerText = string;
                        }
                    </script>
                </form>
            </div>

        </div>
        <div>

            <div>
                <div id="myModal2" class="modal" style="color:#000">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal(2)">&times;</span>
                        <form>
                            <!-- Contenido del segundo formulario -->
                            <h1>Calculadora de Intervalo de Confianza (t de Student)</h1>
                            <div>
                                <div id="sample-mean-error" class="error-message"></div>
                                <br>
                                <label for="sample-mean">Media muestral (X̄):</label>
                                <input type="number" id="sample-mean" required>
                            </div>
                            <div>
                                <div id="sample-size-t-error" class="error-message"></div>
                                <br>
                                <label for="sample-size-t">Tamaño de muestra (n):</label>
                                <input type="number" id="sample-size-t" required>
                            </div>
                            <div>
                                <div id="confidence-level-t-error" class="error-message"></div>
                                <br>
                                <label for="confidence-level-t">Nivel de confianza (1-α):</label>
                                <input type="number" id="confidence-level-t" required>
                            </div>
                            <div>
                                <div id="sample-standard-deviation-t-error" class="error-message"></div>
                                <br>
                                <label for="sample-standard-deviation-t">Desviación estándar muestral (s):</label>
                                <input type="number" id="sample-standard-deviation-t" required>
                            </div>
                            <div>
                                <p>Límite Inferior (LI): <span id="t-lower-limit"></span></p>
                                <p>Límite Superior (LS): <span id="t-upper-limit"></span></p>
                            </div>

                            <script>
                                const sampleMeanInput = document.getElementById('sample-mean');
                                const sampleSizeTInput = document.getElementById('sample-size-t');
                                const confidenceLevelTInput = document.getElementById('confidence-level-t');
                                const sampleStandardDeviationTInput = document.getElementById('sample-standard-deviation-t');
                                const tLowerLimitSpan = document.getElementById('t-lower-limit');
                                const tUpperLimitSpan = document.getElementById('t-upper-limit');

                                sampleMeanInput.addEventListener('input', validateInputs);
                                sampleSizeTInput.addEventListener('input', validateInputs);
                                confidenceLevelTInput.addEventListener('input', validateInputs);
                                sampleStandardDeviationTInput.addEventListener('input', validateInputs);

                                function validateInputs() {
                                    validateInput(sampleMeanInput, 'sample-mean-error');
                                    validateInput(sampleSizeTInput, 'sample-size-t-error');
                                    validateInput(confidenceLevelTInput, 'confidence-level-t-error');
                                    validateInput(sampleStandardDeviationTInput, 'sample-standard-deviation-t-error');

                                    if (sampleMeanInput.validity.valid && sampleSizeTInput.validity.valid && confidenceLevelTInput.validity.valid && sampleStandardDeviationTInput.validity.valid) {
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

                                    const degreesOfFreedom = sampleSize - 1;
                                    const tValue = calculateTCriticalValue(confidenceLevel, degreesOfFreedom);

                                    const marginOfError = tValue * (sampleStandardDeviation / Math.sqrt(sampleSize));

                                    const lowerLimit = sampleMean - marginOfError;
                                    const upperLimit = sampleMean + marginOfError;

                                    tLowerLimitSpan.innerText = `LI: ${lowerLimit}`;
                                    tUpperLimitSpan.innerText = `LS: ${upperLimit}`;

                                    var string_t = "Tenemos una seguridad del " + confidenceLevel + "% " + " para este caso, nuestros intervalos estarian entre \n" + tlowerLimit + "  ----------------  " + tupperLimit;
                                    interpre.innerText = string_t;

                                }

                                function calculateTCriticalValue(confidenceLevel, degreesOfFreedom) {
                                    // Aquí deberías implementar la obtención del valor crítico de t, ya sea desde una tabla de distribución t o una función en tu entorno de desarrollo.
                                    return 0; // Reemplaza esto con el valor crítico de t adecuado.
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
                            <h1>Calculadora de Intervalo de Confianza Proporcional (Z)</h1>
                            <div>
                                <div id="population-proportion-error" class="error-message"></div>
                                <br>
                                <label for="population-proportion">Proporción poblacional (p):</label>
                                <input type="number" id="population-proportion" required>
                            </div>
                            <div>
                                <div id="sample-size-z-error" class="error-message"></div>
                                <br>
                                <label for="sample-size-z">Tamaño de muestra (n):</label>
                                <input type="number" id="sample-size-z" required>
                            </div>
                            <div>
                                <div id="confidence-level-z-error" class="error-message"></div>
                                <br>
                                <label for="confidence-level-z">Nivel de confianza (1-α):</label>
                                <input type="number" id="confidence-level-z" required>
                            </div>
                            <div>
                                <p>Límite Inferior (LI): <span id="z-lower-limit"></span></p>
                                <p>Límite Superior (LS): <span id="z-upper-limit"></span></p>
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

                                    const lowerLimit = populationProportion - marginOfError;
                                    const upperLimit = populationProportion + marginOfError;

                                    zLowerLimitSpan.innerText = `LI: ${lowerLimit}`;
                                    zUpperLimitSpan.innerText = `LS: ${upperLimit}`;
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
                    }

                    function closeModal(modalNumber) {
                        document.getElementById('myModal' + modalNumber).style.display = 'none';
                    }
                </script> -->
    </section>
    <!-- Primer metodo espacio-->
    <div data-aos="zoom-in">
        <h3 style="text-align: center; color:#fff; margin-top:100px; ">Intervalo de confianza (Z)</h3>
        <p class="inter_z">Explicación: Este tipo de intervalo de confianza se utiliza cuando conoces la desviación estándar
            poblacional (σ) y tu muestra sigue una distribución normal.<br>
            <br>Fórmula: El intervalo de confianza (Z) se calcula como:<br> <br>LI = X̄ - Z * (σ / √n)<br><br>LS = X̄ + Z * (σ / √n)<br>
            <br>
            Cuándo usarlo: Debes usar el intervalo de confianza (Z) cuando tengas una muestra grande o conocias la desviación estándar poblacional y la distribución de la muestra es normal.
        </p>

        <p style="text-align: center;
        display: block;  margin-left:auto !important;
 margin-right:auto;" class="inter_z"> Detalles:<br>

            <br>(X̄) es la media muestral.<br>
            <br>(Z) es el valor crítico de la distribución normal estándar. <br>Este valor se obtiene de tablas de la distribución Z o utilizando software estadístico.<br>
            <br>(σ) es la desviación estándar poblacional conocida.<br>
            <br>(n) es el tamaño de la muestra.<br>
        </p>
        <br>
    </div>

    <br>
    <hr>
    <br>

    <!-- Segundo metodo espacio-->

    <div data-aos="zoom-in-right">
        <h3 style="text-align: center; color:#fff; margin-top:100px; ">Intervalo de confianza (Z)</h3>
        <p class="inter_z">Explicación: Este tipo de intervalo de confianza se utiliza cuando no conoces la desviación estándar poblacional (σ) y tu muestra sigue una distribución normal. En su lugar, utilizas la desviación estándar de la muestra (s) para estimar la poblacional.<br>
            <br>Fórmula: El intervalo de confianza (t) se calcula como:<br> <br>LI = X̄ - t * (s / √n)<br><br>LS = X̄ + t * (s / √n)<br>
            <br>
            Cuándo usarlo: Debes usar el intervalo de confianza (t) cuando no conozcas la desviación estándar poblacional y la distribución de la muestra sea normal.
        </p>

        <p style="text-align: center;
        display: block;  margin-left:auto !important;
 margin-right:auto;" class="inter_z"> Detalles:<br>

            <br>(X̄) es la media muestral.<br>
            <br>(t) es el valor crítico de la distribución t de Student. Este valor depende del nivel de confianza y los grados de libertad, y se obtiene de tablas de la distribución t o utilizando software estadístico.<br>
            <br>(s) es la desviación estándar de la muestra.<br>
            <br>(n) es el tamaño de la muestra.<br>
        </p>
        <br>
    </div>
    <br>
    <hr><br>

    <!-- Tercer metodo espacio-->
    <div data-aos="zoom-in-left">
        <h3 style="text-align: center; color:#fff; margin-top:100px; ">Intervalo de Confianza Proporcional (Z)</h3>
        <p class="inter_z">Explicación: Este tipo de intervalo de confianza se utiliza para estimar la proporción de una población cuando tienes una muestra grande y conoces la desviación estándar poblacional.<br>
            <br>Fórmula: El intervalo de confianza proporcional (Z) se calcula como:<br> <br>LI = p - Z * √((p(1-p) / n))<br><br>LS = p + Z * √((p(1-p) / n))<br>
            <br>
            Cuándo usarlo: Debes usar el intervalo de confianza proporcional (Z) cuando quieras estimar la proporción de una población y tengas una muestra grande conociendo la desviación estándar poblacional.
        </p>

        <p style="text-align: center;
        display: block;  margin-left:auto !important;
 margin-right:auto;" class="inter_z"> Detalles:<br>

            <br>(P) es la proporción de la población de interés (por ejemplo, la proporción de personas que cumplen con cierta condición en la población).<br>
            <br>(Z) es el valor crítico de la distribución normal estándar, obtenido de tablas de la distribución Z o software estadístico.<br>
            <br>(n) es el tamaño de la muestra.<br>
        </p>
        <br>
    </div>
    <br><br>
</body>

</html>
</body>
<br><br>
<style>
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
        color: #fff;
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
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    /* Estilos para el contenido del modal */
    .modal-content {
        background-color: #fbfdee;
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