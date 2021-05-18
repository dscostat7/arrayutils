<?php

spl_autoload_register(
    function (string $nameSpaceClass): void {
        $caminho = "/src";
        $diretorio_class = str_replace("\\", DIRECTORY_SEPARATOR, $nameSpaceClass);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_class}.php";
    }
);