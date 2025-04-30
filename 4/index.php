<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>MAIOR NÚMERO</h1>

<form method="post">
    Temperatura em fahrenheit: <input type="number" name="num" required><br>
    <button type="submit">converter</button>
</form>
<?php
 
 function converterParaCelsius($num) {
   return ($num - 32)/1.8;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num = $_POST["num"];
    $cel = converterParaCelsius($num);
    echo "<p>$num graus Fahrenheit é igual a " . round($cel, 2) . " graus Celsius.</p>";
}
?>

</div>
</body>
</html> 