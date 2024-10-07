<?php

include_once __DIR__ .'/Dipendenti.php';

class Cassieri extends Dipendenti{

    // Proprieta
    public $ruolo;
    public $id;
    public $numCassa;

    
    // Costruttore
    public function __construct($_nome, $_cognome, $_eta, $_ruolo, $_id, $_numCassa){

        parent::__construct($_nome, $_cognome, $_eta);
        $this->ruolo= $_ruolo;
        $this->id = $_id;
        $this->numCassa = $_numCassa;
    }

}