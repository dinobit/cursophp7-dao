<?php 
	
	require_once("config.php");

//	$sql = new Sql();
//	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//	echo json_encode($usuarios);


//carrega 1 usuario
	//$root = new Usuario();
	//$root->loadbyId(4);
 	//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrga um usuário usando o login e a senha
	$usuario = new Usuario();
	$usuario->login("root","qwepoi");
	echo $usuario;  //dar o echo vai invocar o metodo magico to_string que vai trazer um json

 ?>