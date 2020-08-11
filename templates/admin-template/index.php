<?php
session_start();
?>


<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$path = "./pages/{$page}.php";

require './inc/header.php';
require './inc/sidebar.php';

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./pages/404.php";
}

require './inc/footer.php';
?>