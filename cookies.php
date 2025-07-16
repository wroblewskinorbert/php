<?php
if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
	// exit;
	echo "Favicon not found.";
}
session_start();
echo session_id() . "<br>";
var_dump($_SESSION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	setcookie('user', $_POST['name'], time() + 3600); // Cookie expires in 1 hour
}

$hasCookie = isset($_COOKIE['user']);

if (!$hasCookie) {
	$welcomeMessage = "Welcome back, user!";
} else {
	$welcomeMessage = "Welcome back, " . htmlspecialchars($_COOKIE['user']) . "!";
}

if (!isset($_SESSION['visits'])) {
	$_SESSION['visits'] = 1;
} else {
	$_SESSION['visits']++;
}

$visitsMessage = "This is your " . $_SESSION['visits'] . " visit.";
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookies and Sessions Example</title>
</head>
<body>
	<?php if(!$hasCookie): ?>
		<form method="POST" action="cookies.php">
			<label for="name">Enter your name:</label>
			<input type="text" id="name" name="name" required />
			<button type="submit">Track</button>
		</form>
	<?php endif; ?>
	<p><?= $welcomeMessage ?></p>
	<p><?= $visitsMessage ?></p>
</body>
</html>
