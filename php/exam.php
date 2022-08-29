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
	$EXAMDATE =$_POST['examdate'];
	$TIMING =$_POST['timing'];


	$sql = "INSERT INTO exam(SUBJECTCODE,EXAMDATE,TIMING) VALUES('$SUBJECTCODE','$EXAMDATE','$TIMING')";

	if(mysqli_query($con,$sql)){
		echo "<h2 >created successfully</h2>";
		$insert = true;
	}else{
		echo "Error:".$sql."<br>".$con->connect_error;
	}

	$sql1 = "SELECT SUBJECTCODE,EXAMDATE,TIMING FROM exam";
	$result = $con->query($sql1);

	if($result->num_rows>0)
	{
		echo "<table><tr><th>SUBJECTCODE</th><th>EXAMDATE</th><th>TIMING</th></tr>";

		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row["SUBJECTCODE"]."</td><td>".$row["EXAMDATE"]."</td><td>".$row["TIMING"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 results";
	}

	$con->close();


?>
