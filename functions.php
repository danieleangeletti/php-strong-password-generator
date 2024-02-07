<?php
function generate_password($number)
{
    $caratteri = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789,.-!"$%&/()=';
    $my_str = '';
    for ($i = 0; $i < $number; $i++) {
        $my_str .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $my_str;
}
?>