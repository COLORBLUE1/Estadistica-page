
/* CALCULOS VALOR Z*/




function calcularIntervalo() {
    const muestra = parseFloat(document.getElementById('muestra').value);
    const media = parseFloat(document.getElementById('media').value);
    const desviacion = parseFloat(document.getElementById('desviacion').value);
    const nivel = parseFloat(document.getElementById('nivel').value);

    




    const valorZ = (1 - (nivel/100)) / 2 * Math.sqrt((nivel/100)).toFixed(3);
    const intervalo = valorZ * (desviacion / Math.sqrt(muestra));
    const resultHTML_z = `
        <div class="alert alert-success" role="alert">
            Intervalo de Confianza:<br> (${(media - intervalo).toFixed(3)}, ${(media + intervalo).toFixed(3)})
        </div>
    `;
    $('#resultado').html(resultHTML_z);

    if (isNaN(muestra) || isNaN(media) || isNaN(cdesviacion) || isNaN(nivel)) {
        $('#resultado').html('<div class="alert alert-danger" role="alert">Por favor, llenar todos los campos.</div>');
        return;
    }
}

document.getElementById('muestra').addEventListener('input', calcularIntervalo);
document.getElementById('media').addEventListener('input', calcularIntervalo);
document.getElementById('desviacion').addEventListener('input', calcularIntervalo);
document.getElementById('nivel').addEventListener('input', calcularIntervalo);


// Función para calcular el valor de z


const openModalBtn_result_z = document.getElementById("openModalBtn_result_z");
const closeModalBtn_result_z = document.getElementById("closeModalBtn_result_z");


const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const modal_1 = document.getElementById("myModal");
const modal_2 = document.getElementById("myModal_t");

/* OPEN - CLOSE (DEFINICION)*/
openModalBtn.addEventListener("click", () => {
    modal_1.style.display = "block";
});

closeModalBtn.addEventListener("click", () => {
    modal_1.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal_1.style.display = "none";
    }
});

/* OPEN - CLOSE (RESULTADO)*/

/* (Valor Z)*/
openModalBtn_result_z.addEventListener("click", () => {
    modal_1.style.display = "block";
});

closeModalBtn_result_z.addEventListener("click", () => {
    modal_1.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal_1.style.display = "none";
    }
});

/* OPEN - CLOSE (RESULTADO)*/

/* (Valor Z)*/
openModalBtn_result_z.addEventListener("click", () => {
    modal_1.style.display = "block";
});

closeModalBtn_result_z.addEventListener("click", () => {
    modal_1.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal_1.style.display = "none";
    }
});
