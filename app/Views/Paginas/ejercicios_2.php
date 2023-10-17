<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class='jumbotron' style="backdrop-filter: blur(10px);
    background-color:rgba(250, 250, 250, 0.2); position:absolute">
        <h3 class='display-4 relawayStandart text-light shadow-sm'>HERAMIENTAS</h3>
    </div>
    <section>
        <div data-aos="zoom-out-up" class="buttons" style="margin-top:30% !important;  display: flex;
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
        <div>

            <div>
                <div id="myModal2" class="modal" style="color:#000">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal(2)">&times;</span>
                        <form>
                            <!-- Contenido del segundo formulario -->
                            <!-- <h1>Calculadora de Intervalo de Confianza (t de Student)</h1>
                        <div>
                            <label for="mean">Media poblacional (μ):</label>
                            <input style=" box-shadow:none !important;
 border-style:solid !important;
 border-color:#000000;
 border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-style:none;" type="number" id="mean" step="0.01" required>
                            <div class="error" id="mean-error"></div>
                        </div>
                        <div>
                            <label for="stddev">Desviación estándar poblacional (σ):</label>
                            <input style=" box-shadow:none !important;
 border-style:solid !important;
 border-color:#000000;
 border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-style:none;" type="number" id="stddev" step="0.01" required>
                            <div class="error" id="stddev-error"></div>
                        </div>
                        <div>
                            <label for="sample-size">Tamaño de muestra (n):</label>
                            <input style=" box-shadow:none !important;border-style:solid !important;border-color:#000000;border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-style:none;" type="number" id="sample-size" required>
                            <div class="error" id="sample-size-error"></div>
                        </div>
                        <div>
                            <label for="confidence-level">Nivel de confianza (1-α):</label>
                            <input style=" box-shadow:none !important;border-style:solid !important;border-color:#000000;border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-style:none;" type="number" id="confidence-level" step="0.001" required>
                            <div class="error" id="confidence-level-error"></div>
                        </div>
                        <div>
                            <label for="z-value">Valor de t:</label>
                            <input style=" box-shadow:none !important;border-style:solid !important;border-color:#000000;border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;border-style:none;" type="number" id="z-value" step="0.000001" required>
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
                        </script> -->
                        </form>
                    </div>
                </div>
                <div id="myModal3" class="modal" style="color:#000">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal(3)">&times;</span>
                        <h2>Completa el formulario 3</h2>
                        <form>
                            <!-- Contenido del tercer formulario -->
                            <h1>Calculadora de Intervalo de Confianza</h1>
                            <div>
                                <label for="mean">Media muestral (X̄):</label>
                                <input type="number" id="mean">
                            </div>
                            <div>
                                <label for="sample-size">Tamaño de muestra (n):</label>
                                <input type="number" id="sample-size">
                            </div>
                            <div>
                                <label for="confidence-level">Nivel de confianza (1-α):</label>
                                <input type="number" id="confidence-level">
                            </div>
                            <div>
                                <label for="standard-error">Error estándar de la media (SEM):</label>
                                <input type="number" id="standard-error">
                            </div>
                            <div>
                                <label for="t-critical-value">Valor crítico de t:</label>
                                <input type="number" id="t-critical-value">
                            </div>
                            <div>
                                <p>Límite Inferior (LI): <span id="lower-limit"></span></p>
                                <p>Límite Superior (LS): <span id="upper-limit"></span></p>
                            </div>

                            <button onclick="calculateCI()">Calcular Intervalo de Confianza</button>

                            <script>
                                function calculateCI() {
                                    const mean = parseFloat(document.getElementById('mean').value);
                                    const sampleSize = parseFloat(document.getElementById('sample-size').value);
                                    const confidenceLevel = parseFloat(document.getElementById('confidence-level').value);
                                    const standardError = parseFloat(document.getElementById('standard-error').value);
                                    const tCriticalValue = parseFloat(document.getElementById('t-critical-value').value);

                                    // Calcula el margen de error
                                    const marginOfError = tCriticalValue * standardError;

                                    // Calcula los límites del intervalo de confianza
                                    const lowerLimit = mean - marginOfError;
                                    const upperLimit = mean + marginOfError;

                                    document.getElementById('lower-limit').innerText = `LI: ${lowerLimit}`;
                                    document.getElementById('upper-limit').innerText = `LS: ${upperLimit}`;
                                }
                            </script>
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
    </section>
    <br><br>
   
    
</body>
<section>
        <div>
            <h1>Calculadoras</h1>
   </div>
     </section>
<style>
    body {
      
        min-height: 100vh;
        background: #161623;
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
</style>

</html>