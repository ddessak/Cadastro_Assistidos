<DOCTYOE html>
    <?php session_start(); ?>
<html>
    <head>

    <title>Cadastrar</title>
    <meta charset="utf-8" > 
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript"  src="../js/js.js" defer></script>

    </head>

    <body>

        <div class="voltar">
            <a href="../index.php"><img src="../imagem/voltar.png" alt=""></a>
        </div>

        <form class="cadastro" action="processa.php" method="POST">

            <div class="pessoais" id="pessoais">

                <h1>Dados pessoais</h1>
                <div class="one"> 
                    <label for="">Nome: </label><br>
                    <input type="text" required placeholder="Digite o Nome" name="nome">
                    <br>
                    <label for="">CPF: </label><br>
                    <input type="number" required placeholder="Digite o CPF" name="cpf">
                    <br>
                    <label for="">RG: </label><br>
                    <input type="number" required placeholder="Digite o RG" name="rg">
                    <br>
                    <label for="">Titulo de Eleitor: </label><br>
                    <input type="number" required placeholder="Digite o número do título" name="eleitor">
                    <br>
                    <label>Data de nascimento:</label><br>
                    <input type="date" name="nascimento" required>
                    <br>
                    <label for="">Nome da Mãe:</label><br>
                    <input type="text" required placeholder="Digite o nome da Mãe" name="mae">
                    <br>
                </div>
                <div class="two">
                    <label for="">Nome da Pai:</label><br>
                    <input type="text" required placeholder="Digite o nome da Pai" name="pai">
                    <br>
                    <label for="">Genero:</label><br>
                    <select name="genero" id="genero">
                        <option disabled selected > Selecione </option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Não Declarar">Não declarado</option>
                    </select>
                    <br>
                    <label for="">Escolaridade: </label><br>
                    <select name="escolaridade" id="escolaridade">
                        <option disabled selected > Selecione </option>
                        <option value="Ensino Fundamental">Ensino Fundamental</option>
                        <option value="Ensino Medio">Ensino Medio</option>
                        <option value="Ensino Superior">Ensino Superior</option>
                        <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                        <option value="Ensino Medio Incompleto">Ensino Medio Incompleto</option>
                        <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                    </select>
                    <br>
                    <label for="">Profissão: </label><br>
                    <input type="text" required placeholder="Digite a Profissão" name="profissao">
                    <br>
                    <label for="">Estado Cívil:</label><br>
                    <select name="estado_civil" id="estado_civil">
                        <option disabled selected > Selecione </option>
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado">Casado</option>
                        <option value="Separado">Separado</option>
                        <option value="Divorciado">Divorciado</option>
                        <option value="Viuvo">Viúvo</option>
                        <option value="Amasiado">Amasiado</option>
                    </select>
                    <br>
                    <p onclick="proximo()">Próximo</p>
                </div>
            </div>

            <div class="contato" id="contato">
                <h1>Dados de Contato</h1>

                <label for="">Telefone:</label>
                <input type="number" name='telefone' placeholder="Digite o número de telefone fixo">
                <br>
                <label for="">Celular:</label>
                <input type="number" name='celular' required placeholder="Digite o número do celular">
                <br>
                <label for="">E-mail:</label>
                <input type="text" name='email' required placeholder="Digite o e-mail">
                <br>
                <label>CEP:</label>
                <input type="number" name="cep" placeholder="Digite o CEP" required>
                <br>
                <label>Endereço:</label>
                <input type="text" name="endereco" placeholder="Digite o endereco" required>
                <br>
                <label>Cidade:</label>
                <input type="text" name="cidade" placeholder="Digite o nome da cidade" required>
                <br>
                <label>UF:</label>
                <select id="estado" name="estado" required>

                    <option disabled selected >Selecione </option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
                <br>
                <p onclick="voltar()">Voltar</p>
                <p onclick="avancar()">Próximo</p>
            </div>

            <div class="familia" id="familia">
                
                <h1>Declaração de Renda</h1>

                <label for="">Quantidade de pessoas na mesma casa: </label>
                <select name="qtd" id="qtd">
                    <option disabled selected >Selecione </option>
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                </select>
                <br>
                <label>Quantidade de Dependentes: </label>
                <select name="dependentes" id="dependentes">
                    <option disabled selected >Selecione </option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                </select>
                <br>
                <label for="">Renda Mensal:</label>
                <select name="renda" id="renda">
                    <option disabled selected >Selecione </option>
                    <option value="Ate 1000"> Até R$ 1000,00 </option>
                    <option value="Até 2500"> Até R$ 2500,00 </option>
                    <option value="Até 1000"> Até R$ 4000,00 </option>
                    <option value="Acima de 4000"> R$ Acima de R$ 4000,00 </option>
                </select>
                <br>
                <div class="linha"></div>
                <h1>Dados do Processo</h1>
                <label for="">Tipo</label>
                <select name="tipo" id="tipo">
                    <option disabled selected >Selecione </option>
                    <option value="Infancia e Juventude">Infância e Juventude</option>
                    <option value="Familia">Família</option>
                    <option value="Saúde">Saúde</option>
                    <option value="Cívil">Cívil</option>
                </select>
                <label for="">Resumo</label>
                <textarea name="resumo" id="" cols="30" rows="10"></textarea>


                <p onclick="volte()">Voltar</p>
                <p onclick="salve()">Cadastrar</p>
            </div>


            <div class="salvar" id="salve">
                <h1>Deseja mesmo salvar?</h1>

                <p onclick="back()">Cancelar</p>
                <input type="submit" value="Salvar" onclick="alert('Cadastro Realizado com sucesso')">
            </div>

        </form>



    </body>
</html>