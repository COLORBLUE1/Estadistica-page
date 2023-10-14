<!DOCTYPE html>
<html>
<head>
  <title>Calculadora de Intervalo de Confianza</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      margin-bottom: 10px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="number"] {
      width: 100px;
    }
    #result {
      margin-top: 20px;
      font-weight: bold;
    }
    #chart {
      margin-top: 20px;
    }
    #download {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Calculadora de Intervalo de Confianza</h1>
  <form id="input-form">
    <label for="media-poblacional">Media poblacional (μ):</label>
    <input style="border-radius: 15px;" type="number" id="media-poblacional" step="0.01" required>
    <label for="desviacion-poblacional">Desviación estándar poblacional (σ):</label>
    <input style="border-radius: 15px;" type="number" id="desviacion-poblacional" step="0.01" required>
    <label for="tamano-muestra">Tamaño de muestra (n):</label>
    <input style="border-radius: 15px;" type="number" id="tamano-muestra" required>
    <label for="desviacion-muestral">Desviación estándar muestral (s):</label>
    <input style="border-radius: 15px;" type="number" id="desviacion-muestral" step="0.01" required>
    <label for="nivel-confianza">Nivel de confianza (1-α):</label>
    <input style="border-radius: 15px;" type="number" id="nivel-confianza" step="0.001" min="0" max="100" required>
    <label for="valor-z">Valor de z:</label>
    <input style="border-radius: 15px;" type="number" id="valor-z" step="0.01" required>
    <button type="submit" class="btn btn-warning">Calcular</button>
  </form>
  <div id="result"></div>
  <div id="chart"></div>
  <div id="download">
    <a href="#" id="download-link" download>Descargar en formato Excel</a>
  </div>

  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script>
    document.getElementById('input-form').addEventListener('submit', function(event) {
      event.preventDefault();

      // Obtener los valores ingresados por el usuario
      var mediaPoblacional = parseFloat(document.getElementById('media-poblacional').value);
      var desviacionPoblacional = parseFloat(document.getElementById('desviacion-poblacional').value);
      var tamanoMuestra = parseInt(document.getElementById('tamano-muestra').value);
      var desviacionMuestral = parseFloat(document.getElementById('desviacion-muestral').value);
      var nivelConfianza = parseFloat(document.getElementById('nivel-confianza').value);
      var valorZ = parseFloat(document.getElementById('valor-z').value);

      // Calcular los límites superior e inferior del intervalo de confianza
      var error = valorZ * (desviacionMuestral / Math.sqrt(tamanoMuestra));
      var limiteInferior = mediaPoblacional - error;
      var limiteSuperior = mediaPoblacional + error;

     // Mostrar los resultados en la página
     document.getElementById('result').innerHTML = 'Intervalos de Confianza: <br>'+ 
      "Limite inferior     -     Limite superior<br><br/>" 
      + "{" +limiteInferior + "}"+ ' - ' + "{" +limiteSuperior + "}";

      // Crear el gráfico de barras para visualizar los intervalos de confianza
      var data = [
        {
          x: ['Intervalo'],
          y: [limiteSuperior - mediaPoblacional],
          name: 'Superior',
          type: 'bar'
        },
        {
          x: ['Intervalo'],
          y: [mediaPoblacional - limiteInferior],
          name: 'Inferior',
          type: 'bar'
        }
      ];
      var layout = {
        barmode: 'stack',
        title: 'Intervalos de Confianza',
        yaxis: {
          title: 'Diferencia'
        }
      };
      Plotly.newPlot('chart', data, layout);

      // Crear un archivo Excel con los resultados
      var csvContent = 'data:text/csv;charset=utf-8,';
      csvContent += 'Limite Inferior, Limite Superior\n';
      csvContent += limiteInferior + ',' + limiteSuperior + '\n';

      var encodedUri = encodeURI(csvContent);
      document.getElementById('download-link').setAttribute('href', encodedUri);
      document.getElementById('download-link').setAttribute('target', '_blank');
    });
  </script>
</body>
</html>




<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  // Obtener los datos del formulario
  var mu = parseFloat($("#mu").val());
  var sigma = parseFloat($("#sigma").val());
  var n = parseFloat($("#n").val());
  var s = parseFloat($("#s").val());
  var alfa = parseFloat($("#alfa").val());

  // Calcular el intervalo de confianza
  var z = 1.96; // Valor de z para un nivel de confianza del 95%
  var LS = mu - z * s / Math.sqrt(n);
  var LI = mu + z * s / Math.sqrt(n);

  // Mostrar el resultado
  $("#resultado").html("Intervalo de confianza: [ " + LS + " ; " + LI + " ]");
});
</script> -->
