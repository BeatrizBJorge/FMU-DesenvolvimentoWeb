# Aula 09 🐘
#### Professora Silvia

# Formulário de Cadastro com HTML e PHP

Este documento explica como criar um formulário de cadastro HTML e como processar os dados enviados com PHP. Além disso, explicaremos como configurar e usar o PHP com XAMPP.

## Estrutura HTML

Vamos começar com a estrutura básica do HTML que inclui um formulário para cadastro.

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - PHP</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="recebeDados.php" method="post">
        <label for="">
            Nome:
            <input type="text" name="fNome" id="" placeholder="Digite seu nome..." maxlength="80" size="85" required>
        </label>

        <br><br>

        <label for="">
            Data de Nascimento:
            <input type="date" name="fNascimento" id="" required>
        </label>

        <br><br>

        <label for="">
            Endereço:
            <input type="text" name="fEndereco" id="" maxlength="80" size="85" required>
        </label>

        <br><br>

        <label for="">
            <input type="radio" name="fGenero" id="" value="F" required>Feminino
            <input type="radio" name="fGenero" id="" value="M">Masculino
            <input type="radio" name="fGenero" id="" value="O">Outros
        </label>

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

### Explicação do Código HTML

1. **Estrutura HTML**:
   - O formulário contém campos para nome, data de nascimento, endereço e gênero.
   - O atributo `required` é usado para garantir que os campos sejam preenchidos antes do envio do formulário.
   - O atributo `method="post"` especifica que os dados do formulário serão enviados usando o método POST.
   - O atributo `action="recebeDados.php"` define o script PHP que processará os dados do formulário.

## Processamento com PHP

Agora, vamos ver o script PHP que processa os dados enviados pelo formulário.

```php
<?php
// Recebendo os dados do formulário via método POST
$nome = $_POST["fNome"];
$nascimento = $_POST["fNascimento"];
$endereco = $_POST["fEndereco"];
$genero = $_POST["fGenero"];

// Tratando os dados do formulário
$nome = strtoupper($nome); // Converte o nome para maiúsculas

// Exibindo o conteúdo das variáveis
echo "<h1 style='text-align:center; color: violet;'>Estamos no PHP</h1>";
echo "<p>Nome digitado: " . $nome . "</p>"; // Para concatenar pode usar . ou ,
echo "<br>";
echo "Nome: $nome"; // Aqui é obrigatório usar aspas duplas
echo "<br><br>";
echo "<p>Data de Nascimento: " . $nascimento . "</p>";
echo "<br>";
echo "Endereço: $endereco";
echo "<br><br>";
echo "Gênero: $genero";
?>
```

### Explicação do Código PHP

1. **Recebendo Dados**:
   - Utilizamos a variável superglobal `$_POST` para acessar os dados enviados pelo formulário.
   - `$nome`, `$nascimento`, `$endereco` e `$genero` armazenam os valores dos campos do formulário.

2. **Tratamento de Dados**:
   - `strtoupper($nome)`: Converte o nome para maiúsculas. 

3. **Exibição de Dados**:
   - Utilizamos `echo` para exibir os dados. Pode-se concatenar strings com `.` ou usar variáveis dentro de strings com aspas duplas.

## Configurando e Usando PHP com XAMPP

Para executar o código PHP, precisamos de um servidor web com suporte a PHP. O XAMPP é uma solução que facilita essa configuração.

### Passos para Configurar o PHP com XAMPP

1. **Instalação do XAMPP**:
   - Baixe e instale o XAMPP do site oficial: [Apache Friends](https://www.apachefriends.org/index.html).

2. **Iniciar o Servidor**:
   - Abra o painel de controle do XAMPP e inicie o `Apache`.

3. **Colocar os Arquivos no Diretório Correto**:
   - Coloque os arquivos HTML e PHP na pasta `htdocs` dentro do diretório de instalação do XAMPP. Por exemplo:
     ```
     C:\xampp\htdocs\meu_projeto\
     ```

4. **Acessar o Formulário**:
   - Abra o navegador e digite a URL:
     ```
     http://localhost/meu_projeto/nomedoarquivo.html
     ```
   - Isso carregará o formulário HTML. Quando o formulário for enviado, os dados serão processados pelo script PHP especificado.

### Testando o Script

1. **Preencha o Formulário**:
   - Acesse o formulário via navegador, preencha os campos e clique em "Enviar".

2. **Verifique a Saída do PHP**:
   - Após enviar o formulário, o script `recebeDados.php` processará os dados e exibirá a saída formatada.

Com esses passos, você pode criar e testar formulários HTML que enviam dados para scripts PHP, processando e exibindo esses dados conforme necessário.
