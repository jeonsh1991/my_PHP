<?php 
    $user = 'testuser';
    $password = 'testuser';
    $dbName = 'inventory';
    $host = 'localhost';
    
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
    
    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select id, name from brand";
        $stm = $pdo->prepare($sql);
        $stm->execute();
        
        $brand=$stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        $err ="오류가 있습니다.";
        $err .= $ex->getMessage();
        exit($err);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            * {
                list-style: none;
                margin: 0 auto;
            }
            input {
                
            }
        </style>
    </head>
    <body>
        <form method="post" action="insert_goods.php">
            <ul>
                <li>
                    <label>상품ID :
                        <input type="text" name="id" placeholder="상품ID">
                    </label>
                </li>
                <li>
                    <label>상품명 :
                        <input type="text" name="name" placeholder="상품명">
                    </label>
                </li>
                <li>
                    <label>크기 :
                        <input type="text" name="size" placeholder="입력하지 않아도 OK">
                    </label>
                </li>
                <li>브랜드 :
                    <select name="brand">
                        <?php
                            foreach($brand as $row) {
                                echo '<option value="',$row["id"], '">', $row["name"], "</option>";
                            }
                        ?>
                    </select>
                </li>
                <li>
                    <label>개수 :
                        <input type="number" name="quantity" placeholder="숫자">
                    </label>
                </li>
                <li><input type="submit" value="추가"</li>
            </ul>
        </form>
    </body>
</html>
