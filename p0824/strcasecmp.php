<?php

function compareStr($a, $b){
    
    $result1=strcmp($a, $b);
    if($result1>0){
        echo $b, $a,"순<br>";
    }else if($result1==0){
        echo "같다<br>";
    }
    else{
        echo $a, $b, "순<br>";
    }
}

compareStr("ac", "ab");
compareStr("a", "a");
compareStr("ab", "ac");

/*$id1 = "AB12R";
$id2 = "ab12r";

$result = strcmp($id1, $id2);

if($result==False){ //$result == 0 같다
    echo $id1,"과",$id2,"를 비교한 결과. 일치합니다";
}else {
    echo "일치하지 않습니다";
}*/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

