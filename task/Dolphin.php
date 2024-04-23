<?php

require_once 'Animal.php';

class Dolphin extends Animal
{

    public function __construct()
    {
        $this->setName('Дельфин');
        $this->setAction('Плавать');
    }

    public function swim(): void
    {
        echo $this->getAction();
    }
}