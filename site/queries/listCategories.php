	<?php 

		$sql = "SELECT * FROM category";
		$stmt = $pdo->prepare($sql);
		$rows = $db->executeSQL($stmt);
	foreach ($rows as $row):
		$catId = $row["category_id"];
		$catName = $row["category_name"];
		?>
		<li><a href="category.php?id=<?= $catId ?>"><?= $catName ?></a></li>
		
		<?php endforeach; ?>
