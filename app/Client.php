<?php

namespace Dwes\ProjecteVideoclub;

use Dwes\ProjecteVideoclub\Util\QuotaSuperadaException;
use Dwes\ProjecteVideoclub\Util\SoportJaLlogatException;
use Dwes\ProjecteVideoclub\Util\SoportNoTrobatException;

class Client
{
    public string $nom;
    private int $numero;
    private int $maxLloguerConcurrent;
    /** @var Soport[] */
    private array $soportsLlogats = [];
    private int $numSoportsLlogats = 0;

    public function __construct(string $nom, int $numero, int $maxLloguerConcurrent = 3)
    {
        $this->nom = $nom;
        $this->numero = $numero;
        $this->maxLloguerConcurrent = $maxLloguerConcurrent;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }

    public function getNumSoportsLlogats(): int
    {
        return $this->numSoportsLlogats;
    }

    public function mostraResum(): void
    {
        echo "Client: " . $this->nom . "<br>";
        echo "Té " . count($this->soportsLlogats) . " lloguers.<br>";
    }

    public function teLlogat(Soport $soport): bool
    {
        return in_array($soport, $this->soportsLlogats, true);
    }

    public function potLlogar(int $quantitat = 1): bool
    {
        return count($this->soportsLlogats) + $quantitat <= $this->maxLloguerConcurrent;
    }

    /**
     * @throws SoportJaLlogatException
     * @throws QuotaSuperadaException
     */
    public function llogar(Soport $soport): self
    {
        if ($this->teLlogat($soport)) {
            throw new SoportJaLlogatException("Ja tens aquest suport llogat.");
        }

        if ($soport->llogat) {
            throw new SoportJaLlogatException("El suport ja està llogat per un altre client.");
        }

        if (count($this->soportsLlogats) >= $this->maxLloguerConcurrent) {
            throw new QuotaSuperadaException("Has arribat al màxim de lloguers.");
        }

        $this->soportsLlogats[] = $soport;
        $this->numSoportsLlogats++;
        $soport->llogat = true;

        return $this;
    }

    /**
     * @throws SoportNoTrobatException
     */
    public function tornar(int $numSoport): self
    {
        foreach ($this->soportsLlogats as $index => $soport) {
            if ($soport->numero === $numSoport) {
                unset($this->soportsLlogats[$index]);
                $this->soportsLlogats = array_values($this->soportsLlogats);
                $soport->llogat = false;

                return $this;
            }
        }

        throw new SoportNoTrobatException("No tens aquest suport llogat.");
    }

    public function llistarLloguers(): void
    {
        echo $this->nom . " té " . count($this->soportsLlogats) . " lloguers:<br>";
        foreach ($this->soportsLlogats as $soport) {
            $soport->mostraResum();
            echo "<br>";
        }
    }
}
