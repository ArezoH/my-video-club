<?php
// Incloem el contracte que anem a signar
include_once __DIR__ . "/Resumible.php";
// Afegim "implements Resumible" i la declarem abstracta
abstract class Soport implements Resumible {
    public string $titol;    // el títol l'hem canviat a català
    public int $numero;      // el número identificatiu
    protected float $preu;  // protected perquè els fills el puguin veure

    // propietat estàtica i privada per a l'IVA
    private static float $IVA = 0.21;

    // constructor: inicialitza l'objecte
    public function __construct(string $titol, int $numero, float $preu) {
        $this->titol  = $titol;
        $this->numero     = $numero;
        $this->preu  = $preu;
    }

    // retorna el preu base
    public function getPreu(): float {
        return $this->preu;
    }

    // retorna el preu amb IVA
    public function getPreuAmbIva(): float {
        return round($this->preu * (1 + self::$IVA), 2);
    }

    // retorna un petit resum de l'ítem
    public function mostraResum(): void {
        echo $this->titol . "<br>";
        echo $this->getPreu() . " € (IVA no inclòs)<br>";
    }
}