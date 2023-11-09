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
    


    // Para calcular el valor crítico de t, necesitas una función o una tabla de distribución t
    // Aquí un ejemplo con la librería t-distribution, asegúrate de tenerla instalada.
    const tDistribution = require('t-distribution');
    const tCriticalValue = tDistribution.inv(confidenceLevel, degreesOfFreedom);

    const degreesOfFreedom = sampleSize - 1;
    const valor_t = parseFloat(valor_tInput.value);
    const marginOfError = tCriticalValue * (sampleStandardDeviation / Math.sqrt(sampleSize));

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
    const result_nulo = document.getElementById("result_nulo");
    const result_t = document.getElementById("result_t");
    const result_z = document.getElementById("result_z");

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
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            Desv_estandar.style.display = "block";
        } else {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            no_normalDesv_estandar.style.display = "block";
          
        }

        if (stdDeviationSelect.value === "empty") {
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
        }
    });

    /* IF (¿Conoce el valor de la desviación estándar?)*/
    option_desv_estandar.addEventListener("change", function() {
        if (option_desv_estandar.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            tamaño_n.style.display = "none";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            result_t.style.display = "none"
            result_nulo.style.display = "none";
            result_z.style.display = "block";
            result_z.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            tamaño_n.style.display = "block";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
        }
        if (option_desv_estandar.value === "empty") {
            tamaño_n.style.display = "none";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
        }
    });




    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?)*/
    option_tamaño_n.addEventListener("change", function() {
        if (option_tamaño_n.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            tamaño_n.style.display = "block";
            result_z.style.display = "block";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            result_z.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "block";
            result_t.style.display = "block";
            result_t.innerHTML = "Te sugerimos calcular por el valor de (t)";
        }

        if (option_tamaño_n.value === "empty") {
             result_t.style.display = "none";
             result_z.style.display = "none";
             result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
        }

    });


    /*opciones no normal*/

    /* IF (¿Conoce el valor de la desviación estándar? NO NORMAL)*/
    NO_NORMALoption_desv_estandar.addEventListener("change", function() {
        if (NO_NORMALoption_desv_estandar.value === "si") {
            no_normaltamaño_n.style.display = "block";
            result_z.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
        } else {
            no_normaltamaño_n.style.display = "block";
            result_z.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
        }

        if (NO_NORMALoption_desv_estandar.value === "empty") {
            result_z.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            no_normaltamaño_n.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
        }
    });

    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?) NO NORMAL*/
    NO_NORMALoption_tamaño_n.addEventListener("change", function() {
        if (NO_NORMALoption_tamaño_n.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result_z.style.display = "block";
            result_z.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            result_z.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
             result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result_nulo.style.display = "block";
            result_nulo.innerHTML = "No disponible para calcular";
        }
        if (NO_NORMALoption_tamaño_n.value === "empty") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z .innerHTML = "";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
        }

    });


/* CALCULADORAS */


function openModal(modalNumber) {
    document.getElementById('myModal' + modalNumber).style.display = 'block';
    modal.style.display = "none";
}

function closeModal(modalNumber) {
    document.getElementById('myModal' + modalNumber).style.display = 'none';
}


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
});