<?php
echo("Введите катеты прямоугольного треугольника через пробел:\n");
fscanf(STDIN,"%d %d", $a, $b);
$c=sqrt($a**2+$b**2);
echo("Гипотенуза : $c\n");
$s=($a*$b)/2;
echo("Площадь : $s\n");
$angle_a=tan($a/$b);
$angle_a=rad2deg($angle_a);
settype($angle_a,"integer");
$angle_b=90-$angle_a;
echo("Углы равны : 90 $angle_a $angle_b\n");
$p=$a+$b+$c;
echo("Периметр : $p\n");
