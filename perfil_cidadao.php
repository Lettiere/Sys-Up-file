<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include_once('connmysql.php');
include_once('head.php');
include_once('header.php');
include_once('sidebar.php');

$id = $_GET['id'];
$result_cidadao = "SELECT * FROM tnuc_cidadao WHERE id = $id ";
$resultado_cidadao = mysqli_query($connmysql, $result_cidadao);
$rows_cidadao = mysqli_fetch_assoc($resultado_cidadao);


/* body start */
include_once('pages/perfil_cidadao.php'); 
/* body end */

include_once('footer.php');
?>