<?php
    $array1 = array(1,2);
    $x = &$array1[1];   // Unused reference
    $array2 = $array1;  // reference now also applies to $array2 !
    $array2[1]=23;      // (changing [0] will not affect $array1)
    print_r($array1);

?>