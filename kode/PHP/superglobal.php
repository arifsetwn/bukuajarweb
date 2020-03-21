<?php
$a = 5;
$b = 10;

function tambah(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['y'];
}
tambah();
echo $c;
