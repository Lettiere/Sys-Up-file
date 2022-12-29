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
    $civil  = filter_input(INPUT_POST, 'civil', FILTER_UNSAFE_RAW);
    $tipo    = filter_input(INPUT_POST, 'tipo', FILTER_UNSAFE_RAW);
    $endereco    = filter_input(INPUT_POST, 'endereco', FILTER_UNSAFE_RAW);
    $numero    = filter_input(INPUT_POST, 'numero', FILTER_UNSAFE_RAW);
    $bairro    = filter_input(INPUT_POST, 'bairro', FILTER_UNSAFE_RAW);
    $povoado    = filter_input(INPUT_POST, 'povoado', FILTER_UNSAFE_RAW);
    $regiao    = filter_input(INPUT_POST, 'regiao', FILTER_UNSAFE_RAW);
    $complemento    = filter_input(INPUT_POST, 'complemento', FILTER_UNSAFE_RAW);
    $cidade    = filter_input(INPUT_POST, 'cidade', FILTER_UNSAFE_RAW);
    $estado    = filter_input(INPUT_POST, 'estado', FILTER_UNSAFE_RAW);
    $naturalidade    = filter_input(INPUT_POST, 'naturalidade', FILTER_UNSAFE_RAW);
    $contato    = filter_input(INPUT_POST, 'contato', FILTER_UNSAFE_RAW);
    $nome_mae    = filter_input(INPUT_POST, 'nome_mae', FILTER_UNSAFE_RAW);
    $nome_pai    = filter_input(INPUT_POST, 'nome_pai', FILTER_UNSAFE_RAW);
    $email    = filter_input(INPUT_POST, 'email', FILTER_UNSAFE_RAW);
    $rg    = filter_input(INPUT_POST, 'rg', FILTER_UNSAFE_RAW);
    $emissao    = filter_input(INPUT_POST, 'emissao', FILTER_UNSAFE_RAW);
    $orgao    = filter_input(INPUT_POST, 'orgao', FILTER_UNSAFE_RAW);
    $uf_emissao_rg    = filter_input(INPUT_POST, 'uf_emissao_rg', FILTER_UNSAFE_RAW);
    $dt_nascimento    = filter_input(INPUT_POST, 'dt_nascimento', FILTER_UNSAFE_RAW);
    $cpf    = filter_input(INPUT_POST, 'cpf', FILTER_UNSAFE_RAW);
    $pis    = filter_input(INPUT_POST, 'pis', FILTER_UNSAFE_RAW);
    $sus    = filter_input(INPUT_POST, 'sus', FILTER_UNSAFE_RAW);
    $observacao = filter_input(INPUT_POST, 'observacao', FILTER_UNSAFE_RAW);

    $result_msg_cont = "INSERT INTO tnuc_cidadao (

        nome,	
        civil,	
        tipo,	
        endereco,	
        numero,	
        bairro,	
        povoado,
        regiao,
        complemento,	
        cidade,	
        estado,	
        naturalidade,	
        contato,	
        nome_mae,	
        nome_pai,	
        email,	
        rg,	
        emissao,	
        orgao,	
        uf_emissao_rg,	
        dt_nascimento,	
        cpf,	
        pis,	
        sus,	
        observacao
        
        ) 

    VALUES (

        :nome,	
        :civil,	
        :tipo,	
        :endereco,	
        :numero,	
        :bairro,	
        :povoado,
        :regiao,
        :complemento,	
        :cidade,	
        :estado,	
        :naturalidade,	
        :contato,	
        :nome_mae,	
        :nome_pai,	
        :email,	
        :rg,	
        :emissao,	
        :orgao,	
        :uf_emissao_rg,	
        :dt_nascimento,	
        :cpf,	
        :pis,	
        :sus,	
        :observacao
      
        )";

    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':nome', $nome);
    $insert_msg_cont->bindParam(':civil', $civil);
    $insert_msg_cont->bindParam(':tipo', $tipo);
    $insert_msg_cont->bindParam(':endereco', $endereco);
    $insert_msg_cont->bindParam(':numero', $numero);
    $insert_msg_cont->bindParam(':bairro', $bairro);
    $insert_msg_cont->bindParam(':povoado', $povoado);
    $insert_msg_cont->bindParam(':regiao', $regiao);
    $insert_msg_cont->bindParam(':complemento', $complemento);
    $insert_msg_cont->bindParam(':cidade', $cidade);
    $insert_msg_cont->bindParam(':estado', $estado);
    $insert_msg_cont->bindParam(':naturalidade', $naturalidade);
    $insert_msg_cont->bindParam(':contato', $contato);
    $insert_msg_cont->bindParam(':nome_mae', $nome_mae);
    $insert_msg_cont->bindParam(':nome_pai', $nome_pai);
    $insert_msg_cont->bindParam(':email', $email);
    $insert_msg_cont->bindParam(':rg', $rg);
    $insert_msg_cont->bindParam(':emissao', $emissao);
    $insert_msg_cont->bindParam(':orgao', $orgao);
    $insert_msg_cont->bindParam(':uf_emissao_rg', $uf_emissao_rg);
    $insert_msg_cont->bindParam(':dt_nascimento', $dt_nascimento);
    $insert_msg_cont->bindParam(':cpf', $cpf);
    $insert_msg_cont->bindParam(':pis', $pis);
    $insert_msg_cont->bindParam(':sus', $sus);
    $insert_msg_cont->bindParam(':observacao', $observacao);

    if ($insert_msg_cont->execute()) {
        $_SESSION['msg'] = "<p style='color:green;'>Mensagem enviada com sucesso</p>";
        header("Location: ../index.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
        header("Location: ../cad_cidadao.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi enviada com sucesso</p>";
    header("Location: ../index.php");
}
