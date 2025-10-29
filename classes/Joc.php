<?php
include_once( __DIR__ . "/Soport.php");
class Joc extends Soport {
    public string $consola;
    private int $minNumJugadors;
    private int $maxNumJugadors;

    public function __construct(
        string $titol,
        int $numero,
        float $preu,
        string $consola,
        int $minNumJugadors,
        int $maxNumJugadors
    ) {
        parent::__construct($titol, $numero, $preu);
        $this->consola = $consola;
        $this->minNumJugadors = $minNumJugadors;
        $this->maxNumJugadors = $maxNumJugadors;
    }

    public function mostraJugadorsPossibles(): string {
        if ($this->minNumJugadors == 1 && $this->maxNumJugadors == 1) {
            return "Per a un jugador";
        } elseif ($this->minNumJugadors == $this->maxNumJugadors) {
            return "Per a {$this->minNumJugadors} jugadors";
        } else {
            return "De {$this->minNumJugadors} a {$this->maxNumJugadors} jugadors";
        }
    }

    public function mostraResum(): void {
        echo "Joc per {$this->consola}:<br>";
        parent::mostraResum();
        echo $this->mostraJugadorsPossibles() . "<br>";
    }
}