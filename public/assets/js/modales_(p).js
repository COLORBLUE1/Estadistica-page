$(document).ready(function () {
    // Calculadora de Proporción
    $('#proportionForm').submit(function (e) {
        e.preventDefault();
        calculateProportion();
    });

    function calculateProportion() {
        const successCount = parseInt($('#successCount').val());
        const totalCount = parseInt($('#totalCount').val());

        if (isNaN(successCount) || isNaN(totalCount) || successCount < 0 || totalCount <= 0) {
            $('#proportionResult').html('<div class="alert alert-danger" role="alert">Por favor, llenar todos los campos.</div>');
            return;
        }

        // Lógica para calcular la Proporción
        const proportion = successCount / totalCount;

        const resultHTML = `
            <div class="alert alert-success" role="alert">
                Proporción calculada: ${proportion.toFixed(4)}
            </div>
        `;
        $('#proportionResult').html(resultHTML);
    }

    document.getElementById('totalCount').addEventListener('input', calculateProportion);
    document.getElementById('successCount').addEventListener('input', calculateProportion);




});