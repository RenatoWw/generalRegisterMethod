<?php
/**
 * Created by PhpStorm.
 * User: Renato
 * Date: 15/03/2019
 * Time: 17:21
 */

namespace Professor;


class Cadastro extends \Cadastro
{
    private $nome;
    private $emailEscolar;
    private $disciplina;
    private $idProfessor;
    private $senhaProfessor;
        //Getters and setter for nome
    public function getNome()
    {
        return $this->nome;
    }
    public function setNomeProfessor($nome):void
    {
        $this->nome = $nome;
    }
        //Getters and setter for emailEscolar
    public function getEmailEscolar()
    {
        return $this->emailEscolar;
    }
    public function setEmailEscolar($emailEscolar):void
    {
        $this->emailEscolar = $emailEscolar;
    }
    //Getters and setter for disciplina
    public function getDisciplina()
    {
        return $this->disciplina;
    }
    public function setDisciplina($disciplina): void
    {
        $this->disciplina = $disciplina;
    }
    //Getters and setter for IdProfessor
    public function getIdProfessor()
    {
        return $this->idProfessor;
    }
    public function setIdProfessor($idProfessor): void
    {
        $this->idProfessor = $idProfessor;
    }
    //Getters and setter for senha
    public function getSenhaProfessor()
    {
        return $this->senhaProfessor;
    }
    public function setSenhaProfessor($senhaProfessor): void
    {
        if(strlen($senhaProfessor) < 8){
            echo "<br>Senha inválida para Professor. Por favor, entre com uma senha com mais de 8 caractéres.<br>";
        }else {
            $this->senhaProfessor = $senhaProfessor;
        }

    }
    public function exibirDadosProfessor(){
        echo "<br>Nome: ".$this->getNome()."<br>".
            "Email: ".$this->getEmailEscolar()."<br>".
            "Disciplina: ".$this->getDisciplina()."<br>".
            "Id: ".$this->getIdProfessor()."<br>".
            "Senha: ".$this->getSenhaProfessor()."<br>";
    }

}
