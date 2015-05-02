<?php

/**
 * Lab 2, Arithmatic Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author George Colgrove <gwc02050@vtc.edi>
 * @since 20150120
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
	echo (int)($float_value * 100) / 100;
}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
	echo ($degrees_f -32) * (5/9) + 273.15;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
	echo ((15 + 7 * pow(5, .5))/4) * pow($area , 3);
}

/**
 * @param $height
 */
function impactVelocity($height)
{
	echo pow((2* 9.8 * GRAVITY), .5);
}

truncateFloat(100.32423);
echo "<br/>";
farenheit2Kelvin(100);
echo "<br/>"
dodecahedronVolume(234);
echo "<br/>"
impactVelocity(12.1);
