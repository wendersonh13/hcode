
<?php

	require_once("config.php");
	
//Carrega um usuário

	//	$root = new Usuario();
	//	$root->loadById(7);
	//	echo $root;

//Carrega um lista de usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

//Carrega um lista de usuario buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search)

//carrega um usuario usando o login e a senha
	//$usuario =  new Usuario();
	//$usuario->login("user", "!@#$");
	//echo $usuario;

//Criando um novo usuário
	$aluno = new Usuario();

	$aluno->setDeslogin("aluno");
	$aluno->setDessenha("@alun0");

	$aluno->insert();
	echo $aluno;

 ?>