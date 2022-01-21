<?php

include_once ('Person.php');

class Docteur extends Person
{
    private string $specialite;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     * @param string $specialite
     */
    public function __construct(string $nom, string $prenom, int $age, string $specialite)
    {
        parent::__construct($nom, $prenom, $age);
        $this->specialite = $specialite;
    }

    /**
     * @return string
     */
    public function getSpecialite(): string
    {
        return $this->specialite;
    }

    /**
     * @param string $specialite
     */
    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

}