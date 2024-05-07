# Tailwindcss

Tailwindcss es un framework de [CSS](../HtmlYCss/1.-HTML-y-CSS.md) que se caracteriza por no tener
elementos definidos, en lugar de eso ofrece una serie de clases a partir
de las cuales podrán irse moldeando los elementos. Esto permite que cada
desarrollador cree sus propios botones, tarjetas.
## 1.1 Instalación

Para instalarlo podemos usar npm

``` bash
npm install tailwindcss postcss-cli autoprefixer
```

Una vez instalado creamos un archivo *css/tailwind.css* con el siguiente
contenido

``` bash
@tailwind base;
@tailwind components;
@tailwind utilities;
```

Corre el siguiente comando para crear un archivo *tailwind.config.js* y
opcionalmente podemos agregarle la etiqueta --full para llenarlo con
valores por defecto

``` bash
npx tailwindcss init
npx tailwindcss init tailwind.config.full.js --full
```

## 1.2 Creación de un archivo css

Creamos un archivo *postcss.config.js* para poder procesar el archivo
*tailwind.css* en nuestro archivo final

``` javascript
module.exports = {
  plugins: [
    require('tailwindcss'),
    require('autoprefixer')
  ]
}
```

Nuestro archivo final será *style.css*. Para hacer más cómodo el proceso
podemos incorporar un build desde los scripts en *package.json*

``` json
{
   "scripts": {
   "build": "postcss css/tailwind.css -o public/css/style.css"
   }
}
```

### 1.2.1 Postcss en Nextjs

Nextjs ya realiza un procesamiento de css con Postcss, si colocamos un
archivo llamado *postcss.config.js* sobreescribirá la configuración por
defecto. Para usarlo es importante modificar el archivo **eliminando los
requires y dejándolos como cadenas de texto**.

``` javascript
module.exports = {
  plugins: [
    'tailwindcss',
    'autoprefixer'
  ]
}
```

Ahora solo importa el archivo css/tailwind.css que generamos más arriba
en donde requieras usarlo en Nextjs. Si quieres que esté disponible para
toda la app colócalo en \_app.jsx o en \_app.tsx dentro de la carpeta
pages.

``` javascript
import '../css/tailwind.css'
```

Asi mismo nextjs recomienda la siguiente configuración para el archivo
tailwind.config.js

``` javascript
module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
  },
  purge: ['./components/**/*.{js,ts,jsx,tsx}', './pages/**/*.{js,ts,jsx,tsx}'],
  theme: {
    extend: { // No creo que esta parte sea necesaria pero la dejo por propósitos de fidelidad con la fuente original
      colors: {
        'accent-1': '#333', 
      },
    },
  },
  variants: {},
  plugins: [],
}
```

## 1.3 Colores

Podemos fijar el fondo con la etiqueta. Para referencia mira los valores
del archivo de configuración en full

``` css
bg-color-200
```

Para el texto usamos

``` css
text-color-300
```

Para el borde

``` css
border-2 border-color-400
```

El numero después del primer borde implica el ancho. Para el placeholder

``` css
placeholder-color-500
```

## 1.4 Dimensiones y espacios

Las propiedades donde puede usarse son:

-   height
-   width
-   margin
-   padding

Por ejemplo para la altura

``` html
<h1 class="h-32">Hello world</h1>
```

Para el ancho

``` html
<h1 class="w-16">Hello world</h1>
```

Podemos especificar los valores en porcentajes usando fracciones

``` html
<h1 class="w-1/12">Hello world</h1>
```

Para el padding se le agrega una letra dependiendo de si es top, bottom,
left o right

``` html
<h1 class="pt-8">Hello world</h1>
<h2 class="pt-8 pl-5">Hello world</h1>
```

Lo anterior aplica también para el margin

``` html
<h1 class="mt-8 ml-5">Hello world</h1>
```

También podemos especificar top y bottom usando y (eje de las y) o para
left y right usando x (eje de las x)

