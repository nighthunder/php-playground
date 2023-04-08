<?php


$myVar = "Hi there";
$anotherVar =& $myVar;
$anotherVar = "See you later";
echo $myVar; // Displays "See you later"
echo $anotherVar; // Displays "See you later"