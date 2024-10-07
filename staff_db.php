<?php

include_once __DIR__.'/Classes/Cassieri.php';
include_once __DIR__.'/Classes/Magazzinieri.php';

$magazzinieri= [

    new Magazzinieri("Valentino", "Rossi",  46, "Magazziniere", random_int(1, 50), "A-01" ),
    new Magazzinieri("Giuseppe", "Guerrieri", 30, "Magazziniere", random_int(1,50), "A-02"),
    new Magazzinieri("Luca", "Bianchi", 76, "Magazziniere", random_int(1, 50), "A-03" ),
];


$cassieri=[

    new Cassieri("Giorgio", "Neri",  35, "Cassiere", random_int(1,50),   01),
    new Cassieri("Carlo", "Giorgi",  41, "Cassiere", random_int(1,50),   02),
];