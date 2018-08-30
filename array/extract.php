<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>배열에서 순서대로 값을 빼낸다</title>
    </head>
    <body>
        <?php
        $nameList = ["공유", "박보검", "송중기"];
        echo '<ol>','<br>';
        foreach ($nameList as $value) {
            echo '<li>',$value,'</li><br>';
        }
        echo '</ol>';
        ?>
    </body>
</html>
