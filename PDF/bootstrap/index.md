# Bootstrap

Bootstrap es un Framework CSS Frontend para agilizar el desarrollo de
las UI.



## 1.1 La grilla de Bootstrap

Debemos partir de una etiqueta div con clase "container":

``` html
<div class="container">
</div>
```

Cada clase container tendrá sus filas dentro de un div con clase "row":

``` html
<div class="container">
  <div class="row"></div>
</div>
```

Dentro de cada etiqueta con clase row habrá 12 columnas, las cuales se
deben especificar de la siguiente manera: En el el layout siguiente, en
tamaño grande las etiquetas div serán de 12 ancho de columna, en un
tamaño mediano de 6 y en un tamaño grande de 1. Una clase "col" sin
numeros tomará todo el ancho disponible. Si ponemos varias "col" el
ancho se dividirá equitativamente:

``` html
<div class="container">
  <div class="row">

  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>
  <div class="col-lg-1 col-md-6 col-sm-12">col</div>

  </div>
</div>
```

## 1.2 scrollspy

Bootstrap nos permite saber la ubicación actual del menú donde nos
encontramos a traves de la herramienta scroolspy. Para que esto sea
posible debemos hacer lo siguiente: Ir a la documentación como apoyo
para implementación:
<https://getbootstrap.com/docs/4.1/components/scrollspy/> Asignarle al
body los atributos de:

``` html
data-spy="scroll" data-target="#navbar"
```

Asignarle al div que contiene las etiquetas \<a\> de nagevacion la id de
“navbar”:

``` html
<div class="collapse navbar-collapse" id="navbar">
```

Debemos asignar a los atributos “href” del menú de navegación las id que
le colocamos a las secciones anteriormente. Podemos opcionalmente
agregar la clase a la etiqueta \<nav\> de “.sticky-top” para que la
barra de navegación nos acompañe. Es recomendable remover la clase
“active” al item de navegación de inicio. Debemos asignar una clase
adicional la etiqueta de body, la cual es “.data-offset=\[numero\]” y
como número, debemos asignarle el alto de la barra de navegación. De
esta manera optimizamos el Scrollspy.
