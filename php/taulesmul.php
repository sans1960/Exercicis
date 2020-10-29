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
   <div class="taulacard">
   <?php
   echo "<table>";
                          echo "<tr>";
                          for ($cabecera="0";$cabecera<=10;$cabecera++){
                                      echo "<th>";
                                      echo $cabecera;
                                      echo "</th>";
                          }
                          echo "</tr>";
                          for ($x = 1; $x <=10; $x++){
                                     echo "<tr>";
                                     echo "<th>";
                                     echo $x;
                                     echo "</th>";
                                          for ($y=1;$y<=10;$y++){                      
                                                  $multiplicacion=$x*$y;                    
                                                  echo "<td>";                      
                                                  echo $multiplicacion;                      
                                                  echo "</td>";              
                                          }              
                                  echo "</tr>";          
                                  }  
                                  echo "</table>"
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