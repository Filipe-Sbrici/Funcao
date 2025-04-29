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
 function parOuImpar($num1) {
    if ($num1 % 2 == 0) 
        {return "par";} 
    else {return "ímpar";}
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"];
    $res = parOuImpar($num1);
    echo "<p>O número $num1 é $res.</p>";
}
?>

</div>
</body>
</html> 