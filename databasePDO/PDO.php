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
        <style>
            table {
                width: 500px;
                text-align: center;
                border: 1px solid #ccc;
                margin: 0 auto;
                padding: 0;
                background: transparent;
               
            }
            th {
                vertical-align: central;
                border: none;
                background-color: #3678ab;
                color: white;
                font-size: 2em;
            }
            td {
                background: whitesmoke;
            }
        </style>
    </head>
    <body>
        <?php
        $user = "testuser";
        $password= "testuser";
        $dbName = "testdb";
        $host ="127.0.0.1";
        
        $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
        
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "데이터베이스에 {$dbName}접속했습니다";
            $sql = "select * from member";
            $stm = $pdo->prepare($sql);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            
            echo "<table>";
            echo "<thead><tr>";
            echo "<th>", "ID","</th>";
            echo "<th>", "이름","</th>";
            echo "<th> 나이 </th>";
            echo "<th> 성별 </th>";
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
            echo "</tbody></table>";
            
            $sql ="update member set name ='배철수' where id =5";
            
            $stm = $pdo -> prepare($sql);
            $stm -> execute();
    
            
            /*$sql = "insert member (name, age, gender) values
                ('배유이', 31, '여'), ('강소라', 44, '여'), ('한재석', 35, '남')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute();*/
            
            $sql = "delete from member where id>15 ";
            $stm = $pdo -> prepare($sql);
            $stm -> execute();
            
          /*  $sql = "insert member values (5, '배철수', 50, '남')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute();*/
                    
            
            
            $pdo = null;
        } catch (Exception $ex) {
            echo "<span class='error'>오류가 있습니다. </span><br>";
            echo $ex->getMessage();
            exit();
        }
        
        function h($var) {
            if (is_array($var)) {
                return array_map('h', $var);
            }else {
                return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
            }
        }
        ?>
    </body>
</html>
