<?php


function QWE($name,$dir=4){
    $reasd = '';
    $reasd = str_shuffle($name);
    $reasd = substr($reasd,0,$dir);
    return $reasd;
}

$res = 'qwertyuiopasdfgjklzxcvbnm';

echo QWE($res,4);