<meta charset="utf-8">
<?php
$hp = $_POST["hp1"]."-".$_POST["hp2"]."-".$_POST["hp3"];
$email= $_POST["email1"]."@".$_POST["email2"];
$name = $_POST["name"];
$pass = $_POST["pass"];
$nick = $_POST["nick"];
$id = $_POST["id"];
$regist_day=date("Y-m-d (H:i)");

echo $hp , $email, $name,  $pass, $nick, $id, $regist_day,"<br>";
require_once 'database.php';

try {
    $db = new PDO($dsn, $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'select count(*) from sample.member where id = :id';
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':id', $id, PDO::PARAM_STR);
    $prepare->execute();
    $result = $prepare->fetchColumn();
    if($result > 0) {
        echo "아이디가 중복됩니다 <br>";
        echo "다른아이디를 사용하세요. <br>";
    } //(id, pass, name, nick, hp, email, regist_day, level)
    $sql = 'insert into sample.member values (:id, :pass, :name, :nick, :hp, :email, :regist_day, :level)';
    $prepare = $db->prepare($sql);
    
    $prepare->bindValue(':id', $id, PDO::PARAM_STR);
    $prepare->bindValue(':pass', $pass, PDO::PARAM_STR);
    $prepare->bindValue(':name', $name, PDO::PARAM_STR);
    $prepare->bindValue(':nick', $nick, PDO::PARAM_STR);
    $prepare->bindValue(':hp', $hp, PDO::PARAM_STR);
    $prepare->bindValue(':email', $email, PDO::PARAM_STR);
    $prepare->bindValue(':regist_day', $regist_day, PDO::PARAM_STR);
    $prepare->bindValue(':level', '9', PDO::PARAM_STR);
    $prepare->execute();
    
    echo "\n추가한 레코드의 ID:", $id;
            
} catch (Exception $ex) {
    echo '에러가 발생했습니다 :' , h($ex->getMessage());
}
function h($var) {
    if(is_array($var)) {
        return array_map('h', $var);
    }else { 
        return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

