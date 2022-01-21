<?php

include_once ('Registre.php');

class Hospital
{
    private string $nom;

    private Registre $registre;

    /**
     * @param string $nom
     * @param Registre $registre
     */
    public function __construct(string $nom, Registre $registre)
    {
        $this->nom = $nom;
        $this->registre = $registre;
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
     * @return Registre
     */
    public function getRegistre(): Registre
    {
        return $this->registre;
    }

    /**
     * @param Registre $registre
     */
    public function setRegistre(Registre $registre): void
    {
        $this->registre = $registre;
    }

    public function __toString(): string
    {
        $str = $this->getNom().': <br>';
        $str .= 'Registre : <br>';

        foreach ($this->registre->getListeRdv() as $rdv) {
            $str .= 'Patient :'.$rdv->getPatient()->getNom(). ' '.$rdv->getPatient()->getPrenom().' par '.$rdv->getDocteur()->getNom().' '.$rdv->getDocteur()->getPrenom().'<br>';
        }

        return $str;
    }
}