``` html
<h1 class="my-8 mx-auto">Hello world</h1>
```

Lo mismo aplica también para padding

``` html
<h1 class="py-8 px-4">Hello world</h1>
```

## 1.5 Tipografia

Puedes modificar el:

-   tamaño
-   tipografia
-   negrita o cursivas

Podemos cambiar la tipografia

``` html
<h1 class="font-sans">Hello world</h1>
<h1 class="font-mono">Hello world</h1>
```

Cambiamos el tamaño

``` html
<h1 class="text-xl">Hello world</h1>
<h1 class="text-xs">Hello world</h1>
<h1 class="text-4xl">Hello world</h1>
```

Negritas o cursivas

``` html
<h1 class="font-bold">Hello world</h1>
<h1 class="font-extrabold">Hello world</h1>
<h1 class="font-hairline">Hello world</h1>
```

## 1.6 Espaciado entre lineas y letras

Podemos cambiar el espaciamiento entre letras de la siguiente manera

``` html
<h1 class="tracking-widest">Hello world</h1>
<h1 class="tracking-wide">Hello world</h1>
```

Para el espaciamiento entre lineas

``` html
<h1 class="leading-loose">Hello world</h1>
<h1 class="leading-relaxed">Hello world</h1>
<h1 class="leading-snug">Hello world</h1>
```

## 1.7 Alineado

Podemos alinear el texto usando la clase text-alineación, pudiendo
alineación tomar los valores de center, left, right, justify

``` html
<h1 class="text-right">Hello world</h1>
<h1 class="text-justify">Hello world</h1>
```

También podemos usar tachado, subrayado y sin subrayar, usando las
clases linethrough, underline, no-underline, respectivamente.

## 1.8 Mayúsculas, minúsculas y capitalize

Para lo anterior usamos las clases uppercase, capitalize y lowercase

``` html
<h1 class="uppercase">Hello world</h1>
<h1 class="capitalize">Hello world</h1>
```

## 1.9 Display

Puede tomar los siguientes valores:

-   block
-   inline-block
-   inline (donde no importa la altura, se sale de la caja)
-   flex
-   hidden

La clase la especificamos de la sigueinte manera

``` html
<div>
  <div class="block bg-gray-300">caja</div>
  <div class="block bg-gray-300">caja</div>
  <div class="block bg-gray-300">caja</div>
</div>
```

Flex es más complejo así que tendrá un capítulo aparte

### 1.9.1 Flex

Podemos especificar si usaremos row o col

``` html
<div class="flex flex-row">
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

Además también invertir el contenido con la palabra reverse

``` html
<div class="flex flex-col-reverse">
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

Justifiquemos el contenido con justify-start

``` html
<div class="flex flex-row justify-start">
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

Para llevar los elementos al final usamos justify-end

``` html
<div class="flex flex-row justify-end">
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

También está disponible la opción justify-between

``` html
<div class="flex flex-row justify-between">
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

Y para que haya el mismo espacio de cada elemento usamos justify-around

``` html
<div class="flex flex-row justify-around">
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

Para hacer que se los elementos se alineen en el eje vertical con
items-start, items-end, items-center, items-stretch, items-baseline

``` html
<div class="flex flex-row items-start justify-around">
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

El item-baseline alinea los elementos acorde a un texto

``` html
<div class="flex flex-row items-baseline justify-around">
  <div>Texto con el cual se alinean</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2">caja</div>
</div>
```

### 1.9.2 Orden

Podemos especificar un orden usando la clase order-n

``` html
<div class="flex flex-row items-start justify-around">
  <div class="block bg-gray-300 px-4 py-2 m-2 order-1">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2 order-3">caja</div>
  <div class="block bg-gray-300 px-4 py-2 m-2 order-2">caja</div>
