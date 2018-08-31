<?php
require_once("GameBook.php");

class MyGame implements GameBook {
    public $hitPoint;
    
    function __construct($point = 50) {
        $this->newGame($point);
    }
    public function newGame($point = 50){
        $this->hitPoint = $point;
    }
    public function play() {
        $num = random_int(0,50);
        if($num%2==0) {
            echo "{$num} 포인트가 증가했습니다!", "<br>";
            $this -> hitPoint += $num;
        }else {
            echo "{$num} 포인트가 감소했습니다! <br>";
            $this -> hitPoint -= $num;
        }
        echo "현재 {$this->hitPoint}점 <br>";
    }
    public function isAlive():bool{
        return ($this-> hitPoint>0);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

