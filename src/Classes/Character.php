<?php

namespace game\Test\Races;

class Character
{
    protected int $strength = 0;

    protected int $agility = 0;

    protected int $intelligence = 0;

    protected int $stamina = 0;

    public function __construct(array $properties = []){
        foreach($properties as $propertyName => $value){
            if(property_exists($this, $propertyName)){
                $this->{$propertyName} = $value;
            }
        }
    }


}