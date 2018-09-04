<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>db connect(PDO)</title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'h.php';
        require_once 'database.php';
        
        try{
            $db = new PDO($dsn, $dbUser, $dbPass);
            
            $db -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo '데이터베이스에 접속했습니다.';
        } catch (Exception $ex) {
            echo ' 접속할 수 없었습니다. 이유 : ', h($e->getMessage());
        }
        ?>
    </body>
</html>
