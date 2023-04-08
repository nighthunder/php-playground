<?php

$myVar = "Hi there";
$anotherVar =& $myVar;
$anotherVar = "See you later";
unset( $anotherVar );
unset( $myVar );
echo $myVar; // Displays ""
