<?php
	$insert = false;
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname="examination_database";

	$con = mysqli_connect($server,$username,$password,$dbname);

	if(!$con)
	{
		die("connection to this database failed due to ".mysqli_connect_error);
	}

	//echo "Success connecting to db";

	$SUBJECTCODE =$_POST['subjectcode'];
	$SUBJECTNAME =$_POST['subjectname'];
	$CREDIT =$_POST['credit'];
	$BRANCHID=$_POST['branchid'];


	$sql = "INSERT INTO subject(SUBJECTCODE,SUBJECTNAME,CREDIT,BRANCHID) VALUES('$SUBJECTCODE','$SUBJECTNAME','$CREDIT','$BRANCHID')";

	if(mysqli_query($con,$sql)){
		echo "<h2 >created successfully</h2>";
		$insert = true;
	}else{
		echo "Error:".$sql."<br>".$con->connect_error;
	}

	$sql1 = "SELECT SUBJECTCODE,SUBJECTNAME,CREDIT,BRANCHID FROM subject";
	$result = $con->query($sql1);

	if($result->num_rows>0)
	{
		echo "<table><tr><th>SUBJECTCODE</th><th>SUBJECTNAME</th><th>CREDIT</th><th>BRANCHID</th></tr>";

		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row["SUBJECTCODE"]."</td><td>".$row["SUBJECTNAME"]."</td><td>".$row["CREDIT"]."</td><td>".$row["BRANCHID"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 results";
	}

	$con->close();


?>
