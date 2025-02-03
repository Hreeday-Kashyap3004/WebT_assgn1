<?php
// Declaring variables of different data types
$integerVar = 10;
$floatVar = 10.5;
$stringVar = "My name is Hreeday";
$booleanVar = true;
$arrayVar = array("Apple", "Banana", "Cherry");

// Displaying variables using echo
echo "Integer: $integerVar <br>";
echo "Float: $floatVar <br>";
echo "String: $stringVar <br>";
echo "Boolean: " . ($booleanVar ? "True" : "False") . "<br>";

// Displaying array using var_dump
echo "Array: ";
var_dump($arrayVar);
?>
