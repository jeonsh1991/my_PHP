<?php
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '$0';
echo preg_replace($pattern, $replacement, $string);
echo "<br>";
$replacement = '$1,$3';
echo preg_replace($pattern, $replacement, $string);
echo "<br>";
$replacement = '${1}Ab, $3';
echo preg_replace($pattern, $replacement, $string);
echo "<br><br>";

$data = [];
$data[] = ["name"=>"신데렐라", "age"=>37, "phone"=>"010-4321-9999"];
$data[] = ["name"=>"백성공주", "age"=>32, "phone" =>"02-3434-7788"];
$data[] = ["name"=>"엘사공주", "age"=>29, "phone"=>"0467-89-9191"];
$data[] = ["name"=>"안나공주", "age"=>35, "phone"=>"59-1212"];
$pattern = "/(-)\d{2,4}(-)\d{4}$/"; ///(-)\d{4}$/

$replacement = "$1****$2****";

foreach ($data as $user) {
    $result = preg_replace($pattern, $replacement, $user);
    foreach($result as $key => $value) {
        echo "{$key} :" , $value, "<br>";
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

