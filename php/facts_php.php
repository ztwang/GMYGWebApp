<?php
	/*$servername = "localhost";
	$username = "root";
	$password = "ignite";
	$dbname = "ignite";*/
	
	$servername = "58.64.190.104";
	$username = "sq_ivyhhhhh";
	$password = "whan1Whan1";
	$dbname = "sq_ivyhhhhh";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	
	$query = "select fact_content,fact_status from facts where fact_status = 1";
	$count=0;

	if ($result = mysqli_query($conn, $query)) {
	 	print("<table class='table'>");
		while($row = mysqli_fetch_row($result)){
			$count++;
			if($count<$result->num_rows){
				print("<tr>
					<td>" . $row[0] . "</td>
				</tr>");
			}
			else
				print("<tr>
					<td class='highlighted'>" . $row[0] . "</td>
				</tr>");
		}
		print("</table>");
		mysqli_free_result($result);
	} else {
    	echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>