<?php

require_once 'Animal.php';

class Beatle extends Animal
{

    public function __construct()
    {
        $this->setDescription('Жук');
    }

    public function fly(): void
    {
        echo 'fly';
    }

}