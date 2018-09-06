<?php
//전승희

$cnt = 0;
for ($i = 0; $i < 301; $i++){
    if($i%3!=0){
        $cnt += 1;
        if($cnt <= 10){
        echo $i," "; 
        }else {
            $cnt = 1;
            echo '<br> ', $i;
        }
    }
}
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

