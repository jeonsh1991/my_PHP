<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'database.php';
        
        try{
            $db = new PDO($dsn, $dbUser, $dbPass);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = 'select * from sample.example where id = :id or language = :language';
            $prepare = $db->prepare($sql);
            
            $prepare->bindValue(':id', 1, PDO::PARAM_INT);
            $prepare->bindValue(':language', 'Ruby', PDO::PARAM_STR);
            $prepare->execute();
            echo '<br>';
            $result = $prepare->fetchAll(PDO::FETCH_NUM);
            echo "숫자 첨자 배열로 구한 경우<br>";
            print_r(h($result));
            echo '<br>';
            
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            echo "컬럼명을 키로 한 연관 배열로 구한경우<br>";
            print_r(h($result));
            echo '<br>';
            
            $prepare->execute();
            echo "숫자 첨자, 컬럼 이름 모두의 배열에서 구한 경우<br>";
            $result = $prepare->fetchAll(PDO::FETCH_BOTH);
            print_r(h($result));
            echo '<br>';
           
            
        } catch (Exception $ex) {
            echo '접속할 수 없습니다 : ', h($e->getMessage);

        }
        function h($var) {
            if(is_array($var)) {
                return array_map('h', $var);
            }else {
                return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
            }
        }
        ?>
    </body>
</html>
