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
        function isPlus($value) {
            return $value>0;
        }
        
        $valueList=["a"=>3, "b"=>0, "c"=>5, "d"=>-2, "e"=>4];
        $filtered = array_filter($valueList, "isPlus");
        print_r($filtered);
        ?>
    </body>
</html>
