<?php
include_once "conexao.php";

/*USE pdo;
CREATE TABLE IF NOT EXISTS usuarios (
    email VARCHAR(80) PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    senha VARCHAR(6) NOT NULL); 
USE pdo;
INSERT INTO usuarios (email, nome, senha) VALUES ('silvia@gmail.com', 'Silvia','123456'); 
*/

try {
    //informações do usuário
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //SELECT * FROM usuarios WHERE email='silvia@gmail.com' AND senha='123456';
    $sql=$conectar->query("SELECT * FROM pdo.usuarios WHERE email='$email' AND senha='$senha'");

    if ($sql->rowCount()>0)    
    //rowCount() retorna o número de linhas encontradas
        {
          //Usuário encontrado->posso ver os clientes cadastrados
          $consulta=$conectar->query("SELECT * FROM pdo.clientes");
          //montando a tabela para mostrar os registros já cadastrados dos clientes
          echo "<table border='1' style='border: 1px black solid;border-collapse: collapse;'>
                    <tr>
                        <td>Email</td>
                        <td>Endereço</td>
                        <td>Cidade</td>
                        <td>Estado</td>
                        <td>Cep</td>
                        <td>Ação</td>
                    </tr>";  
          while ($linha=$consulta->fetch(PDO::FETCH_ASSOC))
          {
              echo "<tr><td>$linha[email]</td>
                        <td>$linha[endereco]</td>
                        <td>$linha[cidade]</td>
                        <td>$linha[estado]</td>
                        <td>$linha[cep]</td>
                        <td><a href='excluir.php?$linha[email]'>Excluir</a></td></tr>";
          }
          echo "</table>";
          
        }    
    else
    {
        echo
         "<script>
            window.location.href='index.html';alert('Usuário não cadastrado bla bla bla!');
          </script>";
        //não posso ver os clientes cadastrados
            
            
    }
 } catch (PDOException $e) {
     echo ("Erro: ". $e->getMessage());
 }

//  desenvolver a rotina de exclusão de clientes

?>
