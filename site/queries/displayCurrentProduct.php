<?php 
   $id = $_GET["id"];
   $sql = "SELECT * FROM item  WHERE product_id = " . $id;
   $stmt = $pdo->prepare($sql);
   $rows = $db->executeSQL($stmt);
   foreach ($rows AS $row):
    $product_Id = $row["product_id"];
    $product_Name = $row["product_name"];
    $product_Image = $row["photo"];
    $product_Description = $row["description"];
    $product_Price = sprintf("%1.2f", $row["price"]);
    $product_SalePrice = sprintf("%1.2f", $row["sale_price"]);
    $catId = $row["category_id"];


    ?>
<section class="view-product clearFix">
<div class="container">
    <div class="section-heading">
        <h2><?php echo $product_Name ?></h2>
    </div>
    <div class="left">
        <img class="product-img" src="<?php echo $product_Image ?>">
    </div>
    <div class="right">
        <h3 class="product-name"><?php echo $product_Name ?> </h3>
        <p class="product-desc"><?php echo $product_Description ?></p>
        <?php
        if ($product_SalePrice == 0){
            ?>
            <p class="product-price"><?= $product_Price ?></p> 
            <?php
            }
            else {
            ?>
                 <p class="product-price">
                     <span class="new-price"><?= $product_Price ?></span> 
                     <span class="old-product-price">was <del><?= $product_SalePrice ?></del></span>
                </p>
            <?php
            }
            ?> 
        <form action="cart.php" method="post">        
                <p>       
                    <input class="qty" type="number" id="qty<?=$product_Id?>" name="qty" value="1">      
                </p>       
                <p>
                    <input class="buy" type="submit" name="buy" value="Buy">
                </p>      
                <input type="hidden" value="<?=$product_Id?>" name="product_Id">
            </form>
    </div>
</div>
</section>
<?php
endforeach;
?>