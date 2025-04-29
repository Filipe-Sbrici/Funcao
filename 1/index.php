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
    Valor 1: <input type="number" name="num1" required><br>
    Valor 2: <input type="number" name="num2" required><br>
    <button type="submit">Multiplicar</button>
</form>
<?php
    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $mult = multiplicar($num1, $num2);
        echo "O produto entre o primeiro e segundo valor é: $mult";
    }
?>

</div>
</body>
</html> 