<?php

class ArrayUtils
{
    public static function remove(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        unset($array[$posicao]);
    }
}