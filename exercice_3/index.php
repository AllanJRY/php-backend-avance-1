<?php

include_once ('./classes/Person.php');
include_once ('./classes/Registre.php');
include_once ('./classes/Docteur.php');
include_once ('./classes/Hospital.php');
include_once ('./classes/Patient.php');
include_once ('./classes/Rdv.php');

$patient = new Patient(
    'JARRY',
    'Allan',
    26,
    'jbnjiedrbgierjbgiejr'
);

$docteur = new Docteur(
    'DUPONT',
    'Paul',
    42,
    'Cardiologue'
);

$rdv1 = new Rdv(
    $patient,
    $docteur
);

$rdv2 = new Rdv(
    $patient,
    $docteur
);

$registre = new Registre();
$registre
    ->addRdv($rdv1)
    ->addRdv($rdv2);

$hopital = new Hospital('Hopital 1', $registre);

echo $hopital;