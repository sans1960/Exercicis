<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reves</title>
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
     if(isset($_POST['mostra'])){
        $dades=[$_POST['nom1'],$_POST['nom2'],$_POST['nom3'],$_POST['nom4'],$_POST['nom5'],$_POST['nom6']];
        print_r($dades)."<br>";
        echo "<p>Mostrar les dades </p>";
        for($i=0;$i<=5;$i++){
            echo "<p>$dades[$i]</p>";
        }
        echo "<p>Mostrar les dades al revés</p>";
        for($i=5;$i>=0;$i--){
            echo "<p>$dades[$i]</p>";
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