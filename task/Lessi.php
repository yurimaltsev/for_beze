<?php

require_once 'IAnimalRepository.php';
require_once 'Ostrich.php';
require_once 'Dolphin.php';
require_once 'Beatle.php';

class Lessi implements IAnimalRepository
{
    private array $animals;

    public function saveAnimal(string $name): Lessi
    {
        if (!isset($this->animals[$name])) {
            $className = ucfirst($name);
            $this->animals[$name] = new $className();
        }
        return $this;
    }

    public function getDescription(): string
    {
        return implode(' и ', [
            'Редчайшая Электронная Совершенная Собака',
            ...array_values(array_map(fn($animal) => $animal->getDescription(), $this->animals))
        ]);
    }

    public function getAnimal(string $name)
    {
        return $this->animals[$name];
    }

    public function doAction(string $action): void
    {
        $isActionDone = false;
        foreach ($this->animals as $animal) {
            if (method_exists($animal, $action)) {
                $animal->$action();
                $isActionDone = true;
            }
        }
        if (!$isActionDone) {
            echo "I can't do it yet...";
        }
    }
}