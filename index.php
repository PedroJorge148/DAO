<?php 

	require_once "config.php";

	/*$sql = new Sql();

	$users = $sql->select("SELECT * FROM tb_usuarios");

	var_dump($users);*/

	//Carrega um usuário
	// $root = new Usuario();
	// $root->loadById(1);
	// echo $root;

	//Carrega uma lista de usuarios
	// $lista = Usuario::getList();
	// echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login
	// $search = Usuario::search("Ped");
	// echo json_encode($search);

	//Carrega um usuário por login e senha
	// $usuario = new Usuario();
	// $usuario->login("Pedro", "123");
	// echo $usuario;

	//Insere um usuario
	// $aluno = new Usuario("aluno", "987");
	// $aluno->insert();
	// echo $aluno;

	//Alterar um usuario
	$usuario = new Usuario();
	$usuario->loadById(5);

	$usuario->update("Professor", "4321");

	echo $usuario;


 ?>