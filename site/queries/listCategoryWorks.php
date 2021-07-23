<?php 

    $id = $_GET["id"];
    $sql = "SELECT * FROM item  WHERE category_id = " . $id;
    $stmt = $pdo->prepare($sql);
    $rows = $db->executeSQL($stmt);
    

if (count($rows) == 0) { 
    ?>
    <p class="dark">There are currently no works in this category. </p>
    <?php
}
else{

    foreach ($rows AS $row):
        $product_Id = $row["product_id"];
        $product_Name = $row["product_name"];
        $product_Image = $row["photo"];
        $product_Price = sprintf("%1.2f", $row["price"]);
        $product_SalePrice = sprintf("%1.2f", $row["sale_price"]);
        $catId = $row["category_id"];
    ?>
    
       <!--  <div class="product">
            <a href="product.php?id=<?= $product_Id ?>">
                <div class="product-img">
                    <img src="<?= $product_Image ?>" alt="<?= $product_Name ?>" >
                </div>
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
            <form action="cart.php" method="post">        
                <p>       
                    <input class="qty" type="number" id="qty<?=$product_Id?>" name="qty" value="1">      
                </p>       
                <p>
                    <input class="buy" type="submit" name="buy" value="Buy">
                </p>      
                    <input type="hidden" value="<?=$product_Id?>" name="product_Id">
            </form>  
         </div> -->

         <h3><?php $title ?> </h3>

         <!-- for each work in category -->
            <div class="gallery-row row">
                <div class="gallery-column col">
                    <div class="gallery-item">
                        <img src="<?php $img ?>" alt="<?php $alt ?>" href="<?php product.php $work_id  ?>">
                    
                    </div>
                </div>
              
            </div>
         
<?php 
    endforeach; 
    };
?>
