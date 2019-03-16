<?php
/**
 * Created by PhpStorm.
 * User: Renato
 * Date: 13/03/2019
 * Time: 19:53
 */
require_once("config.php");
require_once("randomizeId.php");
use Professor\Cadastro;

$cadastro = new Cadastro;

$cadastro->setNomeProfessor("José");
$cadastro->setEmailEscolar("José@example.com");
$cadastro->setDisciplina("Física");
$cadastro->setIdProfessor(randomizarId());
$cadastro->setSenhaProfessor("12346789");
$cadastro->setSenhaProfessor('1234567');

$cadastro->exibirDadosProfessor();

$cadastro->setName('Renato Flud');
$cadastro->setEmail('renatoflud@example.com');
$cadastro->setUserPassword('12345678');
$cadastro->setUserPassword('1234567');
$cadastro->exibirDadosCliente();
