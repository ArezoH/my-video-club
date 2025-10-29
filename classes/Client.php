<?php
include_once __DIR__ . "/Soport.php";

class Client {
    public string $nom;
    private int $numero;
    private int $maxLloguerConcurrent;
    private array $soportsLlogats = [];
    private int $numSoportsLlogats = 0; // comptador total de lloguers

    public function __construct(string $nom, int $numero, int $maxLloguerConcurrent = 3) {
        $this->nom = $nom;
        $this->numero = $numero;
        $this->maxLloguerConcurrent = $maxLloguerConcurrent;
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    public function getNumSoportsLlogats(): int {
        return $this->numSoportsLlogats;
    }

    public function mostraResum(): void {
        echo "Client: " . $this->nom . "<br>";
        echo "Té " . count($this->soportsLlogats) . " lloguers.<br>";
    }

    public function teLlogat(Soport $s): bool {
        return in_array($s, $this->soportsLlogats);
    }

    public function llogar(Soport $s): bool {
        if ($this->teLlogat($s)) {
            echo "Ja tens aquest suport \"" . $s->titol . "\" llogat.<br>";
            return false;
        }

        if (count($this->soportsLlogats) >= $this->maxLloguerConcurrent) {
            echo "Has arribat al màxim de lloguers (" . $this->maxLloguerConcurrent . ").<br>";
            return false;
        }

        $this->soportsLlogats[] = $s;
        $this->numSoportsLlogats++;
        echo "Llogat correctament: " . $s->titol . " a client: " . $this->nom . "<br>";
        return true;
    }

    // --- MÈTODES QUE FALTAVEN ---

    public function tornar(int $numSoport): bool {
        foreach ($this->soportsLlogats as $key => $soport) {
            if ($soport->numero == $numSoport) {
                unset($this->soportsLlogats[$key]);
                // Reindexar l'array per evitar forats
                $this->soportsLlogats = array_values($this->soportsLlogats);
                echo "\"" . $soport->titol . "\" Suport retornat correctament.<br>";
                return true;
            }
        }
        echo "No tens aquest suport llogat.<br>";
        return false;
    }

    public function llistarLloguers(): void {
        echo $this->nom . " té " . count($this->soportsLlogats) . " lloguers:<br>";
        foreach ($this->soportsLlogats as $soport) {
            $soport->mostraResum();
            echo "<br>";
        }
    }
}