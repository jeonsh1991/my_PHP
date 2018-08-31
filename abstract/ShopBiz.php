<?php
abstract class ShopBiz {
    //추상클래스의 추상메서드만 자식클래스에서 생성하면된다. 
    //나머지는 일반클래스와 동일.
    abstract function thanks();
    protected $sales = 0;
    protected function sell($price) {
        if (is_numeric($price)) {
            echo "{$price}원입니다.";
            $this -> sales += $price;
        }
        $this->thanks();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

