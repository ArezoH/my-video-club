<?php
include_once __DIR__ . "/Soport.php";
class Dvd extends Soport {
    public string $idiomes;
    public string $formatPantalla;

    public function __construct(string $titol, int $numero, float $preu, string $idiomes, string $formatPantalla) {
        parent::__construct($titol, $numero, $preu);
        $this->idiomes = $idiomes;
        $this->formatPantalla = $formatPantalla;
    }

    public function mostraResum(): void {
        echo "Pel·lícula en DVD:<br>";
        parent::mostraResum();
        echo "Idiomes: {$this->idiomes}<br>";
        echo "Format Pantalla: {$this->formatPantalla}<br>";
    }
}