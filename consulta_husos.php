<?php
	$servername = "localhost";
	$username = "alan";
	$dbname   = "husos";
	$password = "ESTANQUE98ful";			
	

	$nombre    = $_POST['origen'];
	$apellidop = $_POST['destino'];
	$apellidom = $_POST['hora'];
	
	//echo "Hello, World!"."\n";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	
	$sql = "SELECT id, origen,horaOrigen, destino, horaDestino FROM alarmas";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["id"].",". $row["origen"].",".$row["horaOrigen"].",". $row["destino"].",". $row["horaDestino"]. "\n";
		}
	} else {
		echo "0 results";
	}	
	
	$conn->close();
	//die ('Finalizando...');
	die ('');

 
?>
