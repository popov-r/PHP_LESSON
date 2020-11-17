<?php
echo("Введите количство цыфр в билете(должно быть парное значение): ");
fscanf(STDIN, "%d", $k);

if ($k%2!=0){echo("Значение не парное\n"); exit;}

function luckyTikets(int $k){
$z=$k;
$max="";
$max=str_pad($max,$z,"9");
settype($max, "integer");
$cnt=0;
for ($i=0;$i<=$max;$i++){
        $val=$i;
        $val=str_pad($i,$z,"0",STR_PAD_LEFT);
        $mid=$z/2;
	$val=str_split($val,$mid);
	$a=str_split($val[0]);$a=array_sum($a);
	$b=str_split($val[1]);$b=array_sum($b);

        if ($a==$b){$cnt++;}
}
return $cnt;
}
$cnt=luckyTikets($k);
echo("Возможное количство счастливых номеров: $cnt\n");
