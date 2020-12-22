<?php
$ar1r=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$b1=21;

function searchInArray($a, $b){
$arr=$a;
$searchElement=$b;
$firstIndex=0;
$lastIndex=count($arr)-1;
if ($searchElement>$arr[$lastIndex]){return false;}
elseif ($arr[$firstIndex]>$searchElement){return false;}
while($firstIndex<=$lastIndex){
$midleIndex=ceil(($firstIndex+$lastIndex)/2);
if ($arr[$midleIndex] == $searchElement){return true;}
elseif ($arr[$midleIndex]<$searchElement){$firstIndex=$midleIndex+1;}
elseif ($arr[$midleIndex]>$searchElement){$lastIndex=$midleIndex-1;}
else {return false;}
}
}
$z=searchInArray($ar1r,$b1);
var_dump($z);
