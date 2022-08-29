function myFunction()
{
	let x = document.forms["myForm"]["subjectcode"].value;
	if(x==""){
		alert("Subjectcode is a Required Field");
		return false;
	}
}