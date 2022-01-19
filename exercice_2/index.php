<?php

include_once ('classes/Animal.php');
include_once ('classes/Chat.php');
include_once ('classes/Chien.php');

$chat  = new Chat('Chat 1', 'gris', 'tigré');
$chien = new Chien('Chien 1', 'marron', 'woof');

function getAnimalInfos(Animal $animal) {
    echo $animal;
}

getAnimalInfos($chat);
echo '<br>';
getAnimalInfos($chien);
