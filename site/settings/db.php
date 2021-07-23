<?php

if($_SERVER["SERVER_NAME"] == "localhost" || $_SERVER["SERVER_ADDR"] == "127.0.0.1")
{
    $dsn ="mysql:host=localhost;dbname=portfoliosite;charset=utf8";
    $username = "root";
    $password = "";
}
else
{
    $dsn ="mysql:host=localhost;dbname=magentaXX;charset=utf8";
    $username = "magentaXX";
    $password = "pass123";
}
?>