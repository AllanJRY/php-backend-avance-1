<?php

include_once ('Rdv.php');

class Registre
{
    /**
     * @var Rdv[] $listeRdv
     */
    private array $listeRdv;

    /**
     * @param array $listeRdv
     */
    public function __construct(array $listeRdv = [])
    {
        $this->listeRdv = $listeRdv;
    }

    /**
     * @return array
     */
    public function getListeRdv(): array
    {
        return $this->listeRdv;
    }

    /**
     * @param array $listeRdv
     */
    public function setListeRdv(array $listeRdv): void
    {
        $this->listeRdv = $listeRdv;
    }

    public function addRdv(Rdv $rdv): self {
        $this->listeRdv[] = $rdv;

        return $this;
    }
}