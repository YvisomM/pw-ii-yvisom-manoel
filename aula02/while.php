<?php
//while sem break
$i = 1;
while($i < 6){
    echo $i. "<br>";
    $i++;
}

//while com break

echo "<br>";

$i = 1;

while($i < 6){
    if ( $i == 3) break;
    echo $i. "<br>";
    $i++;
}
?>
