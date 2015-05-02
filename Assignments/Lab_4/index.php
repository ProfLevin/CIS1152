<html>
<head> <title></title> </head>
<body>
<?php

function areaOfACircle($radius)
{
	echo pow($radius, 2) * pi();
}
function fToK($F){
	echo ($F -32) * (5/9) + 273.15;
}
function volOfDod($a){
	echo ((15 + 7 * pow(5, .5))/4) * pow($a , 3);
}
function precision2($f){
	echo (int)($f * 100) / 100;
}
function impactVel($g, $h){
	echo pow((2* $g * $h), .5);
}
areaOfACircle(12);
echo "<br>";
fToK(100);
echo "<br>";
volOfDod(25);
echo "<br>";
precision2(143.2434);
echo "<br>";
impactVel(20, 2);
echo "<br>";

?>
</body>
</html>