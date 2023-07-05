<?php

namespace game\Test\Races;


use game\Test\Interfaces\ClassesInterface;

class Race
{
    protected int $attack = 0;

    protected int $defense = 0;

    protected ClassesInterface $character;

    public function __construct(ClassesInterface $character, array $properties = []){
        foreach($properties as $propertyName => $value){
            if(property_exists($this, $propertyName)){
                $this->{$propertyName} = $value;
            }
        }

        $this->character = $character;
    }
}