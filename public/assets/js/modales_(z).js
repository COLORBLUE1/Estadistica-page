
    /* CALCULOS VALOR Z*/
    function calcularIntervalo() {
        const muestra = parseFloat(document.getElementById('muestra').value);
        const media = parseFloat(document.getElementById('media').value);
        const desviacion = parseFloat(document.getElementById('desviacion').value);
        const nivel = parseFloat(document.getElementById('nivel').value);


        const valorZ = 1.96; // Aproximación para niveles de confianza de 95% y 99%
        const intervalo = valorZ * (desviacion / Math.sqrt(muestra));
        const resultado = `Intervalo de confianza: (${media - intervalo}, ${media + intervalo})`;
        document.getElementById('resultado').textContent = resultado;
    }

    document.getElementById('muestra').addEventListener('input', calcularIntervalo);
    document.getElementById('media').addEventListener('input', calcularIntervalo);
    document.getElementById('desviacion').addEventListener('input', calcularIntervalo);
    document.getElementById('nivel').addEventListener('input', calcularIntervalo);


    const openModalBtn_result_z = document.getElementById("openModalBtn_result_z");
    const closeModalBtn_result_z = document.getElementById("closeModalBtn_result_z");

    const openModalBtn_result_t = document.getElementById("openModalBtn_result_t");
    const closeModalBtn_result_t = document.getElementById("closeModalBtn_result_t");

    const openModalBtn_result_p = document.getElementById("openModalBtn_result_p");

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
