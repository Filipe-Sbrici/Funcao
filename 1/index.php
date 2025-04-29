<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>CALCULO DE MULTIPLICAÇÃO</h1>
<form method="post">
    <button type="submit" name="sortear">Girar</button>
</form>
<form method="post">
    Valor 1: <input type="number" name="num1" required><br>
    Valor 2: <input type="number" name="num2" required><br>
    <input type="submit" value="Calcular Produto">
</form>
<?php
    function mult($num1, $num2){
        rerturn ($num1*$num2);
    }

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $mult = mult($num1, $num2);
    echo "O produto entre o primeiro e segundo valor é: $mult";
?>

</div>
</body>
</html> 