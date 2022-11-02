<?php

abstract class Pokemon
{
    // Propriétés
    private string $nom;
    private int $lvl;
    

    public function __construct(string $nom, int $lvl)
    {
        $this->setNom($nom)
            ->setLvl($lvl);
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    private function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of lvl
     */ 
    public function getLvl(): int
    {
        return $this->lvl;
    }

    /**
     * Set the value of lvl
     *
     * @return  self
     */ 
    private function setLvl($lvl): self
    {
        $this->lvl = $lvl;

        return $this;
    }
}