<?php
/**
 * Created by PhpStorm.
 * User: Renato
 * Date: 12/03/2019
 * Time: 21:32
 */

class Cadastro
{
    private $name;
    private $email;
    private $userPassword;

    protected function getName():string
    {
        return $this->name;
    }
    public function setName($name):void
    {
        $this->name = $name;
    }

    protected function getEmail():string
    {
        return $this->email;
    }
    public function setEmail($email):void
    {
        $this->email = $email;
    }

    protected function getUserPassword()
    {
        return $this->userPassword;
    }

    public function setUserPassword($userPassword)
    {
        if(strlen($userPassword) < 8){
            echo "<br>Senha inválida para Cliente. Por favor, entre com uma senha com mais de 8 caractéres.<br>";
        } else {
            $this->userPassword = $userPassword;
        }
    }

//    public function __construct($name, $email, $userPassword)
//    {
//        $this->name = $name;
//        $this->email = $email;
//        $this->userPassword = $userPassword;
//    }
    public function exibirDadosCliente()
    {
        echo "<br>Nome: ".$this->name."<br>". "Email: ".$this->email."<br>". "Senha: ".$this->userPassword."<br>";
    }
}
