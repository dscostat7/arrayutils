<?php declare(strict_types=1); //Esta declaração faz com que os tipos dos argumentos e retornos de função sejam estritos, sem type juggling.



class ArrayUtils
{
    public static function remove(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true); //adicionando parametro TRUE, para fazer a comparação de tipagem alem do conteudo;
        if (is_int ($posicao)) {    //is_int -> não deixa type jugglin transformar o falso em 0, mantendo a funcionalidade do codigo
            unset($array[$posicao]);
        } else {
            echo "Não foi encontrada essa posição no Array";
        }
        
    }
}