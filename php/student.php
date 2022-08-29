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
	$STUDENT_NAME =$_POST['name'];
	$GENDER =$_POST['gender'];
	$EMAIL =$_POST['email'];
	$DOB =$_POST['date'];
	$BRANCHID=$_POST['branchid'];


	$sql = "INSERT INTO student(USN,STUDENT_NAME,GENDER,EMAIL,DOB,BRANCHID) VALUES('$USN','$STUDENT_NAME','$GENDER','$EMAIL','$DOB','$BRANCHID')";

	if(mysqli_query($con,$sql)){
		echo "<h2 >created successfully</h2>";
		$insert = true;
	}else{
		echo "Error:".$sql."<br>".$con->connect_error;
	}

	$sql1 = "SELECT USN,STUDENT_NAME,GENDER,EMAIL,DOB,BRANCHID FROM student";
	$result = $con->query($sql1);

	if($result->num_rows>0)
	{
		echo "<table><tr><th>USN</th><th>STUDENT_NAME</th><th>GENDER</th><th>EMAIL</th><th>DOB</th><th>BRANCHID</th></tr>";

		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row["USN"]."</td><td>".$row["STUDENT_NAME"]."</td><td>".$row["GENDER"]."</td><td>".$row["EMAIL"]."</td><td>".$row["DOB"]."</td><td>".$row["BRANCHID"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 results";
	}

	$con->close();


?>
