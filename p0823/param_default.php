<?php
function charge( $grade, $days=1){
    switch ($grade) {
        case "A":
            $price = 15000 * $days;
            break;
        case "B":
            $price = 12000 * $days;
            break;
        default:
            $price = 8000 * $days;
            break;
    }
    return $price;
}
$charge1 = charge( 'A', 3 );
$charge2 = charge('B');
echo $charge1.'<br>' . $charge2. PHP_EOL;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

