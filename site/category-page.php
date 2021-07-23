<div class="nav-bg"></div>
<section class="work">
    <div class="container">
    <?php
        $catId = $_GET['id'];
        $sql = "SELECT * FROM  category
                WHERE   category.Category_ID = $catId";
		$stmt = $pdo->prepare($sql);
		$rows = $db->executeSQL($stmt);
	    foreach ($rows as $row):
        $catName = $row["Category_Name"];
		?>
        <div> 
            <h2>   
                <a href="category.php?id=<?= $catId ?>"><?= $catName ?></a>
            </h2>
            <div class="gallery-row row">
            <?php
                    $catId = $_GET['id'];
                    $sql = "SELECT * FROM    works, work_category
                    WHERE   work_category.Category_ID = $catId AND works.Work_No = work_category.Work_No";
                    $stmt = $pdo->prepare($sql);
                    $rows = $db->executeSQL($stmt);
                    $count = 1;
                    foreach ($rows as $row):
                        $workNo = $row["Work_No"];
                        $workName = $row["Name"];
                        $workThumb = $row["Thumbnail_Img"];
                
                        if ($count == ( $count % 5 == 0)) {
                            ?>
                            <div class="gallery-column col-3">
                                <div class="gallery-item">
                                    <a href="portfolio.php?id=<?=$workNo?>"><img src="<?=$workThumb?>" alt="<?=$workName?>"></img></a>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-row row">
                            <?php
                        }
                        else {
                            ?>
                                    <div class="gallery-column col-3">
                                        <div class="gallery-item">
                                            <a href="portfolio.php?id=<?=$workNo?>"><img src="<?=$workThumb?>" alt="<?=$workName?>"></img></a>
                                        </div>
                                    </div>
                            <?php
                        }
                        $count++;               
                ?>
                <?php endforeach; ?>
            </div>

    <?php
    endforeach; ?>
        </div>

    </div>
    <?php if ($catId == 2 ) {
            ?>
               <div class="link-container">
            <div class="portfolio-link">
                <p>See my <a href="https://simone-engelshus.github.io/portfoliosite/">web development applications</a></p>
            </div>
            </div>
            <?php
        }?>
</section>