
document.addEventListener("DOMContentLoaded", function () {
    const openModalButton = document.getElementById("openModal");
    const closeModalButton = document.getElementById("closeModal");
    const modal = document.getElementById("modal");
    const clean = document.getElementById("clean");

    /*Variables de opciones*/
    const stdDeviationSelect = document.getElementById("stdDeviationSelect");
    const option_desv_estandar = document.getElementById("option_desv_estandar");
    const option_tamaño_n = document.getElementById("option_tamaño_n");
    const tamaño_n = document.getElementById("tamaño_n");
    const Desv_estandar = document.getElementById("Desv_estandar");

    /*No normal variables*/
    const NO_NORMALoption_desv_estandar = document.getElementById(
        "NO_NORMALoption_desv_estandar"
    );
    const no_normalDesv_estandar = document.getElementById(
        "no_normalDesv_estandar"
    );
    const NO_NORMALoption_tamaño_n = document.getElementById(
        "NO_NORMALoption_tamaño_n"
    );
    const no_normaltamaño_n = document.getElementById("no_normaltamaño_n");

    const calculateButton = document.getElementById("calculateButton");
    const result_nulo = document.getElementById("result_nulo");
    const result_t = document.getElementById("result_t");
    const result_z = document.getElementById("result_z");

    openModalButton.addEventListener("click", function () {
        modal.style.display = "block";
    });

    closeModalButton.addEventListener("click", function () {
        modal.style.display = "none";
    });

    clean.addEventListener("click", function () {
        no_normaltamaño_n.style.display = "none";
        no_normalDesv_estandar.style.display = "none";
        tamaño_n.style.display = "none";
        Desv_estandar.style.display = "none";
        result_t.style.display = "none";
        result_z.style.display = "none";
        result_nulo.style.display = "none";
        result_nulo.innerHTML = "";
        result_t.innerHTML = "";
        result_z.innerHTML = "";
        clean.style.display = "none";
        modal_1.style.display = "none";
        openModalBtn_result_t.style.display = "none";
        openModalBtn_result_z.style.display = "none";

    });

    /*opciones normal*/
    /* IF (¿SE DISTIBUYE NORMAL?)*/
    stdDeviationSelect.addEventListener("change", function () {
        if (stdDeviationSelect.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            Desv_estandar.style.display = "block";
            clean.style.display = "block";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        } else {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            no_normalDesv_estandar.style.display = "block";
            clean.style.display = "block";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
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
            result_z.innerHTML = "";
            clean.style.display = "none";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        }
    });

    /* IF (¿Conoce el valor de la desviación estándar?)*/
    option_desv_estandar.addEventListener("change", function () {
        if (option_desv_estandar.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            modal_1.style.display = "none";
            tamaño_n.style.display = "none";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            result_z.style.display = "block";
            clean.style.display = "block";
            openModalBtn_result_z.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "block";
            result_z.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            tamaño_n.style.display = "block";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            clean.style.display = "block";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        }
        if (option_desv_estandar.value === "empty") {
            tamaño_n.style.display = "none";
            result_t.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            clean.style.display = "block";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            modal_1.style.display = "none";
            result_z.innerHTML = "";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        }
    });

    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?)*/
    option_tamaño_n.addEventListener("change", function () {
        if (option_tamaño_n.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            tamaño_n.style.display = "block";
            result_z.style.display = "block";
            clean.style.display = "block";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            modal_1.style.display = "none";
            openModalBtn_result_z.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "block";
            result_z.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "block";
            result_t.style.display = "block";
            clean.style.display = "block";
            modal_1.style.display = "none";
            openModalBtn_result_z.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_t.style.display = "block";
            result_t.innerHTML = "Te sugerimos calcular por el valor de (t)";
        }

        if (option_tamaño_n.value === "empty") {
            result_t.style.display = "none";
            result_z.style.display = "none";
            clean.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            modal_1.style.display = "none";
            clean.style.display = "block";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        }
    });

    /*opciones no normal*/

    /* IF (¿Conoce el valor de la desviación estándar? NO NORMAL)*/
    NO_NORMALoption_desv_estandar.addEventListener("change", function () {
        if (NO_NORMALoption_desv_estandar.value === "si") {
            no_normaltamaño_n.style.display = "block";
            clean.style.display = "block";
            result_z.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        } else {
            no_normaltamaño_n.style.display = "block";
            clean.style.display = "block";
            result_z.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        }

        if (NO_NORMALoption_desv_estandar.value === "empty") {
            result_z.style.display = "none";
            clean.style.display = "block";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            no_normaltamaño_n.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
        }
    });

    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?) NO NORMAL*/
    NO_NORMALoption_tamaño_n.addEventListener("change", function () {
        if (NO_NORMALoption_tamaño_n.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result_z.style.display = "block";
            clean.style.display = "block";
            modal_1.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
            openModalBtn_result_t.style.display = "block";
            result_z.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            result_z.style.display = "none";
            result_t.style.display = "none";
            result_nulo.style.display = "none";
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result_nulo.style.display = "block";
            clean.style.display = "block";
            modal_1.style.display = "none";
            openModalBtn_result_z.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            result_nulo.innerHTML = "No disponible para calcular";
        }
        if (NO_NORMALoption_tamaño_n.value === "empty") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            result_t.style.display = "none";
            clean.style.display = "none";
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            openModalBtn_result_z.style.display = "none";
            openModalBtn_result_.style.display = "none";
        }
    });

    /* CALCULADORAS */

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

    /* VALOR T*/

    function calcular() {
        var media = document.getElementById("media").value;
        var desviacion = document.getElementById("desviacion").value;
        var alfa = document.getElementById("alfa").value;
        var gradosLibertad = document.getElementById("gradosLibertad").value;
        var poblacion = document.getElementById("poblacion").value;

        var t = calcularT(alfa, gradosLibertad);

        var intervalo = t * desviacion / Math.sqrt(poblacion);

        var resultado = `
Intervalo de confianza: ${media - intervalo} < μ < ${media + intervalo}
`;

        document.getElementById("resultado").innerHTML = resultado;
    }

    function calcularT(alfa, gradosLibertad) {
        var t = 0;

        var tTabla = [
            [0.001, 3.182],
            [0.01, 2.776],
            [0.025, 2.571],
            [0.05, 2.326],
            [0.1, 1.960],
        ];

        for (var i = 0; i < tTabla.length; i++) {
            if (alfa <= tTabla[i][0]) {
                t = tTabla[i][1];
                break;
            }
        }

        return t;
    }

    function cerrarModal() {
        document.getElementById("modal").style.display = "none";
    }

    document.getElementById("media").addEventListener("change", calcular);
    document.getElementById("desviacion").addEventListener("change", calcular);
    document.getElementById("alfa").addEventListener("change", calcular);
    document.getElementById("gradosLibertad").addEventListener("change", calcular);
    document.getElementById("poblacion").addEventListener("change", calcular);


    /* MODAL OPEN Y CLOSE*/



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


    /*  (t student)*/
    openModalBtn_t.addEventListener("click", () => {
        modal_2.style.display = "block";
    });

    closeModalBtn_t.addEventListener("click", () => {
        modal_2.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal_2.style.display = "none";
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

    // //  /*  (t student)*/

    // openModalBtn_result_t.addEventListener("click", () => {
    //     modal_2.style.display = "block";
    // });

    // closeModalBtn_result_t.addEventListener("click", () => {
    //     modal_2.style.display = "none";
    // });

    // window.addEventListener("click", (event) => {
    //     if (event.target === modal) {
    //         modal_2.style.display = "none";
    //     }
    // });




});
