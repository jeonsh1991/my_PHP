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
        <pre>
        <?php
        $data = ["a987", "강모연", 23];
        list($id, $name, $age) = $data;
        echo "회원ID : ", $id, "\n";
        echo "이름 : ", $name, "\n";
        echo "나이 : ", $age, "\n";
        ?>
        </pre>
    </body>
</html>
