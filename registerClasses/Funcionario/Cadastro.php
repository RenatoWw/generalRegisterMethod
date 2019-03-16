<?php
/**
 * Created by PhpStorm.
 * User: Renato
 * Date: 14/03/2019
 * Time: 21:00
 */

namespace Funcionarios;

class Cadastro extends \Cadastro
{
    private $idFuncionario;
    private $passwordFuncionario;

    public function getIdFuncionario()
    {

        return $this->idFuncionario;
    }

    public function setIdFuncionario($idFuncionario)
    {
        randomizarId();
        $this->idFuncionario = $idFuncionario;
    }

    public function getPasswordFuncionario()
    {
        return $this->passwordFuncionario;
    }

    public function setPasswordFuncionario($password)
    {
        if(strlen($password) < 8){
            echo "<br>Senha inválida para Funcionario. Por favor, entre com uma senha com mais de 8 caractéres.";
        } else {
            $this->password = $password;
        }

    }


    public function exibirDadosFuncionario()
    {
        echo "<br>A id do funcionário é: ".$this->getId()."<br>"."A senha do funcionário é: ".$this->getPassword();
    }
}
