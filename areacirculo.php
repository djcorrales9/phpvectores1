<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area de un circulo</title>
  </head>
  <body>
    <div class="container">

 <h2>calcular el area de un circulo</h2>
    <?php
     $circulo = array(3.14, 3);

     $area = (($circulo[0]*$circulo[1])*$circulo[1]);
    echo "<h3>PI: $circulo[0]</h3>";
    echo "<h3>Radio: $circulo[1]</h3>";
    echo "<h3>el area del circulo es: $area</h3>";

     ?>


    </div>
  </body>
</html>
