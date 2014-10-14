<HTML>
<title>Unit Converter Output</title>
</HTML>

<?php
#variables
$inputUnits; #the units of the input
$outputUnits; #the units of the output
$conversion = $_POST['conversion']; #the conversion that is happening
$inputValue = $_POST['inputValue']; #the value to be converted, provided by the user in the input units
$outputValue; #the converted value in the output units


#conversions
#MASS
	if ($conversion == 'g-kg')
	{
		$outputValue = $inputValue / 1000.0;
		$inputUnits = 'Grams';
		$outputUnits = 'Kilograms';
	}
	if ($conversion == 'g-mg')
	{
		$outputValue = $inputValue * 1000.0;
		$inputUnits = 'Grams';
		$outputUnits = 'Milligrams';
	}
	if ($conversion == 'g-lb')
	{
		$outputValue = $inputValue * 0.002205;
		$inputUnits = 'Grams';
		$outputUnits = 'Pounds';
	}
	if ($conversion == 'g-oz')
	{
		$outputValue = $inputValue * 0.03527;
		$inputUnits = 'Grams';
		$outputUnits = 'Ounces';
	}
	if ($conversion == 'kg-g')
	{
		$outputValue = $inputValue * 1000.0;
		$inputUnits = 'Kilograms';
		$outputUnits = 'Grams';
	}
	if ($conversion == 'kg-mg')
	{
		$outputValue = $inputValue * 1000000.0;
		$inputUnits = 'Kilograms';
		$outputUnits = 'Milligrams';
	}
	if ($conversion == 'kg-lb')
	{
		$outputValue = $inputValue * 2.205;
		$inputUnits = 'Kilograms';
		$outputUnits = 'Pounds';
	}
	if ($conversion == 'kg-oz')
	{
		$outputValue = $inputValue * 35.27;
		$inputUnits = 'Kilograms';
		$outputUnits = 'Ounces';
	}
	if ($conversion == 'mg-g')
	{
		$outputValue = $inputValue / 1000.0;
		$inputUnits = 'Milligrams';
		$outputUnits = 'Grams';
	}
	if ($conversion == 'mg-kg')
	{
		$outputValue = $inputValue / 1000000.0;
		$inputUnits = 'Milligrams';
		$outputUnits = 'Kilograms';
	}
	if ($conversion == 'mg-lb')
	{
		$outputValue = $inputValue * 0.000002205;
		$inputUnits = 'Milligrams';
		$outputUnits = 'Pounds';
	}
	if ($conversion == 'mg-oz')
	{
		$outputValue = $inputValue * 0.00003527;
		$inputUnits = 'Milligrams';
		$outputUnits = 'Ounces';
	}
	if ($conversion == 'lb-g')
	{
		$outputValue = $inputValue * 453.6;
		$inputUnits = 'Pounds';
		$outputUnits = 'Grams';
	}
	if ($conversion == 'lb-kg')
	{
		$outputValue = $inputValue * 0.4536;
		$inputUnits = 'Pounds';
		$outputUnits = 'Kilograms';
	}
	if ($conversion == 'lb-mg')
	{
		$outputValue = $inputValue * 453600.0;
		$inputUnits = 'Pounds';
		$outputUnits = 'Milligrams';
	}
	if ($conversion == 'lb-oz')
	{
		$outputValue = $inputValue * 16.0;
		$inputUnits = 'Pounds';
		$outputUnits = 'Ounces';
	}
	if ($conversion == 'oz-g')
	{
		$outputValue = $inputValue * 28.35;
		$inputUnits = 'Ounces';
		$outputUnits = 'Grams';
	}
	if ($conversion == 'oz-kg')
	{
		$outputValue = $inputValue * 0.02835;
		$inputUnits = 'Ounces';
		$outputUnits = 'Kilograms';
	}
	if ($conversion == 'oz-mg')
	{
		$outputValue = $inputValue * 28350.0;
		$inputUnits = 'Ounces';
		$outputUnits = 'Milligrams';
	}
	if ($conversion == 'oz-lb')
	{
		$outputValue = $inputValue * 0.625;
		$inputUnits = 'Ounces';
		$outputUnits = 'Pounds';
	}
#TEMPERATURE
	if ($conversion == 'F-C')
	{
		$outputValue = ($inputValue - 32.0) * (5.0/9.0);
		$inputUnits = 'Degrees Fahrenheit';
		$outputUnits = 'Degrees Celcius';
	}
	if ($conversion == 'F-K')
	{
		$outputValue = ($inputValue - (32.0 + 273.15) * (5.0/9.0));
		$inputUnits = 'Degrees Fahrenheit';
		$outputUnits = 'Kelvin';
	}
	if ($conversion == 'C-F')
	{
		$outputValue = ($inputValue * (9.0/5.0)) + 32.0;
		$inputUnits = 'Degrees Celcius';
		$outputUnits = 'Degrees Fahrenheit';
	}
	if ($conversion == 'C-K')
	{
		$outputValue = $inputValue + 273.15;
		$inputUnits = 'Degrees Celcius';
		$outputUnits = 'Kelvin';
	}
	if ($conversion == 'K-F')
	{
		$outputValue = (((9.0/5.0) * $inputValue ) + 32.0 ) - 273.15;
		$inputUnits = 'Kelvin';
		$outputUnits = 'Degrees Fahrenheit';
	}
	if ($conversion == 'K-C')
	{
		$outputValue = $inputValue - 273.15;
		$inputUnits = 'Kelvin';
		$outputUnits = 'Degrees Celcius';
	}
	if ($conversion == null)
	{
		echo "Error, null value";
		include( "redirect.js" );
		die;
	}
#end conversions
#output
echo "$inputValue $inputUnits = $outputValue $outputUnits";

?>
