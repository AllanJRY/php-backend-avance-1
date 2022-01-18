<?php

include_once ('Produit.php');

class Category
{
    private string $nom;
    private array $listeProduits;

    /**
     * @param string $nom
     * @param array $listeProduits
     */
    public function __construct(string $nom, array $listeProduits)
    {
        $this->nom = $nom;
        $this->listeProduits = $listeProduits;
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
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return array
     */
    public function getListeProduits(): array
    {
        return $this->listeProduits;
    }

    /**
     * @param array $listeProduits
     */
    public function setListeProduits(array $listeProduits): void
    {
        $this->listeProduits = $listeProduits;
    }

    /**
     * @param Produit $product
     */
    public function addProduct(Produit $product): void {
        $this->listeProduits[] = $product;
    }

    /**
     * @param Produit $product
     */
    public function removeProduct(Produit $product): void {
        foreach ($this->listeProduits as $key => $produit) {
            if ($product === $produit) {
                unset($this->listeProduits[$key]);
            }
        }
    }


    public function getTotalProductPrice(): int {
        $total = 0;
        foreach($this->listeProduits as $produit) {
            $total += $produit->getPrix();
        }

        return $total;
    }

    public function getExpensiveProduct(): Produit {
        $expensiveProduit = $this->listeProduits[0];
        foreach($this->listeProduits as $produit) {
            if($expensiveProduit->getPrix() < $produit->getPrix()) {
                $expensiveProduit = $produit;
            }
        }

        return $expensiveProduit;
    }
}