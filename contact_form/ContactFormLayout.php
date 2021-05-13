<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sass/stylesheet.css">
        <title><?=$title?></title><!-- h1, center -->
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>
                    <img src="" alt="">
                </h1>
            </header>
            <div><!-- div contact box-->
            <?= $output ?>
            </div>
            <footer>
                <p>
                    &copy; <?php $date = date('Y'); echo $date ?> <!-- text align center-->
                </p>
            </footer>
        </div>
    </body>
</html>