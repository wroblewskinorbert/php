<?php
function addFlashMessage(string $type, string $message): void {
		$_SESSION['flash'][$type] = $message;
}

function getFlashMessages(): array {
	$messages = $_SESSION['flash'] ?? [];
	unset($_SESSION['flash']); // Clear flash messages after retrieving them
	return $messages;
}