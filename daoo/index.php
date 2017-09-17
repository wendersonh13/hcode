<?php 
require_once("config.php");
	//-------------------LIST------------------------------
	//Carrega um usuario.
	$usuario = new Usuario();
	$usuario->loadById(3);
	echo $usuario;

	//Carrega uma lista de usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuarios buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	//Carrega uma lista de usuarios usando login e a senha.
	//$usuario = new Usuario();
	//$usuario->login("user", "123456");
	//echo $usuario;

	//----------------INSERT-------------------------------
	//Inserindo novo usuario
	//$usuario = new Usuario("OctavioT2", "teste2");
	//$usuario->insert();
	//echo $usuario;

	//----------------UPDATE--------------------------------
	//$usuario = new Usuario();
	//$usuario->loadById(8);
	//$usuario->update("Tavim", "tavinho1223");
	//echo $usuario;

	//----------------DELETE--------------------------------
	//$usuario = new Usuario();
	//$usuario->loadById(3);
	//$usuario->delete();
	//echo $usuario;

?>