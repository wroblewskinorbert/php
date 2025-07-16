<?php
$messages = $data['messages'];
// var_dump($messages);
?>

<section>
	<h2>Guest Messages</h2>
	<?php if (empty($messages)): ?>
		<p>No messages yet.</p>
	<?php else: ?>
		<ul>
			<?php foreach ($messages as $message): ?>
				<li>
					<strong><?php echo htmlspecialchars($message['name']); ?>:</strong>
					<?php echo htmlspecialchars($message['email']); ?>
					<p><?php echo nl2br(htmlspecialchars($message['message'])); ?></p>
					<small>Posted on: <?php echo htmlspecialchars($message['created_at']); ?></small>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</section>