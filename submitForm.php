<!DOCTYPE html>
<html>
<head>
	<title>Input Validation</title>
</head>
<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $matric_no = htmlspecialchars($_POST['matric_no']);
        $address = htmlspecialchars($_POST['address']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $emergency = htmlspecialchars($_POST['emergency']);
		echo "<h1>Result:</h1>";
		echo "<p>Name: $name</p>";
		echo "<p>Matric No: $matric_no</p>";
		echo "<p>Current Address: $address</p>";
		echo "<p>Email: $email</p>";
		echo "<p>Mobile Phone No: $phone</p>";
		echo "<p>Home Phone No(Emergency): $emergency</p>";
		
	}
	?>
</body>
</html>
