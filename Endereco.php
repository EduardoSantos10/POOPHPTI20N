<?php

    namespace PHP\Modelo;

    class Endereco{
        private string $logradouro;
        private int $num;
        private string $cidade;
        private string $bairro;
        private string $estado;
        private string $pais;
        private string $cep;

        public function __construct(string $logradouro, int $num,
                                                string $cidade,
                                                string $bairro,
                                                string $estado,
                                                string $pais,
                                                string $cep){


                $this->logradouro = $logradouro;
                $this->num = $num;
                $this->cidade = $cidade;
                $this->bairro = $bairro;
                $this->estado = $estado;
                $this->pais = $pais;
                $this->cep = $cep;    
        } // Método construtor

        public function __get(string $campo):mixed{
            return $campo;
        }

        public function __set(string $campo, string $valor){
            $this->campo = $valor;
        }

        public function imprimir(){
            return "<br>Logradouro: ".$this->logradouro.
                   "<br>Número: ".$this->numero.
                   "<br>Cidade: ".$this->cidade.
                   "<br>Bairro: ".$this->bairro.
                   "<br>Estado: ".$this->estado.
                   "<br>Pais: ".$this->pais.
                   "<br>CEP: ".$this->cep;
        }
    }








?>