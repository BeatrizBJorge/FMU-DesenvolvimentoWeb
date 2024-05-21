<?php 
include_once "conexao.php";

try {
   //variáveis que vão receber os conteúdos do fomrulário html
   
   $endereco=$_POST['endereco'];
   $cidade=$_POST['cidade'];
   $estado=$_POST['estado'];
   $email=$_POST['email'];
   $cep=$_POST['cep'];
   /*isso serve somente para verificar se o conteúdo chegou corretamente.
   echo "<br>".$endereco;
   echo "<br>".$cidade;
   echo "<br>".$estado;
   echo "<br>".$email;
   echo "<br>".$cep;*/

   //variável $conectar vem do arquivo conexao.php

   $sql=$conectar->prepare("INSERT INTO pdo.clientes (email, endereco, cidade, estado, cep) VALUES ('$email', '$endereco', '$cidade', '$estado', '$cep')");
  
   $sql->execute();
   header("location: index.html");
} catch (PDOException $e) {
    echo ("Erro: ". $e->getMessage());
}

?>