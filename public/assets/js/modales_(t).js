
function calculateInterval() {
    const sampleMean = parseFloat($('#sampleMean').val());
    const sampleSize = parseInt($('#sampleSize').val());
    const confidenceLevel = parseFloat($('#confidenceLevel').val());
    const degreesOfFreedom = sampleSize - 1;
      
    
    if (isNaN(sampleMean) || isNaN(sampleSize) || isNaN(confidenceLevel)) {
        $('#result').html('<div class="alert alert-danger" role="alert">Por favor, llenar todos los campos.</div>');
        return;
    }

 
const tValue = getTValue(confidenceLevel, degreesOfFreedom);

const marginOfError = tValue * (getStandardDeviation() / Math.sqrt(sampleSize));

const lowerBound = sampleMean  - marginOfError;
const upperBound =  sampleMean + marginOfError;

    const resultHTML = `
            <div class="alert alert-success" role="alert">
                Intervalo de Confianza: (${lowerBound.toFixed(2)}, ${upperBound.toFixed(2)})
            </div>
        `;
    $('#result').html(resultHTML);
}

document.getElementById('sampleMean').addEventListener('input', calculateInterval);
document.getElementById('sampleSize').addEventListener('input', calculateInterval);
document.getElementById('confidenceLevel').addEventListener('input', calculateInterval);

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