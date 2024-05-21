<?php

//somente para conexão com o banco
//impotar em todos os arquivos .php

//jogar as coisas num try
try {
    //  PDO = classe PHP Data Objects 
    $conectar= new PDO(
        "mysql:host=localhost;
        port=3306;
        dataname=bancoempresa",
        "root","");
    //                                                 banco          usuario e senha
    //echo("Conectado com sucesso!");

//caso dê errado:
} catch (PDOException $e) {
    echo("Falha ao se conectar".$e->getMessage());
}
?>
