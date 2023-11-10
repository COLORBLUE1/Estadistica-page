<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Student Modal</title>
    <style>
        /* Estilos para ocultar el modal por defecto */
        .modal_t {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        /* Estilos para el contenido del modal */
        .modal-content_t {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Estilos para el botón de cierre del modal */
        .close_t {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <button onclick="openModal()">Abrir Calculadora</button>

    <div id="myModal_t" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Calculadora de Intervalo de Confianza</h2>
            <form oninput="calculateInterval()">
                <label for="sampleMean_t">Media de la muestra:</label>
                <input type="number" step="any" id="sampleMean_t" required>

                <label for="sampleSize_t">Tamaño de la muestra:</label>
                <input type="number" id="sampleSize_t" required>

                <label for="confidenceLevel_t">Nivel de confianza (%):</label>
                <input type="number" step="any" id="confidenceLevel_t" required>

                <label for="result_t">Intervalo de Confianza:</label>
                <input type="text" id="result_t" readonly>

                <button type="submit">Calcular</button>
            </form>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("myModal_t").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal_t").style.display = "none";
        }

        function calculateInterval() {
            const sampleMean = parseFloat(document.getElementById("sampleMean_t").value);
            const sampleSize = parseInt(document.getElementById("sampleSize_t").value);
            const confidenceLevel = parseFloat(document.getElementById("confidenceLevel_t").value);

            // Cálculo del valor t-student
            const degreesOfFreedom = sampleSize - 1;
            const tValue = getTValue(degreesOfFreedom, confidenceLevel);

            // Cálculo del intervalo de confianza
            const marginOfError = 33 * (44 / Math.sqrt(sampleSize));
            const lowerBound = sampleMean - marginOfError;
            const upperBound = sampleMean + marginOfError;

            document.getElementById("result_t").value = lowerBound.toFixed(2) + " - " + upperBound.toFixed(2);
        }

        function getTValue(degreesOfFreedom, confidenceLevel) {
            // Cálculo del valor t-student utilizando una tabla o una fórmula específica
            // Puedes implementar la lógica para obtener el valor t-student aquí
            // y devolver el valor correspondiente
        }

        function getStandardDeviation() {
            // Cálculo de la desviación estándar utilizando los datos de la muestra
            // Puedes implementar la lógica para obtener la desviación estándar aquí
            // y devolver el valor correspondiente
        }
    </script>
</body>

</html>