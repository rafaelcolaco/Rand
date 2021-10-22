<!DOCTYPE html>
<?php
 $numero = isset($_POST["numero"]) ? $_POST["numero"] : 1;
 $cpu = rand(0, 5);
 $soma = $numero + $cpu;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
<form action="" method="post">
<?php include "menu.php";?>
<input type="radio" name="par" value="Par">Par<br>
<input type="radio" name="par" value="Ímpar">Ímpar<br>
<br>
<form action="" method="post">
        Número: <input type="number" name="numero" min="0" max="5" required>
        <br>
 
<br>
<br>
    <input type="submit" value="Lançar número">
</form>
<h1>
cpu:   
</h1>    
<?php
   echo "<img src='img/par/$cpu.png' alt=''>";
?>
<h1>
Jogador:   
</h1>    
<?php
   echo "<img src='img/par/$numero.png' alt=''>";
?>
 <?php
 
 if ($soma % 2 == 0) {
     echo "<h1>Ganhou</h1>";
 } else {
     echo "<h1>Perdeu</h1>";
 }
 
 ?>   
</body>
</html>