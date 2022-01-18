<?php

// include_once('./exemple/Produit.php');

class Test {
    private string $testMessage = '';

    public function __construct($testMessage) {
        $this->testMessage = $testMessage;
    }

    public function __toString(): string {
        return 'Message : '.$this->testMessage;
    }
}

$test = new Test('lorem ipsum');

echo $test;


?>