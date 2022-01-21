<?php

include_once ('Person.php');

class Patient extends Person
{
    private string $codeCarteVitale;

    /**
     * @param string $nom
     * @param string $prenom
     * @param string $age
     * @param string $codeCarteVitale
     */
    public function __construct(string $nom, string $prenom, int $age, string $codeCarteVitale)
    {
        parent::__construct($nom, $prenom, $age);
        $this->codeCarteVitale = $codeCarteVitale;
    }

    /**
     * @return string
     */
    public function getCodeCarteVitale(): string
    {
        return $this->codeCarteVitale;
    }

    /**
     * @param string $codeCarteVitale
     */
    public function setCodeCarteVitale(string $codeCarteVitale): self
    {
        $this->codeCarteVitale = $codeCarteVitale;

        return $this;
    }

}