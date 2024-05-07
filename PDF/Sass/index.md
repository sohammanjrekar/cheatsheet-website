# SASS

SASS es un lenguaje de markado para la generación de código [CSS](../HtmlYCss/1.-HTML-y-CSS.md)


## 1.1 Sintaxis

Todos los archivos deben tener extensión scss

Se importan archivos usando la siguiente sintaxis

``` css
@import 'ruta/al/archivo/sin/extension';
```

Las variables se declaran con signo de $ y pueden ser rgb o hexadecimal

``` css
$variable-principal: #444444;
$variable-secundaria: rgb(0,0,0);
```

Pueden definirse variables con otras variables

``` css
$buttoncolor: $variable-principal;
```

Se pueden anidar elementos para poder tener modificadores

``` css
.btn{
  color: $variable-principal;
  .btn__icon {
    font-size: $buttonfontsize:
  }
}
```

SASS tambien permite realizar operaciones matemáticas

``` css
.btn{
  color: $variable-principal;
  .btn__icon {
    font-size: $buttonfontsize * 1.5;
  }
}
```

## 1.2 Divisón de los archivos por carpetas

Es recomendable dividir cada elemento en un archivo por separados y,
estos a su vez, organizados por carpetas. Lo anterior para que el código
quede mejor organizado y sea más fácil de editar. Cada organización será
diferente y de acuerdo a los requerimientos del proyecto. He aquí un
ejemplo de organización

``` css
.
├── elements
│   ├── _buttons.scss
│   └── _fonts.scss
├── layout
│   ├── _footer.scss
│   ├── _header.scss
│   ├── _main.scss
│   └── _nav.scss
├── lib
│   ├── _mixins.scss
│   └── _variables.scss
└── main.scss

3 directories, 9 files
```

## 1.3 Mixins

Los mixins sirven para aplicar propiedades similares a diferentes
elementos, clases o id. Se definen de la siguiente manera

``` css
@mixin max-width{
  max-width: 1024px;
}
```

Una vez definido debemos especificarlo en donde queremos usarlo

``` css
.max-width{
  @include max.width;
}
```

## 1.4 Mixin con parámetros

Se pueden definir en funcion de variables

``` css
@mixin max.width($maxwidth: 800px){
  max-width: $maxwidth;
}
```

Y podemos definir los valores en funcion de otras variables como una
mejor práctica

``` css
@mixin max.width($maxwidth: $valor-de-ancho){
  max-width: $maxwidth;
}
```

Una vez definido podemos reemplazar su valor por otro que elijamos

``` css
.max-width--huge{
  @include max-width(1200px);
}
```

## 1.5 Uso del mixin

Y una vez que está declarada podemos usarla en donde nosotros querramos

``` css
section {
  @include max-width;
}
```

## 1.6 Uso de content

El content va a ser reemplazado por lo que nosotros le digamos, de esa
manera nos creará un breakpoint con el mismo selector en donde lo
pusimos

``` css
@mixin respond-to($width){
    @media only screen and (min-width: $width){
    @content
    }
}

section{
    @include respond-to(800px){
        background-color: red;
    }
}
```

## 1.7 Uso de extend

Significa que a la clase .btn--info se le va a agregar todo lo que tiene
la clase .btn

``` css
.btn--info{
  @extend .btn;
}
```

Pero al hacer esto podemos tener un montón de veces el código de la
clase .btn duplicado. Para evitar esto usamos el símbolo de % antes de
la clase a extender y en su definición

``` css
%btn{
  ...
  código
  ...
}
```

Esta linea anterior no generará código al compilarse hasta que la
extendamos en otra clase

``` css
.btn--info{
  @extend %btn;
}

.otherClass{
  @extend %btn;
}
```

Esto nos compilará en lo siguiente

``` css
.btn--info, .otherClass{
  ...
  código
  ...
}
```

Por lo que nos evitará la duplicación de bastantes lineas de código.

## 1.8 Uso de funciones

Hay muchas funciones incluidas que pueden usarse, es mejor revisar la
documentación para revisar. Entre ellas destacan lighten y darken, que
aclaran y oscurecen, respectivamente.

### 1.8.1 Definir funciones propias

Para definir una función podemos hacerlo con la siguiente sintaxis

``` css
@funcion nombreDeFuncion($variable, $otraVariable){
  @return $variable + $otraVariable;
}
```

Una vez que ya la tengamos definida podemos usarla en el código

``` css
div{
  padding: nombreDeFuncion(20px, 30px);
}
```

## 1.9 Uso de arrays

Pueden usarse arrays

``` css
$fs: (
  big: 24px,
  normal: 16px,
  small: 12px,
)
```

Y luego lo podemos usar en el código

``` css
div{
  font-size: map-get($fs, normal);
}
```

## 1.10 Listas y directiva each

Es parecido a un for each de programación normal. Es importante recordar
que el se introduce la variable en llaves y se le coloca un hash antes
para escapar la variable \#{}

``` css
@each $font in (normal, bold, italic){
  .#{$font} {font-weight: $font;}
}
```

El snippet anterior generará

``` css
.normal {
  font-weight: normal;
}

.bold {
  font-weight: bold;
}

.italic {
  font-weight: italic;
}
```

## 1.11 Ciclos FOR/each

Es parecido a un bucle. Hay que recordar escapar los valores para que no
de error

``` css
@for $i from 1 to 5{
  .class-#{$i} {
    &:before{
      content: "#{$i}";
    }
  }
}
```

## 1.12 Condicionales

Es similar a un condicional en cualquier lenguaje de programación. Se
usan dos simbolos de igual para hacer comparaciones

``` css
$background-color: black;

@if $background-color == black {
  p{
    text-color: white;
  }
}
```

## 1.13 Compilación

Deberemos tener un archivo principal que es el que se compilará, este
archivo tiene todas las importaciones. A la hora de compilar hay que
cuidar el orden de las importaciones. No debemos compilar variables sin
que esten definidas en una importacion anterior.

Si estás usando nodejs puedes pedirle que monitoree los cambios en los
archivos

``` javascript
"scripts": {
  "watch:sass": "node-sass src/main.scss dist/style.css -w='src/*.scss'"
},
```

El formato del comando anterior es node-sass, seguido del archivo de
entrada, el archivo de salida y una expresión regular que indique los
archivos a vigilar.
