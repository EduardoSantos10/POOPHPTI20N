<?php
    namespace PHP\Modelo; // define o local do projeto
    require_once("Pessoa.php");
    require_once("Endereco.php");
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    // Classe
    class Cliente extends Pessoa {
        protected float $precoTotal;

        //Construtor
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, float $precoTotal){
            
            // "THIS" diferenciar var de parametro
            parent::__construct($cpf, $nome, $telefone, $endereco); // ::parent -> sempre chama o metodo da classe pai
            $this->precoTotal = $precoTotal;
        }

        // metodo gets e sets
        public function __get(string $nome){
            return $this -> nome;
        } // get - mostra o dado na tela (consulta)

        public function __set(string $nomeVariavel, string $novoDado): void{
            $this -> $nomeVariavel = $novoDado;
        }// set - altera valores

        public function imprimir():string{ // criei o metodo imprimir
            return parent::imprimir().
            "<br>Preço Total: ".$this->precoTotal;
        }


    } //fim da classe
?>