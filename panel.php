<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicis</title>
    <link rel="stylesheet" href="css/panel.css">
</head>
<body>
    <header>
        
        <img src="img/php-plain.svg" alt="" width="60">
      
        <h3>Curs PHP 2020</h3>
        </div>
        
        <a href="../index.html">inici</a>           
        
        
       
        
    </header>
    <div class="titol">
        <h1>Exercicis</h1>
    </div>
<div class="container">
    <div>
        <form action="php/area.php" method="POST">
            <h5>PHP 2</h5>
              <h5>Area d'un rectangle</h5>
              
              <input type="text" placeholder="Base" name="base" required>
          
              
              <input type="text" placeholder="Altura" name="altura"  required>
          
              
              
              <hr>
          
        
              <button type="submit">Calcula</button>
            
          
           
          </form> 
    </div>
    <div>
        <form action="php/suma.php" method="POST">
                  <h5>PHP 3</h5>
              <h5>Més gran de dos números i suma</h5>
          
          
              
            <input type="text" placeholder="Escriu un número" name="num1"  required>
        
            
            <input type="text" placeholder="Escriu un número" name="num2"  required>
        
            
            
            <hr>
        
      
            <button type="submit">Comprova i suma</button>
          
        
         
        </form> 
    </div>
    <div> 
        <form action="php/nota.php" method="POST">
        <h5>PHP 4</h5>
              <h5>Comprova la teva nota</h5>
          
              
          <input type="text" placeholder="Escriu el teu Nom" name="nom">
    
        
          <input type="text" placeholder="Escriu l'asignatura" name="asignatura">
    
        
          <input type="text" placeholder="Escriu la puntuació" name="nota">
        
        <hr>
    
  
        <button type="submit">Comprova</button>
      
    
     
    </form>
 </div>
    <div>
        <form action="php/factorial.php" method="POST">
        <h5>PHP 5</h5>
              <h5>Factorial d'un número</h5>                       
              <input type="text" required placeholder="Escriu un número" name="num">                  
            <button type="submit">Factorial</button>        
        </form> 
        <hr>
        <form action="php/taulesmul.php" method="POST">
        
              <h5>Taules de multiplicar</h5>                       
                               
            <button name="tabla" type="submit">Genera</button>        
        </form> 
    </div>
    <div>
        <form action="php/reves.php" method="POST">
        <h5>PHP 6</h5>
              <h5>Mostra les dades al revés</h5>
          
              
            
        <input type="text" placeholder="Dada 1" name="nom1" required>
        <input type="text" placeholder="Dada 2" name="nom2" required>
        <input type="text" placeholder="Dada 3" name="nom3" required>
        <input type="text" placeholder="Dada 4" name="nom4" required>
        <input type="text" placeholder="Dada 5" name="nom5" required>
        <input type="text" placeholder="Dada 6" name="nom6" required>
        
            
          
            <hr>
        
      
            <button type="submit" name="mostra">Mostra</button>
          
        
         
        </form> 
    </div>
    <div>
         <form action="php/aleatory.php" method="POST">         
         <h5>Array 10 números aleatoris</h5>
        <button type="submit">Array 10</button>    
    </form>
    <hr>
    <form action="php/taula.php" method="POST">         
         <h5>Taula 100 números</h5>
        <button type="submit">Taula 100</button>    
    </form>
    <hr>
    <form action="php/taulanum.php" method="POST">         
         <h5>Taula de multiplicar</h5>
         <input type="text" placeholder="Escriu un número" name="num">
        <button name="tabla" type="submit">Taula </button>    
    </form>

</div>
   
</div>
<footer>
    <img src="img/php-plain.svg" alt="" width="60">
    <h3>Albert Sans 2020</h3>
</footer>
</body>
</html>