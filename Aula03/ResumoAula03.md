# Aula 03 🎨
#### Professora Silvia

## *Na última aula*
Vimos a estrutura para fazer um Formulário.  

## Na Aula de Hoje
Listas e barra de navegação  

**Favicon** é um pequeno ícone que que identifica um site ou blog. Ele é exibido na aba e na tela inicial dos navegadores de internet, nos resultados mobile do Google e na seção de favoritos. 
O favicon é importante para reforçar a credibilidade de uma página, pois conecta o usuário com a respectiva marca.  
<br>
**Listas**: no HTML existem dois tipos de listas, as ordenadas e não ordenadas que são representadas pelas tags ```<ol>``` e ```<ul>```  
Lista Ordenada
  ```
  <ol>
    <li>Primeiro item</li>
    <li>Segundo item</li>
  </ol>
  ```
  resulta em:
  ```
  1. Primeiro item
  2. Segundo item
  ```
  Lista não ordenada
  ```
  <ul>
    <li> A </li>
    <li> B </li>
  </ul>
  ```
  resulta em:
- A
- B
<br>
Podemos estilizar uma lista de muitas maneiras, assim com mudar o que aparece ao lado de cada elemento com o list-style-type  
Com ele dá para colocar os números romanos, um pequeno quadrado e até mesmo imagens como
os sinalizadores da lista.
<br>

```
ol {
    list-style-type: upper-roman;
}
ul{
    list-style: circle;
}
```

<br>
Existem três maneiras de usar o CSS: <br>
- CSS externo: link stylesheet   <br>
- CSS interno: <style> </style>  <br>
- CSS inline: ul style=" " 

<br>
<br>

**Externo**: Um arquivo(.css), linkado na head através do link rel  
**Interno**: Na head do seu HTML, adicione a tag style e dentro dessa tag adicione todo seu estilo   
**Inline**: Feito dentro da propia tag HTML    
  <br>
### Bootstrap
Bootstrap é um framework para desemvolvimento HTML, CSS e JS, que fornece diversas estruturas front-end para a criação de sites e aplicações responsivas de forma simples e rápida.  
Acesse o site 'getbootstrap . com' e copie os links 'Include via CDN' para colar no head do seu html, de preferência antes dos seus links de CSS e JS.  
Depois acesse a aba 'Docs' para ler a documentação  
Procure 'Components' e depois 'Navbar', escolha a da sua preferência e copie para seu HTML e faça as alterações necessárias  
```
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
```
Agora na página 'Faça seu cadastro', procure a aba 'Forms' e depois 'Validation'
```
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
```
E assim você fez uma página responsiva para fazer um cadastro usando o bootstrap.
