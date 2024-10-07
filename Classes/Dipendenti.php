<?php

class Dipendenti{

    // proprietà
    public $nome;
    public $cognome;
    public $eta;

    // Costruttore
    public function __construct($_nome, $_cognome, $_eta){
        $this->nome= $_nome;
        $this->cognome = $_cognome;
        $this->eta= $_eta;
    }

    // Metodo per controllo eta dipendenti
    public function controlloEta($_eta){

            if (!is_int($this->eta)){
                throw new Exception("Assicurati che l'eta sia un numero");
            } 
            else if ($this->eta > 65){
                throw new Exception("Assicurati che l'eta sia minore di 65");
            }
            return $_eta;

    }


    // Metodo per controllo numero cassa
    public function controlloCassa($_numCassa){
        if(!is_int($_numCassa)){
            throw new Exception("Assicurati che la cassa sia un numero");
        }
        return $_numCassa;
    }



}