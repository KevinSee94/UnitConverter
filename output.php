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
#LENGTH
	if ($conversion == 'm-cm')
	{
		$outputValue = $inputValue * 100;
		$inputUnits = "Meters";
		$outputUnits = "Centimeters";
	}
	if ($conversion == 'm-mm')
	{
		$outputValue = $inputValue * 1000;
		$inputUnits = "Meters";
		$outputUnits = "Millimeters";
	}
	if ($conversion == 'm-um')
	{
		$outputValue = $inputValue * 100000;
		$inputUnits = "Meters";
		$outputUnits = "Micrometers";
	}
	if ($conversion == 'm-in')
	{
		$outputValue = $inputValue * 39.3700787;
		$inputUnits = "Meters";
		$outputUnits = "Inches";
	}
	if ($conversion == 'm-ft')
	{
		$outputValue = $inputValue * 3.280839;
		$inputUnits = "Meters";
		$outputUnits = "Feet";
	}
	if ($conversion == 'cm-m')
	{
		$outputValue = $inputValue / 100.0;
		$inputUnits = "Centimeters";
		$outputUnits = "Meters";
	}
	if ($conversion == 'cm-mm')
	{
		$outputValue = $inputValue * 10.0;
		$inputUnits = "Centimeters";
		$outputUnits = "Millimeters";
	}
	if ($conversion == 'cm-um')
	{
		$outputValue = $inputValue * 10000.0;
		$inputUnits = "Centimeters";
		$outputUnits = "Micrometers";
	}
	if ($conversion == 'cm-in')
	{
		$outputValue = $inputValue * 0.3937;
		$inputUnits = "Centimeters";
		$outputUnits = "Inches";
	}
	if ($conversion == 'cm-ft')
	{
		$outputValue = $inputValue * 0.032808;
		$inputUnits = "Centimeters";
		$outputUnits = "Feet";
	}
	if ($conversion == 'mm-m')
	{
		$outputValue = $inputValue / 1000.0;
		$inputUnits = "Millimeters";
		$outputUnits = "Meters";
	}
	if ($conversion == 'mm-cm')
	{
		$outputValue = $inputValue / 10.0;
		$inputUnits = "Millimeters";
		$outputUnits = "Centimeters";
	}
	if ($conversion == 'mm-um')
	{
		$outputValue = $inputValue * 1000.0;
		$inputUnits = "Millimeters";
		$outputUnits = "Micrometers";
	}
	if ($conversion == 'mm-in')
	{
		$outputValue = $inputValue * 0.03937;
		$inputUnits = "Millimeters";
		$outputUnits = "Inches";
	}
	if ($conversion == 'mm-ft')
	{
		$outputValue = $inputValue * 0.0032808;
		$inputUnits = "Millimeters";
		$outputUnits = "Feet";
	}
	if ($conversion == 'um-m')
	{
		$outputValue = $inputValue / 1000000.0;
		$inputUnits = "Micrometers";
		$outputUnits = "Meters";
	}
	if ($conversion == 'um-cm')
	{
		$outputValue = $inputValue / 10000.0;
		$inputUnits = "Micrometers";
		$outputUnits = "Centimeters";
	}
	if ($conversion == 'um-mm')
	{
		$outputValue = $inputValue / 1000.0;
		$inputUnits = "Micrometers";
		$outputUnits = "Millimeters";
	}
	if ($conversion == 'um-in')
	{
		$outputValue = $inputValue * 0.00003937;
		$inputUnits = "Micrometers";
		$outputUnits = "Inches";
	}
	if ($conversion == 'um-ft')
	{
		$outputValue = $inputValue * 0.0000032808;
		$inputUnits = "Micrometers";
		$outputUnits = "Feet";
	}
	if ($conversion == 'in-m')
	{
		$outputValue = $inputValue * 0.0254;
		$inputUnits = "Inches";
		$outputUnits = "Meters";
	}
	if ($conversion == 'in-cm')
	{
		$outputValue = $inputValue * 2.54;
		$inputUnits = "Inches";
		$outputUnits = "Centimeters";
	}
	if ($conversion == 'in-mm')
	{
		$outputValue = $inputValue * 25.4;
		$inputUnits = "Inches";
		$outputUnits = "Millimeters";
	}
	if ($conversion == 'in-um')
	{
		$outputValue = $inputValue * 25400.0;
		$inputUnits = "Inches";
		$outputUnits = "Micrometers";
	}
	if ($conversion == 'in-ft')
	{
		$outputValue = $inputValue / 12.0;
		$inputUnits = "Inches";
		$outputUnits = "Feet";
	}
	if ($conversion == 'ft-m')
	{
		$outputValue = $inputValue * 0.3048;
		$inputUnits = "Feet";
		$outputUnits = "Meters";
	}
	if ($conversion == 'ft-cm')
	{
		$outputValue = $inputValue * 30.48;
		$inputUnits = "Feet";
		$outputUnits = "Centimeters";
	}
	if ($conversion == 'ft-mm')
	{
		$outputValue = $inputValue * 304.8;
		$inputUnits = "Feet";
		$outputUnits = "Millimeters";
	}
	if ($conversion == 'ft-um')
	{
		$outputValue = $inputValue * 304800.0;
		$inputUnits = "Feet";
		$outputUnits = "Micrometers";
	}
	if ($conversion == 'ft-in')
	{
		$outputValue = $inputValue * 12.0;
		$inputUnits = "Feet";
		$outputUnits = "Inches";
	}
