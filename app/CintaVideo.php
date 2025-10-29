<?php

namespace Dwes\ProjecteVideoclub;

class CintaVideo extends Soport
{
    private int $durada;

    public function __construct(string $titol, int $numero, float $preu, int $durada)
    {
        parent::__construct($titol, $numero, $preu);
        $this->durada = $durada;
    }

    public function mostraResum(): void
    {
        echo "Pel·lícula en VHS:<br>";
        parent::mostraResum();
        echo "Durada: {$this->durada} minuts<br>";
    }
}
