<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
        $user = 'testuser';
        $password = 'testuser';
        $dbName = 'inventory';
        $host = 'localhost';
        
        $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql="select goods.id as goods_id, goods.name as goods_name,
                    goods.size, brand.id as brand_id, brand.name as brand_name from goods, brand 
                    where goods.brand = brand.id order by goods_id";
            
            $prepare = $pdo->prepare($sql);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            
            echo "<table>";
            echo "<thead><tr>";
            echo "<th>ID</th>";
            echo "<th>상품</th>";
            echo "<th>크기</th>";
            echo "<th>브랜드ID</th>";
            echo "<th>브랜드</th>";
            echo "</tr></thead>";
            echo "<tbody>";
            foreach($result as $row) {
                echo "<tr>";
                echo "<td>", h($row['goods_id']), "</td>";
                echo "<td>", h($row['goods_name']), "</td>";
                echo "<td>", h($row['size']), "</td>";
                echo "<td>", h($row['brand_id']), "</td>";
                echo "<td>", h($row['brand_name']), "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } catch (Exception $ex) {
            echo '오류가 있습니다.';
            echo $e->getMessage();
            exit();
        }
        
        function h($var) {
            if(is_array($var)) {
                return array_map ('h', $var);
            }else {
                return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
            }
        }
        ?>
    </body>
</html>
