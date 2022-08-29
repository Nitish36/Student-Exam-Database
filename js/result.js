function myFunction()
{
	let x = document.forms["myForm"]["usn"].value;
	if(x==""){
		alert("USN is a Required Field");
		return false;
	}
}