</div>
```

## 1.10 Grid

Crear un grid es bastante sencillo, simplemente creamos una etiqueta con
clase flex

``` html
<div class="flex"></div>
```

Teniendo de base el elemento del punto anterior insertaremos una
etiqueta por cada columna que queramos tener de la siguiente manera

``` html
<div class="flex">
    <div
    class="w-1/2
    p-4 bg-blue-800"
    ></div>
    <div
    class="w-1/2
    p-4 bg-blue-600"
    ></div>
</div>
```

Si queremos que el grid sea responsivo con columnas de anchura fija
usamos la clase flex-wrap. Y con el uso de las pseudo-classes
responsivas de sm, md, lg y xl logramos el numero de columnas deseada
por tamaño de pantalla.

``` html
<div class="flex flex-wrap m-4">
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-500 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-700 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-500 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-700 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-500 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-700 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-500 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-700 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-500 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-700 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-500 mb-1"
  ></div>
  <div
    class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6
    p-4 bg-green-700 mb-1"
  ></div>
</div>
```

## 1.11 Creación de utilerias

Podemos usar la directiva variantes en nuestro archivo talwind.css

``` css
@variants hover{
  .zoom {
    transform: scale(2);
  }
}
```

La cual usaremos de la siguiente manera

``` html
<div class="hover:zoom caja"></div>
```

También podemos usar los breakpoints para añadir dinamismo

``` css
@responsive {
  .rotate-45 {
    transform: rotate(45dg);
  }
}
```

Y en el código html

``` html
<div class="sm:rotate-45 caja"></div>
```

## 1.12 Variantes y pseudoclases

Las variantes más comunes son:

-   responsive
-   hover
-   focus
-   disabled

### 1.12.1 pseudoclases

Es una palabra clave quie se añade a la clase:

-   responsive(sm, md, lg, xl)
-   hover(hover)
-   focus(focus)
-   disabled(disabled)

La lista completa puede verse en la documentación.

Para agregar las variantes debemos meterlas en el archivo de
configuración

``` html
<button class="disabled:opacity-25 bg-blue-500">
  Submit
</button>
```

Agregamos las variantes al archivo *tailwind.config.js*

``` javascript
variants: {
    opacity: ['responsive', 'hover', 'focus', 'disabled'],
  },
```

De la manera anterior, nosotros podemos agregar la variante y tener los
efectos

``` html
<button disabled class="disabled:opacity-75 bg-blue-500">
  Submit
</button>
```

## 1.13 @apply

Usamos apply para especificar directivas de tailwind que queremos
aplicar a nuestros componentes

``` css
.btn {
  @apply font-bold py-2 px-4 rounded;
}
.btn-blue {
  @apply bg-blue-500 text-white;
}
.btn-blue:hover {
  @apply bg-blue-700;
}
```

**Importante** @apply no puede ser usado para pseudoclases como active,
hover, focus, etc.

## 1.14 Optimización con purgecss y cssnano

El archivo que se crea con PostCSS tiene todas las directivas, aunque no
se usen y, además, no está minimizado. Por esta razón su tamaño puede
ser cercano a los 2 mb, este tamaño es demasiado grande para usarse en
producción. Para solucionar el problema de las directivas sin usar
podemos procesar nuestro archivo con purgecss y para minimizarlo está
cssnano. Los instalaremos usando node de la siguiente manera

``` bash
npm install -D @fullhuman/postcss-purgecss
npm install cssnano
```

Una vez instaladas hay que agregarlas al archivo de configuración de
postcss, *postcss.config.js*, para usarlas

``` javascript
const purgecss = require("@fullhuman/postcss-purgecss");

module.exports = {
  plugins: [
    require("tailwindcss"),
    require("autoprefixer"),
    purgecss({
      content: ["./**/*.html"],
      defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
    }),
    require("cssnano")({
      preset: "default",
    }),
  ],
};
```

Una vez corramos el build del archivo css obtendremos un archivo de un
tamaño mucho menor, cerca de 20 veces menor, el cual es apto para su uso
en producción.
