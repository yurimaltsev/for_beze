<?php

require_once 'Lessi.php';

$repository = new Lessi();
$repository->saveAnimal('ostrich')->saveAnimal('dolphin');
$repository->doAction('fly');