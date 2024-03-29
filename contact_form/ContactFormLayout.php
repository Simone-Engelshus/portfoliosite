<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title><?=$title?></title><!-- h1, center -->
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>
                    <img src="" alt="">
                </h1>
            </header>
            <div class="contact-box">
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