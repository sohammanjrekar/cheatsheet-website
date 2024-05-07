# CSS Grid Layout



## 1.1 Conceptos que forman parte del diseño en CSS

### 1.1.1 Flujo normal del documento: Display block, inline e inline-block

**display** : La propiedad que define el tipo de visualización de un
elemento HTML.

Para comprender el funcionamiento de la propiedad display y su elemento
inline-block se debe conocer y entender la diferencia entre los
elementos **block e inline:**:

``` css
display:  inline-block;
```

Elementos inline:

-   Se posicional horizontalmente, al lado de otros elementos
-   La anchura se define con base en el contenido
-   La altura se define con base en el contenido
-   Solo puede contener elementos de tipo inline
-   No soporta anchura y altura fijas
-   Por default aplica a los tags: a, span, code, iframe, label, button,
    input

Elementos block:

-   Forman un bloque y se posicional de forma vertical con un salto de
    linea
-   La anchura es la máxima que pueda tomar dentro del elemento padre
-   La altura cambia con base al contenido que posea
-   Puede contener elementos inline y block
-   Se le puede fijar una anchura y altura fijas con las propiedades
    width y height, respectivamente.
-   Por default aplica a los tags: p, h1-6, div, ul, li, ol y form.

Existe relación entre

``` css
display: block; 
display: grid;
display: flex;
/* grid y flex, tienen la propiedad block de manera implicita
es decir, por lo que remplazar la propiedad display: block-grid por display: grid
no afecta el acomodo de los elementos */
```

``` css
display: inline;
display: inline-grid;
display: inline-flex;
/* La propiedad inline es necesaria, pues de otra forma 
se comportaria como un block-grid o block-flex */
```

