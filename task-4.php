<?php
$arr=array(1,2,7,6,4,9,3,6,4,2,7,8,4,5);
sort($arr);
$num=count($arr)-1;
$max=$arr[$num];

for ($i=$num;$i>=0;$i--){
    if ($arr[$i]<$max){echo("Елемент перед максимальным по величине при сортировке: $arr[$i]\n"); break;}
}


$arr=array(1,2,7,6,4,9,3,6,4,2,7,8,4,5);
$max_1=max($arr);

$max_2=$arr[0];
foreach ($arr as $value){
    if ($value>$max_2 and $value!=$max_1){$max_2=$value;}
}
echo("Елемент перед максимальным по величине при переборе: $max_2\n");
