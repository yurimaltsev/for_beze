<?php

require_once 'Animal.php';

class Dolphin extends Animal
{

    public function __construct()
    {
        $this->setDescription('Дельфин');
    }

    public function swim(): void
    {
        echo 'swim';
    }
}