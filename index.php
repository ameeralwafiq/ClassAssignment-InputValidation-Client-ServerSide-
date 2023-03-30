<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<!-- Include CSS file for error messages -->
	<link rel="stylesheet" href="css/error.css">
	<!-- Include JavaScript file for client-side validation -->
	<script src="js/validation.js"></script>
</head>
<body>
	<h1>Student Details</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return validateForm()">
	<label for="name">Name (Legal/Official):</label>
		<input type="text" id="name" name="name" required>
		<br>
		<label for="matric">Matric No.:</label>
		<input type="text" id="matric" name="matric" required>
		<br>
		<label for="current-address">Current Address:</label>
		<input type="text" id="current-address" name="current-address" required>
		<br>
		<label for="home-address">Home Address:</label>
		<input type="text" id="home-address" name="home-address" required>
		<br>
		<label for="email">Email (Gmail account):</label>
		<input type="email" id="email" name="email" required>
		<br>
		<label for="mobile-phone">Mobile Phone No.:</label>
		<input type="tel" id="mobile-phone" name="mobile-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
		<br>
		<label for="home-phone">Home Phone No. (Emergency):</label>
		<input type="tel" id="home-phone" name="home-phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
		<br>
		<input type="submit" value="Submit">
	</form>


	
	<?php
	// Server-side validation
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$errors = "";
		if (!preg_match("/^[A-Za-z ]+$/", $name)) {
			$errors .= "Invalid name format. ";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors .= "Invalid email format. ";
		}
		if (!empty($phone) && !preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
			$errors .= "Invalid phone format. ";
		}
		if (!empty($errors)) {
			echo "<div class='error'>$errors</div>";
		} else {
			echo "<div class='success'>Form submitted successfully!</div>";
		}
	}
	?>
</body>
</html>

