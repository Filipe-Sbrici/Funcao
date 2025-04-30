<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>MAIOR NÚMERO</h1>

<form method="post">
    Valor 1: <input type="number" name="num1" required><br>
    Valor 2: <input type="number" name="num2" required><br>
    Valor 3: <input type="number" name="num3" required><br>
    <button type="submit">Verificar</button>
</form>
<?php
 
 function maiorNumero($nuns) {
    sort ($nuns);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nuns = [$_POST["num1"], $_POST["num2"], $_POST["num3"]];
    echo "<p>O maior número é $nuns[2].</p>";
}
?>

</div>
</body>
</html> 