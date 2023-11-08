<!DOCTYPE html>
<html>

<head>
    <title>¿Que metodo debo usar?  </title>

</head>

<body>



    <button id="openModal">Abrir Modal</button>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>¿Por que metodo calcular?  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAABBElEQVR4nJ3SSyuFURQG4KeIGOi4HAOZ+gV0TBgpM7llpiQZ+BEmMjkuITEyIJcxZ2LiiLkfpV3702fb3wlv7dr7Xetde623RTVGMIVpDPkDVtFGC0c4xhNesNhJ2Iu7KMj9OIhT3MTcH7jFesKF9hsJt4HrVLwc2y1jAm94j/cyzrBQJtqoJUmj+IinnhknePLl9qM8+tFXEWsVXk1m2g/owjku0Z2JHxT+NNDMJAT+AieYycSb0WT1ihFmsYddzGXiYTeGi8drxsROBWrR+G/bd+j3BcJYKwknJaoKbOMhFRcYw35scRzz2MEmBqLz9+ipKhCwhK3SO+zCFZ6x1kn4L3wCiS0qJ/vqw/4AAAAASUVORK5CYII=" title="Nombre de la imagen" alt="Nombre de la imagen" />
        </h2>
        <p>¡Hola! te ayudaremos a que conozcas el metodo por el cual calcular tu intervalo de confianza<br>para ello te realizaremos una serie de preguntas que nos permitan definir el mejor metodo para tu objetivo </p>
               <form id="confidenceIntervalForm">



                <label>¿Se distribuye normal?</label>
                <select id="stdDeviationSelect" >
                    <option value="empty">...</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>

               <br>

                <!--¿Se distribuye normal? (si - no)-->
                <div id="Desv_estandar">
                    <label>¿Conoce el valor de la desviación estándar?</label>
                    <select id="option_desv_estandar">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
               <br>


                <!--(NORMAL) ¿Tamaño de poblacio (n) es mayor a 30 (n >30)? (si - no)-->
                <div id="tamaño_n">
                    <label>¿Tamaño de poblacio (n) es mayor a 30 (n >30)?</label>
                    <select id="option_tamaño_n">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
               <br>


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
               <br>
                <!--(NO NORMAL) ¿Tamaño de poblacio (n) es mayor a 30 (n >30)? (si - no)-->
                <div id="no_normaltamaño_n">
                    <label>¿Tamaño de poblacio (n) es mayor a 30 (n >30).?</label>
                    <select id="NO_NORMALoption_tamaño_n">
                        <option value="empty">...</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

               <br>
                 <div id="result_tittle">👇👇👇👇👇👇👇</div>
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
    </script>
</body>

</html>



<!DOCTYPE html>
<html>
<head>
  <title>Gráfica de Campana con Chart.js</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart"></canvas>

  <script>
    // Seleccionar el elemento canvas
    const canvas = document.getElementById('myChart');

    // Crear los datos para la gráfica de campana
    const data = {
      labels: ['Valor 1', 'Valor 2', 'Valor 3', 'Valor 4', 'Valor 5'],
      datasets: [{
        label: 'Campana',
        data: [15, 50, 60, 90, 10],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    };

    // Crear las opciones para la gráfica de campana
    const options = {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    // Crear la instancia de Chart.js
    const chart = new Chart(canvas, {
      type: 'line',
      data: data,
      options: options
    });
  </script>
</body>
</html>
