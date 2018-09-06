<meta charset="utf-8">
<?php
$hp = $_POST["hp1"]."-".$_POST["hp2"]."-".$_POST["hp3"];
$name = $_POST["name"];
$pass = $_POST["pass"];
$id = $_POST["id"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$intro = $_POST["intro"];
$regist_day=date("Y-m-d (H:i)");


require_once 'database.php';

try {
    $db = new PDO($dsn, $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'select count(*) from sample.exam0906 where id = :id';
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':id', $id, PDO::PARAM_STR);
    $prepare->execute();
    $result = $prepare->fetchColumn();
    if($result > 0) {
        echo "아이디가 중복됩니다 <br>";
        echo "다른아이디를 사용하세요. <br>";
    } //(id, pass, name, nick, hp, email, regist_day, level)
    $sql = 'insert into sample.exam0906 values (:id, :name, :password, :gender, :hp, :address, :intro)';
    $prepare = $db->prepare($sql);
    
    $prepare->bindValue(':id', $id, PDO::PARAM_STR);
    $prepare->bindValue(':name', $name, PDO::PARAM_STR);
    $prepare->bindValue(':password', $pass, PDO::PARAM_STR);
    $prepare->bindValue(':gender', $gender, PDO::PARAM_STR);
    $prepare->bindValue(':hp', $hp, PDO::PARAM_STR);
    $prepare->bindValue(':address', $address, PDO::PARAM_STR);
    $prepare->bindValue(':intro', $intro, PDO::PARAM_STR);
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

