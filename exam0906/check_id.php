<meta charset="utf-8">
<?php
$id = $_GET["id"];
if(!$id) {
    echo ("아이디를 입력하세요.");
}
else {
    require_once 'database.php';
    try{
        $db = new PDO($dsn, $dbUser, $dbPass);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        
        $sql = 'select count(*) from sample.exam0906 where id= :id';
        $prepare = $db -> prepare($sql);
        $prepare->bindValue(':id', $id, PDO::PARAM_INT);
        $prepare->execute();
        $result = $prepare->fetchColumn();
        if($result > 0 ) {
            echo "아이디가 중복됩니다. <br>";
            echo "다른 아이디를 사용하세요.<br>";
        }else {
            echo "사용가능한 아이디입니다.";
        }
        
    } catch (Exception $ex) {
        echo "에러가 발상했습니다.", $ex.getMessage;
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

