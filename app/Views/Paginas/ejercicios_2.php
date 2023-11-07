<!DOCTYPE html>
<html>

<head>
    <title>Calculadora de Intervalos de Confianza</title>
</head>

<body>
    <button id="openModal">Abrir Modal</button>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Calculadora de Intervalos de Confianza</h2>
            <form id="confidenceIntervalForm">



                <label>¿Se distribuye normal?</label>
                <select id="stdDeviationSelect">
                    <option value="empty">...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

                <br><br>

                <!--¿Se distribuye normal? (si - no)-->
                <div id="Desv_estandar">
                    <label>¿Conoce el valor de la desviación estándar?</label>
                    <select id="option_desv_estandar">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br><br>


                <!--(NORMAL) ¿Tamaño de poblacio (n) es mayor a 30 (n >30)? (si - no)-->
                <div id="tamaño_n">
                    <label>¿Tamaño de poblacio (n) es mayor a 30 (n >30)?</label>
                    <select id="option_tamaño_n">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br><br>


                <!-- NO NORMAL -->
                <!--NO NORMAL ¿Se distribuye normal? (si - no)-->
                <div id="no_normalDesv_estandar">
                    <label>¿Conoce el valor de la desviación estándar.?</label>
                    <select id="NO_NORMALoption_desv_estandar">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <br><br>
                <!--(NO NORMAL) ¿Tamaño de poblacio (n) es mayor a 30 (n >30)? (si - no)-->
                <div id="no_normaltamaño_n">
                    <label>¿Tamaño de poblacio (n) es mayor a 30 (n >30).?</label>
                    <select id="NO_NORMALoption_tamaño_n">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <br><br>
                <div id="stdDeviationInput">
                    <div id="result"></div>
                </div>


                <button type="button" id="calculateButton">Calcular Intervalo de Confianza</button>
                <div id="result"></div>



            </form>
        </div>
    </div>

    <style>
        /* Estilo para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            width: 60%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        /* Estilos de formularios*/

        #desviación_estándarsi-no,
        #tamaño_n,
        #Desv_estandar,
        #no_normaltamaño_n, #no_normalDesv_estandar {
            display: none;
        }



        /* Estilo para ocultar o mostrar el campo de entrada de desviación estándar según la selección */
    </style>
    <script>
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
            // const stdDeviationSelect = document.getElementById("stdDeviationSelect");
            // const stdDeviationSelect = document.getElementById("stdDeviationSelect");
            // const stdDeviationSelect = document.getElementById("stdDeviationSelect");
            // const stdDeviationSelect = document.getElementById("stdDeviationSelect");
            // const stdDeviationSelect = document.getElementById("stdDeviationSelect");



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
                    Desv_estandar.style.display = "block";
                } else {
                    no_normalDesv_estandar.style.display = "block";
                  
                }

                if (stdDeviationSelect.value === "empty") {
                    tamaño_n.style.display = "none";
                    result.innerHTML = "";
                }
            });

            /* IF (¿Conoce el valor de la desviación estándar?)*/
            option_desv_estandar.addEventListener("change", function() {
                if (option_desv_estandar.value === "si") {
                    tamaño_n.style.display = "none";
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
                    tamaño_n.style.display = "block";
                    result.innerHTML = "Te sugerimos calcular por el valor de (Z)";
                } else {
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
                   
                } else {
                    no_normaltamaño_n.style.display = "block";
                }

                if (option_tamaño_n.value === "empty") {
                    no_normaltamaño_n.style.display = "none";
                    result.innerHTML = "";
                }
            });

            /* IF (¿Tamaño de poblacio (n) es mayor a 30 (n >30)?) NO NORMAL*/
            NO_NORMALoption_tamaño_n.addEventListener("change", function() {
                if (NO_NORMALoption_tamaño_n.value === "si") {

                    result.innerHTML = "Te sugerimos calcular por el valor de (Z)";
                } else {
                    result.innerHTML = "No disponible para calcular";
                }

                if (option_tamaño_n.value === "empty") {
                    no_normaltamaño_n.style.display = "none";
                    result.innerHTML = "";
                }

            });


            calculateButton.addEventListener("click", function() {
                // Aquí debes implementar el cálculo del intervalo de confianza según la selección y el valor de desviación estándar ingresado.
                // Luego, muestra el resultado en el elemento 'result'.
                result.innerHTML = "Aquí se mostrará el resultado del cálculo.";
            });
        });
    </script>
</body>

</html>