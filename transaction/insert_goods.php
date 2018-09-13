<?php 

$gobackURL = "insertform.php";

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $errors=[];
        if(!isset($_POST["id"])||($_POST["id"]==="")) {
            $errors[]="상품 ID가 비었습니다.";
        }
        if(!isset($_POST["name"])||($_POST["name"]==="")) {
            $errors[]="상품명이 비었습니다.";
        }
        if(!isset($_POST["brand"])||($_POST["brand"]==="")) {
            $errors[]="브랜드가 비었습니다.";
        }
        if(!isset($_POST["quantity"])||(!ctype_digit($_POST["quantity"]))) {
            $errors[]="개수가 정수값이 비었습니다.";
        }
        if(count($errors)>0) {
            echo '<ol class="error">';
            foreach($errors as $value) {
                echo "<li>", $value, "</li>";
            }
            echo '</ol>';
            echo "<hr>";
            echo "<a href=", $gobackURL, ">돌아가기</a>";
            exit();
        }
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
            
            try {
                $pdo->beginTransaction();
                
                $sql1 = "insert into goods(id, name, size, brand) values (:id, :name, :size, :brand)";
                $sql2 = "insert into stock(goods_id, quantity) values (:goods_id, :quantity)";
                
                $insertGoods = $pdo->prepare($sql1);
                $insertStock = $pdo->prepare($sql2);
                
                $insertGoods->bindValue(':id', $_POST["id"], PDO::PARAM_STR);
                $insertGoods->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
                $insertGoods->bindValue(':size', $_POST["size"], PDO::PARAM_STR);
                $insertGoods->bindValue(':brand', $_POST["brand"], PDO::PARAM_STR);
                $insertStock->bindValue(':goods_id', $_POST["id"], PDO::PARAM_STR);
                $insertStock->bindValue(':quantity', $_POST["quantity"], PDO::PARAM_INT);
                
                $insertGoods->execute();
                $insertStock->execute();
                
                $pdo->commit();
                
                echo "상품 데이터/재고 데이터를 추가했습니다.";
            } catch (Exception $ex) {
                $pdo->rollBack();
                echo "등록 111오류가 있습니다.";
                echo $ex->getMessage();
            }
        ?>
        <hr>
        <a href="<?php echo $gobackURL ?>">돌아가기 </a>
    </body>
</html>
