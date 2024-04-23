<?php

require_once 'Lessi.php';
try {
    $repository = new Lessi();
    $repository->saveAnimal('ostrich')->saveAnimal('dolphin');
    $repository->doAction('fly');
} catch (\Throwable $e) {
    var_dump($e);
}