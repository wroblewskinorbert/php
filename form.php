<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		echo "The email $email was submitted!";
		die;
	}

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Próba z formularzem</title>
</head>
<body>
    <h1>Please submit the form</h1>
		<h3>Świetny formularz</h3>
    <form action="/form.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" />
        <button>Submit</button>
    </form>
		<?php $tab=[1, 2, 3, 4, 5]; ?>
		<?php foreach ($tab as $value): ?>
			<p><?= $value ?></p>
		<?php endforeach ?>
		<!-- <?php phpinfo(); ?> -->
</body>
</html>