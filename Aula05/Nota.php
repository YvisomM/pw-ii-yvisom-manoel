<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="POST">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" required> <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" required> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>



<?php
function nota($N1 = 0.00, $N2 = 0.00){
    $result = ($N1 + $N2) / 2;
    if($result >= 6) {
        echo "Aluno Aprovado";
    } elseif ($result >= 4) {
        echo "Aluno em Recuperação";
    } elseif ($result >= 0) {
        echo "Aluno Reprovado";
    } else {
        echo "Nota inválida";
    }
}

if(isset($_POST["nota1"]) && isset($_POST["nota2"])) {
    nota($_POST["nota1"], $_POST["nota2"]);
}
?>