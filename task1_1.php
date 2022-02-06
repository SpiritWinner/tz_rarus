<?php

    function isCorrect($string)
    {
        $len = strlen($string);
        $stack = [];

        for ($i = 0; $i < $len; $i++) {
            $simbol = substr($string, $i, 1);
            if ($simbol == '(') {
                $stack[] = $simbol;
            } elseif ($simbol == ')') {
                if (!$last = array_pop($stack))
                    return false;
                if ($simbol === ')' && $last != '(') {
                    return false;
                }
            }
        }
        return count($stack) === 0;
    }

    echo "Enter arithmetic expression \n";
    $str = readline();
    if(isCorrect($str)) echo 'Everything alright!';
    else echo 'Check count of brackets at your expression!';

