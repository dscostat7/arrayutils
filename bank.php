<?php declare(strict_types=1); //Esta declaração faz com que os tipos dos argumentos e retornos de função sejam estritos, sem type juggling.

namespace ActionsBank;

require_once 'autoload.php';

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
