<?php
function countUp() {
    static $count =0;
    $count += 1;
    return $count;
}

for ($i = 1; $i <= 10; $i++) {
    $num = countUp();
    echo "{$num}번째.";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

