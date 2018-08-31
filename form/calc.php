<?php
$unitPrice = $_POST["unitPrice"];
$quantity = $_POST["quantity"];
$result = $unitPrice * $quantity;
$result = number_format($result);
echo "단가 : ", $unitPrice,"<br>갯수 : ",$quantity,"<br>가격 : ",$result;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

