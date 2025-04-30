<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<div class = "chickenjockey">
<h1>IDADE</h1>

<form method="post">
    Insira sua idade: <input type="number" name="num1" required><br>
    <button type="submit">Verificar</button>
</form>
<?php
 
 function validarIdade($num1) {
    if ($num1 <= 18) 
        {return "menor de idade";} 
    else {return "maior de idade";}
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"];
    $res = validarIdade($num1);
    echo "<p>Você tem $num1 anos, sendo assim é um $res</p>";
}
?>

</div>
</body>
</html> 