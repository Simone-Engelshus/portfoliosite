<?php 
    $id = $_GET["id"];
    $sql = "SELECT * FROM category WHERE category_id = " .$id;
    $stmt = $pdo->prepare($sql);
    $rows = $db->executeSQL($stmt);
    
    foreach ($rows AS $row):
    $catName = $row["category_name"];
?>
    <?php echo $catName ?>

<?php
    endforeach;
?>