#ENERGY CONVERSIONS
	if ($conversion == 'J-BTU')
	{
		$outputValue = $inputValue * 0.0009484513;
		$inputUnits = "Joules";
		$outputUnits = "BTU";
	}
	if ($conversion == 'J-Cal')
	{
		$outputValue = $inputValue * 0.29300593614;
		$inputUnits = "Joules";
		$outputUnits = "Calories";
	}
	if ($conversion == 'BTU-J')
	{
		$outputValue = $inputValue * 1055.0559;
		$inputUnits = "BTU";
		$outputUnits = "Joules";
	}
	if ($conversion == 'BTU-Cal')
	{
		$outputValue = $inputValue * 252.1644;
		$inputUnits = "BTU";
		$outputUnits = "Calories";
	}
	if ($conversion == 'Cal-J')
	{
		$outputValue = $inputValue * 4.184;
		$inputUnits = "Calories";
		$outputUnits = "Joules";
	}
	if ($conversion == 'Cal-BTU')
	{
		$outputValue = $inputValue * 0.003965666;
		$inputUnits = "Calories";
		$outputUnits = "BTU";
	}
#Volume Conversions
	if ($conversion == 'L-mL')
	{
		$outputValue = $inputValue * 1000.0;
		$inputUnits = 'Liters';
		$outputUnits = 'Milliliters';
	}
	if ($conversion == 'mL-L')
	{
		$outputValue = $inputValue / 1000.0;
		$inputUnits = 'Milliliters';
		$outputUnits = 'Liters';
	}
	if ($conversion == 'gal-L')
	{
		$outputValue = $inputValue * 3.7854;
		$inputUnits = 'Gallons';
		$outputUnits = 'Liters';
	}
	if ($conversion == 'L-gal')
	{
		$outputValue = $inputValue / 3.7854;
		$inputUnits = 'Liters';
		$outputUnits = 'Gallons';
	}
	if ($conversion == 'gal-mL')
	{
		$outputValue = $inputValue * 3785.411;
		$inputUnits = 'Gallons';
		$outputUnits = 'Milliliters';
	}
	if ($conversion == 'mL-gal')
	{
		$outputValue = $inputValue / 3785.411;
		$inputUnits = 'Milliliters';
		$outputUnits = 'Gallons';
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
