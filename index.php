<?php
// Get form data
$email = $_POST['email'];
$password = $_POST['psw'];

// ... logic to save to database or process data ...

// Redirect to your new success page
header("Location: success.html");
exit(); // Always call exit() after header to prevent further script execution
?>
