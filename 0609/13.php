<?php
/* $b = 5;
$c = "hello";
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
 */
function t2(){
    $GLOBALS['C']="word";
    $GLOBALS['d']="laowang";
}

t2();

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
echo $c;
echo $d;