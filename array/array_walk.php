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
        // put your code here
        function printIdList($value, $index) {
            echo '<ul>';
            echo '<li>No : ', $index,'</li>';
            echo '<li>Id : ', $value,'</li>';
            echo '</ul>';
        }
        
        
        echo '대상의 배열 :';
        $idList = array('소나무', '영수', '민성');
        print_r($idList);
        echo '<br><br>';
        
        echo '일괄처리한결과';
        array_walk($idList, 'printIdList');
        ?>
    </body>
</html>
