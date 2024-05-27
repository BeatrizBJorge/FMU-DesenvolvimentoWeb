# Aula 10
#### Professora Silvia

# Formulário de Cadastro com HTML e PHP Usando XAMPP

Este documento explica como criar um formulário de cadastro HTML, como processar os dados enviados com PHP e como configurar o XAMPP para executar os scripts PHP.

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

        <label for="">
            Tem interesse em novos produtos?
            <input type="checkbox" name="fInfo1" value="sim">
        </label>

        <label for="">
            Quer receber nossas ofertas?
            <input type="checkbox" name="fInfo2" value="sim">            
        </label>

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

### Explicação do Código HTML

1. **Estrutura HTML**:
   - O formulário contém campos para nome, data de nascimento, endereço, gênero e interesse em produtos e ofertas.
   - O atributo `required` é usado para garantir que os campos sejam preenchidos antes do envio do formulário.
   - O atributo `method="post"` especifica que os dados do formulário serão enviados usando o método POST.
   - O atributo `action="recebeDados.php"` define o script PHP que processará os dados do formulário.

## Processamento com PHP

Agora, vamos ver o script PHP que processa os dados enviados pelo formulário.

### `recebeDados.php`

```php
<?php
// Importando arquivo de conexão
include_once "conexao.php";

try {
    $nome = $_POST['fNome'];
    $nasc = $_POST['fNascimento'];
    $endereco = $_POST['fEndereco'];
    $genero = $_POST['fGenero'];
    $novosProdutos = $_POST["fInfo1"];
    $ofertas = $_POST["fInfo2"];

    $nome = strtoupper($nome);

    // Tratamento de checkbox
    if(empty($_POST["fInfo1"])){
        $novosProdutos = "nao";
    } else {
        $novosProdutos = $_POST["fInfo1"];
    }
    
    if(empty($_POST["fInfo2"])){
        $ofertas = "nao";
    } else {
        $ofertas = $_POST["fInfo2"];
    }

    // Inserindo dados no banco
    $sql = $conectar->prepare("USE bancoEmpresa; INSERT INTO clientes (nome, nasc, endereco, genero, novosprodutos, ofertas)  
    values ('$nome', '$nasc', '$endereco', '$genero', '$novosProdutos', '$ofertas')");
    $sql->execute();
    header("location: index.html");
} catch (PDOException $e) {
    echo "Falha na gravação do registro: " . $e->getMessage();
}
?>
```

### `conexao.php`

```php
<?php
// Conexão com o banco de dados

try {
    //  PDO = PHP Data Objects 
    $conectar = new PDO(
        "mysql:host=localhost;
        port=3306;
        dbname=bancoEmpresa",
        "root", ""
    );
    // Conexão bem-sucedida
} catch (PDOException $e) {
    echo "Falha ao se conectar: " . $e->getMessage();
}
?>
```

### Explicação do Código PHP

1. **Recebendo Dados**:
   - Utilizamos a variável superglobal `$_POST` para acessar os dados enviados pelo formulário.

2. **Tratamento de Dados**:
   - Convertendo o nome para maiúsculas com `strtoupper($nome)`.
   - Verificando se as caixas de seleção estão marcadas.

3. **Inserção no Banco de Dados**:
   - Utilizando PDO para preparar e executar a inserção dos dados no banco de dados.

### Passos para Configurar o PHP com XAMPP

1. **Iniciar o Servidor**:
   - Abra o painel de controle do XAMPP e inicie o `Apache` e o `MySQL`.

2. **Colocar os Arquivos no Diretório Correto**:
   - Coloque os arquivos HTML e PHP na pasta `htdocs` dentro do diretório de instalação do XAMPP. Por exemplo:
     ```
     C:\xampp\htdocs\meu_projeto\
     ```

3. **Criar o Banco de Dados**:
   - Acesse o phpMyAdmin através do navegador: `http://localhost/phpmyadmin/`.
   - Crie um banco de dados chamado `bancoEmpresa` e a tabela `clientes` usando os comandos SQL fornecidos no código PHP.

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
   - Após enviar o formulário, o script `recebeDados.php` processará os dados e armazenará no banco de dados. Você pode verificar os dados no phpMyAdmin.
