<?php 
session_start();
/*Dados pessoais*/
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg =  $_POST['rg'];
    $eleitor = $_POST['eleitor'];
    $nascimento = $_POST['nascimento'];
    $mae =  $_POST['mae'];
    $pai =  $_POST['pai'];
    $genero = $_POST['genero'];
    $escolaridade =    $_POST['escolaridade'];
    $profissao = $_POST['profissao'];
    $estado_civil =  $_POST['estado_civil'];

/*Dados de Contato*/
    $telefone =  $_POST['telefone'];
    $celular = $_POST['celular'];
    $email =  $_POST['email'];
    $cep =  $_POST['cep'];
    $endereco =  $_POST['endereco'];
    $cidade =  $_POST['cidade'];
    $estado =  $_POST['estado'];

/* Declaração de Renda */
    $qtd =  $_POST['qtd'];
    $dependentes =  $_POST['dependentes'];
    $renda =  $_POST['renda'];

/* Dados do Processo */
    $tipo =  $_POST['tipo'];
    $resumo =  $_POST['resumo'];

/* Salvar o processo */


  
try {
  $pdo = new PDO('mysql:host=localhost;dbname=assistidos','root', null);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO registro VALUES(:id, :nome, :cpf, :rg, :eleitor, :nascimento, :mae, :pai, :genero, :escolaridade, :profissao, :estado_civil, :telefone, :celular, :email, :cep, :endereco, :cidade,:estado, :qtd, :dependentes, :renda, :tipo, :resumo)');
  $stmt->execute(array(

    ':id' => null,
    ':nome' => $nome,
    ':cpf' => $cpf,
    ':rg' => $rg,
    ':eleitor' => $eleitor,
    ':nascimento' => $nascimento,
    ':mae' => $mae,
    ':pai' => $pai,
    ':genero' => $genero,
    ':escolaridade' => $escolaridade,
    ':profissao' => $profissao,
    ':estado_civil' =>  $estado_civil,
    ':telefone' => $telefone,
    ':celular' => $celular,
    ':email' => $email,
    ':cep' => $cep,
    ':endereco' => $endereco,
    ':cidade' => $cidade,
    ':estado' => $estado,
    ':qtd' => $qtd,
    ':dependentes' => $dependentes, 
    ':renda' => $renda, 
    ':tipo' => $tipo,
    ':resumo' => $resumo


  ));

  header("location: cadastro.php");

}catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?> 