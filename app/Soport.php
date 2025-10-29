<?php

namespace Dwes\ProjecteVideoclub;

abstract class Soport implements Resumible
{
    public string $titol;
    public int $numero;
    protected float $preu;
    public bool $llogat = false;

    private static float $IVA = 0.21;

    public function __construct(string $titol, int $numero, float $preu)
    {
        $this->titol = $titol;
        $this->numero = $numero;
        $this->preu = $preu;
    }

    public function getPreu(): float
    {
        return $this->preu;
    }

    public function getPreuAmbIva(): float
    {
        return round($this->preu * (1 + self::$IVA), 2);
    }

    public function mostraResum(): void
    {
        echo $this->titol . "<br>";
        echo $this->getPreu() . " € (IVA no inclòs)<br>";
    }
}
