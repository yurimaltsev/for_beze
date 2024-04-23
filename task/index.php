<?php

require_once 'Lessi.php';

$repository = new Lessi();
$repository->saveAnimal('ostrich')->saveAnimal('dolphin')->saveAnimal('beatle');
echo $repository->getDescription();