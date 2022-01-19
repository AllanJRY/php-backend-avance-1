<?php

include_once ('Animal.php');

class Chat extends Animal
{
    private string $type;

    public function __construct(string $name, string $color, string $type)
    {
        parent::__construct($name, $color);
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return parent::__toString().' et ma fourrure est '.$this->type;
    }
}
