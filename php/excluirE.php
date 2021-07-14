<?php 
session_start();
/*Dados pessoais*/
	
    $id = $_POST['id'];

  
try {
  $pdo = new PDO('mysql:host=localhost;dbname=assistidos','root', null);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "DELETE FROM registro WHERE id=$id";

  $sth = $pdo->prepare($sql);    

  $sth->execute();
  
 
  $alert = ( "Cadastro excluido com sucesso" );
  echo ( "<script> alert ('$alert'); </script>" );        
  echo ( "<script> window.location.assign ('excluir.php'); </script>" );

  

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>