<?php
echo("Введите сроку для шифрования: ");
$string =trim(fgets(STDIN));
echo("Введите сдвиг: ");
fscanf(STDIN, "%d", $shift);
$shift=$shift%26;
function dict_encode($string){
	$file=fopen("dict.txt",'r');
	$num=strlen($string);
	//var_dump($num);
	for ($i=0;$i<$num;$i++){
		$file=fopen("dict.txt",'r');
		while (!feof($file)){
			$str=fgets($file);
        		$str=trim($str);
			$str=explode(':',$str);
			//var_dump($str);
			//var_dump($string[$i]);
			if ($string[$i]==$str[0]){$string[$i]=$str[1];break;}
		}
		fclose($file);
	}
	return $string;
}
function cesar_encode($string, $shift){
	$num=strlen($string);
	$result='';
	for ($i=0;$i<$num;$i++){
		$asci=ord($string[$i]);
		if ($asci>=48 and $asci<=57){
			if ($asci+$shift>57){$res_asci=($asci+$shift) - 57 + 47;}
			elseif ($asci+$shift<48){$res_asci=($asci+$shift) + 57 - 47;}
			else {$res_asci=$asci+$shift;}}
		elseif ($asci>=65 and $asci<=90){
			if ($asci+$shift>90){$res_asci=($asci+$shift) - 90 + 64;}
			elseif ($asci+$shift<65){$res_asci=($asci+$shift) + 90 - 64;}
                        else {$res_asci=$asci+$shift;}}
		elseif ($asci>=97 and $asci<=122){
			if ($asci+$shift>122){$res_asci=($asci+$shift) - 122 + 96;}
			elseif ($asci+$shift<97){$res_asci=($asci+$shift) + 122 - 96;}
                        else {$res_asci=$asci+$shift;}}
		//elseif ($asci>=192 and $asci<=223){
                //        if ($asci+$shift>223){$res_asci=($asci+$shift) - 223 + 191;}
                //        else {$res_asci=$asci+$shift;}}
		//elseif ($asci>=224 and $asci<=255){
                //        if ($asci+$shift>255){$res_asci=($asci+$shift) - 255 + 223;}
                //        else {$res_asci=$asci+$shift;}}
		else {$res_asci=$asci;}
		$result=$result.chr($res_asci);
		}
	return $result;
}
$dict=dict_encode($string);
$res=cesar_encode($dict,$shift);
echo ("Зашифравання строка: ".$res."\n");

function dict_decode($string){
	$file=fopen("dict.txt",'r');
        $num=strlen($string);
        //var_dump($num);
        for ($i=0;$i<$num;$i++){
                $file=fopen("dict.txt",'r');
                while (!feof($file)){
                        $str=fgets($file);
                        $str=trim($str);
                        $str=explode(':',$str);
                        //var_dump($str);
                        //var_dump($string[$i]);
                        if ($string[$i]==$str[1]){$string[$i]=$str[0];break;}
                }       
                fclose($file);
        }
        return $string;

}

function cesar_decode($string,$shift){
	$num=strlen($string);
        $result='';
        for ($i=0;$i<$num;$i++){
                $asci=ord($string[$i]);
                if ($asci>=48 and $asci<=57){
                        if ($asci-$shift>57){$res_asci=($asci-$shift) - 57 + 47;}
                        elseif ($asci-$shift<48){$res_asci=($asci-$shift) + 57 - 47;}
                        else {$res_asci=$asci-$shift;}}
                elseif ($asci>=65 and $asci<=90){
                        if ($asci-$shift>90){$res_asci=($asci-$shift) - 90 + 64;}
                        elseif ($asci-$shift<65){$res_asci=($asci-$shift) + 90 - 64;}
                        else {$res_asci=$asci-$shift;}}
                elseif ($asci>=97 and $asci<=122){
                        if ($asci-$shift>122){$res_asci=($asci-$shift) - 122 + 96;}
                        elseif ($asci-$shift<97){$res_asci=($asci-$shift) + 122 - 96;}
                        else {$res_asci=$asci-$shift;}}
                //elseif ($asci>=192 and $asci<=223){
                //        if ($asci+$shift>223){$res_asci=($asci+$shift) - 223 + 191;}
                //        else {$res_asci=$asci+$shift;}}
                //elseif ($asci>=224 and $asci<=255){
                //        if ($asci+$shift>255){$res_asci=($asci+$shift) - 255 + 223;}
                //        else {$res_asci=$asci+$shift;}}
                else {$res_asci=$asci;}
                $result=$result.chr($res_asci);
                }
        return $result;

}
$res_dec=cesar_decode($res,$shift);
$res_dec=dict_decode($res_dec);
echo("Расшифрованная строка:  $res_dec");

