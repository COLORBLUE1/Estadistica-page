<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Intervalo de Confianza</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #calculator {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div id="calculator">
    <h2>Calculadora de Intervalo de Confianza</h2>
    <label for="mean">Media de la muestra (x̄):</label>
    <input type="number" id="mean" step="0.01" required>

    <label for="sampleSize">Tamaño de la muestra (n):</label>
    <input type="number" id="sampleSize" required>

    <label for="confidenceLevel">Nivel de confianza (%):</label>
    <input type="number" id="confidenceLevel" step="0.01" required>

    <label for="degreesOfFreedom">Grados de libertad (df):</label>
    <input type="number" id="degreesOfFreedom" readonly>

    <button onclick="calculateInterval()">Calcular Intervalo</button>

    <div id="result"></div>
</div>

<script>
    function calculateInterval() {
        const mean = parseFloat(document.getElementById('mean').value);
        const sampleSize = parseInt(document.getElementById('sampleSize').value);
        const confidenceLevel = parseFloat(document.getElementById('confidenceLevel').value);

        const degreesOfFreedom = sampleSize - 1;
        document.getElementById('degreesOfFreedom').value = degreesOfFreedom;

        // Consulta una tabla de t-student o utiliza una función para obtener el valor de t.
        // En este ejemplo, usamos una función de JavaScript para obtener el valor de t.
        const tValue = getTValue(confidenceLevel, degreesOfFreedom);

        const marginOfError = tValue * (getStandardDeviation() / Math.sqrt(sampleSize));

        const lowerBound = mean - marginOfError;
        const upperBound = mean + marginOfError;

        const resultElement = document.getElementById('result');
        resultElement.innerHTML = `Intervalo de Confianza: (${lowerBound.toFixed(2)}, ${upperBound.toFixed(2)})`;
    }

    function getStandardDeviation() {
        // Aquí puedes implementar la lógica para obtener la desviación estándar si es necesario.
        // Por simplicidad, asumimos una desviación estándar conocida en este ejemplo.
        return 1;
    }

    function getTValue(confidenceLevel, degreesOfFreedom) {
        // Implementa la lógica para obtener el valor de t según el nivel de confianza y grados de libertad.
        // Puedes consultar una tabla de t-student o utilizar una función específica para esto.
        // En este ejemplo, estamos utilizando una función simple que puede no ser precisa en todos los casos.
        const alpha = 1 - confidenceLevel / 100;
        return Math.abs(tDistributionInverse(alpha / 2, degreesOfFreedom));
    }

    // Función simple para obtener el inverso de la distribución t de Student.
    function tDistributionInverse(p, df) {
        const q = 1 - p;
        const t = Math.sqrt(df / (df + Math.pow(q / p, 2)));
        return t;
    }
</script>

</body>
</html>
