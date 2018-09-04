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
        require_once __DIR__ . '/database.php';
        
        try{
            $db = new PDO($dsn, $dbUser, $dbPass);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = 'select count(*) as count from sample.example where language= :language';
            $prepare = $db->prepare($sql);
            $languages = array('PHP5.4', 'PHP', 'RUBY');
            foreach($languages as $language) {
                $prepare->bindValue(':language', $language, PDO::PARAM_STR);
                $prepare->execute();
                
                $result = $prepare->fetchColumn();
                echo $result;
                echo "<br>";
                if($result >0 ) {
                    echo '<p>',h($language),'는 데이터베이스에 등록되었습니다.<br>';
                }else {
                    echo '<p>',h($language),'는 데이터베이스에 등록되지않았습니다.<br>';
                }
            }
            }catch(PDOException $e) {
                echo '에러발생', h($e->getMessage);
            }
            
            function h($var) {
                return htmlspecialchars($var,ENT_QUOTES, 'utf-8');
            }
            
            
        
        ?>
    </body>
</html>
