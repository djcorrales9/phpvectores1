<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area de un deltoides</title>
  </head>
  <body>
    <div class="container">

 <h2>calcular el area de un deltoides</h2>
    <?php
     $deltoides = array(5,2 ,3 ,3 ,3 ,3);

     $area = (($deltoides[0]*$deltoides[1])/2);
     $perimetro = ($deltoides[2]+$deltoides[3]+$deltoides[4]+$deltoides[5]);
        echo "<h3>Base: $deltoides[0]</h3>";
        echo "<h3>Altura: $deltoides[1]</h3>";
        echo "<h3>el area del deltoides es: $area<br/></h3>";
        

     ?>
<?php echo "<h3>El perimetro del deltoides es: $perimetro</h3>"?>
        <h4>lado1: <?php echo  $deltoides[2] ?></h4>
        <h4>lado2: <?php echo  $deltoides[3] ?></h4>
        <h4>lado3: <?php echo  $deltoides[4] ?></h4>
        <h4>lado4: <?php echo  $deltoides[5] ?></h4>

    </div>
  </body>
</html>
