<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
    <link rel="stylesheet" href="../css/panel.css">
</head>
<body class="resultat">
<header class="header2">
        <img src="../img/php-plain.svg" alt="" width="60">
        <h3>Curs PHP 2020</h3>
    </header>
    <div class="titol2">
        <h1>Resultat</h1>
    </div>
    <div class="textcard">
    <?php
             $aleatorios = array();
             $i = 0;
             do {
                   $aleatorio = rand(1, 1000);
                   if(!in_array( $aleatorio, $aleatorios ) ) {
                          $aleatorios[] = $aleatorio;
                          $i++;
                   }
              } while($i < 10);
              $numeros=implode(',',$aleatorios);
              $gran=max($aleatorios);
              $petit=min($aleatorios);
              $suma=array_sum($aleatorios);
              $mitja=$suma/10;
              echo "<p>$numeros</p>";
             echo "<p>En numero mes gran es : ".$gran."</p>";
             echo "<p>En numero mes petit es : ".$petit."</p>";
             echo "<p>La suma dels numeros es : ".$suma."</p>";
             echo "<p>El valor mitja dels numeros es : ".$mitja."</p>";
  
    ?>
    </div>
    <hr>
  <div class="back">
      <div>
      <a href="../panel.php"><img src="../img/arrow-left.svg" alt="" width="50"></a>
      </div>
  </div>
    <footer>
    <img src="../img/php-plain.svg" alt="" width="60">
    <h3>Albert Sans 2020</h3>
</footer>
</body>
</html>