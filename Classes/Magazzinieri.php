<?php

include_once __DIR__ .'/Dipendenti.php';

class Magazzinieri extends Dipendenti{
    
    // Proprieta
    public $ruolo;
    public $id;
    public $pianoLavorativo;

    
    // Costruttore
    public function __construct($_nome, $_cognome, $_eta, $_ruolo, $_id, $_pianoLavorativo){

    parent::__construct($_nome, $_cognome, $_eta);
    $this->ruolo= $_ruolo;
    $this->id= $_id;
    $this->pianoLavorativo= $_pianoLavorativo;

    }

}