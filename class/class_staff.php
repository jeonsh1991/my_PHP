<?php
class Staff {
    //클래스 프로퍼티
    public static $piggyBank = 0;
    //클래스 메서드
    public static function deposit($won) {
        self::$piggyBank += $won;
    }
    //인스턴트 프로퍼티
    public $name;
    public $age;
    
    function __construct($name, $age){ 
        $this->name = $name;
        $this->age = $age;
    }
    
    public function hello() {
        if (is_null($this->name)) {
        echo "<br>안녕하세요!";
        }else {
            echo "<br>안녕하세요, {$this->name}입니다!";
        }
    }
    public function latePenalty() {
        self::deposit(1000);
    }
}
?>