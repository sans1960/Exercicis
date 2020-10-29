<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
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
                  $nom=$_POST['nom'];
                  $asignatura=$_POST['asignatura'];
                  $nota=$_POST['nota'];
                  if($nota<9){
                      $cal= "E";
                      } elseif($nota<12){
                          $cal= "D";
                      } elseif($nota<16){
                          $cal= "C";
                      } elseif($nota<19){
                          $cal= "B";
                      } elseif($nota<=20){
                          $cal= "A";
                      } elseif($nota>20){
                          $cal="La nota no pot ser mes gran que 20";
                      }
                  echo "<p>".$nom ." " . "En" . " " .$asignatura. " " . "la teva calificació es  :" .$cal."</p>";
 
  
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