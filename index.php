<?php
session_start();
// we should include the function and then connect to the data_base using PDO Mysql
include 'funtions.php'
$pdo = pdo_connect_mysql();
//page is set to home by default, such that when visitors visit thats the page they wills see
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? 
$_GET['page'] : 'home';
?>