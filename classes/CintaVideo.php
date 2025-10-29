<?php
include_once __DIR__ . "/Soport.php";
class CintaVideo extends Soport {
    private int $durada; // en minuts

    // constructor
    public function __construct(string $titol, int $numero, float $preu, int $durada) {
        parent::__construct($titol, $numero, $preu); // crida al constructor del pare
        $this->durada = $durada;
    }

    // sobreescrivim el mètode del pare per afegir la durada
    public function mostraResum(): void {
        echo "Pel·lícula en VHS:<br>";
        parent::mostraResum(); // crida a la versió del pare primer
        echo "Durada: {$this->durada} minuts<br>";
    }
}