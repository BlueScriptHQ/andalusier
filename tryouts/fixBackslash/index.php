<?php
// hier is een functie genaamd stripSlash met de parameter $input

function stripSlash($input)
{

    // str_replace verander / -> "" in $input

    $result = str_replace("/", "", $input);
    $result = str_replace("\\", "", $result);
    return $result;
}

?>
