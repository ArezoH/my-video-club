<?php

require_once __DIR__ . '/../autoload.php';

use Dwes\ProjecteVideoclub\Videoclub;

$videoclub = new Videoclub('Projecte Videoclub');

$videoclub
    ->incloureJoc('The Last of Us Part II', 49.99, 'PS4', 1, 1)
    ->incloureDvd('Interstellar', 19.99, 'Català, Castellà, Anglès', '16:9')
    ->incloureCintaVideo('Jurassic Park', 14.95, 127)
    ->incloureSoci('Anna', 5)
    ->incloureSoci('Joan', 2);

$videoclub
    ->llogarSociProducte(0, 0)
    ->llogarSociProductes(0, [1, 2]);

echo '<br>Productes llogats: ' . $videoclub->getNumProductesLlogats() . '<br>';
echo 'Total de lloguers: ' . $videoclub->getNumTotalLloguers() . '<br>';

$videoclub
    ->tornarSociProducte(0, 0)
    ->tornarSociProductes(0, [1, 2]);

echo '<br>Productes llogats després de tornar: ' . $videoclub->getNumProductesLlogats() . '<br>';
