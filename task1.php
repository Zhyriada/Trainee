<?php
function myArrowFunc($a){
    $b = str_repeat("<",$a).str_repeat(">",$a);
    return $b;
    }
echo myArrowFunc(5);

