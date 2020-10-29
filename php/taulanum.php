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
                	if(isset($_POST['tabla'])){
                        $n=$_POST['num'];
                        if ($n<1 or $n>10) {
                            echo "<p>no has escrit un nųmero entre el 1 y el 10.</p>";
                            }
                            else {
                                echo "<h5>Taula del $n:</h5>";
                                $i=1;
                                while ($i<=10) {
                                      echo "<p>";
                                      echo  "$n x $i = ".$n*$i;
                                      $i++;
                                      echo "</p>";
                                      } 
                                }
                            }	
  
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