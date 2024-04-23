<?php

require_once 'Animal.php';

class Ostrich extends Animal
{

    public function __construct()
    {
        $this->setDescription('Страус');
    }

    public function run(): void
    {
        echo 'run';
    }
}