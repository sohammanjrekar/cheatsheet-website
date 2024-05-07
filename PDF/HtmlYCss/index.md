# HTML y CSS

Hay una nueva propiedad llamada Flex que viene a solucionar muchísimos
problemas previos, desde el alineado vertical hasta el reacomodo de
elementos al redimensionar.

``` css
.container{
    display: flex;
```
## 1.1 CSS compuesto

CSS nos permite componer varios elementos de CSS para lograr diferentes
comportamientos.

Selecciona cada elemento "a" que le siga a un "div".

``` css
div + a 
{
*/ /*
}
```

Selecciona todos y cada unode los elementos "b" que le sigan a un div.

``` css
div ~ b 
{
*/ /*
}
```

Selecciona todos los B que sean hijos directos de A.

``` css
A > B
{
*/ /*
}
```

Selecciona todo lo que tenga o no tenga el atributo especificado.

``` css
A[attribute]{
*/  /*
}
```

Los atributos pueden soportar algunas expresiones regulares.

``` css
A[attribute="valor"]
{
*/ A[attribute^="val"] Que empieza con val /*
*/ A[attribute$="val"] Que termina con val /*
*/ A[attribute*="val"] Contenga val /*
}
```

Selecciona cada elemento vacio.

``` css
:empty{
*/ /*
}
```

Negación, puede usarse con clases, ids, y combinaciones
div:not(:first-child).

``` css
:not(X){
*/ /*
}
```

La posición en el orden de cada etiqueta de cada tipo.

``` css
:first-child, only-child, last-child, nth-child(A), nth-last-child(A), first-of-type, nth-of-type(A), last-of-type
```

Cada ""n" elementos, contando e incluyendo desde el segundo.

``` css
nth-of-type(6n+2) */ /*
```

Solo si el elemento es unico dentro de su padre

``` css
only-of-type */ /*
```

## 1.2 Root en CSS

Hay una nueva notación de CSS para especificar variables:

``` css
:root {
    --nombre_variable: #fafafa;
}
```

Y podemos usarla posteriormente en otro lugar usando la función var():

``` css
.clase{
    color: var(--nombre_variable)
}
```

## 1.3 ¿Cómo generar diferentes vistas de diferentes dispositivos?

Podemos generar vistas de como se ve una página HTML en diferentes
resoluciones y dispositivos en estas páginas

-   [Device shoots](https://deviceshots.com/)
-   [Mockuphone](https://mockuphone.com/)
-   [Mockerup](https://mockerup.net)

## 1.4 Validación

Podemos validar usando HTML colocando el atributo pattern y
especificando un patrón REGEX.

``` html
<input pattern="regex">
```

## 1.5 Escalado de imágenes

Para escalar imágenes usamos la propiedad CSS llamada image-rendering.

``` html
image-rendering: auto;
image-rendering: crisp-edges;
image-rendering: pixelated;
```
## Diferentes tipos de display

### Inline

Estos elementos no admiten dimensiones (width, height), solo ocupan lo que tengan en su contenido.

Si hay varios elementos en linea estaran colocados de izquierda a derecha (uno a lado de otro).

### Block

Estos elementos si admiten dimensiones pero no pueden tener otro elemento a su lado ya que abarcan todo el espacio que tengan disponible por lo tanto estaran colocados de arriba hacia abajo.

### Inline-block

Es una combinacion entre los dos anteriores, admiten dimensiones pero todavia son elementos de linea, es decir, estaran colocados uno al lado de otro.## Capturar imágen o video

Para capturar imágenes o video desde la cámara nativa del celular usamos el atributo capture, usando user.

```html
<input type="file" accept="image/*" capture="user" />
<input type="file" accept="image/*" capture="environment" />

<input type="file" accept="video/*" capture="user" />
<input type="file" accept="video/*" capture="environment" />
```## Revisar ortografía

Si queremos que el navegador revise la ortografía del input usamos el atributo spellcheck.

``` html
<input spellcheck="true"/>
```## Contenido editable

Vuelve editable el contenido del a etiqueta. 

``` html
<p contenteditable>Contenido editable</p>
```## Option group

Permite agrupar opciones dentro de la etiqueta select.

``` html
<select>
    <optgroup label="label 1">
        <option>Opcion 1</option>
    </optgroup>
</select>
```## Container query

``` css
.panel {
  container: layers-panel / inline-size;
}

.card {
  padding: 1rem;
}

@container layers-panel (min-width: 20rem) {
  .card {
    padding: 2rem;
  }
}
```## SCroll snap

Para detener el scroll en ciertos puntos

``` css
.snaps {
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  overscroll-behavior-x: contain;
}

.snap-target {
  scroll-snap-align: center;
}

.snap-force-stop {
  scroll-snap-stop: always;
}
```## Centrar con grid

Para centrar contenido con grid

``` css
.pile {
  display: grid;
  place-content: center;
}

.pile > * {
  grid-area: 1/1;
}
```## Circulos

Se pueden crear circulos en CSS con mínimo código así

``` css
.circle {
  inline-size: 25ch;
  aspect-ratio: 1;
  border-radius: 50%;
}
```## Padding-inline

define el relleno en línea lógico de inicio y final de un elemento, que asigna las propiedades de relleno físicas dependiendo del modo de escritura del elemento, direccionalidad, y orientación del texto.

``` css
button {
  padding-inline: 2ch;
  padding-block: 1ch;
}

article > p {
  text-align: start;
  margin-block: 2ch;
}

.something::before {
  inset-inline: auto 0;
}
```## Theme color

Define el tema en dispositivos modules

``` html
<meta name="theme-color" content="TU_COLOR_AQUI">
```


