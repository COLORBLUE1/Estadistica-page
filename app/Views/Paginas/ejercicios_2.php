<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Scroll hacia arriba</title>
  <style>
    #scrollBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #007BFF;
      color: #fff;
      border: none;
      border-radius: 50%;
      padding: 10px;
      cursor: pointer;
      font-size: 18px;
    }
  </style>
</head>
<body>

  <!-- Contenido de la página -->
  <div style="height: 1500px;">
    <!-- Contenido aquí -->
  </div>

  <!-- Botón de scroll hacia arriba con flecha -->
  <button id="scrollBtn" onclick="scrollToTop()">&#9650;</button>

  <script>
    // Función para mostrar u ocultar el botón dependiendo de la posición del scroll
    window.onscroll = function() {
      scrollFunction();
    };

    function scrollFunction() {
      var btn = document.getElementById("scrollBtn");

      // Muestra el botón cuando el scroll está más abajo de 300 píxeles
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        btn.style.display = "block";
      } else {
        btn.style.display = "none";
      }
    }

    // Función para realizar el scroll hacia arriba suavemente
    function scrollToTop() {
      // Obtener la posición actual del scroll
      var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

      // Calcular la cantidad de píxeles para hacer el scroll suavemente
      var scrollStep = Math.round(currentScroll / 25);

      // Función recursiva para realizar el scroll suavemente
      function smoothScroll() {
        if (document.documentElement.scrollTop || document.body.scrollTop) {
          window.scrollBy(0, -scrollStep);
          setTimeout(smoothScroll, 15);
        }
      }

      // Llamar a la función de scroll suavemente
      smoothScroll();
    }
  </script>

</body>
</html>
