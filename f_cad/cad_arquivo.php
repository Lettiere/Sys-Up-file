<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
session_start();
require_once("../connpdo.php");

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadCont = filter_input(INPUT_POST, 'SendCadCont', FILTER_UNSAFE_RAW);
if ($SendCadCont) {
  //Receber os dados do formulário

  $dt_cadastro = filter_input(INPUT_POST, 'dt_cadastro', FILTER_UNSAFE_RAW);
  $nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
  $destinatario    = filter_input(INPUT_POST, 'destinatario', FILTER_UNSAFE_RAW);
  $tipo  = filter_input(INPUT_POST, 'tipo', FILTER_UNSAFE_RAW);
  $origem = filter_input(INPUT_POST, 'origem', FILTER_UNSAFE_RAW);
  $esfera = filter_input(INPUT_POST, 'esfera', FILTER_UNSAFE_RAW);
  $numero = filter_input(INPUT_POST, 'numero', FILTER_UNSAFE_RAW);
  $dt_arquivo = filter_input(INPUT_POST, 'dt_arquivo', FILTER_UNSAFE_RAW);
  $observacao = filter_input(INPUT_POST, 'observacao', FILTER_UNSAFE_RAW);
  $destino = filter_input(INPUT_POST, 'destino', FILTER_UNSAFE_RAW);
  $instituicao = filter_input(INPUT_POST, 'instituicao', FILTER_UNSAFE_RAW);
  $autor = filter_input(INPUT_POST, 'autor', FILTER_UNSAFE_RAW);
  $arquivo = filter_input(INPUT_POST, 'arquivo', FILTER_UNSAFE_RAW);


  /* START CODIGO JOCIELTON */
  if (!empty($_FILES['arquivo']['name'])) {
    $nomeArquivo = $_FILES['arquivo']['name'];
    $tipo = $_FILES['arquivo']['type'];
    $nomeTemporario = $_FILES['arquivo']['tmp_name'];
    $tamanho = $_FILES['arquivo']['size'];
    $erros = array();
    echo json_encode($erros);
    $tamanhoMaximo = 1024 * 1024 * 5; // 5MB
    if ($tamanho > $tamanhoMaximo) {
      $erros[] = "Seu Aquivo excedeu o tamanho de 5MB. <br>";
    }
    $arquivosPermitidos = ["pdf"];
    $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
    if (!in_array($extensao, $arquivosPermitidos)) {
      $erros[] = "Arquivo não Permitido. <br>";
    }
    // $typesPermitidos = ["imagem/png","imagem/jpg","imagem/jpeg"];
    // if (!in_array($tipo, $arquivosPermitidos)){
    // $erros[] = "Tipo de Arquivo não Permitido. <br>";
    // }
    if (!empty($erros)) {
      foreach ($erros as $key => $erro) {
        echo '<script type="text/javascript">
      ';
        echo 'Swal.fire( "Erro", "' . $erro .
          '", "error" )';
        echo '
    </script>';
      }
    } else {
      $caminho = "../assets/arquivos/";
      $user = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
      //$hoje = date("d-m-y_h-i");
      $novoNome = $user . "-" . $nomeArquivo;
      if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
        echo '<script type="text/javascript">
      ';
        echo 'Swal.fire( "OK", "Associado Cadastra a arquivo e Incluido em noss banco dedados", "success" )';
        echo '
    </script>';
      } else {
        echo '<script type="text/javascript">
      ';
        echo 'Swal.fire( "Erro", "Errro ao Enviar o Arquivo", "error" )';
        echo '
    </script>';
      }

      $sql = "INSERT INTO tedu_arquivos  ( dt_cadastro,nome,destinatario,tipo,origem,esfera,numero,dt_arquivo,observacao, destino,instituicao,autor,arquivo) 
        VALUES (:dt_cadastro,:nome,:destinatario,:tipo,:origem,:esfera,:numero,:dt_arquivo,:observacao,:destino,:instituicao,:autor,:arquivo)";
    /*   $executar = mysqli_query($connpdo, $sql); */
    }
  }


  /* END CODIGO JOCIELTON */
  $result_msg_cont = "INSERT INTO tedu_arquivos 
(
  dt_cadastro,nome,destinatario,tipo,origem,esfera,numero,dt_arquivo,observacao, destino,instituicao,autor,arquivo) 
    VALUES (  :dt_cadastro,:nome,:destinatario,:tipo,:origem,:esfera,:numero,:dt_arquivo,:observacao,:destino,:instituicao,:autor,:arquivo)";

  $insert_msg_cont = $conn->prepare($result_msg_cont);
  $insert_msg_cont->bindParam(':dt_cadastro', $dt_cadastro);
  $insert_msg_cont->bindParam(':nome', $nome);
  $insert_msg_cont->bindParam(':destinatario', $destinatario);
  $insert_msg_cont->bindParam(':tipo', $tipo);
  $insert_msg_cont->bindParam(':origem', $origem);
  $insert_msg_cont->bindParam(':esfera', $esfera);
  $insert_msg_cont->bindParam(':numero', $numero);
  $insert_msg_cont->bindParam(':dt_arquivo', $dt_arquivo);
  $insert_msg_cont->bindParam(':observacao', $observacao);
  $insert_msg_cont->bindParam(':destino', $destino);
  $insert_msg_cont->bindParam(':instituicao', $instituicao);
  $insert_msg_cont->bindParam(':autor', $autor);
  $insert_msg_cont->bindParam(':arquivo', $arquivo);

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
