<?php
function generate_password($length, $use_letters, $use_numbers, $use_symbols, $no_repetitions)
{
    $lettere = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $numeri = '0123456789';
    $simboli = ',.-!"$%&/()=';

    $seeds = [];
    if ($use_letters) {
        array_push($seeds, $lettere);
    }

    if ($use_numbers) {
        array_push($seeds, $numeri);
    }

    if ($use_symbols) {
        array_push($seeds, $simboli);
    }

    if (count($seeds) == 0) {
        $seeds = [$lettere, $numeri, $simboli];
    }

    $my_str = '';
    while (strlen($my_str) < $length) {
        $seed = $seeds[rand(0, count($seeds) - 1)];
        $letter = $seed[rand(0, strlen($seed) - 1)];

        if ($no_repetitions) {
            if (strpos($my_str, $letter) === false) {
                $my_str .= $letter;
            }
        } else {
            $my_str .= $letter;
        }
    }

    return $my_str;
}
?>