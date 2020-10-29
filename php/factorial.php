<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
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
         	$num=$_POST['num'];
             $factorial = 1; 
             for ($i = 1; $i <= $num; $i++){ 
               $factorial = $factorial * $i; 
             } 
             echo "<p>El factorial de ".$num. "  es: ".$factorial."</p>";
  
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