<?php
$gobackURL = "searchForm.html";

if(empty($_POST)) {
    header("Location:searchForm.html");
    exit();
}else if(!isset($_POST["name"]) || ($_POST["name"]==="")) {
    header("Location:{$gobackURL}");
    exit();
}

$user = 'testuser';
$password = 'testuser';

$dbName= 'testdb';
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
            $name = $_POST["name"];
            try {
                $pdo = new PDO($dsn, $user, $password);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "select * from member where name LIKE(:name)";
                $stm = $pdo->prepare($sql);
                $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
                $stm->execute();
                $result = $stm->fetchAll(PDO::FETCH_ASSOC);
                if(count($result)>0) {
                    echo "이름에 {$name}가 포함되어 있는 레코드";
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
                    echo "이름에서 {$name}는 찾을 수 없습니다.";
                }
            } catch (Exception $ex) {
                echo "오류가 있습니다. <br>";
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
       <a href="<?php echo $gobackURL ?>"
    </body>
</html>

