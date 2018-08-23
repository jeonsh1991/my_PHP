<?php
$a=1;
$b=1;
do{
    echo '<br>'.$a.'단<br>';
    do{
        echo $a.'*'.$b.'='.($a*$b).'<br>';
        $b=$b+1;
    }while($b<10);
        
    $a = $a+1;
    $b = 1;
 
}while($a<10)
?> 