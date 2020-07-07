/* INDEX.PHP */

function showHide(id) {
	var x = document.getElementById(id);
	if(x.style.visibility === 'hidden')
		x.style.visibility = 'visible';
	else
		x.style.visibility = 'hidden';
}

/* BROWSE.PHP */
function itemAdded() {
	alert("Item Added Successfully!");
}


/* CHECKOUT.PHP */
//Text Focus
/******
 * This function highlights the text area for easier use.
 *****/
function background(x){
	x.style.background = "yellow";
}

//Text Upper Case
/******
 * This function alters the user input to uppercase for form handling.
 *****/
function toUpper(x){
	x.value = x.value.toUpperCase();
}

//Return Background
/******
 * This function returns the background color of a text
 * area if the user leaves the element.
 *****/
function removeBackground(x){
	x.style.background = "white";
}

//Main Validation
/******
 * After input, check values and display
 * or hide the input warning
 *****/
 function mainValidator(input, myID, testCase){
 	//Test the RegEx against the input
	if(testCase.test(input)){
		//Hide the error message if it matches
		document.getElementById(myID).style.display = "none";
	}
	else{
		//Show the error message if it doesn't match
		document.getElementById(myID).style.display = "inline";
	}
}

//Regex Creator
/******
 * This function creates a Regex Object
 * based on the testNumber. It then calls
 * the mainValidator function.
 *****/
function regCreator(input, myID, testNumber){
	var rTest = "";
	switch(testNumber){
		case 1:
			// Name
			rTest = /[A-Za-z]+\s[A-Za-z]?\s?[A-Za-z]+/;
			break;
		case 2:
			// Phone
			rTest = /\d{3}-\d{3}-\d{4}/;
			break;
		case 3:
			// Address
			rTest = /\d+ [A-Z]\. ([A-Za-z0-9]+) \w+/;
			break;
		case 4:
			// City
			rTest = /\w+/;
			break;
		case 5:
			// State
			rTest = /[A-Z][A-Z]/;
			break;
		case 6:
			// Zip Code
			rTest = /\d{5}/;
			break;
		case 7:
			// Credit Card Number
			rTest = /\d{4}-\d{4}-\d{4}-\d{4}/;
			break;
		case 8:
			// EXP
			rTest = /\d{2}/;
			break;
		case 9:
			// CCV
			rTest = /\d{3}/;
			break;
		default:
			break;
	}
	mainValidator(input, myID, rTest);
}

//Radio Button Warning
/******
 * This function hides the warning if the user selects a radio button.
 *****/
function hideWarning(myID){
	document.getElementById(myID).style.display = "none";
}

function submitForm(){
	alert("The form has been submitted");
}

function formAlert(){
	alert("The form was reset by user");
}

function resetForm(){
	document.getElementById("purchaseForm").reset();
}

//Home Page Reset Session Variables
function resetSession() {
  $.ajax({
    type:'post',
    url:'store_items.php',
    data:{
    	reset: 'reset'
    },
    success:function(response){}
  });
}