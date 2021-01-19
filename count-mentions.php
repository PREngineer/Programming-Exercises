<?php

echo'<h1>Count the amount of times our competition (McDonalds) is mentioned in a comment vs ourselves (Costco).</h1>';

$data = "The Costco sandwich was better than the one that I had in McDonalds.  It was also cheaper than the one in McDonalds.";

echo "Given paragraph: <hr>$data<hr>";

$words = explode(" ", str_replace(".", "", $data));

echo '<pre>';
print_r($words);
echo '<pre>';

$Costco = 0;
$McDonalds = 0;

foreach( $words as $key=>$value )
{
    if( $value == 'Costco' )
    {
        $Costco++;
    }
    if( $value == 'McDonalds' )
    {
        $McDonalds++;
    }
}

echo "McD: $McDonalds";
echo "<br>Costco: $Costco";

?>
