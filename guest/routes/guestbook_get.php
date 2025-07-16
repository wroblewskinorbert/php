<?php

$messages = getMessages(connectDB());
//throw new RuntimeException('what?');
// echo $hey;
renderView(
	template: 'guestbook_get', 
	data: ['messages' => $messages]  // lub compact('messages') jeśli masz funkcję compact
);