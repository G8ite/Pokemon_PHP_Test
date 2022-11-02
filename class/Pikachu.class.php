<?php

class Pikachu extends Pokemon{
    use Capacitable;
    private Attaque $attaque;

    public function __construct(string $nom, int $lvl)
    {
        parent::__construct($nom,  $lvl);
        $this->setType(new Electrique())
            ->setAttaque(new Eclair());
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque() : Attaque
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttaque($attaque): self
    {
        $this->attaque = $attaque;

        return $this;
    }
}