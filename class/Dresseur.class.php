<?php

class Dresseur {
    // Propriétés
    private string $nom;
    private string $profession;
    private string $age;
    // TODO ajouter la collection

    public function __construct(string $nom, string $profession, string $age)
    {
        $this->setNom($nom)->setProfession($profession)->setAge($age);
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
     * Get the value of profession
     */ 
    public function getProfession() : string
    {
        return $this->profession;
    }

    /**
     * Set the value of profession
     *
     * @return  self
     */ 
    private function setProfession($profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    private function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    public function __toString()
    {
        return "Détail du dresseur : \n
        Nom : {$this->getProfession()} {$this->getNom()} \n
        Age : {$this->getAge()}\n";
    }
}