<?php
function generate_password($length, $use_letters, $use_numbers, $use_symbols)
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
    for ($i = 0; $i < $length; $i++) {
        $seed = $seeds[rand(0, count($seeds) - 1)];

        $my_str .= $seed[rand(0, strlen($seed) - 1)];
    }
    return $my_str;
}
?>