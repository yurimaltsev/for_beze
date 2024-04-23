<?php

interface IAnimalRepository
{
    public function saveAnimal(string $name);
    public function getDescription();
    public function doAction(string $action);

}