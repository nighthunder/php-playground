<?php
// CHECKS IF A CONSTANT IS DEFINED
define("GOOD", false);
if (defined("GOOD")) {
  echo "GOOD is defined.\n" ; // prints "GOOD is defined"

  if (GOOD)
    echo "GOOD is true." ; // does not print anything, since GOOD is false
  else 
    echo "GOOD is false.";
}

if (!defined("AWESOME")) {
  define("AWESOME", true); // awesome was not defined. Now we have defined it
}
?>