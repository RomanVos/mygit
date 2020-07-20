<?php
require_once 'connect.php';
require_once 'funcs.php';

$records = post();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="head">
		<div class="title_all">
			<div class="title">
				<?php foreach ($records as $key => $value): ?>
				<h2> <?= $value[title]?> </h2>
				<p> <?= $value[text]?> </p>
				<?endforeach;?>
			</div>
		</div>
	<div class="category">
		<h3>Cat 1</h3>
		<h3>Cat 2</h3>
	</div>
	</div>

</body>
</html>