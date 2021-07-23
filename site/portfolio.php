<?php
require_once "classes/DBAccess.php";

$title = "Portfolio";
$pageHeading = "Portfolio";

include "settings/db.php";


$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

if(!isset($_SESSION))
{
    session_start();
}

ob_start();

$output = ob_get_clean();
include('template.php');
?>