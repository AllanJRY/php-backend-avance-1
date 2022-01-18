<?php

class Produit {
    private string $libelle;
    private string $description;
    private int $prix;

    /**
     * @param string $libelle
     * @param string $description
     * @param int $prix
     */
    public function __construct(string $libelle, string $description, int $prix)
    {
        $this->libelle = $libelle;
        $this->description = $description;
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getPrix(): int
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix(int $prix): void
    {
        $this->prix = $prix;
    }


}