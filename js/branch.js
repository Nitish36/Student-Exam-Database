function myFunction()
{
	let x = document.forms["branchform"]["branchid"].value;
	if(x == "")
	{
		alert("Branchid is a required field");
		return false;
	}
	let y = document.forms["branchform"]["branchname"].value;
	if(y==""){
		alert("Branchname is a Required Field");
		return false;
	}
}