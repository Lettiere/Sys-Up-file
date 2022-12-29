<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once("../connpdo.php");

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadCont = filter_input(INPUT_POST, 'SendCadCont', FILTER_UNSAFE_RAW);
if ($SendCadCont) {
    //Receber os dados do formulário

    $nome  = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
    
    $result_msg_cont = "INSERT INTO file_programa (

        nome
        ) 

    VALUES (

        :nome
      
        )";


    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':nome', $nome);

    if ($insert_msg_cont->execute()) {
        $_SESSION['msg'] = "<p style='color:green;'>Mensagem enviada com sucesso</p>";
        header("Location: ../index.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
        header("Location: ../cad_programa.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
    header("Location: ../index.php");
}
