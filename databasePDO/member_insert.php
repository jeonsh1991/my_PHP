<?php 
    $gobackURL = "insertForm.php";
    $errors = [];
    if(!isset($_POST["name"]) || ($_POST["name"]==="")) {
        $errors[] = "이름이 비었습니다.";
    }
    if(!isset($_POST["gender"]) || !in_array($_POST["gender"], ["남", "여"])) {
        $errors[] = "성별이 남자 또는 여자가 아닙니다.";
    }
    if(count($errors) >0) {
        echo '<ol class="error">';
        foreach($errors as $value) {
            echo "<li>", $value, "</li>";
        }
        echo "</ol>";
        echo "<br>";
        echo "<a href=", $gobackURL, ">돌아간다</a>";
        exit();
    }
    
    $user = 'testuser';
    $password = 'testuser';
    $dbName = 'testdb';
    
    $host = 'localhost';
    
    $dsn ="mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "insert into member(name, age, gender) values (:name, :age, :gender)";
            $stm = $pdo->prepare($sql);
            
            $stm->bindValue(':name', $name, PDO::PARAM_STR);
            $stm->bindValue(':age', $age, PDO::PARAM_INT);
            $stm->bindValue(':gender', $gender, PDO::PARAM_STR);
            
            if($stm->execute()) {
                $sql = "select * from member";
                $stm = $pdo->prepare($sql);
                $stm->execute();
                $result = $stm->fetchAll(PDO::FETCH_ASSOC);
                    echo "<table>";
                    echo "<thead><tr>";
                    echo "<th>ID</th>";
                    echo "<th>이름</th>";
                    echo "<th>나이</th>";
                    echo "<th>성별</th>";
                    echo "</tr></thead>";
                    
                    echo "<tbody>";
                    foreach ($result as $row) {
                        echo "<tr>";
                        echo "<td>", h($row['id']), "</td>";
                        echo "<td>", h($row['name']), "</td>";
                        echo "<td>", h($row['age']), "</td>";
                        echo "<td>", h($row['gender']), "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
            }else {
                echo '<span class="error">추가 오류가 있습니다.</span>';
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
        <hr>
        <a href="<?php echo $gobackURL ?>">돌아간다.</a>
    </body>
</html>
