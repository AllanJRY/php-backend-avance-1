<?php

abstract class Person
{
    protected string $nom;
    protected string $prenom;
    protected int $age;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     */
    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;


    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
}