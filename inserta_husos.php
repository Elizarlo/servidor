<?php
	$servername = "localhost";
	$username = "alan";
	$dbname   = "husos";
	$password = "ESTANQUE98ful";

	$origen    = $_POST['origen'];
  $horaOrigen = $_POST['horaOrigen'];
	$destino = $_POST['destino'];
	$horaDestino = $_POST['horaDestino'];
	

	


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	
	

	$sql = "INSERT INTO alarmas 
	VALUES (0,'$origen',  '$horaOrigen', '$destino', '$horaDestino')";

	if ($conn->query($sql) === TRUE) {
		echo "Registro Insertado de Manera Exitosa"."\n";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	die ('Finalizando...');

 
?>
