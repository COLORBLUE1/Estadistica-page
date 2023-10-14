<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Intervalo de Confianza</title>
</head>
<body>
    <h1>Calculadora de Intervalo de Confianza</h1>
    <div>
        <label for="mean">Media poblacional (μ):</label>
        <input type="number" id="mean">
    </div>
    <div>
        <label for="stddev">Desviación estándar poblacional (σ):</label>
        <input type="number" id="stddev">
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
        <label for="value_z">Valor de z:</label>
        <input type="number" id="value-z">
    </div>
    <button onclick="calculateCI()">Calcular Intervalo de Confianza</button>
    <div>
        <p>Límite Inferior (LI): <span id="lower-limit"></span></p>
        <p>Límite Superior (LS): <span id="upper-limit"></span></p>
       
    </div>

    <script>
        function calculateCI() {
            const mean = parseFloat(document.getElementById('mean').value);
            const stddev = parseFloat(document.getElementById('stddev').value);
            const sampleSize = parseFloat(document.getElementById('sample-size').value);
            const valuez = parseFloat(document.getElementById('value-z').value);
            const confidenceLevel = parseFloat(document.getElementById('confidence-level').value);

            const marginOfError = valuez * (stddev / Math.sqrt(sampleSize));

            const lowerLimit = mean - marginOfError;
            const upperLimit = mean + marginOfError;

            document.getElementById('lower-limit').innerText = `LI: ${lowerLimit}`;
            document.getElementById('upper-limit').innerText = `LS: ${upperLimit}`;
            document.getElementById('z-value').innerText = `z: ${z}`;
        }

        function calculateZ(confidenceLevel) {
            const alpha = 1 - confidenceLevel;
            // Aquí puedes usar la tabla de distribución Z o una función para calcular Z
            // Por ejemplo, si estás trabajando con una distribución normal estándar (media=0, desviación estándar=1):
            const standardNormal = Math.abs((1 - alpha / 2));
            return standardNormal;
        }
    </script>
</body>
</html>
