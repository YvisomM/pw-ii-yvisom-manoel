<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <form method="POST">
        <label for="n1">Número 1:</label>
        <input type="number" name="n1" required> <br>
        <label for="n2">Número 2:</label>
        <input type="number" name="n2" required> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php
function soma($n1 = 0, $n2 = 0){
    $result = $n1 + $n2;
    if($result < 0){
        $result = 0;
    }
    echo "$n1 + $n2 = $result";
}

if(isset($_POST["n1"]) && isset($_POST["n2"])) {
    soma($_POST["n1"], $_POST["n2"]);
}
?>