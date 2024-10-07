<?php
include __DIR__.'/staff_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document-Shop</title>
</head>
<body>

    <div class="Magazzinieri">
        <h2>Magazzinieri</h2>
        <?php foreach ($magazzinieri as $magazziniere): ?>

            <ul>
                <li>Nome e Cognome: <?php echo $magazziniere->nome ." ". $magazziniere->cognome ?> </li>
                <li>Eta: <?php echo $magazziniere->eta;
                        try{
                             $magazziniere->controlloEta($magazziniere->eta);
                        }catch (Exception $e){
                            echo "  " . $e->getMessage();
                       }
                ?>
                </li>
                <li>Ruolo: <?php echo $magazziniere->ruolo ?> </li>
                <li>Id dipendente: <?php echo $magazziniere->id ?></li>
                <li>Piano lavorativo: <?php echo $magazziniere->pianoLavorativo ?> </li>
            </ul>
        <?php endforeach ?>

    <div class="Cassieri">
        <h3>Cassieri</h3>
        <?php foreach($cassieri as $cassiere): ?>
            <ul>
                <li>Nome e Cognome: <?php echo $cassiere->nome . " ". $cassiere->cognome ?> </li>
                <li>Eta: <?php echo $cassiere->eta;
                try{
                    $cassiere->controlloEta($cassiere->eta);
                } catch (Exception $e){
                    echo " Attenzione  " . $e->getMessage();
                }
                ?>
                <li>Ruolo: <?php echo $cassiere->ruolo ?> </li>
                <li>Id dipendente: <?php echo $cassiere->id ?></li>
                <li>Numero Cassa: <?php echo $cassiere->numCassa;
                    try{
                         $cassiere->controlloCassa($cassiere->numCassa);
                    } catch(Exception $e){
                        echo " Attenzione  " . $e->getMessage();
                    }
                ?> </li>
                </li>
            </ul>
        <?php endforeach ?>



    </div>
</body>
