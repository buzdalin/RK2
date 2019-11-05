<?php
is_float($x);
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$x=(-$b+(sqrt((($b)^2-4($a)($c))))))/2;
echo $x,"<br>";
$x=(-$b-(sqrt((($b)^2-4($a)($c))))))/2;
echo $x,"<br>";
?>