<?php

class CoordenadasTextoAnalyzer {
    private $matches;

    public function __construct($texto) {
        // Definimos el patrón regex para encontrar las coordenadas y el texto siguiente
        $patron = '/\((\d+),(\d+)\)\s*(.*?)((?=\(\d+,\d+\))|$)/';
        preg_match_all($patron, $texto, $this->matches, PREG_SET_ORDER);
    }

    public function analizar() {
        foreach ($this->matches as $match) {
            $x = intval($match[1]);
            $y = intval($match[2]);
            $texto_despues = trim($match[3]); // trim para eliminar espacios en blanco al inicio y final

            echo "Coordenadas: ($x, $y)" . PHP_EOL;
            echo "Texto: $texto_despues" . PHP_EOL;
        }
    }
}

?>
