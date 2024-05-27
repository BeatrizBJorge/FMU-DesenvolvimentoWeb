# Aula 07
#### Professora Silvia

# Validação de CEP e Email com HTML e JavaScript

Este documento explica como criar um formulário HTML com campos para CEP e Email, e como usar JavaScript para validar e formatar esses campos. 

## Estrutura HTML

Vamos começar com a estrutura básica do HTML que inclui dois campos de entrada: um para o CEP e outro para o Email.

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event onblur para CEP e Email</title>
</head>
<body>

<label for="cep">CEP:</label>
<input type="text" id="cep" name="cep" placeholder="Digite o CEP" onblur="validarCEP(this.value)">

<label for="email">Email:</label>
<input type="text" id="email" name="email" placeholder="Digite o email" onblur="aplicarMascaraEmail(this)">

<script>
  function validarCEP(cep) {
    // Aqui você pode adicionar a lógica de validação do CEP
    // Por exemplo, verificar se o CEP possui um formato válido

    // Neste exemplo, apenas exibiremos uma mensagem de alerta
    alert("Você digitou o CEP: " + cep);
  }

  function aplicarMascaraEmail(input) {
    // Verifica se o campo está vazio
    if (input.value.trim() === '') {
      alert("Por favor, digite um email válido.");
      return;
    }

    // Verifica se já tem uma máscara aplicada
    if (input.value.endsWith("@dominio.com")) {
      return;
    }

    // Aplica a máscara ao email
    input.value += "@dominio.com";
  }
</script>

</body>
</html>
```

### Explicação do Código HTML e JavaScript

1. **Estrutura HTML**:
   - O formulário contém dois campos de entrada: um para o CEP e outro para o Email.
   - Atributo `onblur` é utilizado para chamar funções JavaScript quando o campo perde o foco.

2. **Função `validarCEP(cep)`**:
   - Esta função é chamada quando o campo CEP perde o foco.
   - Exibe um alerta com o valor do CEP digitado. Aqui você pode adicionar validação específica do CEP.

3. **Função `aplicarMascaraEmail(input)`**:
   - Verifica se o campo email está vazio e exibe um alerta caso esteja.
   - Aplica uma máscara ao email se ele não terminar com "@dominio.com".

## JavaScript para Formatação e Validação

Agora, vamos adicionar funções mais sofisticadas para formatar e validar o CEP e o Email.

```javascript
// Função para formatar o CEP
function formataCep() {
   // Obtém o elemento de input do CEP
   const input = document.querySelector('#cep');
   
   // Adiciona um listener para o evento 'keypress'
   input.addEventListener('keypress', () => {
      let inputLength = input.value.length;

      // Adiciona um hífen após 5 caracteres
      if (inputLength == 5) {
          input.value += '-';
      }
   });
}

// Função para validar o Email
function validaEmail() {
   // Obtém o elemento de input do Email
   const input = document.querySelector('#email');
   
   // Adiciona um listener para o evento 'blur'
   input.addEventListener('blur', () => {
      let usuario = input.value.substring(0, input.value.indexOf("@"));
      let dominio = input.value.substring(input.value.indexOf("@") + 1, input.value.length);

      // Verifica várias condições para validar o Email
      if ((usuario.length >= 1) &&
         (dominio.length >= 3) &&
         (usuario.search("@") == -1) &&
         (dominio.search("@") == -1) &&
         (usuario.search(" ") == -1) &&
         (dominio.search(" ") == -1) &&
         (dominio.search(".") != -1) &&
         (dominio.indexOf(".") >= 1) &&
         (dominio.lastIndexOf(".") < dominio.length - 1)) {
         // Email válido
      } else {
         // Email inválido
         alert("E-mail inválido");
         input.value = "";
         input.focus();
      }
   });
}

// Inicializa as funções ao carregar a página
window.onload = function() {
   formataCep();
   validaEmail();
};
```

### Explicação do Código JavaScript

1. **Função `formataCep()`**:
   - Seleciona o campo de input do CEP e adiciona um evento `keypress` para formatar o valor enquanto o usuário digita.
   - Adiciona um hífen após o quinto caractere para formatar o CEP no formato "XXXXX-XXX".

2. **Função `validaEmail()`**:
   - Seleciona o campo de input do Email e adiciona um evento `blur` para validar o valor quando o campo perde o foco.
   - Verifica várias condições para garantir que o Email seja válido (e.g., presença de "@" e ".", ausência de espaços, etc.).
   - Se o Email for inválido, exibe um alerta, limpa o campo e move o foco de volta para o campo de input.

3. **Inicialização**:
   - As funções `formataCep()` e `validaEmail()` são chamadas quando a página é carregada, garantindo que os event listeners sejam configurados.

## Conclusão

Com estas funções em JavaScript, você pode validar e formatar automaticamente os campos de CEP e Email em um formulário HTML. Este exemplo demonstra a aplicação prática de eventos e manipulação de DOM em JavaScript para criar uma experiência de usuário mais robusta e amigável.  

Na próxima aula, em 23 de Abril, será as apresentações do front-end.
