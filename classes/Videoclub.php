<?php
include_once __DIR__ . "/CintaVideo.php.php";
include_once __DIR__ . "/Soport.php";
include_once __DIR__ . "/Joc.php";
include_once __DIR__ . "/Dvd.php";
include_once __DIR__ . "/Client.php";

class Videoclub {
    private string $nom;
    private array $productes = [];
    private array $socis = [];
    private int $numProductes = 0;
    private int $numSocis = 0;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    private function incloureProducte(Soport $p): void {
        $this->productes[] = $p;
    }

    public function incloureJoc(string $titol, float $preu, string $consola, int $minJ, int $maxJ): void {
        $joc = new Joc($titol, $this->numProductes, $preu, $consola, $minJ, $maxJ);
        $this->incloureProducte($joc);
        $this->numProductes++;
    }

    public function incloureDvd(string $titol, float $preu, string $idiomes, string $format): void {
        $dvd = new Dvd($titol, $this->numProductes, $preu, $idiomes, $format);
        $this->incloureProducte($dvd);
        $this->numProductes++;
    }

    public function incloureCintaVideo(string $titol, float $preu, int $durada): void {
        $cinta = new CintaVideo($titol, $this->numProductes, $preu, $durada);
        $this->incloureProducte($cinta);
        $this->numProductes++;
    }

    public function incloureSoci(string $nom, int $maxLloguers = 3): void {
        $soci = new Client($nom, $this->numSocis, $maxLloguers);
        $this->incloureSoci($soci);
        $this->numSocis++;
    }

    public function llistarProductes(): void {
        echo "<h3>Llistat de productes del Videoclub {$this->nom}</h3>";
        foreach ($this->productes as $producte) {
            $producte->mostraResum();
            echo "<hr>";
        }
    }

    public function llistarSocis(): void {
        echo "<h3>Llistat de socis del Videoclub {$this->nom}</h3>";
        foreach ($this->socis as $soci) {
            $soci->mostraResum();
            echo "<hr>";
        }
    }

    public function llogarSociProducte(int $numSoci, int $numProducte): void {
        $sociTrobat = null;
        foreach ($this->socis as $soci) {
            if ($soci->getNumero() == $numSoci) {
                $sociTrobat = $soci;
                break;
            }
        }

        $producteTrobat = null;
        foreach ($this->productes as $producte) {
            if ($producte->numero == $numProducte) {
                $producteTrobat = $producte;
                break;
            }
        }

        if ($sociTrobat && $producteTrobat) {
            $sociTrobat->llogar($producteTrobat);
        } else {
            echo "<br><strong>ERROR: Soci o producte no trobat.</strong><br>";
        }
    }
}