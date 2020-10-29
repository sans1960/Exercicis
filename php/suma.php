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
              $num1=$_POST['num1'];
              $num2=$_POST['num2'];
              if($num1>$num2){
                echo "<p> $num1  es més gran que  $num2" . "</p>";
              }elseif($num1<$num2){
                echo "<p> $num2  es més gran que  $num1" . "</p>";
              }else{
                 echo "<p>Els dos números son iguals";
              }
              $suma=$num1+$num2;
              echo "<p>La suma dels dos valors es : $suma" ."</p>";
  
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