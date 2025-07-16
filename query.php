<?php
$products = [
    ['name' => 'T-shirt', 'color' => 'red', 'size' => 'medium'],
    ['name' => 'Jeans', 'color' => 'blue', 'size' => 'large'],
    ['name' => 'Sweater', 'color' => 'green', 'size' => 'small'],
    ['name' => 'Dress', 'color' => 'red', 'size' => 'small'],
    ['name' => 'Jacket', 'color' => 'blue', 'size' => 'medium'],
];

$color = $_GET['color'] ?? '';
$size = $_GET['size'] ?? '';

function isSelected(string $compare, string $to): string {
	return $compare === $to ? 'selected' : '';
}

$filteredProducts = array_filter(
	$products,
	fn(array $product) =>
		($color === '' || $product['color'] === $color) &&
		($size === '' || $product['size'] === $size)
);

?>
<html>
	<body>
		<h1>Filter Products</h1>
			<form method="GET">
				<label for="color">Color:</label>
				<select id="color" name="color">
					<option value="">All</option>
					<option value="red" <?= isSelected($color, 'red');?>>Red</option>
					<option value="blue" <?= isSelected($color, 'blue');?>>Blue</option>
					<option value="green" <?= isSelected($color, 'green');?>>Green</option>
				</select>
				<label for="size">Size:</label>
				<select id="size" name="size">
					<option value="">All</option>
					<option value="small" <?= isSelected($size, 'small');?>>Small</option>
					<option value="medium" <?= isSelected($size, 'medium');?>>Medium</option>
					<option value="large" <?= isSelected($size, 'large');?>>Large</option>
				</select>
				<button type="submit">Filter</button>
			</form>
			<a href="<?=$_SERVER['PHP_SELF']?>">Reset Filters</a>
		<h2>Products</h2>
		<?php if (!empty($filteredProducts)): ?>
			<ul>
				<?php foreach ($filteredProducts as $product): ?>
					<li>
						<?= htmlspecialchars($product['name']) 
						?> - Color: <?= htmlspecialchars($product['color']) 
						?>, Size: <?= htmlspecialchars($product['size']) ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p>No products found.</p>
		<?php endif; ?>
	</body>
</html>