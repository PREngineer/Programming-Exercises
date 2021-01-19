<?php

echo '<h1>Associative Arrays (Hash Maps) and adding values:</h1>';

$array = array();

$array['Donald'] = 'Trump';
$array['Melania'] = 'Trump';
$array['Barron'] = 'Trump';

echo '<pre>';
print_r($array);
echo '</pre>';

$array['Donald Jr.'] = 'Trump';

echo '<pre>';
print_r($array);
echo '</pre>';

echo '<h1>Two-dimensional Associative Array with a normal array as a value.</h1>';

$arr = array();

$arr['Even'] = array();
$arr['Odd'] = array();

$arr['Even'][] = "Two";
$arr['Even'][] = "Four";
$arr['Even'][] = "Six";

echo '<pre>';
print_r($arr);
echo '</pre>';

$arr['Odd'][] = "One";
$arr['Odd'][] = "Three";
$arr['Odd'][] = "Five";

echo '<pre>';
print_r($arr);
echo '</pre>';

?>
