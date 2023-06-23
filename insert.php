<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "cnc");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$c_type= $_REQUEST['c_type'];
		$c_qty= $_REQUEST['c_qty'];
		$c_name = $_REQUEST['c_name'];
		$c_no = $_REQUEST['c_no'];
		$c_mail = $_REQUEST['c_mail'];
		$c_thought = $_REQUEST['c_thought'];
		$c_cakes = $_REQUEST['c_cakes'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO cncorder VALUES ('$c_type',
			'$c_qty','$c_name','$c_no','$c_mail','$c_thought','$c_cakes')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>ORDER CONFIRMED.....THANKS ORDERING.....VISI AGAIN...: )</h3>";

			echo nl2br("<h4>YOUR ORDER DETAILS</h4>\n<b>$c_type\n $c_qty\n "
				. "$c_name\n $c_no\n $c_mail\n $c_thought\n $c_cakes</b>");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
