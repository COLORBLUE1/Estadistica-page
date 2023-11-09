<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de intervalo de confianza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: sans-serif;
        }

        .modal {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px #ccc;
        }

        .modal-header {
            background-color: #ccc;
            padding: 10px;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            background-color: #ccc;
            padding: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        p {
            margin: 0;
        }
    </style>
</head>

<body>
<div id="modal">
    <div class="modal-header">
      <h2>Calculadora de intervalo de confianza</h2>
    </div>
    <div class="modal-body">
      <form action="" onsubmit="calcular()">
        <input type="text" id="media" placeholder="Media" required>
        <input type="text" id="desviacion" placeholder="Desviación estándar" required>
        <input type="text" id="alfa" placeholder="Nivel de confianza" required>
        <input type="text" id="gradosLibertad" placeholder="Grados de libertad" required>
        <input type="text" id="poblacion" placeholder="Tamaño de la población" required>
        <button type="submit">Calcular</button>
      </form>
    </div>
    <div class="modal-footer">
      <button id="cerrar">Cerrar</button>
      <p id="resultado"></p>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
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
    </script>
</body>

</html>