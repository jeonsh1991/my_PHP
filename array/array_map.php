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
        function printUserData($id, $name, $age) {
            echo '<ul>';
            echo '<li>ID : ', $id,'</li>';
            echo '<li>Name : ', $name , '</li>';
            echo '<li>Age : ', $age ,"</li>";
            echo '</ul>';
        }
        
        $idList =array('pine', 'youngsoo', 'minsung');
        $nameList = array('소나무', '영수', '민성');
        $ageList = array(25,72,40);
        
        echo '1번째 배열 : ';
        print_r($idList);
        echo '<br>';
        echo '2번째 배열 : ';
        print_r($nameList);
        echo '<br>';
        echo '3번째 배열 : ';
        print_r($ageList);
        echo '<br><br>';
        
        echo '일괄 처리한 결과';
        array_map('printUserData', $idList, $nameList, $ageList);
  
        ?>
    </body>
</html>
