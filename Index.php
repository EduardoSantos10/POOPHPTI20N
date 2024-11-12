<?php

    namespace PHP\Modelo;
    require_once('DAO\Inserir.php');
    require_once('DAO\Conexao.php');
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;


?>



<!Doctype HTML>

<head>
    <meta charset="UTF-8"/>
    <title>Página Principal</title>
</head>

<body>


    <form method="POST">

        <label>Código: </label><br>
        <input type="number" name="codigo" id="codigo"><br><br>

        <label>Nome: </label><br>
        <input type="text" name="nome" id="nome"><br><br>

        <label>Endereço: </label><br>
        <input type="text" name="endereco" id="endereco"><br><br>

        <label>Telefone: </label><br>
        <input type="text" name="telefone" id="telefone"><br><br>

        <button type="submit">Cadastrar

        <?php

            $conexao = new Conexao();// conectando o banco
        
            // pegando os dados do usuário
            $codigo   = $_POST['codigo'];
            $nome     = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];

            // chamar a classe inserir
            $inserir = new Inserir();
            echo $inserir->cadastrarPessoa($conexao, $codigo, $nome, $endereco, $telefone);
        
        ?>


        </button>

    </form><!--Fim do Formulário-->

</body>

</html>