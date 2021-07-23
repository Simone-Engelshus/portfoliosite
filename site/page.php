<?php
if(stripos($_SERVER['REQUEST_URI'], 'works.php')){
    

    include('work-page.php');

    
}
elseif(stripos($_SERVER['REQUEST_URI'], 'portfolio.php')){
    

    include('portfolio-item.php');

    
}
elseif(stripos($_SERVER['REQUEST_URI'], 'category.php')){
    

    include('category-page.php');

    
}
elseif(stripos($_SERVER['REQUEST_URI'], 'about.php')){
    

    include('about-page.php');

    
}
elseif(stripos($_SERVER['REQUEST_URI'], 'contact.php')){
    

    include('contact-page.php');

    
}
elseif(stripos($_SERVER['REQUEST_URI'], 'thanks.php')){
    

    include('thanks-page.php');

    
}
else{
        include('home.php');

};

?>