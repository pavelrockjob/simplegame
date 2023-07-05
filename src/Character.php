<?php

namespace Game\Test;

use Game\Test\Interfaces\ClassesInterface;
use Game\Test\Interfaces\RacesInterface;

class Character
{
    protected int $strength = 0;

    protected int $agility = 0;

    protected int $intelligence = 0;

    protected int $stamina = 5;

    protected RacesInterface $race;

    protected ClassesInterface $class;

    public function __construct(ClassesInterface $class, RacesInterface $race) {
        $this->class = $class;
        $this->race = $race;
    }

    public function getHealth(): float
    {
        return $this->stamina * 1.5;
    }


}