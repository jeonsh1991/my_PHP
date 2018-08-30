<?php
require_once("Player.php");

class Runner extends Player {
    public $age;
    
    function __construct($name, $age) {
        parent::__construct($name);
        
        $this -> age = $age;
    }
    
    public function play() {
        echo "{$this->name}가 뛴다! <br>";
    }
    public function who() { //부모문서에 있던 who()매서드를 해당문서에서 오버라이딩
        echo "{$this->name}은 {$this->age}세 입니다.";
    }
}
$runner1= new Runner("우사인볼트", 30);
echo $runner1->play();
echo $runner1->who();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

