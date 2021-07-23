<?php
//Work Page
?>
<div class="nav-bg"></div>
<section class="work">
    <div class="container">
        <h2>Work</h2>
        <div class="gallery">
            <?php
            
            $sql = "SELECT * FROM category";
            $stmt = $pdo->prepare($sql);
            $rows = $db->executeSQL($stmt);
            foreach ($rows as $row):
            $catId = $row["Category_ID"];
            $catName = $row["Category_Name"];
            ?>
            <div> 
                <h3>   
                    <a href="category.php?id=<?= $catId ?>"><?= $catName ?></a>
                </h3>
                <div class="gallery-row row">
                    <?php

                        $sql = "SELECT *
                                FROM    works, work_category
                                WHERE   work_category.Category_ID = $catId AND works.Work_No = work_category.Work_No
                                ";
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
                    <?php endforeach; 
            ?>
                </div>
            </div>
		<?php endforeach; 
                // $i = 0;
                // foreach ( $rows as $row ) {
                //     if ($i === 5) {
                //          echo '</div><div class="second-3">';
                //     }
            
                //     echo $pro['title'];
                //     $i++;
                // }
                //else {
                // echo '</div>' };
        
        
               
                
        
        
        ?>

       
            <!-- <h3>Graphic Design</h3>
            <div class="gallery-row row">
                <div class="gallery-column col">
                    <div class="gallery-item">

                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
            </div>
            <h3>Web Design & Development</h3>
            <div class="gallery-row row">
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
                <div class="gallery-column col">
                    <div class="gallery-item">
                        
                    </div>
                </div>
            </div> -->

        </div>
       
    </div>
    <div class="link-container">
            <div class="portfolio-link">
                <p>See my <a href="https://simone-engelshus.github.io/portfoliosite/">web development applications</a></p>
            </div>
    </div>
</section>