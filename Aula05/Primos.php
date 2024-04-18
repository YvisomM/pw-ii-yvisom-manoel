<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="POST">
        <label for="N1">Número 1:</label>
        <input type="number" name="N1" required> <br>
        <label for="N2">Número 2:</label>
        <input type="number" name="N2" required> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php
function Primo($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function ContaPrimos($N1, $N2) {
    $cont = 0;
    for ($i = $N1; $i <= $N2; $i++) {
        if (Primo($i)) {
            $cont++;
        }
    }
    echo "Existem $cont números primos entre $N1 e $N2";
}

if(isset($_POST["N1"]) && isset($_POST["N2"])) {
    ContaPrimos($_POST["N1"], $_POST["N2"]);
}
?>
