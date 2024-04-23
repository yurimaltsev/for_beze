<?php

require_once 'Animal.php';

class Beatle extends Animal
{

    public function __construct()
    {
        $this->setName('Жук');
        $this->setAction('Летать');
    }

    public function fly(): void
    {
        echo $this->getAction();
    }

}