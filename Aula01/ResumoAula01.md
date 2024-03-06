# Aula 01 📓
#### Professora Silvia

## Primeiros Passos
Após baixar o Visual Studio Code, crie uma pasta chamada de **Aula01**. 
<br><br>
Depois crie a pasta **assets** para as folhas de estilo, imagens e javascripts.
E dentro desta pasta crie a pasta do **CSS**, **IMAGES** e **JS**.
<br><br>
## Criando um arquivo .html
Agora crie um arquivo chamado *index.html*, e digite ´!´ e depois tecle enter.  
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
```
o código acima é a estrutura básica do HTML.  (warning: this is not magic)
### o que cada linha significa?
```<!DOCTYPE html>``` diz ao navegador que é um arquivo HTML <br>
```<html lang="en">``` qual o idioma usado na página <br>
```<head>``` informaçoes importantes para a página <br>
```<meta>``` metadados usados na página <br>
```<title>``` Título da página <br>
```<body>``` Conteúdo da página <br>
### Conceitos iniciais
Altere a *language* para pt-br.  
No *body* crie uma tag *h1*  
```<h1> Título da página </h1>```   
e uma tag *p*   
```html
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ducimus inventore vel ipsum error fugit iste molestias incidunt dignissimos. 
    Illo autem ipsam itaque impedit maxime. Iste accusantium rem incidunt quam deleniti.
</p>
```
A tag *h1* é usada para titulos, e essa tag continua do *h2* até o *h6*, sendo *h1* a maior e *h6* o menor.  
A tag *p* é usada para demarcar um parágrafo, e o *lorem* é apenas uma amostra de texto.
### Imagens
Para adicionar uma imagem no seu HTML use a tag *img*  
```<img src="imagem.jpg" alt="Minha Figura">```  
*src* - URL para acessar a imagem  
*alt* - legenda da imagem  
Neste projeto as imgens devem ficar na pasta *IMAGES*
### HyperLinks
Para adicionar Links no seu HTML use a tag *a*  
```<a href="https://">SEU LINK</a>```  
*href* - URL do hyperlink  
Em uma tag *a* podemos usar o atributo *target=" "*, que serve para como vamos abrir a URL. Quando não usamos *target* o hyperlink abre na mesma guia.(target="_self")  
_blank - abre em uma nova guia  
## CSS - Folha de estilo
Na pasta /CSS, crie um arquivo com nome de *style.css* e referencie o novo arquivo no html  
```<link rel="stylesheet" href="../assets/CSS/style.css">```  
Em css temos, os *seletores*, as *declarações*, as *propiedades* e seus *valores*...
```css
h1 {
	color: blue;
	font-size: 60px;
	background: gray;
}
```
Seletor - tag, id ou class  
Declarações - As chaves e tudo dentro delas  
Propiedades - as coisas a serem alteradas  
Valores - os novos valores das propiedades alteradas  
<br>
### Seletores
Os seletores conectam um elemento HTML com o CSS, podendo ser a **tag** *html* ```<p>``` que seleciona no *css* ```p```  
um **ID** (que deve ser um valor único) HTML: ```<p id="my-id">``` e no CSS: ```#my-id```  
uma **Classe** (que pose se repetir várias vezes) HTML: ```<p class="my-class">``` e no CSS: ```.my-class```  
