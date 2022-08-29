function myFunction()
{
	let x = document.forms["myForm"]["usn"].value;
	if(x==""){
		alert("USN is a Required Field");
		return false;
	}

	let y = document.forms["myForm"]["name"].value;
	if(y == "")
	{
		alert("Name is a required field");
		return false;
	}

	let z = document.forms["myForm"]["branchid"].value;
	if(z == "")
	{
		alert("Branchid is a required field");
		return false;
	}

}