<?php
$numeroUm = $_POST["numeroUm"];
$numeroDois = $_POST["numeroDois"];
  $resultado;
  function somar($numeroUm, $numeroDois){
    return $numeroUm + $numeroDois;
  }
  function subtrair($numeroUm, $numeroDois){
    return $numeroUm - $numeroDois;
  }
  function multiplicar($numeroUm, $numeroDois){
    return $numeroUm * $numeroDois;
  }
  function dividir($numeroUm, $numeroDois){
    return $numeroUm / $numeroDois;
  }

  if($_POST["calcular"] == "Soma"){
      $resultado = somar($numeroUm, $numeroDois);
    } else if($_POST["calcular"] == "Subtração"){
      $resultado = subtrair($numeroUm, $numeroDois); 
    } else if($_POST["calcular"] == "Multiplicação"){
      $resultado = multiplicar($numeroUm, $numeroDois);
    } else if($_POST["calcular"] == "Divisão"){
      $resultado = dividir($numeroUm, $numeroDois);
    }
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="CSS/style.css">
  <title>Document</title>
</head>
<body>
    
    <div id="corpoCalculadora">
    <h1>Calculadora virtual</h1>  
    <form method="POST">  
        <div class="inputEdit">       
          <label for="NumeroUm">Número um:</label>
          <input type="number" min="1" name="numeroUm" id="NumeroUm" placeholder="Digite um número" required>
        </div>
        <div class="inputEdit">
          <label for="NumeroDois">Número dois:</label>
          <input type="number" min="1" name="numeroDois" id="NumeroDois" placeholder="Digite um número" required>
        </div>
        <hr>
        <div class="editRadioButton">
          <label for="calcular">Soma:</label> 
          <input type="radio" name="calcular" value="Soma" id="calcular">
        </div>
        <div class="editRadioButton">
          <label for="calcular">Subtração:</label> 
          <input type="radio" name="calcular" value="Subtração" id="calcular">
        </div>
        <div class="editRadioButton">
          <label for="calcular">Multiplicação:</label> 
          <input type="radio" name="calcular" value="Multiplicação" id="calcular">
        </div>
        <div class="editRadioButton">
          <label for="calcular">Divisão:</label> 
          <input type="radio" name="calcular" value="Divisão" id="calcular">
        </div>
        <hr>
        <div id="resultado">
         <?php 
            echo $resultado;
         ?>
        </div>
        <button>Calcular</button>
    </form>
  <div>
</body>
</html>