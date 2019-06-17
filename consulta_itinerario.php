<?php
	$servername = "localhost";
	$username = "alan";
	$dbname   = "husos";
	$password = "ESTANQUE98ful";			
	


	//echo "Hello, World!"."\n";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	
	$sql = "SELECT id, id_iti,ciudad,actual FROM itinerario";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["id"].",". $row["id_iti"].",".$row["ciudad"].",". $row["actual"]. "\n";
		}
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
