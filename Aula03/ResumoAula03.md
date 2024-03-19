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
- Lista Ordenada
  ```html
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
  - Lista não ordenada
  ```html
  <ul>
    <li> A </li>
    <li> B </li>
  </ul>
  ```
  resulta em:
- A
- B
<br>
Podemos estilizar uma lista de muitas maneiras, assim com mudar o que aparece ao lado de cada elemento com o *list-style-type*
Com ele dá para colocar os números romanos, um pequeno quadrado e até mesmo imagens como
os sinalizadores da lista.
```css
ol {
    list-style-type: upper-roman;
}
ul{
    list-style: circle;
}
```
Existem três maneiras de usar o CSS:  
- CSS externo: link stylesheet
- CSS interno: <style> </style>
- CSS inline: <ul style=" ">
<br>
**Externo**: Um arquivo(.css), linkado na head através do link rel 
**Interno**: Na head do seu HTML, adicione a tag style e dentro dessa tag adicione todo seu estilo
**Inline**: Feito dentro da propia tag HTML
  <br>
