<?php

$name = $_POST["Name"];

$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';
    
$host = 'localhost';
    
$dsn ="mysql:host={$host};dbname={$dbName};charset=utf8";

try {
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
$sql = "select * from member where name = :name";
$stm = $pdo->prepare($sql);
$stm->bindValue(':name', $name, PDO::PARAM_STR);
$stm->execute();
if($stm != null){
    return 0;
}else if ($stm == null) {
    return 1;
}


} catch (Exception $ex) {
            echo "오류가 있습니다.<br>";
            echo $ex->getMessage();
        }
         function h($var) {
                if(is_array($var)) {
                    return array_map('h', $var);
                }else {
                    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
                }
            }
?>

