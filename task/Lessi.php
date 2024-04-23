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
        $className = ucfirst(strtolower($name));
        if (!isset($this->animals[$name]) && class_exists($className)) {
            $this->animals[$name] = new $className();
        }
        return $this;
    }

    public function getDescription(): string
    {
        return implode(' и ', [
            'Редчайшая Электронная Совершенная Собака',
            ...array_values(array_map(fn($animal) => $animal->getName(), $this->animals))
        ]);
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
            $this->doNothing();
        }
    }

    public function doNothing(): void
    {
        echo 'Я ещё не могу этого делать';
    }
}