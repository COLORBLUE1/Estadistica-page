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
        <div class="content_indice" id="content_indice">
            <h1>Tabla de Contenido</h1>
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
                            </div </form>
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
                            <script>
                                window.addEventListener('scroll', function() {
                                    var div_cont = document.getElementById('content_indice');
                                    var scrollPosition = window.scrollY;

                                    if (scrollPosition > 1000) {
                                        div_cont.style.display = 'block'; /* Mostrar el div al hacer scroll */
                                    } else {
                                        div_cont.style.display = 'none'; /* Ocultar el div al volver arriba */
                                    }
                                });

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



                                document.addEventListener("DOMContentLoaded", function() {
                                    const openModalButton = document.getElementById("openModal");
                                    const closeModalButton = document.getElementById("closeModal");
                                    const modal = document.getElementById("modal");


                                    /*Variables de opciones*/
                                    const stdDeviationSelect = document.getElementById("stdDeviationSelect");
                                    const option_desv_estandar = document.getElementById("option_desv_estandar");
                                    const option_tamaño_n = document.getElementById("option_tamaño_n");
                                    const tamaño_n = document.getElementById("tamaño_n");
                                    const Desv_estandar = document.getElementById("Desv_estandar");

                                    /*No normal variables*/
                                    const NO_NORMALoption_desv_estandar = document.getElementById("NO_NORMALoption_desv_estandar");
                                    const no_normalDesv_estandar = document.getElementById("no_normalDesv_estandar");
                                    const NO_NORMALoption_tamaño_n = document.getElementById("NO_NORMALoption_tamaño_n");
                                    const no_normaltamaño_n = document.getElementById("no_normaltamaño_n");



                                    const calculateButton = document.getElementById("calculateButton");
                                    const result = document.getElementById("result");

                                    openModalButton.addEventListener("click", function() {
                                        modal.style.display = "block";
                                    });

                                    closeModalButton.addEventListener("click", function() {
                                        modal.style.display = "none";
                                    });

                                    /*opciones normal*/
                                    /* IF (¿SE DISTIBUYE NORMAL?)*/
                                    stdDeviationSelect.addEventListener("change", function() {
                                        if (stdDeviationSelect.value === "si") {
                                            result.innerHTML = "";
                                            no_normaltamaño_n.style.display = "none";
                                            no_normalDesv_estandar.style.display = "none";
                                            Desv_estandar.style.display = "block";
                                        } else {
                                            result.innerHTML = "";
                                            tamaño_n.style.display = "none";
                                            Desv_estandar.style.display = "none";
                                            no_normalDesv_estandar.style.display = "block";

                                        }

                                        if (stdDeviationSelect.value === "empty") {
                                            no_normaltamaño_n.style.display = "none";
                                            no_normalDesv_estandar.style.display = "none";
                                            tamaño_n.style.display = "none";
                                            Desv_estandar.style.display = "none";
                                            result.innerHTML = "";
                                        }
                                    });

                                    /* IF (¿Conoce el valor de la desviación estándar?)*/
                                    option_desv_estandar.addEventListener("change", function() {
                                        if (option_desv_estandar.value === "si") {
                                            result.innerHTML = "";
                                            tamaño_n.style.display = "none";
                                            no_normaltamaño_n.style.display = "none";
                                            no_normalDesv_estandar.style.display = "none";
                                            result.innerHTML = "Te sugerimos calcular por el valor de (Z)";

                                        } else {
                                            tamaño_n.style.display = "block";
                                            result.innerHTML = "";
                                        }
                                        if (option_desv_estandar.value === "empty") {
                                            tamaño_n.style.display = "none";
                                            result.innerHTML = "";
                                        }
                                    });




                                    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?)*/
                                    option_tamaño_n.addEventListener("change", function() {
                                        if (option_tamaño_n.value === "si") {
                                            result.innerHTML = "";
                                            no_normaltamaño_n.style.display = "none";
                                            no_normalDesv_estandar.style.display = "none";
                                            tamaño_n.style.display = "block";
                                            result.innerHTML = "Te sugerimos calcular por el valor de (Z)";
                                        } else {
                                            result.innerHTML = "";
                                            no_normaltamaño_n.style.display = "none";
                                            no_normalDesv_estandar.style.display = "none";
                                            tamaño_n.style.display = "block";
                                            result.innerHTML = "Te sugerimos calcular por el valor de (t)";
                                        }

                                        if (option_tamaño_n.value === "empty") {
                                            tamaño_n.style.display = "none";
                                            result.innerHTML = "";
                                        }

                                    });


                                    /*opciones no normal*/

                                    /* IF (¿Conoce el valor de la desviación estándar? NO NORMAL)*/
                                    NO_NORMALoption_desv_estandar.addEventListener("change", function() {
                                        if (NO_NORMALoption_desv_estandar.value === "si") {
                                            no_normaltamaño_n.style.display = "block";
                                            tamaño_n.style.display = "none";
                                            Desv_estandar.style.display = "none";
                                        } else {
                                            no_normaltamaño_n.style.display = "block";
                                            tamaño_n.style.display = "none";
                                            Desv_estandar.style.display = "none";
                                        }

                                        if (NO_NORMALoption_desv_estandar.value === "empty") {
                                            no_normaltamaño_n.style.display = "none";
                                            result.innerHTML = "";
                                        }
                                    });

                                    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?) NO NORMAL*/
                                    NO_NORMALoption_tamaño_n.addEventListener("change", function() {
                                        if (NO_NORMALoption_tamaño_n.value === "si") {
                                            tamaño_n.style.display = "none";
                                            Desv_estandar.style.display = "none";
                                            result.innerHTML = "Te sugerimos calcular por el valor de (Z)";

                                        } else {
                                            tamaño_n.style.display = "none";
                                            Desv_estandar.style.display = "none";
                                            result.innerHTML = "No disponible para calcular";
                                        }
                                        if (NO_NORMALoption_tamaño_n.value === "empty") {

                                            result.innerHTML = "";
                                        }

                                    });


                                    calculateButton.addEventListener("click", function() {
                                        // Aquí debes implementar el cálculo del intervalo de confianza según la selección y el valor de desviación estándar ingresado.
                                        // Luego, muestra el resultado en el elemento 'result'.
                                        result.innerHTML = "Aquí se mostrará el resultado del cálculo.";
                                    });
                                });
                            </script>
                        </form>
                    </div>
                </div>
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <!-- iniciar libreria AOS -->
                <script>
                    AOS.init();
                </script>

    </section>

    <!-- SECTION PROBABILIDAD-->

    <section class="probabilidad">
        <h1 class="titulos_h1" id="titulo_pb">Probabilidad</h1>
        <br>

        <h4>
            HISTORIA: EL PAPEL DE LA PROBABILIDAD EN ESTADÍSTICA
        </h4>
        <br>
        <p>
            El estudio formal de la teoría de probabilidad se originó en los siglos diecisiete y dieciocho en Francia con Blasie Pascal y Pierre de Fermat, pero se conoce de otros matemáticos motivados por el estudio de los juegos de azar. Pero es en el siglo diecinueve cuando un modelo probabilístico se desarrolló para el comportamiento de las moléculas de un líquido, se llamó movimiento browniano, Robert Brown, botánico inglés fue el primero en observar el fenómeno en 1827. En 1905, Albert Einsten explicó el movimiento browniano bajo la hipótesis de que las partículas se sometían a un bombardeo continuo de moléculas en un medio circundante. Aplicación en el desarrollo del sistema telefónico.
        </p>

        <br>
        <br>
        <h4>
            DEFINICIONES: EXPERIMENTO, EVENTOS Y EL ESPACIO MUESTRAL
        </h4>
        <br>
        <p>
            Se obtienen datos al observar ya sea eventos no controlados en la naturaleza o situaciones controladas en un laboratorio. Usamos el término experimento para describir cualquiera de los dos métodos de recolección de datos.
        </p>
        <br>
        <h4>
            Experimento aleatorio
        </h4>
        <br>
        <p>
            es un proceso donde los resultados no se pueden establecer con certeza, pero si asignarle una medida de la probabilidad de su ocurrencia.

            Tienen las siguientes características:

            .- En tanto que no podemos predecir el resultado con certeza, si es posible describir el conjunto de posibles resultados.

            .- El experimento es tal que se podría repetir en condiciones que permanezcan invariables, ocurriendo los resultados de manera fortuita, y a medida que el número de repeticiones aumenta, surgen ciertos patrones en la frecuencia de ocurrencia de los resultados.
        </p>
        <br>
        <p> Ejemplo:
            <br>

            <br>
            Lanzar una moneda:

        </p><br>
        <div class="img_probabilidad">
            <img width="320px" height="150px" src="https://www.theworldofcoins.com/images/PN25038-bimetall-antik-950-1.png" atl="monedas" />
        </div>
        <br>


        <p>
            Lanzar un dado:

        </p><br>
        <div class="img_probabilidad">
            <img width="300px" height="250px" src="https://images.vexels.com/media/users/3/150995/isolated/preview/ba38e6111932855459eb091da1372849-icono-de-dados-de-juego.png" atl="monedas" />
        </div>
        <br>
        <h4>
            Ley de los grandes números:
        </h4>
        <br>
        <p>
            Al repetir un Experimento Aleatorio un número de veces, la frecuencia relativa de cada suceso presenta una tendencia o estabilización de los resultados a un número fijo, y mientras mayor sea el número de repeticiones el resultado tiende a un patrón. </p>
        <div class="img_probabilidad">
            <img width="400px" height="300px" src="https://economipedia.com/wp-content/uploads/Ley-de-los-grandes-n%C3%BAmeros.jpg" atl="monedas" />
        </div>
        <br>
        <br>
        <h4>
            Espacio muestral:
        </h4>
        <br>
        <p>
            Conjunto de todos los posibles resultados diferentes de un experimento aleatorio, se listan todos los eventos simples. Se denota por S o W.

            Este experimento se puede representar en notación de conjuntos como un conjunto que tiene dos eventos simples:

            .- Lanzar una moneda y observar la cara del lado superior

            .- Lanzar un dado y observar el valor que da la cara superior:

            .- Seleccionar una carta de baraja de póker y observar su número y letra
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">A</th>
                    <th scope="col">B</th>
                    <th scope="col">C</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>S: {C, S}</td>
                    <td>S:{1, 2, 3, 4, 5,6}</td>
                    <td>S: {2,3,4,5,6,7,8,9,10,J,Q,K,A}</td>
                </tr>
            </tbody>
        </table>
        <h4>
            SUCESO O EVENTO:
        </h4>

        <br>
        <p>
            Se asocia a un experimento aleatorio y presenta una o varias respuestas u observaciones después de realizar el experimento,<br> puede ser un subconjunto del espacio muestral. Normalmente se representa con letras mayúsculas. A, B , C….
        </p>
        <h5>
            Evento simple es el resultado que se observa en una sola repetición del experimento. <br>No se puede descomponer en resultados más simples.
        </h5>
        <br>
        <p>
            Cabe señalar que, si este experimento se realiza una sola vez, podemos observar uno y sólo uno de los valores. Y no se puede descomponer en otro resultado más simple.

            Cuando se realiza un experimento, lo que observamos es un resultado llamado evento simple, con frecuencia denotado por la mayúscula E con un subíndice.

            Evento E: Lanzar una moneda y observar si cae cara o sello S={C , S}<br>

            - C= Observar una cara<br>

            - S= Observar un sello
        </p>
        <div class="ejercicios_button">
            <button type="button" class="btn btn-success"><a class="ejercicios_button" href="ejercicios_probabilidad">Ejercicios</a></button>
        </div>
        <h5>Requisitos para Probabilidades de un Evento Simple</h5>
        <br>
        <p>
            - Cada probabilidad debe estar entre 0 y 1<br>

            - La suma de las probabilidades de todos los eventos sencillos en S es igual a 1
        </p>

        <h5>Evento Compuesto</h5><br>
        <p>es un conjunto de combinación de varios eventos simples

            Podemos deﬁnir los eventos A y B para el experimento de lanzar al aire un dado y observar el número de la cara superior.

            A: observar un número impar --à A={1,3,5}<br>

            B: observar un número menor a 4 à B={1,2,3}<br>

            C: observa un número par à C={2,4,6}<br>

            A veces, cuando ocurre un evento, signiﬁca que no puede ocurrir otro.<br>

            · Ejemplo:<br>

            Experimento: Lanzar al aire un dado y observar el número de la cara superior.<br>

            Espacio muestral S= {1,2,3,4,5,6} (6 OPCIONES)<br>

            A: observar un número impar A= {1,3,5}<br>

            B: observar un número menor a 4 B= {1,2,3}<br>

            C: Observar un número par C= {2,4,6}<br>
        </p>
        <div class="ejercicios_button">
            <button type="button" class="btn btn-success"><a class="ejercicios_button" href="ejercicios_probabilidad">Ejercicios</a></button>
        </div>
        <h5>Experimento:</h5><br>
        <p>
            Lanzar al aire un dado y observar el número de la cara superior.

            Espacio muestral S= {1,2,3,4,5,6} (6 OPCIONES)<br><br>

            A: observar un número impar A= {1,3,5}<br>

            B: observar un número menor a 4 B= {1,2,3}<br>

            C: Observar un número par C= {2,4,6}<br>

            Operación de Sucesos:<br><br>

            - Unión de sucesos: Dados dos sucesos A y B, de cierto experimento aleatorio, se define la unión de A y B, que se representa por A ÈB, a otro suceso que se denota por D, que ocurre siempre que ocurra A o que ocurra B:
            <br>
            · A È B = D à D= {1,2,3,5}
            <br><br>
            - Intersección de sucesos: Dados dos sucesos A y B, de cierto experimento aleatorio, se define la intersección de A y B, que se representa por A ÇB, a otro suceso que se denota por E, que ocurre siempre que ocurran A y B simultáneamente:
            <br>
            · A Ç B = E à E={1,3}
            <br><br>
            - Suceso complementario: Dado un suceso A, de cierto experimento aleatorio, se define el complementario de A, que se representa por AC ó A’ , a otro suceso que ocurre siempre que no ocurre A, también lo presentan como (𝐴̅ ):
            <br>
            · A={1,3,5} à Ac = {2,4,6}
            <br><br>
            - Suceso imposible: Dado el suceso A y su complementario Ac , junto con la operación de intersección, se define un suceso que no ocurre nunca, se le conoce como suceso imposible y se denota por f : A Ç Ac =f
            <br><br>
            - El suceso complementario del suceso imposible es el suceso seguro, que es precisamente el espacio muestral: fC= W
            <br><br>
            - Sucesos incompatibles o Excluyentes: Dados dos sucesos A y C, de cierto experimento aleatorio, se dice que estos sucesos son incompatibles si su intersección es el suceso imposible. AÇ C=f à A y C incompatibles o excluyentes.
            <br><br>
            · A: observar un número impar A= {1,3,5}
            <br>
            · C: Observar un número par C= {2,4,6}
            <br>
            - Sucesos contenido en otro: Dados dos sucesos A y E, de cierto experimento aleatorio, se dice que E está contenido en A si siempre que ocurre E ocurre A, se denota por E Ì A . Se observa que dado cualquier suceso E, siempre ocurre f Ì E Ì A Ì W
            <br><br>
            § A: observar un número impar A= {1,3,5}
            <br>
            § E: Observar número impar menor que 4 E={ 1,3}
            <br><br>
            - Diferencia de sucesos: Dados dos sucesos A y B, de cierto experimento aleatorio, se define la diferencia de los sucesos A y B, y se denota por A -B, el suceso C, que ocurra A y no ocurra B: C= A- B.
            <br>
            Se observa que C=A-B
            <br>
            § A={1,3,5}, B={1,2,3} -> A-B ={5} …..
            <br>
            § B-A ={2}
            <br>
        </p>
        <h4>Propiedades de la Unión e Intersección de Sucesos:</h4>
        <br>
        <div class="img_probabilidad">
            <img width="400px" height="300px" src="https://economipedia.com/wp-content/uploads/interseccion-de-sucesos.jpg" atl="monedas" />
        </div>
        <h4>CONCEPTOS GENERALES DE PROBABILIDAD</h4>
        <br>
        <p>
            La probabilidad es un valor numérico, proporción o fracción cuyo valor varía entre 0 y 1 (normalmente expresada en porcentaje para entendimientos de los lectores, pero para los teóricos se presenta en cifras significativas) que representa la oportunidad o posibilidad de que un evento ocurra.

            Representa el grado de incertidumbre o posibilidad que suceda un suceso.

            Se define la probabilidad con la letra mayúscula P y entre paréntesis se evalúa lo que se está observando: P(A).
        </p>
        <br>
        <h4>Fenómenos Determinísticos y Fenómenos Aleatorios:</h4>
        <br>
        <p>
            Fenómeno proviene de la palabra griega Phenomena, aspecto que se tienen de las cosas ante nuestros sentidos, es decir el contacto que tenemos con las cosas, que se denomina EXPERIENCIA.
        </p>
        <h4>- Fenómeno Determinístico:</h4>
        <br>
        <p>
            Son los sucesos, situaciones o fenómenos de los cuales se conoce con toda precisión sus resultados. Se denominan previsible, regido por leyes determinadas, o bajo unas condiciones dadas. Ejemplo: Espacio recorrido= velocidad x tiempo </p>
        </p>
        <br>
        <h4>- Fenómeno Aleatorio:</h4>
        <br>
        <p>
            Son aquellos problemas, situaciones o fenómenos en las cuales no es factible precisar exactamente los resultados posibles, dado que presentan incertidumbre, azar, imprecisión, etc., no siguen unas leyes determinadas. </p>
        <br>

        <h4>Tipos de Enfoque de Probabilidades:</h4>
        <br>
        <p>

            Se cuenta además con formas planteadas para identificar al concepto de probabilidad, una se determinó bajo la experimentación y se terminó con la que se estableció con una estructura de teoría.

            La principal diferencia entre ellas es que la primera es sobre eventos igualmente probables que es posible que no se establezcan y se repite el experimento un gran número de veces y la segunda se establece que esta sobre bases igualmente probables y se realiza el experimento una sola vez.
        </p>
        <h4>Probabilidad Clásica: (A priori):</h4>
        <br>
        <p>
            Es la definición más antigua y se atribuye al matemático francés Pierre Laplace (1749- 1827); también se conoce con el nombre de probabilidad a priori, pues para calcularla, es necesario conocer, antes de realizar el experimento aleatorio, el espacio muestral y el número de resultados o sucesos elementales que entran a formar parte del suceso.

            Si la probabilidad de un evento “A” se define como la frecuencia relativa de “A” en el espacio muestral “Ω” (o S) y se denota como P(A).

            Es aquella que se puede calcular si necesidad de realizar el experimento, dado que se conoce de antemano los resultados que se podrían obtener.<br><br> 𝑃(𝑒𝑣𝑒𝑛𝑡𝑜)=𝑁ú𝑚𝑒𝑟𝑜 𝑑𝑒 𝑟𝑒𝑠𝑢𝑙𝑡𝑎𝑑𝑜𝑠 𝑓𝑎𝑣𝑜𝑟𝑎𝑏𝑙𝑒𝑠 𝑎 𝑙𝑎 𝑜𝑐𝑢𝑟𝑟𝑒𝑛𝑐𝑖𝑎 𝑑𝑒𝑙 𝑒𝑣𝑒𝑛𝑡𝑜𝑁ú𝑚𝑒𝑟𝑜 𝑡𝑜𝑡𝑎𝑙 𝑑𝑒 𝑟𝑒𝑠𝑢𝑙𝑡𝑎𝑑𝑜𝑠 𝑝𝑜𝑠𝑖𝑏𝑙𝑒𝑠

            4.2.2 Probabilidad Empírica: Se requiere la realización del experimento. (Frecuentista)

            Si repetimos el experimento muchas veces, la frecuencia (relativa) con que ocurre el suceso sería una aproximación de la probabilidad.

            Es un método empírico que resulta de la ℎ𝑖 % <br><br>𝑃(𝑜𝑐𝑢𝑟𝑟𝑒𝑛𝑐𝑖𝑎)=𝑁ú𝑚𝑒𝑟𝑜 𝑑𝑒 𝑣𝑒𝑐𝑒𝑠 𝑞𝑢𝑒 𝑎𝑝𝑎𝑟𝑒𝑐𝑒 𝑙𝑎 𝑜𝑐𝑢𝑟𝑟𝑒𝑛𝑐𝑖𝑎𝑁ú𝑚𝑒𝑟𝑜 𝑑𝑒 𝑣𝑒𝑐𝑒𝑠 𝑞𝑢𝑒 𝑠𝑒 𝑟𝑒𝑝𝑖𝑡𝑖ó 𝑒𝑙 𝑒𝑥𝑝𝑒𝑟𝑖𝑚𝑒𝑛𝑡𝑜=𝑓𝑖𝑛
        </p>
        <br>
        <div class="ejercicios_button">
            <button type="button" class="btn btn-success"><a class="ejercicios_button" href="ejercicios_probabilidad">Ejercicios</a></button>
        </div>
    </section>
    <br>
    <!-- SECTION PROBABILIDAD-->

    <section class="Clasificación_variables">
        <h1 class="titulos_h1" id="titulo_cv">Clasificación de variables</h1>
        <br>
        <h4>TERMINOLOGÍA ESTADÍSTICA</h4>
        <br>
        <p>
            <br>
        <h5>-Población:</h5>
        <p>Es un conjunto de datos o elementos (personas, animales, cosas, etc.)que tienen una
            propiedad o característica en común, la cual es observable en un lugar y un momento dado; y los
            cuales son objetivo de nuestro estudio, de la cual se desean sacar conclusiones. Cuando se estudia
            toda la población se denomina CENSO. (Se representa el Tamaño de Población: N).</p>

        <br>
        <h5>-Muestra:</h5>
        <p>Es el subconjunto de datos seleccionados de una población, la cual debe ser aleatoria y
            lo más representativa posible. Existen diversos métodos para calcular el tamaño de la muestra y
            metodologías para la selección de los elementos que la compondrán. Se considera que cada
            elemento de la población tiene la misma oportunidad de formar parte de la muestra. Las
            conclusiones basadas en una muestra aleatoria y representativa son confiables. (Se representa
            como Tamaño de muestra: n)</p>

        <br>
        <h5>A-tributo:</h5>
        <p> Es una característica o fenómeno que se pueden describir cualitativamente, o sea
            mediante palabras, por ejemplo: ciudad donde vive, género, variedad de árbol.</p>

        <br>
        <h5>-Variable:</h5>
        <p>Es una característica o fenómeno que se pueden describir cuantitativamente, es decir
            mediante números, por ejemplo, edad, estatura, diámetro de una varilla, contenido en gramos de
            un producto, resistencia de un material, ingreso familiar, y que puede variar entre los diferentes
            individuos de una población.</p>

        <br>
        <h5>-Dato:</h5>
        <p>Es un valor particular de la variable. </p>

        <br>
        <h5>-Constante:</h5>
        <p> Valor de una característica que permanece constante en todos los individuos. </p>

        <br>
        <h5>-Parámetro:</h5>
        <p>Constante numérica que actúa como indicador de una característica de la población,
            resumen la información de la población. Se simboliza por letras griegas.</p>


        <br>
        <h5>-Estadístico, estimador:</h5>
        <p>Medida que describe numéricamente una característica de la muestra.
            Se simboliza por letras latinas. </p>

        <br>
        <h5>-Unidad Experimental o Unidad de Observación:</h5>
        <p>Individuo y objeto en que se mide una variable
            y se denomina simple. También puede estar constituida por varios elementos, individuos u objetos
            y se denomina compleja.
            Se debe definir en la investigación la unidad de medición y el valor de precisión así: Longitud
            (Km, Metros, centímetros, milímetros, etc.), Peso (Kilogramos, libras etc.), Tiempo (años, meses,
            días, horas, minutos etc.) </p>

        <br>
        <h5>-Fuentes de Información:</h5>
        <br>
        a) <h5>Primaria:</h5>
        <p> Es el productor (persona o entidad) que origina la información: Por ejemplo, Dane,
            SENA, Grupos de Investigación</p>
        <br>
        b) <h5>Secundaria:</h5>
        <p>Cuando se trabaja o resume información que originalmente ha sido recopilada por
            otros que son los productores del dato. Boletines UNESCO, Bases de datos del DANE.</p>
        <br>
        <h5>La estadística se divide en dos ramas:</h5>
        <br>
        <h5>Estadística Descriptiva:</h5>
        <p>Conjunto de métodos y técnicas para explorar, recolectar, organización y
            resumir de la información en tablas, gráficos e indicadores; se usa para descripción de una población
            o muestra por medio de indicadores y la representación gráfica. Poder emitir conclusiones y
            recomendaciones.</p>
        <br>
        <h5>Estadística Inferencial:</h5>
        <p>Metodología para la generalización de los resultados de la información parcial
            obtenida en una muestra a toda la población de interés usando la metodología de la estadística
            descriptiva.</p>
        </p>
        <br>
        <h4>VARIABLES: CLASIFICACIÓN </h4>
        <h5>Variable:</h5>
        <p>Característica observable que varía entre los diferentes sujetos de la población
            Dato: Valor que toma la variable</p>
        <div class="ejercicios_button">
            <button type="button" class="btn btn-success"><a class="ejercicios_button" href="ejercicios_class_variable">Ejercicios</a></button>
        </div>
    </section>


    <br>
    <!-- SECTION PROBABILIDAD-->

    <section class="Distribución_normal">
        <h1 class="titulos_h1" id="titulo_dn">Distribución normal</h1>
        <br>
        <p>
            La distribución normal es la distribución continua que se utiliza más comúnmente para modelar un gran número
            de fenómenos aleatorios presentan una distribución de frecuencia con forma de campana. <br>
            Por ejemplo: Tiempos de reacción, medidas económicas, estatura, largo, mediciones de inteligencia, indicadores,
            medidas en procesos productivos, etc <br><br>
            La función de probabilidad se llama también función de densidad<br>

            𝑓(𝑥) = ∫ 1
            −
            𝜎√2𝜋
            {− (𝑥−𝜇)2
            𝑒
            2𝜎2
            }
        </p>
        <br>
        <p>
            Donde los símbolos e y  son la constantes matemáticas (2.7183 y 3.1416);  y  son los parámetros de media
            poblacional y desviación estándar, respectivamente.
            Los parámetros son:
            �
            �[𝑥] = 𝜇 ; 𝑉𝑎𝑟[𝑥]= 𝜎2
        </p>

    </section>


    <br>
    <!-- SECTION PROBABILIDAD-->

    <section class="Variable_aleatoria">
        <h1 class="titulos_h1" id="titulo_va">Variable aleatoria</h1>
        <br><br>

    </section>

    <br>
    <!-- SECTION PROBABILIDAD-->

    <section class="Distribución_Binomial">
        <h1 class="titulos_h1" id="titulo_db">Distribución Binomial</h1>
        <br><br>

    </section>



    <br>
    <!-- SECTION PROBABILIDAD-->

    <section class="Inferencia_estadística">
        <h1 class="titulos_h1" id="titulo_ie">Inferencia estadística</h1>
        <br><br>

    </section>


    <br>
    <!-- SECTION PROBABILIDAD-->

    <section class="tlc">
        <h1 class="titulos_h1" id="titulo_tlc">Teorema Limite Central</h1>
        <br><br>

    </section>


    <br>
    <!-- SECTION INTERVALO DE CONFIANZA-->
    <section class="intervalo_sect">
        <h1 id="titulo_ic" class="titulos_h1">Intervalos de confianza</h1>
        <br><br>
        <!-- Primer metodo espacio-->

        <br>
        <div data-aos="zoom-in-left" class="buttons" id="openModal">
            <!-- Botones para abrir los modales -->
            <button type="button" class="btn btn-success">¿Porque medio debo calcular?</button>
        </div>
        </br>

        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <h2>¿Por que metodo calcular? <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABBElEQVR4nJ3SSyuFURQG4KeIGOi4HAOZ+gV0TBgpM7llpiQZ+BEmMjkuITEyIJcxZ2LiiLkfpV3702fb3wlv7dr7Xetde623RTVGMIVpDPkDVtFGC0c4xhNesNhJ2Iu7KMj9OIhT3MTcH7jFesKF9hsJt4HrVLwc2y1jAm94j/cyzrBQJtqoJUmj+IinnhknePLl9qM8+tFXEWsVXk1m2g/owjku0Z2JHxT+NNDMJAT+AieYycSb0WT1ihFmsYddzGXiYTeGi8drxsROBWrR+G/bd+j3BcJYKwknJaoKbOMhFRcYw35scRzz2MEmBqLz9+ipKhCwhK3SO+zCFZ6x1kn4L3wCiS0qJ/vqw/4AAAAASUVORK5CYII=" title="Nombre de la imagen" alt="Nombre de la imagen" />
                </h2>
                <p>¡Hola! te ayudaremos a que conozcas el metodo por el cual calcular tu intervalo de confianza<br>para ello te realizaremos una serie de preguntas que nos permitan definir el mejor metodo para tu objetivo </p>
                <form id="confidenceIntervalForm">



                    <label>¿Se distribuye normal?</label>
                    <select id="stdDeviationSelect">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>

                    <br>

                    <!--¿Se distribuye normal? (si - no)-->
                    <div id="Desv_estandar">
                        <label>¿Conoce el valor de la desviación estándar?</label>
                        <select id="option_desv_estandar">
                            <option value="empty">...</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>


                    <!--(NORMAL) ¿Tamaño de poblacio (n) es mayor a 30 (n >30)? (si - no)-->
                    <div id="tamaño_n">
                        <label>¿Tamaño de poblacio (n) es mayor a 30 (n >30)?</label>
                        <select id="option_tamaño_n">
                            <option value="empty">...</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>


                    <!-- NO NORMAL -->
                    <!--NO NORMAL ¿Se distribuye normal? (si - no)-->
                    <div id="no_normalDesv_estandar">
                        <label>¿Conoce el valor de la desviación estándar.?</label>
                        <select id="NO_NORMALoption_desv_estandar">
                            <option value="empty">...</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <br>
                    <!--(NO NORMAL) ¿Tamaño de poblacio (n) es mayor a 30 (n >30)? (si - no)-->
                    <div id="no_normaltamaño_n">
                        <label>¿Tamaño de poblacio (n) es mayor a 30 (n >30).?</label>
                        <select id="NO_NORMALoption_tamaño_n">
                            <option value="empty">...</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <br>
                    <div id="result_tittle">👇👇👇👇👇👇👇</div>
                    <div id="result"></div>
                </form>
            </div>
        </div>
        <div>
            <h3 data-aos="zoom-in">Intervalo de confianza (Z)</h3>
            <p class="inter_z">Explicación: Este tipo de intervalo de confianza se utiliza cuando conoces la desviación estándar
                poblacional (σ) y tu muestra sigue una distribución normal.<br>
                <br>Fórmula: El intervalo de confianza (Z) se calcula como:<br> <br>LI = X̄ - Z * (σ / √n)<br><br>LS = X̄ + Z * (σ / √n)<br>
                <br>
                Cuándo usarlo: Debes usar el intervalo de confianza (Z) cuando tengas una muestra grande o conocias la desviación estándar poblacional y la distribución de la muestra es normal.
            </p>
            <p class="inter_z" data-aos="zoom-in-left"> Detalles:<br>
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
        <div>
            <h3 data-aos="zoom-in-right">Intervalo de confianza (t)</h3>
            <p class="inter_z" data-aos="zoom-in-left">Explicación: Este tipo de intervalo de confianza se utiliza cuando no conoces la desviación estándar poblacional (σ) y tu muestra sigue una distribución normal. En su lugar, utilizas la desviación estándar de la muestra (s) para estimar la poblacional.<br>
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
        <div>
            <h3 data-aos="zoom-in-left">Intervalo de Confianza Proporcional (Z)</h3>
            <p class="inter_z" data-aos="zoom-in-left">Explicación: Este tipo de intervalo de confianza se utiliza para estimar la proporción de una población cuando tienes una muestra grande y conoces la desviación estándar poblacional.<br>
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
    <script src="assets/js/all.js"></script>

    <!-- BackToTop Button -->
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

    <!-- Boton hacia arriba -->
    <a class="ir-arriba" javascript:void(0) title="Volver arriba">
        <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
        </span>
    </a>
