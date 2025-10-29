<?php
include "../classes/Joc.php";

$elMeuJoc = new Joc("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
echo "<strong>" . $elMeuJoc->titol . "</strong>`";
echo "<br>Preu: " . $elMeuJoc->getPreu() . " euros";
echo "<br>Preu IVA inclos: " . $elMeuJoc->getPreuAmbIVA() . " euros";
$elMeuJoc->mostraResum();
