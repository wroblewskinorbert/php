<?php

//CSRF
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
if (empty($name) || empty($email) || empty($message)) {
	badRequest("All fields are required.");
} 

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	badRequest("Invalid email format.");
}

connectDB();

$inserted = insertMessage(connectDB(), name: $name, email: $email, message: $message);
if ($inserted) {
	$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
	$safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
	// echo "Thank you, $safeName! Your message has been sent successfully.";
	addFlashMessage('success', "Thank you, $safeName! Your message has been sent successfully.");
	// exit;
	redirect('/guestbook');
}

addFlashMessage('error', "Failed to send your message. Please try again later.");
// serverError("Failed to insert message into the database.");
// This should not happen if the database is set up correctly, but it's good to handle it

// header('Location: /guestbook');
// exit; // Redirect to the guestbook page after processing the form
redirect('/guestbook');