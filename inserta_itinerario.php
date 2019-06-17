<?php
	$servername = "localhost";
	$username = "alan";
	$dbname   = "husos";
	$password = "ESTANQUE98ful";

	$id_iti    = $_POST['id_iti'];
  $ciudad1    = $_POST['ciudad1'];
  $ciudad2    = $_POST['ciudad2'];
  $ciudad3    = $_POST['ciudad3'];
  $ciudad4    = $_POST['ciudad4'];
  $ciudad5    = $_POST['ciudad5'];


  

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 	

  $sql = "INSERT INTO itinerario 	VALUES (0,'$id_iti',  '$ciudad1', '1')";
  $conn->query($sql);
  $sql = "INSERT INTO itinerario 	VALUES (0,'$id_iti',  '$ciudad2', '0')";
  $conn->query($sql);


	if (isset($_POST["ciudad3"])){
    $sql = "INSERT INTO itinerario 	VALUES (0,'$id_iti',  '$ciudad3', '0')";    
    $conn->query($sql);
  }

if (isset($_POST["ciudad4"])){
    $sql = "INSERT INTO itinerario 	VALUES (0,'$id_iti',  '$ciudad4', '0')";  
    $conn->query($sql);
  }

if (isset($_POST["ciudad5"])){
    $sql = "INSERT INTO itinerario 	VALUES (0,'$id_iti',  '$ciudad5', '0')";
    $conn->query($sql);
  }
  




	$conn->close();
	die ('Finalizando...');

 
?>
