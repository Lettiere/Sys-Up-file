<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include_once('connmysql.php');
include_once('head.php');
include_once('header.php');
include_once('sidebar.php');


$resultado_programa = mysqli_query($connmysql, "SELECT * FROM file_programa order by nome");



/* body start */
include_once('pages/consult_programa.php'); 
/* body end */






include_once('footer.php');
?>