<?php include_once("connmysql.php");
//O campo usuário e senha preenchido entra no if para validar
if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
	$usuario = mysqli_real_escape_string($connmysql, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
	$senha = mysqli_real_escape_string($connmysql, $_POST['senha']);
	$senha = md5($senha);

	//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
	$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
	$resultado_usuario = mysqli_query($connmysql, $result_usuario);
	$resultado = mysqli_fetch_assoc($resultado_usuario);
	//var_dump($resultado);
	//die;

	//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
	if (isset($resultado)) {
		$_SESSION['usuarioId'] = $resultado['id'];
		$_SESSION['usuarioNome'] = $resultado['nome'];
		$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
		$_SESSION['usuarioEmail'] = $resultado['email'];

		if ($_SESSION['usuarioNiveisAcessoId'] == "1") {
			header("Location: sec_educacao/index.php");
			
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "2") {
			header("Location: secAdm/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "3") {
			header("Location: sec_transporte/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "4") {
			header("Location: secSecame/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "99") {
			header("Location: politica/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "5") {
			header("Location: secEduBiblioteca/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "6") {
			header("Location: secEduPsicologo/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "100") {
			header("Location: dash/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "7") {
			header("Location: setRequisicao/index.php");
		} elseif ($_SESSION['usuarioNiveisAcessoId'] == "8") {
			header("Location: secSaude/index.php");
		} else {
			header("Location: cliente.php");
		}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
	} else {
		//Váriavel global recebendo a mensagem de erro
		$_SESSION['loginErro'] = "Usuário ou senha Inválido";
		header("Location: index.php");
	}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
} else {
	$_SESSION['loginErro'] = "Usuário ou senha inválido";
	header("Location: index.php");
};
