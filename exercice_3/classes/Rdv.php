<?php

include_once ('Patient.php');
include_once ('Docteur.php');

class Rdv
{
    private Patient $patient;
    private Docteur $docteur;

    /**
     * @param Patient $patient
     * @param Docteur $docteur
     */
    public function __construct(Patient $patient, Docteur $docteur)
    {
        $this->patient = $patient;
        $this->docteur = $docteur;
    }

    /**
     * @return Patient
     */
    public function getPatient(): Patient
    {
        return $this->patient;
    }

    /**
     * @param Patient $patient
     */
    public function setPatient(Patient $patient): void
    {
        $this->patient = $patient;
    }

    /**
     * @return Docteur
     */
    public function getDocteur(): Docteur
    {
        return $this->docteur;
    }

    /**
     * @param Docteur $docteur
     */
    public function setDocteur(Docteur $docteur): void
    {
        $this->docteur = $docteur;
    }

}

