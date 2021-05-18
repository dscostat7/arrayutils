<?php

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

ArrayUtils::remove("Luis", $correntistasECompras);

foreach ($correntistasECompras as $new) {
    echo "<p>$new</p>";
}
