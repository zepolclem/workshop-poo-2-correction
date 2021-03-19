<?php

require_once 'Unit.php';

class Soldier extends Unit
{
    public function __construct()
    {
        parent::__construct();
        $this->speed = 2;
    }

    public function attack()
    {
        return "À l'attaque ! ";
    }
}
