<?php

// code via Clever Techie - HTML/PHP Contact Form Tutorial with Validation and Email Submit https://www.youtube.com/watch?v=1CkBsGhux9U
// The Clever Techie guy used this HTML+CSS code: https://codepen.io/ssbalakumar/details/uzDIA
// The Clever Techie guy used this PHP validation code: https://www.w3schools.com/php/php_forms.asp

// print_r($_POST);
// die;
// phpinfo();


// define variables and set to empty values
// $name_error = $email_error = $phone_error = $url_error = "";
// $name = $email = $message = $url = $success = "";
// $name = $email = $phone = $message = $url = ""; I DON'T NEED PHONE NO.

$name_error = $email_error = $message_error = "";
$name = $email = $message = $success = "";

// if ($success != "") {
// 	echo "success";
// } else {
// 	echo "fail";
// }

// form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") { // check: was form submitted?
	if (empty($_POST["name"])) {
		$name_error = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$name_error = "Only letters and white space allowed";
		}
	}
	if (empty($_POST["email"])) {
		$email_error = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if email address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // built-in PHP function filter_var to validate email address
			$email_error = "Invalid email format";
		}
	}

	// if (empty($_POST["phone"])) {
	// 	$phone_error = "Phone is required";
	// } else {
	// 	$phone = test_input($_POST["phone"]);
	// 	// check if phone is well-formed
	// 	if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d|{3}[\s-]?\d{4}$/i",$phone)) {
	// 		$phone_error = "Invalid phone number";
	// 	}
	// }

	// if (empty($_POST["url"])) {
	// 	$url_error = "URL is required";
	// } else {
	// 	$url = test_input($_POST["url"]);
	// 	// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
	// 	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
	// 		$url_error = "Invalid URL";
	// 	}
	// }
	if (empty($_POST["extra_field"])) {
		$extra_field_error = "";
	} else {
		$extra_field_error = "Get out of here!";
	}

	if (empty($_POST["message"])) {
		$message = "";
		$message_error = "Message cannot be empty";
	} else {
		$message = test_input($_POST["message"]);
		$message_error = "";
	}

	// if ($name_error == '' and $email_error == '' and $message_error = '') {
	if ($name_error == '' and $email_error == '' and $message_error == '' and $extra_field_error == '') {
		$message_body = '';
		unset($_POST['submit']);
		foreach ($_POST as $key => $value) {
			$message_body .= "$key: $value\n";
		}

		$to = "alexander@naii.io";
		$subject = "New request from studiolist.io";
		if (mail($to, $subject, $message_body)) {
			$success = "Message sent, thank you for contacting studiolist.org!";
			$name = $email = $message = '';
		}
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
