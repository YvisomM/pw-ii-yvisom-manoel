<?php
$pokemons = array("Pikachu","Charizard", "bubassauro","Squirtle", "Eevee");

foreach($pokemons as $pokemon){
    if ($pokemon !== "Charmander"){
        echo $pokemon. "<br>";
    }
}

?>