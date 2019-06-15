<?php
	$servername = "localhost";
	$username = "alan";
	$dbname   = "husos";
	$password = "ESTANQUE98ful";

	$nombre    = $_POST['origen'];
	$apellidop = $_POST['destino'];
	$apellidom = $_POST['hora'];
	

	


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	

	$sql = "INSERT INTO alarmas 
	VALUES (0,'$nombre', '$apellidop', '$apellidom')";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
