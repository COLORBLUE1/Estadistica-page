<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Intervalo de Confianza</title>
    <style>
           /* Estilos para ocultar el modal por defecto */
           .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        /* Estilos para el contenido del modal */
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Estilos para el botón de cierre del modal */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        .result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
  

    <button id="openModalBtn">Abrir Modal</button>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        <h2>Este es un modal</h2>
        <div class="form-container">
        <div class="form-group">
            <label for="muestra">Tamaño de muestra</label>
            <input type="number" id="muestra" required>
        </div>
        <div class="form-group">
            <label for="media">Media muestral</label>
            <input type="number" id="media" required>
        </div>
        <div class="form-group">
            <label for="desviacion">Desviación estándar</label>
            <input type="number" id="desviacion" required>
        </div>
        <div class="form-group">
            <label for="nivel">Nivel de confianza (%)</label>
            <input type="number" id="nivel" required>
        </div>
        <div class="result">
            <p id="resultado"></p>
        </div>
    </div>
    </div>
</div>

<script>
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const modal = document.getElementById("myModal");

    openModalBtn.addEventListener("click", () => {
        modal.style.display = "block";
    });

    closeModalBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
</script>
    <script>
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
    </script>
</body>
</html>