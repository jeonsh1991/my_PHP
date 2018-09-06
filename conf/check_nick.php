<meta charset="utf-8">
<?php
$nick = $_GET["nick"];
if(!$nick) {
    echo ("닉네임을 입력하세요.");
}
else {
    require_once 'database.php';
    try{
        $db = new PDO($dsn, $dbUser, $dbPass);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        
        $sql = 'select count(*) from sample.member where nick= :nick';
        $prepare = $db -> prepare($sql);
        $prepare->bindValue(':nick', $nick, PDO::PARAM_STR);
        $prepare->execute();
        $result = $prepare->fetchColumn();
        if($result > 0 ) {
            echo "닉네임이 중복됩니다. <br>";
            echo "다른 닉네임을 사용하세요.<br>";
        }else {
            echo "사용가능한 닉네임입니다.";
        }
        
    } catch (Exception $ex) {
        echo "에러가 발상했습니다.", h($ex->getMessage());
    }
    function h($var) {
        if(is_array($var)) {
            return array_map('h', $var);
        }else {
            return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
        }
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

