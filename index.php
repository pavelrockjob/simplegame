<?php

use Game\Test\Character;
use Game\Test\Classes\Warrior;
use Game\Test\Races\Gnome;

require_once __DIR__ . '/vendor/autoload.php';

$character = new Character(new Warrior(), new Gnome());

echo $character->getHealth();