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
$ejeX = range( 1, 10 );
$ejeY = range( 1, 10 );

foreach ( $ejeY as $y ) {

  foreach ( $ejeX as $x ) {
    // Aquí creamos los ejes con un valor aleatorio
    $ejesYX[ $y ][ $x ] = rand( 1, 100 );
  }
}

// Creamos la tabla
$html = '<table>';
$html .= '<th></th>';

// Para crear las columnas X ( $ejeX = 1 a 10 )
foreach ( $ejeX as $col_X ) {

  $html .= '<th>'.$col_X.'</th>';
}

foreach ( $ejesYX as $col_Y => $valores ) {

  $html .= '<tr>';
  // Para crear las columnas Y ( $ejeY = 1 a 10 )
  $html .= '<td><b>'.$col_Y.'</b></td>';

  foreach ( $valores as $val ) {
    // Creamos los campos de los valores
    $html .= '<td>'.$val.'</td>';
  }

  $html .= '</tr>';
}

$html .= '</table>';


echo $html;
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