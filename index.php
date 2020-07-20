<?php
require_once 'connect.php';
require_once 'funcs.php';

$records = get_all();
$postcat = get_category();
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

		<?php foreach ($records as $v): ?>
			<div class="title">
				<h2>
					<a href="<?= "post.php?id=".$v['id'] ?>"> <?= $v['title']?></a>
				</h2>
					<p> <?= $v['description']?> </p>
			</div>
		<?endforeach;?>
		
		</div>
	<div class="category">
		<?php foreach ($postcat as $v): ?>			
			<h3>
				<a href="<?= "category.php?category=".$v[category]?>">Category <?= $v['category']?> </a>
			</h3>
		<?endforeach;?>
	</div>
</div>

</body>
</html>