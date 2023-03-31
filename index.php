<!DOCTYPE html>
<html>
<head>
	<title>Input Validation</title>
	<link rel ="stylesheet" type ="text/css" href ="style.css">
</head>
<body>
	<h1>A. Sudent Details</h1>
	<form action="submitForm.php" method="post">
    <label for="name">Name (Legal/Official) :</label><input type="text" id="name" name="name" pattern="^[^0-9]*$" required>
		
		<label for="email">Matric No :</label><input type="number" id="matric_No" name="matric no" required>
		
		<label for="address">Current Address :</label><input type="text" id="address" name="adress" required>
		
		<label for="email">Email (Gmail Account) :</label><input type="mail" id="email" name="email" pattern="[a-z0-9._]+@[a-z]+\.[a-z]{2,}$" required>
		
		<label for="phone">Mobile Phone No :</label><select id="phone" name="phone" required>
			<option value="">+60</option><input type="number" id="phone" name="phone" required>
	</select>
		

        <label for="emergency">Home Phone No (Emergency) :</label><select id="emergency" name="emergency" required>
			<option value="">+60</option><input type="number" id="emergency" name="emergency" required>
		</select>
		<button type="submit">Submit</button>
	</form>
</body>
</html>
