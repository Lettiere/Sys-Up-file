<?php
 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'filesys');  

$connmysql =   mysqli_connect(HOST, USUARIO, SENHA, DB) or die (mysqli_error($connmysql));

   
function mensagem($texto,$tipo){
    echo "<div class='alert alert-$tipo' role='alert'>
    $texto
  </div> ";
}  

