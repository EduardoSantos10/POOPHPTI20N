<?php

    namespace PHP\Modelo; // define o local do projeto
    require_once("Pessoa.php");
    require_once("Endereco.php");
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Pessoa;

    class Funcionario extends Pessoa {
        protected string $cargo; // declaro o que não vem da classe pai
        protected float $salario;

        public function __construct(string $cpf, string $nome, string $telefone, string $cargo, float $salario, Endereco $endereco){
            parent::__construct($cpf, $nome, $telefone, $endereco);
            $this->cargo = $cargo;
            $this->salario = $salario;
        }

        public function  __get(string $nome){
            return $this->nome;
        }

        public function __set(string $nomeVariavel, string $dado):void{

            $this->nomeVariavel = $dado;
        }
        public function imprimir(): string{
            return parent::imprimir().
            "<br>Cargo: ".$this->cargo.
            "<br>Salario: ".$this->salario;
        }




    }







?>