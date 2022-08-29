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

	$USN =$_POST['usn'];
	$SUBJECTCODE =$_POST['subjectcode'];
	$MARKS =$_POST['marks'];


	$sql = "INSERT INTO result(USN,SUBJECTCODE,MARKS) VALUES('$USN','$SUBJECTCODE','$MARKS')";

	if(mysqli_query($con,$sql)){
		echo "<h2 >created successfully</h2>";
		$insert = true;
	}else{
		echo "Error:".$sql."<br>".$con->connect_error;
	}

	$sql1 = "SELECT USN,SUBJECTCODE,MARKS FROM result";
	$result = $con->query($sql1);

	if($result->num_rows>0)
	{
		echo "<table><tr><th>USN</th><th>SUBJECTCODE</th><th>MARKS</th></tr>";

		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row["USN"]."</td><td>".$row["SUBJECTCODE"]."</td><td>".$row["MARKS"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 results";
	}

	$con->close();


?>
