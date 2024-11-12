<?php
    namespace PHP\Modelo\DAO;



    require_once("Conexao.php");
    use \PHP\Modelo\DAO\Conexao;

    class Inserir{

        function cadastrarPessoa(Conexao $conexao, int $codigo, string $nome, string $endereco, string $telefone){

            try{

                $conn = $conexao -> conectar();// abrindo conexão com o BD
                $sql = "Insert into pessoa(codigo, nome, endereco, telefone) 
                        values('$codigo', '$nome', '$endereco', '$telefone')";

                $result = mysqli_query($conn, $sql); // commit no banco


                //fechar a conexão com o BD
                mysqli_close($conn);

                if($result){
                    return "<br>Inserido com sucesso";

                }

                return"<br><br>Não Inserido";


            }catch(Exception $erro){

                return "<br>Algo deu errado<br><br>".$erro;
            }


        }// fim do catch


    }// classe inserir


?>