En la propiedad **display : inline-grid** consideramos la
parte \**\`\`grid\`\` como el comportamiento interno del contenedor,
mientras que \`\`inline\`\` es el comportamiento externo del contenedor
ante todo el HTML*\*. De la misma manera, con `inline-flex` y también
con `grid` y `flex` (que en realidad son block-grid y block-flex).

-   Primer valor: Comportamiento externo de un contenedor.
-   Segundo valor: Comportamiento interno de un contenedor.

### 1.1.2 Contextos de formato: Formato de Contexto de Bloque (BFC)

BFC: Block Formatting Context. Es un mini layout dentro de otro layout.
O sea es el layout interno de un elemento, que se comporta de manera
independiente a como se comporta a su layout contenedor. Un BFC puede
utilizar **position: absolute o fixed.**. En el caso de **display:
inline-block, table-cell o table-caption.**

La propiedad float, transforma a los elementos en cajas flotantes que
pueden posicionarse a izquierda o derecha. Si no se especifica se
posicionarán debajo, ya que son etiquetas div, con propiedad **display:
block** de manera predeterminada.

La propiedad overflow: auto rellena o crear un BFC invisible para
completar el espacio restante y alinear el contenido, respecto al
elemento

#### 1.1.2.1 ¿Tiene relación Flexbox y CSS Grind con BFC?

Flexbox crea algo similar a un BTC, llamado como **contexto de formato
flexible,** que quiere decir que este elemento es parte de un diseño
flexible.

Mientras que en CSS Grid, se llama **contexto de formato de
cuadricula,** indica que el diseño esta participando en un diseño de
cuadricula.

**display: inline-block;** Da un BFC en una caja **en linea.**

**display: flow-root;** Da un BFC en una caja de **bloque.**

Con la propiedad\***display***se puede controlar el tipo de dato que se
genera. Esto se debe por que todo lo que se observa en la web
son***cuadros,***es decir***cajas.**

### 1.1.3 Posicionamiento + Dinámica: ¿Cómo se verá?

La propiedad **position** declara la posición del elemento en el
documento, y su posición final del elemento se la asigna por medio de
las propiedades **top, left, righ, bottom**.

#### 1.1.3.1 Contexto de apilamiento

El contexto de apilamiento es la conceptualización tridimensional de los
elementos HTML a lo largo de un eje-Z imaginario relativo al usuario que
se asume está de cara al viewport o página web. Los elementos HTML
ocupan este espacio por orden de prioridad basado en sus atributos.

Un contexto de apilamiento es formado, en cualquier lugar del documento,
por cualquier elemento que:

-   Sea el elemento raiz (HTML),
-   Tenga posición (absoluta o relativa) con un valor z-index distinto
    de “auto”,
-   Un elemento flex con un valor z-index distinto de “auto”, que sea el
    elemento padre display: flex\|inline-flex,
-   Sean elementos con un valor
    [opacity](https://developer.mozilla.org/es/docs/Web/CSS/opacity)
    menor de 1.
-   Elementos con un valor
    [transform](https://developer.mozilla.org/es/docs/Web/CSS/transform)
    distinto de “none”,
-   Elementos con un valor
    [mix-blend-mode](https://developer.mozilla.org/es/docs/Web/CSS/mix-blend-mode)
    distinto de “normal”,
-   Elementos con un valor
    [filter](https://developer.mozilla.org/es/docs/Web/CSS/filter)\`\`
    distinto de “none”,
-   Elementos con un valor
    [perspective](https://developer.mozilla.org/es/docs/Web/CSS/perspective)
    distinto de “none”,
-   Elementos con un valor
    [isolation](https://developer.mozilla.org/es/docs/Web/CSS/isolation)
    igual a “isolate”,
-   Con la propiedad `position: fixed`.
-   Especifican cualquier atributo superior en [will-change
    (en-US)](https://developer.mozilla.org/en-US/docs/Web/CSS/will-change)
    incluso si no especificas valores para estos atributos directamente.
-   Elementos con un valor
    [webkit-overflow-scrolling](https://developer.mozilla.org/es/docs/Web/CSS/-webkit-overflow-scrolling)
    igual a “touch”

Todos los z-index, respetarán la posición z-index del contenedor padre,
de manera que siempre sea menor.

## 1.2 ¿Flexbox o CSS Grid?

### 1.2.1 Diferencias entre Flexbox y CSS Grid

#### 1.2.1.1 ¿Qué es flexbox?

Es un método que ayuda a distribuir el espacio entre los elementos de
una interfaz para mejorar las capacidades de alineación. Su
característica principal es que es **unidimensional** con alineamiento
únicamente horizontal o vertical.

#### 1.2.1.2 ¿Qué es CSS Grid ?

Es un sistema de diseño que permite al auto alinear elementos en
columnas y filas. Es un sistema **bidimensional.**

#### 1.2.1.3 Propiedades mas importantes de Flexbox

Las propiedades más importantes para el container:

-   display
-   flex-direction
-   flex-wrap
-   flex-flow
-   justify-content
-   align-items
-   align-content

Para los items:

-   order
-   flex-grow
-   flex-shrink
-   flex-basis
-   flex
-   align-self

#### 1.2.1.4 Propiedades mas importantes de CSS Grid

Las propiedades más importantes para el container:

-   display
-   grid-template
-   gap
-   justify-items
-   align-items
-   justify-content
-   align-content

Para los items:

-   grid-column
-   grid-row
-   grid-area
-   justify-self
-   align-self

### 1.2.2 Columnas

Dentro de la clase container especificamos la propiedad
*grid-template-columns*, donde especificamos el ancho de cada columna,
los grid items excedentes irán acomodandose. Podemos combinar diferentes
unidades.

``` css
.container {
    display: grid;
    grid-template-columns: 25% 200px 25%;

}
```

### 1.2.3 Filas

Dentro de la clase container especificamos la propiedad
*grid-template-rows*, donde especificamos la altura de cada fila. Las
filas excedentes no se verán afectadas por los tamaños que
especifiquemos

``` css
.container {
    display: grid;
    grid-template-columns: 25% 200px 25%;
    grid-template-rows: 300px 300px;

}
```

### 1.2.4 Grid template

Para declarar un template donde especifiquemos ambos podemos separarlos
en css usaremos la siguiente sintaxis filas/columnas.

``` css
.container{
    display: grid;
    grid-template: 10px 10px 10px / 20px 50% 10px; /*1fr 1fr 1fr*/
}
```

### 1.2.5 Anidación de grids

Los grids pueden anidarse especificando nuevamente una atributo *grid*,
con otro de *grid-template*

``` css
.sub-grid {
    display: grid;
    grid-template-columns: 50% 50%;
    grid-template-rows: 100px 100px;

}
```

### 1.2.6 Espaciado entre filas y columnas

Podemos especificar los de columnas así *grid-column-gap*

``` css
.container{
    ...
    grid-column-gap: 30px;
    ...
}
```

En el caso de filas usamos la propiedad *grid-column-row*

``` css
.container{
    ...
    grid-column-row: 50px;
    ...
}
```

O podemos especificar para ambos con la propiedad grid-gap usando la
sintaxis filas columnas

``` css
.container{
    ...
    grid-gap: 10px 100px;
    ...
}
```

### 1.2.7 Repetidores areas

Las unidades Fr representan fracciones, en este caso son 0.33, puede
sustituirse usando la función repeat(3, 1fr). La función repeat también
acepta funciones para especificar el minimo y maximo.

``` css
.container {
    display: grid;
    grid-template: repeat(3, 1fr)/ repeat(2, 1fr);
}
```

También podemos especificar un mínimo y un máximo

``` css
.container {
    display: grid;
    grid-template: repeat(3, 1fr)/ repeat(3, minmax(200px, 1fr));
}
```

Podemos definiar las areas de contenido

``` css
.container {
    display: grid;
    grid-template: repeat(3, 1fr)/ repeat(2, 1fr);
    grid-template-areas: "header header"  
                         "left contenido" 
                         "footer footer";
}
```

Como header se repite solamente tendrá un solo espacio

### 1.2.8 Tamaño de las columnas

Los hijos del grid tienen los siguientes atributos para "unir" columnas
donde especificaremos el inicio y el final. Los valores corresponden *a
las lineas*

``` css
.item:nth-of-type(2) {
    grid-column-start: 1;
    grid-column-end: 3;
}
```

Lo anterior es reemplazable por la sintaxis más corta

``` css
.item:nth-of-type(2) {
    grid-column: 1/3;
}
```

También puede especificar que use todas las columnas con indices
negativos

``` css
.item:nth-of-type(3) {
    grid-column: 1 / -1;
}
```

O especificar un ancho determinado de columnas con

``` css
.item:nth-of-type(4) {
    grid-column: 1 / span 2;
}
```

### 1.2.9 Definiendo tamaño de filas

Lo anterior también aplica para las filas, solo se debe usar *grid-row*

``` css
.item:nth-of-type(2) {
    grid-row: 1/span 2;
}
```

### 1.2.10 Definiendo nombre de lineas

También es posible asignarle nombre a las lineas separadoras de esta
manera

``` css
.container{
    display: grid;
    grid-template-columns: 
                    [inicio] 1fr
                    [linea2] 1fr 
                    [linea3] 1fr 
                    [destacado-end] 1fr 
                    [linea5] 1fr 
                    [destacado2-end] 1fr 
                    [linea7] 1fr [final];

    grid-template-rows: 
                    [inicio] 200px 
                    [inicio2] 200px [final];
}
```

Para luego referirte a ellas de manera específica en cada hijo

``` css
.item: nth-of-type(3) {
    grid-row: inicio / inicio2;
    grid-column: linea2 / destacado-end;
}
```

El nombre de las lineas puede especificarse colocandolo entre corchetes

``` css
.container{
    display: grid;
    grid-template: [inicio] 1fr [linea2] 1fr [linea2] 1fr [linea2] 1fr/ 1fr 1fr 1fr 1fr;    
}
```

Para que el acomodo especificado sea por columna, en lugar de por fila
(el valor por default)

``` css
.container{
    display: grid;
    grid-template: [inicio] 1fr [linea2] 1fr [linea2] 1fr [linea2] 1fr/ 1fr 1fr 1fr 1fr; 
    grid-auto-flow: column;   
}
```

Para especificar los filas sobrantes y asignarles una altura
predeterminada

``` css
.container{
    ...
    grid-auto-rows: 200px 200px;
    ...
}
```

Para especificar los columnas sobrantes y asignarles un ancho
predeterminado

``` css
.container{
    ...
    grid-columnas-rows: 50px 100px;
    ...
}
```

### 1.2.11 Alineado de contenido

Podemos usar justify-items para que el contenido se alinee como queramos
de manera horizontal. Esta propiedad puede tomar los valores de stretch,
start, end y center.

``` css
.container{
    ...
    justify-items: start;
    ...
}
```

Por otro lado justify-items alinea el contenido de manera vertical. Esta
propiedad puede tomar los valores de stretch, start, end y center.

``` css
.container{
    ...
    justify-items: start;
    ...
}
```

### 1.2.12 Alineación individual

Para aplicar los estilos anteriores a elementos individuales usamos
align-self y justify-self individualmente.

``` css
.item: nth-of-type(5) {
    align-self: start;
    justify-self: start;
}
```

### 1.2.13 Alineación de la grilla

Para esto usaremos justify-content y align-content, los cuales puedem
adoptar los valores center, end, space-around, space-between,
space-events.

``` css
.container{
    ...
    justify-content: start;
    ...
}
```

### 1.2.14 Esquemas más complejos

También es posible asignar esquemas más complejos donde una columna
abarque 3 espacios y sea ocupada por un elementoA, la segunda columna
sea ocupada en un 66% por un elemento B y en un 33% por E y la tercera
columna tenga tres elementos diferentes

``` css
.container{
    grid-template-areas: 'columnA columnB columnC'
                         'columnA columnB columnD'
                         'columnA columnE columnF'    
}
```

Y más tarde especificamos las clases de cada uno de estos

``` css
.columnA{
    ..    
}
.columnB{
    ..
}
```

### 1.2.15 ¿Es posible trabajar con Flexbox y CSS Grid al mismo tiempo?

Se pueden combinar. Generalmente se usa grid para el plano general,
mientras que flex para regiones más pequeñas o que contengan el plano
general.

### 1.2.16 Cuando usar Flexbox y cuando usar CSS Grind?

Se prefiere flexbox para los componentes de una aplicación y diseños de
pequeña escala.

Mientras que CSS Grid es ideal para diseños de mayor escala.

## 1.3 Modern Layouts con CSS Grid

### 1.3.1 ¿Qué son los Modern CSS Layouts ?

#### 1.3.1.1 ¿Qué es un Layout?

Layout significa diseño. Pero se refiere al acomodo de las cajas en la
pantalla

#### 1.3.1.2 Caracteristicas de la web en el 2010:

-   Progresivamente mejorado: Con una base sobre la cual se van
    añadiendo características. La base sólida la constituyen las capas
    de CSS, HTML y JS.
-   Adaptable: Que responda a la variedad de navegadores, dispositivos,
    resolución de pantalla, tamaño de fuente y tecnologías de
    asistencia.
-   Modular: Que el CSS se pueda dividir en fragmentos que funcionan de
    forma independiente para crear componentes reusables.
-   Tipográficamente ricos: Que permitan una variedad de fuentes

### 1.3.2 Design System y detalles visuales a tener en cuenta

#### 1.3.2.1 ¿Qué es un Design System?

Es una colección de componentes reutilizables que siguen unos estándares
claros.

Muchas empresas como Uber, Airbnb e IBM, han cambiado la forma de
diseñar productos ya que incorporar sus propios sistemas de disenño
únicos.

#### 1.3.2.2 ¿Quienes crean un Design System?

El equipo de producto: programadores, ingenieros, diseñadores, gerentes
de producto, equipo C-suite, etc.

### 1.3.3 Tendencias de diseño UI/UX: Fase de inspiración y creatividad

Principios de diseno rápidos y utilices:

-   Jerarquía: Es mejor presentar la información por medio de iconos,
    colores.
-   Contraste: El contraste es importante es como una indicación para el
    usuario.
-   Proximidad: Que la información se encuentre visible.
-   Balance
-   Responsive design
-   Ilustraciones animadas
-   Garantizar performance
-   Micro interaciones
-   Realidad aumentada y realidad virtual
-   Neo morfismo
-   Asymmetrical layouts
-   Storytelling

### 1.3.4 Wireframes y comunicación visual simple, intuitiva y atractiva

Antes de realizar cualquier diseño debemos saber que queremos hacer, que
queremos lograr.

## 1.4 El futuro de CSS Grid

### 1.4.1 CSS Subgrid

Subgrid —\> Heredar mismo tamaño y numero de tracks de una cuadricula
principal. Se debe considerar que solo tiene compatibilidad con firefox.

### 1.4.2 CSS feature queries: @supports

**feature queries** es una consulta de características.

Con **@supports**, podemos escribir una pequeña prueba en el CSS para
ver si una característica, propiedad o valor es compatible con el
navegador y decidir si aplicar un bloque.

Es un modelo de rejillas donde declaramos un número de filas y columnas
para organizar nuestro contenido

CSS en el navegador se interpreta como cajas dentro de las cuales van
nuestro contenido, pero al final del día son cajas dentro de cajas que
están alineadas y organizadas como nosotros queremos.

Gracias a CSS Grid podemos distribuir el contenido a nuestra
disposición. Conceptos claves

-   Grid container: Elemento padre donde se asigna un {display: grid;}
-   Grid Item: Hijos *directos* de una grid container.
-   Grid Line: es una grilla (lineas divisorias horizontales y
    verticales) tambien se incluye el contorno del grid
-   Grid track: espacio entre dos lineas adyacentes; filas y columnas
-   Grid cell: Espacio en dos filas adyacentes y 2 columnas adyacentes,
    mejor conocidos como celdas
-   Grid area: Espacio que rodeado por 4 grid lines arbitrarias que
    nosotros decidimos
