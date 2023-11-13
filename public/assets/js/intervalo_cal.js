
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
        stdDeviationSelect.value = "";

    });

    /*opciones normal*/
    /* IF (¿SE DISTIBUYE NORMAL?)*/
    stdDeviationSelect.addEventListener("change", function () {
        if (stdDeviationSelect.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            result_nulo.innerHTML = "";
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
            stdDeviationSelect.value = "";
            Desv_estandar.style.display = "none";
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
            option_desv_estandar.value = "";
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
            no_normalDesv_estandar.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            openModalBtn_result_z.style.display = "none";
            stdDeviationSelect.value = "";
        }
    });

    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?) NO NORMAL*/
    NO_NORMALoption_tamaño_n.addEventListener("change", function () {
        if (NO_NORMALoption_tamaño_n.value === "si") {
            result_nulo.innerHTML = "";
            result_t.innerHTML = "";
            result_z.innerHTML = "";
            no_normaltamaño_n.style.display = "block";
            no_normalDesv_estandar.style.display = "block";
            tamaño_n.style.display = "none";
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
            result_z.style.display = "none";
            result_nulo.style.display = "none";
            openModalBtn_result_z.style.display = "none";
            openModalBtn_result_t.style.display = "none";
            clean.style.display = "block";
            no_normaltamaño_n.style.display = "none";
            NO_NORMALoption_desv_estandar.value="";
        }
    });

});
