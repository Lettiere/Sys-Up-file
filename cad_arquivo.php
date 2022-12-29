<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include_once('connmysql.php');
include_once('head.php');
include_once('header.php');
include_once('sidebar.php');

/* body start */
include_once('pages/cad_arquivo.php'); 
/* body end */


include_once('footer.php');
?>