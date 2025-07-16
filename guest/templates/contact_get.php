<section>
	<h2>Leave a Public Note/Question</h2>
	<form method="POST">
		<!-- CSRF -->
		<label>Name</label>
		<input type="text" name="name" required>
		<label>Email</label>
		<input type="email" name="email" required>
		<label>Message</label>
		<textarea name="message" rows="4" required></textarea>
		<button type="submit">Send Message</button>
	</form>
</section>