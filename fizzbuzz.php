<?php
$array = array();
for($i = 1; $i < 100; $i++)
{
    if ($i % 2 == 0 && $i % 3 == 0)
    {
       array_push($array, "fizzbuzz");
        //echo "fizzbuzz ";
        //echo "<br>";
    }
    else if($i % 3 == 0)
    {
        array_push($array, "fizz");
        //echo "fizz ";
        //echo "<br>";
    }
    else if ($i % 2 == 0)
    {
        array_push($array, "buzz");
        //echo "buzz ";
        //echo "<br>";
    }
    else
    {
        array_push($array, $i);
    }
}
foreach($array as $arr)
{
    echo $arr;
    echo "<br>";
}
?>