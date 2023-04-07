<?php

$variable = 3;
$alias = &$variable;

echo "alias = ".$alias."\n";
echo "variable = ".$variable."\n";

$variable = null;

echo "variable = ".var_dump($variable)."\n";
echo "alias = ".var_dump($alias)."\n";
