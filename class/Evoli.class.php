<?php

class Evoli extends Pokemon {
    use Capacitable;

    public function __construct(string $nom, int $lvl)
    {
        parent::__construct($nom,  $lvl);
        $this->setType(new Normal());
    }
}