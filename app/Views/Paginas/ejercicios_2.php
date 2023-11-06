<!DOCTYPE html>
<html>

<head>
    <title>Calculadora de Intervalos de Confianza</title>
</head>

<body>
    <button id="openModal">Abrir Modal</button>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Calculadora de Intervalos de Confianza</h2>
            <form id="confidenceIntervalForm">

                <!--caso  ¿Se distribuye normal?-->
                <label>¿Se distribuye normal?</label>
                <select id="stdDeviationSelect">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

                <!-- Caso "si" ¿Se distribuye normal?-->
                <!-- Caso ¿Conoce el valor de la desviación estándar?-->
                <label>¿Conoce el valor de la desviación estándar?</label>
                <select id="stdDeviationSelect">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

                <!-- Caso no ¿Conoce el valor de la desviación estándar?-->
                <label>¿Conoce el valor de la desviación estándar?</label>
                <select id="stdDeviationSelect">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

                <!-- Caso si ¿Conoce el valor de la desviación estándar?-->
                <label>¿El tamaño de su poblacion (n) es mayor que 30 (n>30)?</label>
                <select id="stdDeviationSelect">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>


                <label>¿Conoce el valor de la desviación estándar?</label>
                <select id="stdDeviationSelect">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>



                <div id="stdDeviationInput">
                    <label>Ingrese el valor de la desviación estándar:</label>
                    <input type="number" id="stdDeviationValue">
                </div>
                <button type="button" id="calculateButton">Calcular Intervalo de Confianza</button>
                <div id="result"></div>
            </form>
        </div>
    </div>
    <style>
        /* Estilo para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            width: 60%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        /* Estilo para ocultar o mostrar el campo de entrada de desviación estándar según la selección */
        #stdDeviationInput {
            display: none;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openModalButton = document.getElementById("openModal");
            const closeModalButton = document.getElementById("closeModal");
            const modal = document.getElementById("modal");
            const stdDeviationSelect = document.getElementById("stdDeviationSelect");
            const stdDeviationInput = document.getElementById("stdDeviationInput");
            const calculateButton = document.getElementById("calculateButton");
            const result = document.getElementById("result");

            openModalButton.addEventListener("click", function() {
                modal.style.display = "block";
            });

            closeModalButton.addEventListener("click", function() {
                modal.style.display = "none";
            });

            stdDeviationSelect.addEventListener("change", function() {
                switch (stdDeviationSelect.value) {
                    case "si":
                        stdDeviationInput.style.display = "block";
                        break;
                    case "no":
                        stdDeviationInput.style.display = "none";
                        break;
                    default:
                        break;
                }
            });

            calculateButton.addEventListener("click", function() {
                // Aquí debes implementar el cálculo del intervalo de confianza según la selección y el valor de desviación estándar ingresado.
                // Luego, muestra el resultado en el elemento 'result'.
                result.innerHTML = "Aquí se mostrará el resultado del cálculo.";
            });
        });
    </script>
</body>

</html>