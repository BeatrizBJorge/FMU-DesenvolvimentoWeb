<?php
/*
CREATE DATABASE bancoEmpresa
USE bancoEmpresa
CREATE TABLE clientes

Nome            varchar(80)     not null
Nasc            DATE            NOT NULL
Endereco        varchar(100)    NOT NULL
Genero          CHAR            NOT NULL
novosProdutos   VARCHAR(3)      NOT NULL
ofertas         VARCHAR(3)      NOT NULL
*/


//importando arquivo de conexao .php
//colocar em todos os arquivos .php
include_once "conexao.php"; 
/*pode ser usado tmb só o iclude, 
mas o include onde impede que seja utuilizado novamente*/

try{

    $nome = $_POST['fNome'];
    $nasc = $_POST['fNascimento'];
    $endereco = $_POST['fEndereco'];
    $genero = $_POST['fGenero'];
    $novosProdutos = $_POST["fInfo1"];;
    $ofertas = $_POST["fInfo2"];
    
    $nome = strtoupper($nome);
    
    if(empty($_POST["fInfo1"])){
        $novosProdutos = "nao";
    }else{
        $novosProdutos=$_POST["fInfo1"];
    }
    
    if(empty($_POST["fInfo2"])){
        $ofertas = "nao";
    }else{
        $ofertas=$_POST["fInfo2"];
    }

    /*
    echo "<h1 style='text align:center; color:violet;'>Estamos no PHP</h1>";
    echo "<p> Nome digitado: " .$nome. "</p>";
    echo "<br>";
    echo "Nome $nome";
    echo "<br></br>";
    echo "<p>Data de Nascimento: " .$nasc. "</p>";
    echo "<br></br>";
    echo "Gênero: $genero";
    echo "<br>";
    echo "Novos produtos: $novosProdutos";
    echo "<br>";
    echo "Ofertas: $ofertas";
    */

    //colocar em todos os arquivos .php
    
    $sql=$conectar->prepare("USE bancoempresa; INSERT INTO pdo.clientes (nome, nascimento, endereco, genero, novosprodutos, ofertas)  
    values ('$nome', '$nasc', '$endereco', '$genero', '$novosProdutos', '$ofertas')");
  
   $sql->execute();
   header("location: index.html");

}
catch (PDOException $e) {
    echo("Falha na gravação do registro! lascou-se foi tudo!!!!".$e->getMessage());
}


?>
