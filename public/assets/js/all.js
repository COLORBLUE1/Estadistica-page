//Scroll de contenido


// Scroll hacia arriba
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});





const sections = document.querySelectorAll('h2');

sections.forEach((section) => {
    const link = document.createElement('a');
    link.href = `#${section.id}`;
    link.textContent = section.textContent;
    link.addEventListener('click', (event) => {
        event.preventDefault();
        document.querySelector(link.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
    tableOfContents.appendChild(link);
});


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
    const result = document.getElementById("result");

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
            result.innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            Desv_estandar.style.display = "block";
        } else {
            result.innerHTML = "";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            no_normalDesv_estandar.style.display = "block";
          
        }

        if (stdDeviationSelect.value === "empty") {
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result.innerHTML = "";
        }
    });

    /* IF (¿Conoce el valor de la desviación estándar?)*/
    option_desv_estandar.addEventListener("change", function() {
        if (option_desv_estandar.value === "si") {
            result.innerHTML = "";
            tamaño_n.style.display = "none";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            result.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            tamaño_n.style.display = "block";
            result.innerHTML = "";
        }
        if (option_desv_estandar.value === "empty") {
            tamaño_n.style.display = "none";
            result.innerHTML = "";
        }
    });




    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?)*/
    option_tamaño_n.addEventListener("change", function() {
        if (option_tamaño_n.value === "si") {
             result.innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            tamaño_n.style.display = "block";
            result.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            result.innerHTML = "";
            no_normaltamaño_n.style.display = "none";
            no_normalDesv_estandar.style.display = "none";
            tamaño_n.style.display = "block";
            result.innerHTML = "Te sugerimos calcular por el valor de (t)";
        }

        if (option_tamaño_n.value === "empty") {
            tamaño_n.style.display = "none";
            result.innerHTML = "";
        }

    });


    /*opciones no normal*/

    /* IF (¿Conoce el valor de la desviación estándar? NO NORMAL)*/
    NO_NORMALoption_desv_estandar.addEventListener("change", function() {
        if (NO_NORMALoption_desv_estandar.value === "si") {
            no_normaltamaño_n.style.display = "block";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
        } else {
            no_normaltamaño_n.style.display = "block";
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
        }

        if (NO_NORMALoption_desv_estandar.value === "empty") {
            no_normaltamaño_n.style.display = "none";
            result.innerHTML = "";
        }
    });

    /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?) NO NORMAL*/
    NO_NORMALoption_tamaño_n.addEventListener("change", function() {
        if (NO_NORMALoption_tamaño_n.value === "si") {
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result.innerHTML = "Te sugerimos calcular por el valor de (Z)";
        } else {
            tamaño_n.style.display = "none";
            Desv_estandar.style.display = "none";
            result.innerHTML = "No disponible para calcular";
        }
        if (NO_NORMALoption_tamaño_n.value === "empty") {
          
            result.innerHTML = "";
        }

    });


    calculateButton.addEventListener("click", function() {
        // Aquí debes implementar el cálculo del intervalo de confianza según la selección y el valor de desviación estándar ingresado.
        // Luego, muestra el resultado en el elemento 'result'.
        result.innerHTML = "Aquí se mostrará el resultado del cálculo.";
    });
});
