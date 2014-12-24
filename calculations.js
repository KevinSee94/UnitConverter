//The following array stores conversion constants for conversions selected by the user
var constants = new Array();
//Mass Conversions
constants["g-kg"] = ( 1.0 / 1000.0 );
constants["g-mg"] = 1000.0;
constants["g-lb"] = 0.002205;
constants["g-oz"] = 0.03527;
constants["kg-g"] = 1000.0;
constants["kg-mg"] = 1000000.0;
constants["kg-lb"] = 2.205;
constants["kg-oz"] = 35.27;
constants["mg-g"] = ( 1.0 / 1000.0 );
constants["mg-kg"] = ( 1.0 / 1000000.0 );
constants["mg-lb"] = .000002205;
constants["mg-oz"] = .00003527;
constants["lb-g"] = 453.6;
constants["lb-kg"] = 0.4536;
constants["lb-mg"] = 453600.0;
constants["lb-oz"] = 16.0;
constants["oz-g"] = 28.35;
constants["oz-kg"] = 0.02835;
constants["oz-mg"] = 28350.0;
constants["oz-lb"] = 0.625;
//Array values for temperature conversions are merely placeholders, they will get special handling in the calculateTotal method
constants["F-C"] = 1.0;
constants["F-K"] = 1.0;
constants["C-F"] = 1.0;
constants["C-K"] = 1.0;
constants["K-F"] = 1.0;
constants["K-C"] = 1.0;
//Length Conversions
constants["m-cm"] = 100.0;
constants["m-mm"] = 1000.0;
constants["m-um"] = 100000.0;
constants["m-in"] = 39.3700787;
constants["m-ft"] = 3.280839;
constants["cm-m"] = ( 1.0 / 100.0 );
constants["cm-mm"] = 10.0;
constants["cm-um"] = 10000.0;
constants["cm-in"] = 0.3937;
constants["cm-ft"] = 0.032808;
constants["mm-m"] = ( 1.0 / 1000.0 );
constants["mm-cm"] = ( 1.0 / 10.0 );
constants["mm-um"] = ( 1.0 / 1000.0 );
constants["mm-in"] = 0.03937;
constants["mm-ft"] = 0.0032808;
constants["um-m"] = ( 1.0 / 1000000.0 );
constants["um-cm"] = ( 1.0 / 10000.0 );
constants["um-mm"] = ( 1.0 / 1000 );
constants["um-in"] = 0.00003937;
constants["um-ft"] = 0.0000032808;
constants["in-m"] = 0.0254;
constants["in-cm"] = 2.54;
constants["in-mm"] = 25.4;
constants["in-um"] = 25400.0;
constants["in-ft"] = ( 1.0 / 12.0 );
constants["ft-m"] = 0.3048;
constants["ft-cm"] = 30.48;
constants["ft-mm"] = 304.8;
constants["ft-um"] = 304800.0;
constants["ft-in"] = 12.0;
//Energy Conversions
constants["J-BTU"] = 0.0009484513;
constants["J-Cal"] = 0.29300593614;
constants["BTU-J"] = 1055.0559;
constants["BTU-Cal"] = 252.1644;
constants["Cal-J"] = 4.184;
constants["Cal-BTU"] = 0.003965666;
//Volume Conversions
constants["L-mL"] = 1000.0;
constants["L-gal"] = ( 1.0 / 3.7854 );
constants["mL-L"] = ( 1.0 / 1000.0 );
constants["mL-gal"] = ( 1.0 / 3785.411 );
constants["gal-L"] = 3.7854;
constants["gal-mL"] = 3785.411;


//Function generates the text of the slected conversion for output
//All of the possible selections in the select box contain both the input and output units.  We only want the output units to show up in the 
//output of the converter, so the processing of the function removes the first unit and the hyphen.
function getOutputUnit(){
	//Reference the form
	var theForm = document.forms["conversion"];
	//Reference the select box
	var conv = theForm.elements["conversionType"];
	//Get the value of the selection in the select box as a variable.  
	var unit = conv.value;
	//Set min and max of eventual substring funcion call
	var max = unit.length;
	var min = unit.length;
	//Loop decreases the min variable until it hits the hyphen
	while( unit.substring( min, min + 1 ) != "-" ){
		min = min - 1;
	}
	//Generate and return output.
	var output = unit.substring( ( min + 1 ), max );
	return output;
}

//Function to get the conversion selected by the user
function getConversionType(){
	var convConstant = 0
	//Reference the form
	var theForm = document.forms["conversion"];
	//Reference the select box
	var convType = theForm.elements["conversionType"];
	//Set equal to the constants in the array
	convConstant = constants[convType.value];
	return convConstant
}

//Function to get the value of the conversion
function getConversionValue(){
	var convValue = 0;
	var theForm = document.forms["conversion"];
	var inValue = theForm.inputValue.value;
	convValue = inValue;
	return convValue;
}

function calculateTotal(){
	var convOutput = 0.0;
	convOutput = getConversionType() * getConversionValue();
	//We need a special case to handle conversions between temperatures
		var theForm = document.forms["conversion"];
		var convType = theForm.elements["conversionType"];
		var comp = convType.value;
		if( comp == "F-C" ){
			convOutput = ( getConversionValue() - 32.0 ) * ( 5.0 / 9.0 );
		} else if( comp == "F-K" ){
			convOutput = ( getConversionValue() - ( 32.0 + 273.15 ) * ( 5.0 / 9.0 ) );
		} else if( comp == "C-F" ){
			convOutput = ( getConversionValue() * ( 9.0 / 5.0 ) ) + 32;
		} else if( comp == "C-K" ){
			convOutput = ( getConversionValue() ) - ( -273.15 );
		} else if( comp == "K-F" ){
			convOutput = ( ( getConversionValue() * ( 9.0 / 5.0 ) ) + 32.0 ) - 273.15;
		} else if( comp == "K-C" ){
			convOutput = getConversionValue() - 273.15;
		//Add a contingency if the value coming through is null
		} else if( comp == "null"){
			convOutput = "ERROR: Please make a valid unit selection";
		} else{}
	//display result
	var divobj = document.getElementById('output');
	divobj.style.display = 'block';
	divobj.innerHTML = convOutput + "  " + getOutputUnit();
}
//This function hides the text displaying the total on the initial load of the page
function hideTotal(){
	var divobj = document.getElementById('output');
	divobj.style.display = 'none';
}