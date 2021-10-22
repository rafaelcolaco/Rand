<!DOCTYPE html>
<?php
$cpu = rand(0, 2);
$player = isset($_POST["opcao"]) ? $_POST["opcao"] : 0;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokenpo</title>
</head>
<body>
<form action="" method="post">
<?php include "menu.php";?>
<input type="radio" name="opcao" value="0" checked><br>
<label for="0">Pedra</label>
<input type="radio" name="opcao" value="1"><br>
<label for="1">Papel</label>
<input type="radio" name="opcao" value="2"><br>
<label for="2">Tesoura</label>
<br>
<input type="submit" value="Jogar">
</form>
<br>
<br>
<h1>Cpu</h1>
<?php
echo "<img src='img/jokenpo/$cpu.png' alt=''>"; 
?>  
<h1>Player</h1>
<?php
echo "<img src='img/jokenpo/$player.png' alt=''>";

$message = "";

if ($cpu == $player) {
    $message = "Empate";
} else {
if ($player == 0) {
    $message = $cpu  == 2 ?
    "Vitória do usuário" :
    "Vitória do Computador";
} else if ($player == 1) {
    $message = $cpu  == 0 ?
    "Vitória do usuário" :
    "Vitória do Computador";
} else if ($player == 2) {
    $message = $cpu  == 1 ?
    "Vitória do usuário" :
    "Vitória do Computador";
    }
}
    echo "<h1>$message</h1>";
?>  
</body>
</html>