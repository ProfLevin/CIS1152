<?php

require_once "src/PageLayout.php";

use VTC\Lab_5\MathFun as MathFun;
use VTC\Lab_5\PageLayout as PageLayout;

	
	echo PageLayout\PageLayout::$header;
	echo PageLayout\PageLayout::getFormLayout($_POST["submit"], $_POST["truncateFloat"], $_POST["farenheit2Kelvin"], $_POST["dodecahedronVolume"] , $_POST["impactVelocity"]);
	echo PageLayout\PageLayout::$footer;



?>

