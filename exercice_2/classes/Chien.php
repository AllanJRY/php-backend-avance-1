<?php

include_once ('Animal.php');

class Chien extends Animal
{
    private string $crie;

    /**
     * @param string $crie
     */
    public function __construct(string $name, string $color,string $crie)
    {
        parent::__construct($name, $color);
        $this->crie = $crie;
    }

    /**
     * @return string
     */
    public function getCrie(): string
    {
        return $this->crie;
    }

    /**
     * @param string $crie
     */
    public function setCrie(string $crie): void
    {
        $this->crie = $crie;
    }

    public function __toString()
    {
        return parent::__toString().' mon crie est '.$this->crie;
    }


}
