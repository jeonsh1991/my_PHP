<?php
$tax = 0.1;

function taxPrice($unitPrice, $quantity) {
    global $tax;
    $price = $unitPrice * $quantity * (1*$tax);
    echo "{$price}원입니다.";
}

taxPrice(250,4);
echo "부가세". $tax * 100, "%";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

