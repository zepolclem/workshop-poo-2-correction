<?php

require_once 'Unit.php';

class Archer extends Unit
{
    public function __construct()
    {
        parent::__construct();
        $this->speed = 5;
    }

    public function attack()
    {
        return "À l'attaque ! ";
    }
}
