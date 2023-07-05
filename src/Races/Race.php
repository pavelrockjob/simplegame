<?php

namespace game\Test\Races;

use ClassesContract;

class Race
{
    protected int $attack = 0;

    protected int $defense = 0;

    protected ClassesContract $character;

    public function __construct(ClassesContract $character, array $properties = []){
        foreach($properties as $propertyName => $value){
            if(property_exists($this, $propertyName)){
                $this->{$propertyName} = $value;
            }
        }

        $this->character = $character;
    }
}