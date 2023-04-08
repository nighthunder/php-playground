<?php

$myVar = "Hi there";
$anotherVar =& $myVar;
$anotherVar = "See you later";
unset( $anotherVar );
echo $myVar; // Displays "See you later"

?>