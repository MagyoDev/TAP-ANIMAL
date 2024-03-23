<?php
include 'autoload.php';
function EmitirSom(Animal $animal) {
    $animal->emitirSom();
}

$cao = new Cachorro();
EmitirSom($cao);
EmitirSom(new Gato());
?>