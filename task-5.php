<?php
$max=60;
$min=30;
for ($i=$min;$i<=$max;$i++){
    $count=0;
    for ($j=2;$j<=$max;$j++){
        if ($i%$j==0){$count++;}
    }
    if ($count==1) {echo($i." ");}
}

