<?php
$a = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'cherry');
function arrayReverseKeys(array $ww){
	$arr=$ww;
	$arrKeys=array_keys($arr);
	$arrKeys=array_reverse($arrKeys);
	$arrValues=array_values($arr);
	$arr=array_combine($arrKeys, $arrValues);
	return $arr;
}
$rezult=arrayReverseKeys($a);
var_dump($a);
echo("\n");
var_dump($rezult);
echo("\n");
