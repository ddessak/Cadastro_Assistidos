
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
            
            <form action="pesquisa.php" method="POST">

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
                    
                        <form action='editar.php' method='POST'>
                            <div class='dados'> 
                                <input type='hidden' value='{$linha['id']}'  name='id'>
                                <label>Nome: </label><br>
                                <input type='text' value='{$linha['nome']}'  name='nome'>

                                <br>
                                <label for=''>CPF: </label><br>
                                <input type='number' value='{$linha['cpf']}' name='cpf'>
                                <br>
                                <label for=''>RG: </label><br>
                                <input type='number' value='{$linha['rg']}'name='rg'>
                                <br>
                                <label for=''>Titulo de Eleitor: </label><br>
                                <input type='number' value='{$linha['eleitor']}' name='eleitor'>
                                <br>
                                <label>Data de nascimento:</label><br>
                                <input type='date' value='{$linha['nascimento']}' name='nascimento' required>
                                <br>
                                <label for=''>Nome da Mãe:</label><br>
                                <input type='text' value='{$linha['mae']}' name='mae'>
                                <label for=''>Nome da Pai:</label><br>
                                <input type='text' value='{$linha['pai']}' name='pai'>
                                <label for=''>Genero:</label><br>
                                <select name='genero' id='genero'>
                                    <option selected > {$linha['genero']} </option>
                                    <option value='Masculino'>Masculino</option>
                                    <option value='Feminino'>Feminino</option>
                                    <option value='Não Declarar'>Não declarado</option>
                                </select>
                            </div>

                            <div class='dados_two'>
                                
                                <label for=''>Escolaridade: </label><br>
                                    <select name='escolaridade' id='escolaridade'>
                                    <option selected >{$linha['escolaridade']} </option>
                                    <option value='Ensino Fundamental'>Ensino Fundamental</option>
                                    <option value='Ensino Medio'>Ensino Medio</option>
                                    <option value='Ensino Superior'>Ensino Superior</option>
                                    <option value='Ensino Fundamental Incompleto'>Ensino Fundamental Incompleto</option>
                                    <option value='Ensino Medio Incompleto'>Ensino Medio Incompleto</option>
                                    <option value='Ensino Superior Incompleto'>Ensino Superior Incompleto</option>
                                </select>
                                <br>
                                <label for=''>Profissão: </label><br>
                                <input type='text' value='{$linha['profissao']}' name='profissao'>
                                <br>
                                <label for=''>Estado Cívil:</label><br>
                                <select name='estado_civil' id='estado_civil'>
                                    <option selected > {$linha['estado_civil']} </option>
                                    <option value='Solteiro'>Solteiro</option>
                                    <option value='Casado'>Casado</option>
                                    <option value='Separado'>Separado</option>
                                    <option value='Divorciado'>Divorciado</option>
                                    <option value='Viuvo'>Viúvo</option>
                                    <option value='Amasiado'>Amasiado</option>
                                </select>

                                <label for=''>Telefone:</label>
                                <input type='number' name='telefone' value='{$linha['telefone']}'>
                                <br>
                                <label for=''>Celular:</label>
                                <input type='number' name='celular' value='{$linha['celular']}'>
                                <label for=''>E-mail:</label>
                                <input type='text' name='email' value='{$linha['email']}'>
                                <label>CEP:</label>
                                <input type='number' name='cep' value='{$linha['cep']}'>
                                <label>Endereço:</label>
                                <input type='text' name='endereco' value='{$linha['endereco']}'>

                            </div>
                            <div class='dados_tree' id='dados_tree'>

                                <label>Cidade:</label>
                                <input type='text' name='cidade' value='{$linha['cidade']}'>
                                <br>
                                <label>UF:</label>
                                <select id='estado' name='estado' required>

                                    <option disabled>{$linha['cidade']} </option>
                                    <option value='AC'>Acre</option>
                                    <option value='AL'>Alagoas</option>
                                    <option value='AP'>Amapá</option>
                                    <option value='AM'>Amazonas</option>
                                    <option value='BA'>Bahia</option>
                                    <option value='CE'>Ceará</option>
                                    <option value='DF'>Distrito Federal</option>
                                    <option value='ES'>Espírito Santo</option>
                                    <option value='GO'>Goiás</option>
                                    <option value='MA'>Maranhão</option>
                                    <option value='MT'>Mato Grosso</option>
                                    <option value='MS'>Mato Grosso do Sul</option>
                                    <option value='MG'>Minas Gerais</option>
                                    <option value='PA'>Pará</option>
                                    <option value='PB'>Paraíba</option>
                                    <option value='PR'>Paraná</option>
                                    <option value='PE'>Pernambuco</option>
                                    <option value='PI'>Piauí</option>
                                    <option value='RJ'>Rio de Janeiro</option>
                                    <option value='RN'>Rio Grande do Norte</option>
                                    <option value='RS'>Rio Grande do Sul</option>
                                    <option value='RO'>Rondônia</option>
                                    <option value='RR'>Roraima</option>
                                    <option value='SC'>Santa Catarina</option>
                                    <option value='SP'>São Paulo</option>
                                    <option value='SE'>Sergipe</option>
                                    <option value='TO'>Tocantins</option>
                                    <option value='EX'>Estrangeiro</option>
                                </select>

                                <label for=''>Quantidade de pessoas na mesma casa: </label>
                                <select name='qtd' id='qtd'>
                                    <option selected >{$linha['qtd']} </option>
                                    <option value='1'>1</option>
                                    <option value='1'>2</option>
                                    <option value='1'>3</option>
                                    <option value='1'>4</option>
                                    <option value='1'>5</option>
                                    <option value='1'>6</option>
                                    <option value='1'>7</option>
                                </select>
                                <br>
                                <label>Quantidade de Dependentes: </label>
                                <select name='dependentes' id='dependentes'>
                                    <option selected >{$linha['dependentes']} </option>
                                    <option value='0'>0</option>
                                    <option value='1'>1</option>
                                    <option value='1'>2</option>
                                    <option value='1'>3</option>
                                    <option value='1'>4</option>
                                    <option value='1'>5</option>
                                    <option value='1'>6</option>
                                    <option value='1'>7</option>
                                </select>
                                <br>
                                <label for=''>Renda Mensal:</label>
                                <select name='renda' id='renda'>
                                    <option selected >{$linha['renda']} </option>
                                    <option value='Ate 1000'> Até R$ 1000,00 </option>
                                    <option value='Até 2500'> Até R$ 2500,00 </option>
                                    <option value='Até 1000'> Até R$ 4000,00 </option>
                                    <option value='Acima de 4000'> R$ Acima de R$ 4000,00 </option>
                                </select>
            
                                <label for=''>Tipo</label>
                                <select name='tipo' id='tipo'>
                                    <option selected >{$linha['tipo']} </option>
                                    <option value='Infancia e Juventude'>Infância e Juventude</option>
                                    <option value='Familia'>Família</option>
                                    <option value='Saúde'>Saúde</option>
                                <option value='Cívil'>Cívil</option>
                                </select>
                                <label for=''>Resumo</label>
                                <textarea name='resumo' id='' cols='30' rows='10'>{$linha['resumo']}</textarea>
                            </div>

                            <center> 

                            <div class='form'>
                                
                                <input type='submit' name='salvo' value='Salvar' >
                    
                            </div>
                    
                            </center> 
                            
                        </form>


                    </div>
                    
                    ";
                }
    
            }

        ?>

    </body>

</html>