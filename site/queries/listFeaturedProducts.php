    <?php 
    $sql = "SELECT * FROM item";
    $stmt = $pdo->prepare($sql);
    $rows = $db->executeSQL($stmt);
    foreach ($rows AS $row):
        $product_Id = $row["product_id"];
        $product_Name = $row["product_name"];
        $product_Image = $row["photo"];
        $product_Price = sprintf("%1.2f", $row["price"]);
        $product_SalePrice = sprintf("%1.2f", $row["sale_price"]);
        $isFeatured = $row["featured"];
    
		?>

        <?php
      

        if ($isFeatured == 1) {
        ?>
            <div class="product">
                <a href="product.php?id=<?= $product_Id ?>">
                <div class="product-img"><img src="<?= $product_Image ?>" alt="<?= $product_Name ?>" ></div>
            <?php
            if ($product_SalePrice ==0){
            ?>
            <p class="product-price"><?= $product_Price ?></p> 
            <?php
            }
            else {
            ?>
                 <p class="product-price"><span class="new-price"><?= $product_Price ?></span> <span class="old-product-price">was <del><?= $product_SalePrice ?></del></span></p>
            <?php
            }
            ?>
            <p class="product-name"><?= $product_Name ?></p>
            </a>
         </div>
        <?php 
        }
    endforeach; ?>