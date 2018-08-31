<?php
require_once("ShopBiz.php");

class MyShop extends ShopBiz {
    public function thanks() {
        echo "감사합니다. <br>";
    }
    
    public function Selling($unitPrice, $quantity) {
        $price = $unitPrice * $quantity;
        $this -> sell($price);
    }
    public function getSell(){
        echo "매상합계는 {$this->sales}원입니다.";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

