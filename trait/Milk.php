<?php 
require_once("DateTool.php");

class Milk {
    use DateTool;
    
    public $theDate;
    public $limitDate;

    function __construct() {
        $now = new DateTime();
        $this -> theDate = $this ->ymdString($now);
        $this-> limitDate = $this -> addYmdString($now, 10);
    }
}

$myMilk = new Milk();
echo "작성일 : ", $myMilk -> theDate, "<br>";
echo "기한일 : ", $myMilk->limitDate;
?>
