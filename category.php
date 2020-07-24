<?php
require_once 'connect.php';
require_once 'funcs.php';

$cat = ! empty($_GET['category']) ? (int) $_GET['category'] : 0;

$category = post_category();
$post_cat = get_cat();
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
	<h1> Category <?= $_GET['category']?> </h1>

	<div class="title_all">
		<?php foreach ($post_cat as $v): ?>
			<div class="title">
				<h2><a href="<?= "post.php?id=".$v['id'] ?>"> <?= $v['title']?> </a></h2>
				<p> <?= $v['description']?> </p>
			</div>
		<?endforeach;?>
	</div>

	<div class="category">
			<?php foreach ($category as $v): ?>			
				<h3>
					<a href="<?= "category.php?category=".$v['id']?>">Category <?= $v['id']?>
					</a>											
				</h3>
			<?endforeach;?>
		</div>
</div>

</body>
</html>