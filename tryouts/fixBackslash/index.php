<?php

// hier worden de inputs gemaakt.

$input = "//test/";
$input2 = "/test";
$input3 = "test/df/";
$input4 = "t/e\s\/t";

// fix dit.
// hier is een functie genaamd stripChars. met de parameter $input

function stripSlash($input)
{

	// str_replace verander / -> "" in $input

	$result = str_replace("/", "", $input);
	$result = str_replace("\\", "", $result);
	return $result;
}

echo stripSlash($input) . "<br />";
echo stripSlash($input2) . "<br />";
echo stripSlash($input3) . "<br />";
echo stripSlash($input4) . "<br />";
?>
