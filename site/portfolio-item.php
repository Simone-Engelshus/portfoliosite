<div class="nav-bg"></div>
<section class="work">
    <div class="container">
        
    <?php
        $work_id = $_GET['id'];
        $sql = "SELECT * FROM works WHERE works.Work_No = " . $work_id;
		$stmt = $pdo->prepare($sql);
		$rows = $db->executeSQL($stmt);
	    foreach ($rows as $row):
            $workName = $row["Name"];
            $WorkDesc = $row["Description"];
            ?>
    <h2><?=$workName?></h2>

    <blockquote class="blockquote"> <?=$WorkDesc?> </blockquote>
<?php
// main image features here
$work_id = $_GET['id'];
$sql = "SELECT * FROM images WHERE Work_No = " . $work_id . " AND Main_Img = 1 ";
$stmt = $pdo->prepare($sql);
$rows = $db->executeSQL($stmt);
foreach ($rows as $row):
    $ImgAlt = $row["Image_Alt"];
    $ImgSrc = $row["Image_Src"];
    $ImgCap = $row["Image_Caption"];

    ?>
        <div class="main-img">
            <figure class="work-image">
                <img src="images/portfolio_imgs/<?=$ImgSrc?>" alt="<?=$ImgAlt?>">
            </figure>
            <p class="caption"><?=$ImgCap ?> </p>
        </div>
    <?php
endforeach;
?>

        <?php
            $work_id = $_GET['id'];
            $sql = "SELECT * FROM images WHERE Work_No = " . $work_id . " AND Main_Img = 0 ";
            $stmt = $pdo->prepare($sql);
            $rows = $db->executeSQL($stmt);
            $length = $stmt->rowCount();
            
?>

<?php
            $i = 1;
            foreach ($rows as $row):
                $ImgAlt = $row["Image_Alt"];
                $ImgSrc = $row["Image_Src"];
                $ImgCap = $row["Image_Caption"];

                if ($i == ($i % 2 == 0)){
                    ?>  
                    <div class="work-image-column col-6">
                        <figure class="work-image">
                            <img src="images/portfolio_imgs/<?=$ImgSrc?>" alt="<?=$ImgAlt?>">
                        </figure>
                        <p class="caption"><?=$ImgCap ?> </p>
                    </div>
                    <?php
                }
                else {
                    ?>
                    
                    <?php  
                            if ($i == $length) { ?> 
                                <div class="work-image-column col-6 last-image">
                            <?php
                            } 
                            else {?>
                                <div class="work-image-column col-6">
                            <?php
                }
                ?>
                        <figure class="work-image">
                            <img src="images/portfolio_imgs/<?=$ImgSrc?>" alt="<?=$ImgAlt?>">
                        </figure>
                        <p class="caption"><?=$ImgCap ?> </p>
                    </div>
                    <?php
                };
                $i++;
        endforeach;

        
   endforeach; ?>
  </div>
</section>

