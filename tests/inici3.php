<?php
include_once "../classes/Videoclub.php"; // No incloem res més

$vc = new Videoclub("Cas Concos 45 baixos");

//inclouré uns quants soports de prova
$vc->incloureJoc("God of War", 19.99, "PS4", 1, 1);
$vc->incloureJoc("The Last of Us Part II", 49.99, "PS4", 1, 1);
$vc->incloureDvd("Torrente", 4.5, "es","16:9");
$vc->incloureDvd("Origen", 4.5, "es,en,fr", "16:9");
$vc->incloureDvd("El Imperio Contraataca", 3, "es,en","16:9");
$vc->incloureCintaVideo("Los cazafantasmas", 3.5, 107);
$vc->incloureCintaVideo("El nombre de la Rosa", 1.5, 140);

//llist els productes
$vc->llistarProductes();
echo "</br>";
//crearé alguns socis
$vc->incloureSoci("Tofol Verdera", 2);
$vc->incloureSoci("Biel Calafell");
echo "</br>";
$vc->llogarSociProducte(1,2);
$vc->llogarSociProducte(1,3);
// llogar una altra vegada el soport 2 al soci 1.
// no ha de deixar-me perquè ja el té llogat
$vc->llogarSociProducte(1,2);
// llogar el soport 6 al soci 1.
// no es pot perquè el soci 1 té 2 lloguers com a màxim
$vc->llogarSociProducte(1,6);

// llist els socis
$vc->llistarSocis();
