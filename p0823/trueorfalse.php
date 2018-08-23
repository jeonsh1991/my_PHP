<?php
$a = mt_rand( 0,50);
$b = mt_rand(0,50);
if( $a>$b ) {
    $bigger=$a;
}else {
    $bigger=$b;
}

$bigger2 = $a>$b?"\$a":"\$b";
echo "\$bigger : ",$bigger, " \$bigger2 : ",$bigger2;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

