<?php
    namespace PHP\Modelo\DAO;

    use Exception;

    class Conexao{

        function conectar(){ // metodo para se ligar com o banco de dados

            try{

                $conn = mysqli_connect("localhost","root","","phpTI20N");

                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br> Algo deu errado";

            }catch(Exception $erro){

                return "Algo deu errado".$erro;

            }


        }// metodo     

    }// criei a classe conexão
?>

























?>