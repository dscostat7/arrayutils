<?php declare(strict_types=1); //Esta declaração faz com que os tipos dos argumentos e retornos de função sejam estritos, sem type juggling.

require_once 'ArrayUtils.php';

$correntistasECompras = [
    "Giovani",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luiza",
    "12"
];

foreach ($correntistasECompras as $new) {
    echo "<p>$new</p>";
}

ArrayUtils::remove("12", $correntistasECompras);

foreach ($correntistasECompras as $new) {
    echo "<p>$new</p>";
}
