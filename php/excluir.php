
<!DOCTYPE html>
<html> 
    <head>

        <title>Consulta</title>
        <meta charset="utf-8" > 
        <link href="../css/menu.css" type="text/css" rel="stylesheet" />
        <link href="../css/pesquisa.css" type="text/css" rel="stylesheet" />

    </head>
    <body>
        

        <div class="image">
            <a href="../index.php"><img src="../imagem/voltar.png" alt=""></a>
        </div>
        <center>
        

        <div class="form">
            
            <form action="excluir.php" method="POST">

                <input type="number" name="cpf" placeholder="Digite o CPF" maxlength="14"  style="text-align: center" required> 
                <input type="submit" name="pesquisa"value="Pesquisar"> 
            </form>
        </div>

        </center>

        <?php 
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $dbname = "assistidos";

            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

            

            $pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
                    
            if($pesquisa){
                $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
                $resultado = "SELECT * FROM registro WHERE cpf LIKE '%$cpf%'";
                $resultado_usuario = mysqli_query($conn, $resultado);
                
                while ($linha = mysqli_fetch_assoc($resultado_usuario)){
                    echo "
                    <div class='pesquisa' id='pesquisa'>
                    
                        <form action='excluirE.php' method='POST'>
                        <div class='excluir' id='excluir'>

                        <form action='excluirE.php' method='POST'>
                            
                        <div class='dados'> 
                            <input type='hidden' value='{$linha['id']}'  name='id'>
                            <label>Nome:</label>
                            <input type='text' disabled value='{$linha['nome']}'  name='nome'>
                            <label>CPF:</label>
                            <input type='text' disabled value='{$linha['cpf']}'  name='cpf'>
                            <label>RG:</label>
                            <input type='text' disabled value='{$linha['rg']}'  name='rg'>
                            <label>Eleitor:</label>
                            <input type='text' disabled value='{$linha['eleitor']}'  name='eleitor'>
                            <label>Data de Nascimento:</label>
                            <input type='text' disabled value='{$linha['nascimento']}'  name='nascimento'>
                            <label>Mãe:</label>
                            <input type='text' disabled value='{$linha['mae']}'  name='mae'>
                            <label>Pai:</label>
                            <input type='text' disabled value='{$linha['pai']}'  name='pai'>
                            <label>Genero:</label>
                            <input type='text' disabled value='{$linha['genero']}'  name='genero'>
                        </div>
                        <div class='dados_two'>
                        
                            <label>Escolaridade:</label>
                            <input type='text' disabled value='{$linha['escolaridade']}'  name='escolaridade'>
                            <label>Profissao:</label>
                            <input type='text' disabled value='{$linha['profissao']}'  name='profissao'>
                            <label>Estado Cívil:</label>
                            <input type='text' disabled value='{$linha['estado_civil']}'  name='estado_civil'>
                            <label>Telefone:</label>
                            <input type='text' disabled value='{$linha['telefone']}'  name='telefone'>
                            <label>Celular:</label>
                            <input type='text' disabled value='{$linha['celular']}'  name='celular'>
                            <label>E-mail:</label>
                            <input type='text' disabled value='{$linha['email']}'  name='email'>
                            <label>CEP:</label>
                            <input type='text' disabled value='{$linha['cep']}'  name='cep'>
                            <label>Endereço:</label>
                            <input type='text' disabled value='{$linha['endereco']}'  name='endereco'>
                        </div>
                        <div class='dados_tree' id='dados_tree'>
                            <label>Cidade:</label>
                            <input type='text' disabled value='{$linha['cidade']}'  name='cidade'>
                            <label>Estado:</label>
                            <input type='text' disabled value='{$linha['estado']}'  name='estado'>
                            <label>Quantidade de pessoas na mesma casa:</label>
                            <input type='text' disabled value='{$linha['qtd']}'  name='qtd'>
                            <label>Quantidade de Dependentes:</label>
                            <input type='text' disabled value='{$linha['dependentes']}'  name='dependentes'>
                            <label>Renda Mensal:</label>
                            <input type='text' disabled value='{$linha['renda']}'  name='renda'>
                            <label>Tipo:</label>
                            <input type='text' disabled value='{$linha['tipo']}'  name='tipo'>
                            <label>Resumo:</label>
                            <input type='text' disabled value='{$linha['resumo']}'  name='resumo'>
                        </div>

                        <div class='form'>
                        
                            <input type='submit'  value='excluir' >
                        </div>
                          
                        </form>


                    </div>
                    
                    ";
                }
    
            }

        ?>

    </body>

</html>