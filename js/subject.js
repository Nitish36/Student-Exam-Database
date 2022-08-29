function myFunction()
{
	let x = document.forms["myForm"]["subjectcode"].value;
	if(x==""){
		alert("Subject Code is a Required Field");
		return false;
	}

	let z = document.forms["myForm"]["branchid"].value;
	if(z == "")
	{
		alert("Branchid is a required field");
		return false;
	}

}