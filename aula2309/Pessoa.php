<?php

class Pessoa{
    public $nome;
    public $telefone;
    public $email;


    public function mostraDados(){
        echo "O nome do funcionario é ".$this->nome.'<br>';
        echo "Seu telefone: ".$this->telefone.'<br>';
        echo "O email para contato é ".$this->email;
    }

    public  function mensagem(){
        echo 'Boa tarde';
    }

    public function cadastro($n,$t,$e){
        $this->nome = $n;
        $this->telefone = $t;
        $this->email = $e;
    }
}