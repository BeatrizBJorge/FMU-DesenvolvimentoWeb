# Aula 06 🖥️
#### Professora Silvia

## Fundamentos Básicos de JavaScript

JavaScript é uma linguagem de programação amplamente utilizada para adicionar interatividade a páginas web. Neste exemplo, vamos explorar alguns dos conceitos básicos de JavaScript utilizando um script que verifica se um número é par ou ímpar e se é positivo ou negativo.

### Código HTML e JavaScript Explicado

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificar Número Par ou Ímpar</title>
</head>
<body>

<script>
  let valor;
  valor = parseInt(window.prompt("Digite um número"));

  if (valor % 2 == 0) { // verifica se é par
    if (valor >= 0) { // verifica se é positivo
      document.write("O número é par e positivo");
    } else {
      document.write("O número é par e negativo");
    }
  } else { // caso não seja par
    if (valor >= 0) { // verifica se é positivo
      document.write("O número é ímpar e positivo");
    } else {
      document.write("O número é ímpar e negativo");
    }
  }
</script>

</body>
</html>
```
### Script em JavaScript
O código JavaScript é incluído dentro da tag <script> dentro do <body>.

### Declaração de Variável
```
let valor;
```  
A palavra-chave let é usada para declarar uma variável chamada valor.

### Entrada do Usuário
```
valor = parseInt(window.prompt("Digite um número"));
```  
**window.prompt("Digite um número"):**   Exibe uma caixa de diálogo para o usuário digitar um número.  
**parseInt():**   Converte a entrada do usuário de string para número inteiro.  

### Estrutura de Controle Condicional
O código utiliza if e else para verificar se o número é par ou ímpar e se é positivo ou negativo.

### Verificação de Paridade
```
if (valor % 2 == 0) {
```  
**valor % 2 == 0:** Verifica se o resto da divisão de valor por 2 é zero, o que significa que o número é par.

### Verificação de Positividade
```
if (valor >= 0) {
```  
**valor >= 0:** Verifica se o número é maior ou igual a zero, indicando que é positivo.

### Exibição do Resultado
```
document.write("O número é par e positivo");
```  
**document.write():** Escreve uma string diretamente no documento HTML.
