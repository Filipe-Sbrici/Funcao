<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>íMPAR OU PAR</h1>

<form method="post">
    Valor 1: <input type="number" name="num1" required><br>
    <button type="submit">Multiplicar</button>
</form>
<?php
    function verificar($num1){
        return
        if ($num % 2 == 0)
        {$res = "par";}
        else{$res = "ímpar";}
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") { 
        $num1 = $_POST["num1"];
        $res = verificar($num1);
        echo "O número é $res";
    }
?>

</div>
</body>
</html> 