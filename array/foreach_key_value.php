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
        $data = ["10" => "TR123", "상품명"=>"핑크팬티", "가격"=>14500];
        echo "<ul>";
        foreach($data as $key => $value) {
            echo "<li>", $key, " : ", $value, "</li>";
        }
        echo "</ul>";
        ?>
    </body>
</html>
