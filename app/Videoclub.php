<?php

namespace Dwes\ProjecteVideoclub;

use Dwes\ProjecteVideoclub\Util\ClientNoTrobatException;
use Dwes\ProjecteVideoclub\Util\QuotaSuperadaException;
use Dwes\ProjecteVideoclub\Util\SoportJaLlogatException;
use Dwes\ProjecteVideoclub\Util\SoportNoTrobatException;
use Dwes\ProjecteVideoclub\Util\VideoclubException;

class Videoclub
{
    private string $nom;
    /** @var Soport[] */
    private array $productes = [];
    /** @var Client[] */
    private array $socis = [];
    private int $numProductes = 0;
    private int $numSocis = 0;
    private int $numProductesLlogats = 0;
    private int $numTotalLloguers = 0;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    private function incloureProducte(Soport $producte): void
    {
        $this->productes[] = $producte;
    }

    private function registrarSoci(Client $soci): void
    {
        $this->socis[] = $soci;
    }

    public function incloureJoc(string $titol, float $preu, string $consola, int $minJ, int $maxJ): self
    {
        $joc = new Joc($titol, $this->numProductes, $preu, $consola, $minJ, $maxJ);
        $this->incloureProducte($joc);
        $this->numProductes++;

        return $this;
    }

    public function incloureDvd(string $titol, float $preu, string $idiomes, string $format): self
    {
        $dvd = new Dvd($titol, $this->numProductes, $preu, $idiomes, $format);
        $this->incloureProducte($dvd);
        $this->numProductes++;

        return $this;
    }

    public function incloureCintaVideo(string $titol, float $preu, int $durada): self
    {
        $cinta = new CintaVideo($titol, $this->numProductes, $preu, $durada);
        $this->incloureProducte($cinta);
        $this->numProductes++;

        return $this;
    }

    public function incloureSoci(string $nom, int $maxLloguers = 3): self
    {
        $soci = new Client($nom, $this->numSocis, $maxLloguers);
        $this->registrarSoci($soci);
        $this->numSocis++;

        return $this;
    }

    public function getNumProductesLlogats(): int
    {
        return $this->numProductesLlogats;
    }

    public function getNumTotalLloguers(): int
    {
        return $this->numTotalLloguers;
    }

    public function llistarProductes(): void
    {
        echo "<h3>Llistat de productes del Videoclub {$this->nom}</h3>";
        foreach ($this->productes as $producte) {
            $producte->mostraResum();
            echo "<hr>";
        }
    }

    public function llistarSocis(): void
    {
        echo "<h3>Llistat de socis del Videoclub {$this->nom}</h3>";
        foreach ($this->socis as $soci) {
            $soci->mostraResum();
            echo "<hr>";
        }
    }

    /**
     * @throws ClientNoTrobatException
     */
    private function obtenirSoci(int $numSoci): Client
    {
        foreach ($this->socis as $soci) {
            if ($soci->getNumero() === $numSoci) {
                return $soci;
            }
        }

        throw new ClientNoTrobatException("Soci no trobat.");
    }

    /**
     * @throws SoportNoTrobatException
     */
    private function obtenirProducte(int $numProducte): Soport
    {
        foreach ($this->productes as $producte) {
            if ($producte->numero === $numProducte) {
                return $producte;
            }
        }

        throw new SoportNoTrobatException("Producte no trobat.");
    }

    public function llogarSociProducte(int $numSoci, int $numProducte): self
    {
        try {
            $soci = $this->obtenirSoci($numSoci);
            $producte = $this->obtenirProducte($numProducte);
            $soci->llogar($producte);
            $this->numProductesLlogats++;
            $this->numTotalLloguers++;
        } catch (VideoclubException $exception) {
            echo "<br><strong>ERROR: {$exception->getMessage()}</strong><br>";
        }

        return $this;
    }

    public function llogarSociProductes(int $numSoci, array $numerosProductes): self
    {
        try {
            $soci = $this->obtenirSoci($numSoci);
            $productes = [];
            foreach ($numerosProductes as $numeroProducte) {
                $productes[] = $this->obtenirProducte($numeroProducte);
            }

            if (!$soci->potLlogar(count($productes))) {
                throw new QuotaSuperadaException("No pots llogar tants productes. Quota superada.");
            }

            foreach ($productes as $producte) {
                if ($producte->llogat) {
                    throw new SoportJaLlogatException("El producte {$producte->titol} no està disponible.");
                }
            }

            foreach ($productes as $producte) {
                $soci->llogar($producte);
                $this->numProductesLlogats++;
                $this->numTotalLloguers++;
            }
        } catch (VideoclubException $exception) {
            echo "<br><strong>ERROR: {$exception->getMessage()}</strong><br>";
        }

        return $this;
    }

    public function tornarSociProducte(int $numSoci, int $numeroProducte): self
    {
        try {
            $soci = $this->obtenirSoci($numSoci);
            $producte = $this->obtenirProducte($numeroProducte);
            $soci->tornar($numeroProducte);
            if ($this->numProductesLlogats > 0) {
                $this->numProductesLlogats--;
            }
            $producte->llogat = false;
        } catch (VideoclubException $exception) {
            echo "<br><strong>ERROR: {$exception->getMessage()}</strong><br>";
        }

        return $this;
    }

    public function tornarSociProductes(int $numSoci, array $numerosProductes): self
    {
        try {
            $soci = $this->obtenirSoci($numSoci);
            foreach ($numerosProductes as $numeroProducte) {
                $producte = $this->obtenirProducte($numeroProducte);
                $soci->tornar($numeroProducte);
                if ($this->numProductesLlogats > 0) {
                    $this->numProductesLlogats--;
                }
                $producte->llogat = false;
            }
        } catch (VideoclubException $exception) {
            echo "<br><strong>ERROR: {$exception->getMessage()}</strong><br>";
        }

        return $this;
    }
}
