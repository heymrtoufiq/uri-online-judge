<?php

[$a, $b, $c] = explode(' ', readline());

echo 'TRIANGULO: ' . number_format($a * $c / 2.0, 3, '.', '') . "\n";
echo 'CIRCULO: ' . number_format(3.14159 * $c * $c, 3, '.', '') . "\n";
echo 'TRAPEZIO: ' . number_format(($a + $b) * $c / 2.0, 3, '.', '') . "\n";
echo 'QUADRADO: ' . number_format($b * $b, 3, '.', '') . "\n";
echo 'RETANGULO: ' . number_format($a * $b, 3, '.', '') . "\n";