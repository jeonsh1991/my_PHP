<?php
class Player{
    public $name;
    
    function __construct($name = '이름 없음') {
        $this->name = $name;
    }
    public function __toString() {
        return $this->name;
    }
    // 문자열로 형변환되었을 때 반환되는 문자열 ex)"{$player}"
    public function who() {
        echo "{$this->name}입니다. <br>";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

