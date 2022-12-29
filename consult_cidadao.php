<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include_once('connmysql.php');
include_once('head.php');
include_once('header.php');
include_once('sidebar.php');

$result_rua = "SELECT * FROM  tnuc_rua ";
$resultado_rua = mysqli_query($connmysql, $result_rua);

$result_rua_tipo = "SELECT * FROM tnuc_tipo_rua order by nome";
$resultado_rua_tipo = mysqli_query($connmysql, $result_rua_tipo);

$result_bairro = "SELECT * FROM tnuc_bairro order by nome";
$resultado_bairro = mysqli_query($connmysql, $result_bairro);

$result_povoado = "SELECT * FROM tnuc_povoado order by nome";
$resultado_povoado = mysqli_query($connmysql, $result_povoado);


$resultado_cidadao = mysqli_query($connmysql, "SELECT * FROM tnuc_cidadao order by nome;");



/* body start */
include_once('pages/consult_cidadao.php'); 
/* body end */






include_once('footer.php');
?>