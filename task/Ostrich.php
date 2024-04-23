<?php

require_once 'Animal.php';

class Ostrich extends Animal
{

    public function __construct()
    {
        $this->setName('Страус');
        $this->setAction('Бежать');
    }

    public function run(): void
    {
        echo $this->getAction();
    }
}