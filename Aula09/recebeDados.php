<?php
// ambiente php
//variavel de memoria: $nomeVariavel
//não são tipadas(int, string)
//get --> variavel superglobal $_GET
//post --> variavel superglobal $_POST

$nome = $_POST["fNome"];
$nascimento = $_POST["fNascimento"];
$endereco = $_POST["fEndereco"];
$genero = $_POST["fGenero"];

//tratando os dados do form
$nome = strtoupper($nome); //str to upper - para maiuculas, e str to lower - para minusculas
//$nome = strtolower($nome);

//exibindo o conteudo das variaveis
echo "<h1 style='text-align:center; color: violet;'>Estamos no PHP</h1>";
echo "<p>Nome digitado:" .$nome. "</p>"; // para concatenar pode usar . ou ,
echo "<br>";
echo "Nome $nome"; //aqui é obrigatorio usar aspas duplas
echo "<br><br>";
echo "<p>Data de Nascimento: " .$nascimento. "</p>";
echo "<br>";
echo "Endereço: $endereco";
echo "<br><br>";
echo "Gênero: $genero";

?>
