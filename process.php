<!DOCTYPE html>
<html>
<head>
	<title>Form Submission Result</title>
</head>
<body>
	<?php
		// Check if the form has been submitted
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			// Retrieve the form data
			$name = $_POST['name'];
			$matric = $_POST['matric'];
			$current_address = $_POST['current-address'];
			$home_address = $_POST['home-address'];
			$email = $_POST['email'];
			$mobile_phone = $_POST['mobile-phone'];
			$home_phone = $_POST['home-phone'];

			// Validate the form data
			$errors = array();
			if (empty($name)) {
				$errors[] = 'Name is required.';
			}
			// Perform additional validation checks for the other form fields...

			// Display the form data or error messages
			if (empty($errors)) {
				echo '<h1>Form Submission Result</h1>';
				echo '<p>Name: ' . $name . '</p>';
				echo '<p>Matric No.: ' . $matric . '</p>';
				echo '<p>Current Address: ' . $current_address . '</p>';
				echo '<p>Home Address: ' . $home_address . '</p>';
				echo '<p>Email: ' . $email . '</p>';
				echo '<p>Mobile Phone No.: ' . $mobile_phone . '</p>';
				echo '<p>Home Phone No.: ' . $home_phone . '</p>';
			} else {
				echo '<h1>Form Submission Error</h1>';
				foreach ($errors as $error) {
					echo '<p>' . $error . '</p>';
				}
			}

		} else {
			// Display an error message if the form has not been submitted
			echo '<h1>Error: Form Not Submitted</h1>';
			echo '<p>Please fill out and submit the form.</p>';
		}
	?>
</body>
</html>
