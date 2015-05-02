<?php

/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author George Colgrove <gwc02050@vtc.vsc.edu>
 * @since 20150210
 */

/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

define('GRAVITY', 9.8);

function truncateFloat($float_value)
{
	echo (int)($float_value);
}

/**
 * Converts Farenheit to Kelvin
 *
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
	echo (($degrees_f + 459.67) * 5 / 9);
}

/**
 * Gets the volume for the dodecahedron from the area
 *
 * @param $area
 */
function dodecahedronVolume($area)
{
	echo ((15 + 7 * pow(5, .5))/4) * pow($area , 3);
}

/**
 * Gets the impact velocity from the input height
 *
 * @param $height
 */
function impactVelocity($height)
{
	echo pow(($height * 9.8 * GRAVITY), .5);
}

?> 
<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST["num1"];
    $Far  = $_POST["Far"];
    $dode  = $_POST["dode"];
    $impact  = $_POST["impact"];
} else {
    $num1   = 0;
    $Far    = 0;
    $dode   = 0;
    $impact = 0;
}

$form_layout = <<< EOD
<p>
<form method="post" action="">
truncate: <input type="number" name="num1" step="any">
<br>f2k <input type="number" name="Far" step="any">
<br>dodecahedronVolume <input type="number" name="dode" step="any">
<br>impactVelocity <input type="number" name="impact" step="any">
<br><input type="submit" value="submit" name="submit">
</form>
</p>

EOD;


?>

<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>
<?php
if (!isset($_POST['submit'])) {
    // display the form
    echo $form_layout;

} else {
    // display the output
truncateFloat($num1);
echo "<br>";
farenheit2Kelvin($Far);
echo "<br>";
dodecahedronVolume($dode);
echo "<br>";
impactVelocity($impact);
}
?>
</form>
</body>
</html>
