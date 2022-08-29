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

	$BRANCHID=$_POST['branchid'];
	$BRANCHNAME =$_POST['branchname'];
	$SEMESTER =$_POST['semester'];
	


	$sql = "INSERT INTO branch(BRANCHID,BRANCHNAME,SEMESTER) VALUES('$BRANCHID','$BRANCHNAME','$SEMESTER')";

	if(mysqli_query($con,$sql)){
		echo "<h2 >created successfully</h2>";
		$insert = true;
	}else{
		echo "Error:".$sql."<br>".$con->connect_error;
	}

	$sql1 = "SELECT BRANCHID,BRANCHNAME,SEMESTER FROM branch";
	$result = $con->query($sql1);

	if($result->num_rows>0)
	{
		echo "<table><tr><th>BRANCHID</th><th>BRANCHNAME</th><th>SEMESTER</th></tr>";

		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row["BRANCHID"]."</td><td>".$row["BRANCHNAME"]."</td><td>".$row["SEMESTER"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 results";
	}

	$con->close();


?>
