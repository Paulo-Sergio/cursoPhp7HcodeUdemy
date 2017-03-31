<?php

require_once './config.php';

/* * * carrega 1 usuário ** */
//$usuario = new Usuario();
//$usuario->loadById(5);
//echo $usuario;

/* * * carrega lista de usuários ** */
//$usuarios = Usuario::getList();
//echo json_encode($usuarios);

/* * * pesquisa usuário pelo login ** */
//$usuario = Usuario::search("jo");
//echo json_encode($usuario);

/* * * metodo para autenticar usuário ** */
//$usuario = new Usuario();
//$usuario->login("José", "1234");
//echo $usuario;

/*** inserindo e recuperando ID inserido ***/
$aluno = new Usuario("Aluno 2", "senha123");
$aluno->insere();
echo $aluno;