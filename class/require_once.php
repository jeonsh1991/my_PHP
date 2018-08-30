<?php 
require_once("class_staff.php");
?>
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
       $hana = new Staff("하나", 21);
       $hobi = new Staff("호비", 35);
       
       /*$hana -> name = '하나';
       $hana -> age = 21;
       $hobi -> name = "호비";
       $hobi -> age = 35;*/
       
       
       print_r($hana);
       print_r($hobi);
       
       $hana->hello();
       $hobi->hello();
       
       $hong = new Staff("홍길동", 35);
       $hong->hello();
        ?>
    </body>
</html>
