<?php
    $user = 'testuser';
    $password ='testuser';
    $dbName = 'inventory';
    $host = 'localhost';
    
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                margin: 0;
            }
            table {
                border: 1px solid #ccc;
                margin: 0 auto;
                padding: 0;
                text-align: center;
                width: 0px;
                height: 0px;
                animation: anikey 2s ease-in-out 0s forwards;
            }
            @keyframes anikey {
                0%{
                    width: 0px;
                    height: 0px;  
                }
                50%{
                    width: 1000px;
                }
                100% {
                    background: #B2CCFF;
                    width: 1000px;
                    height: 500px;
                }
            } 
            thead {
                color: white;
                border: 1px solid black;
                padding: 0;
                font-size: 2em;
                background: #0079a1;
            }
            tr {
                border-left: 1px;
            }
        </style>
    </head>
    <body>
        <div class="ani"></div>
        <?php
        // put your code here
        try{
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "select goods.id as goods_id, goods.name as goods_name, goods.size,
                    brand.name as brand_name, stock.quantity
                    from goods, brand, stock
                    where goods.brand = brand.id and goods.id = stock.goods_id
                    order by goods_name";
            
            $prepare = $pdo->prepare($sql);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
            
            echo "<table>";
            echo "<thead><tr>";
            echo "<th>ID</th>";
            echo "<th>상품</th>";
            echo "<th>크기</th>";
            echo "<th>브랜드</th>";
            echo "<th>재고</th>";
            echo "</tr></thead>";
            echo "<tbody>";
            foreach($result as $row) {
                echo "<tr>";
                echo "<td>", h($row['goods_id']), "</td>";
                echo "<td>", h($row['goods_name']), "</td>";
                echo "<td>", h($row['size']), "</td>";
                echo "<td>", h($row['brand_name']), "</td>";
                echo "<td>", h($row['quantity']), "</td>";
            }
        } catch (Exception $ex) {
            echo "오류";
            echo $ex->getMessage();
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
