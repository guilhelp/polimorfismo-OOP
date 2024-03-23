<?php
include 'autoload.php';
function EmitirSom($animal) {
    $animal->emiteSom();
}

EmitirSom(new Cachorro());
EmitirSom(new Gato());