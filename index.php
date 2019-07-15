<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


//carrega um usuário
//$root = new Usuario();
//$root->loadById(3);


//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuários pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário, usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("jose","123456");
//echo $usuario;


//criando um novo usuário
//$aluno = new Usuario("aluno1","@lun0");
//$aluno->insert();
//echo $aluno;


$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#!@#");

echo $usuario;

 ?>