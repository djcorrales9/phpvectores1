<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>area de un rombo</title>
  </head>
  <body>
    <div class="container">

 <h2>calcular el area de un rombo</h2>
    <?php
     $rombo = array(5,2 ,3 ,3 ,5 ,7);

     $area = (($rombo[0]*$rombo[1])/2);
     $perimetro = ($rombo[2]+$rombo[3]+$rombo[4]+$rombo[5]);
    echo "<h3>Base: $rombo[0]</h3>";
    echo "<h3>Altura: $rombo[1]</h3>";
    echo "<h3>el area del rombo es: $area<br/></h3>";
    echo "";

     ?>
<?php echo "<h3>El perimetro del rombo es: $perimetro</h3>"?>
<h4>lado1:<?php echo  $rombo[2] ?></h4>
<h4>lado2:<?php echo  $rombo[3] ?></h4>
<h4>lado3:<?php echo  $rombo[4] ?></h4>
<h4>lado4:<?php echo  $rombo[5] ?></h4>

    </div>
  </body>
</html>