</body>
</main>

</html>

<br>
<br>
<style>
    #desviación_estándarsi-no,
    #tamaño_n,
    #Desv_estandar,
    #no_normaltamaño_n,
    #no_normalDesv_estandar {
        display: none;
    }

    .ejercicios_button {
        color: white;
        text-decoration: none;
        text-align: center;
        margin-top: 100px;
    }

    .table {
        background-color: #e74c3c;
        width: 550px;
        text-align: center;
        color: #ffffff;
        margin-left: auto;
        margin-right: auto;
    }

    .img_probabilidad {
        text-align: center;
    }

    html {
        scroll-behavior: smooth;
    }

    .Inferencia_estadística {
        background-color: #1e1e31;
        margin-top: 200px;
        padding-top: 200px;
    }

    .Distribución_Binomial {
        background-color: #1e1e31;
        margin-top: 200px;
        padding-top: 200px;
    }

    .Variable_aleatoria {
        background-color: #1e1e31;
        margin-top: 200px;
        padding-top: 200px;
    }

    .Distribución_normal {
        background-color: #1e1e31;
        margin-top: 200px;
        padding-top: 200px;
    }

    .Clasificación_variables {
        background-color: #1e1e31;
        margin-top: 200px;
        padding-top: 200px;
    }

    .tlc {
        background-color: #1e1e31;
        margin-top: 200px;
        padding-top: 200px;
    }

    .intervalo_sect {
        background-color: #1e1e31;
        margin-top: 200px;
        padding-top: 200px;
    }

    .probabilidad {
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
        background-color: #2c2c49;
        position: fixed;
        top: 0;
        border-radius: 0px 5px 5px 0px;

        height: 100%;
        width: 200px;
    }

    .salida {
        text-align: center;
    }

    h2 {
        color: #000;
        text-align: center;
    }

    h1 {
        color: #ffffff;
        text-align: center;
    }

    .buttons {
        margin-top: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h4,
    h5 {
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
        color: white;
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

    /* Paragraph */
    section p {
        width: 500px;
    }

    body {
        background-image: url("https://images.unsplash.com/photo-1695970922375-34520eca9bed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzNTc5fDB8MXxhbGx8MTEzMnx8fHx8fDJ8fDE2OTgxMjU3NTR8&ixlib=rb-4.0.3&q=80&w=2560") !important;
        background-attachment: fixed !important;
        background-size: cover !important;
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