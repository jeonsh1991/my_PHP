<?php
$a=1;
$b=1;
while($a<10){
    echo '<br>'.$a.'단<br>';
    while($b<10){
        echo $a.'*'.$b.'='.($a*$b).'<br>';
        $b=$b+1;
    }
    $a = $a+1;
    $b = 1;
 
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

