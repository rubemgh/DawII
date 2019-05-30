<?php

class Usuarios {

    public $nome;
    public $email;
    public $celular;
    public $telefone;
    public $datanasc;
    public $tipo;
    public $senha;



    public function __construct($nome,$email,$celular,
    $telefone,$datanasc,$tipo,$senha) {

         $this->nome = $nome;
         $this->email = $email;
         $this->celular = $celular;
         $this->telefone = $telefone;
         $this->datanasc = $datanasc;
         $this->tipo = $tipo;
         $this->senha = $senha;
     }



    function getnome() {
        return $this->nome;
    }
    function getemail() {
        return $this->email;
    }
    function getcelular() {
        return $this->celular;
    }

    function gettelefone() {
        return $this->telefone;
    }
    function getdatanasc() {
        return $this->datanasc;
    }
    function gettipo() {
        return $this->tipo;
    }
    function getsenha() {
        return $this->senha;
    }



    function setnome($nome) {
        $this->nome = $nome;
    }

    function setemail($email) {
        $this->email = $email;
    }
    function setcelular($celular) {
        $this->celular = $celular;
    }
    function settelefone($telefone) {
        $this->telefone = $telefone;
    }
    function setdatanasc($datanasc) {
        $this->datanasc = $datanasc;
    }
    function settipo($tipo) {
            $this->tipo = $tipo;
        }
    function setsenha($senha) {
        $this->senha = $senha;
        }
}
