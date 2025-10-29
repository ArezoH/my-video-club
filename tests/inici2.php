<?php
include_once "../classes/CintaVideo.php";
include_once "../classes/Dvd.php";
include_once "../classes/Joc.php";
include_once "../classes/Client.php";

//instanciam un parell d'objectes client
$client1 = new Client("Bruce Wayne", 23);
$client2 = new Client("Clark Kent", 33);

//mostrem el número de cada client creat
echo "</br>L'identificador del client 1 és: " . $client1->getNumero();
echo "</br>L'identificador del client 2 és: " . $client2->getNumero();
echo "</br>";
//instancio alguns soports
$soport1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
echo "</br>";
$soport2 = new Joc("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
echo "</br>";
$soport3 = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
echo "</br>";
$soport4 = new Dvd("El Imperio Contraataca", 4, 3, "es,en","16:9");
echo "</br>";
//Llog alguns soports
$client1->llogar($soport1);
$client1->llogar($soport2);
$client1->llogar($soport3);

echo "</br>";
//vaig intentar llogar de nou un soport que ja té llogat
$client1->llogar($soport1);

echo "</br>";
//el client té 3 soports de lloguer com a màxim
//aquest soport no el pot llogar
$client1->llogar($soport4);

echo "</br>";
//aquest soport no el té llogat
$client1->tornar(4);
echo "</br>";
//torna un soport que sí que té llogat
$client1->tornar(26);
echo "</br>";
//llog un altre soport
$client1->llogar($soport4);
echo "</br>";
//faig un llistat dels elements llogats
$client1->llistarLloguers();
echo "</br>";
//aquest client no té lloguers
$client2->tornar(2);
