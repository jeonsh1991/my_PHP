<?php
require_once("worldRule.php");

class MyClass implements WorldRule {
    
    // 상속받은 클래스의 메소드를 안쓰면 에러.
    public function hello() {
        echo "안녕하세요 !","<br>";
    }
    public function thanks() {
        echo "고맙습니다","<br>";
    }
}
$myObj = new MyClass();
$myObj->hello();
$myObj->thanks();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

