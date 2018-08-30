<?php
//배열을 문자열로 바꾸는 것 implode
$data = array('소나무', '영수', '민성');
print_r($data);
$glue = ',';

echo'<p>대상 배열 :';
print_r($data);
echo '</p>';
echo '구분 문자 :' ,$glue,'<br>';

echo '연결한 문자열:', implode($glue, $data);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

