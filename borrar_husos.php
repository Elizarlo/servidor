<?php
	$servername = "localhost";
	$username = "alan";
	$dbname   = "husos";
	$password = "ESTANQUE98ful";


	$id        = $_POST['id'];

	


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	

	$sql = "DELETE FROM alarmas WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Eliminado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
