<?php

class Collection
{
    // Propriétés
    private array $tabPoke;
    private Dresseur $dresseur;

    public function __construct(Dresseur $dresseur,array $tabPoke = [])
    {
        $this->setTabPoke($tabPoke)->setDresseur($dresseur);
    }

    /**
     * Get the value of tabPoke
     */ 
    public function getTabPoke(): array
    {
        return $this->tabPoke;
    }

    /**
     * Set the value of tabPoke
     *
     * @return  self
     */ 
    private function setTabPoke($tabPoke): self
    {
        $this->tabPoke = $tabPoke;

        return $this;
    }

    public function addPokemon(Pokemon $pokemon): self
    {
        $this->tabPoke[] = $pokemon;
        return $this;
    }

    /**
     * Get the value of dresseur
     */ 
    public function getDresseur(): Dresseur
    {
        return $this->dresseur;
    }

    /**
     * Set the value of dresseur
     *
     * @return  self
     */ 
    private function setDresseur($dresseur): self
    {
        $this->dresseur = $dresseur;

        return $this;
    }
}