<?php

include_once ('User.php');

class Article
{
    private string $titre;
    private string $sousTitre;
    private User $user;
    private string $contenu;

    /**
     * @param string $titre
     * @param string $sousTitre
     * @param User $user
     * @param string $contenu
     */
    public function __construct(string $titre, string $sousTitre, User $user, string $contenu)
    {
        $this->titre = $titre;
        $this->sousTitre = $sousTitre;
        $this->user = $user;
        $this->contenu = $contenu;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getSousTitre(): string
    {
        return $this->sousTitre;
    }

    /**
     * @param string $sousTitre
     */
    public function setSousTitre(string $sousTitre): void
    {
        $this->sousTitre = $sousTitre;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getContenu(): string
    {
        return $this->contenu;
    }

    /**
     * @param string $contenu
     */
    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }
}