<?php

    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;


?>


<!Doctype HTML> 

    <head>

        <meta charset="UTF-8"/>
        <title>Página de Consulta</title>

    </head>


    <body>

        <form method="POST">

            <label>Código: </label>

            <input type="number" name="codigo" id="codigo"><br><br>

            <button type="submit"> Consultar

                <?php

                    //conexão com o banco
                    $conexao = new Conexao();
                
                    //coletar o codigo
                    $codigo = $_POST['codigo'];

                    //chamar o consultar
                    $consultar = new Consultar();
                    echo $consultar -> consultarIndividual($conexao, $codigo);
    
                ?>
            </button>

        </form>

    </body>

</html>