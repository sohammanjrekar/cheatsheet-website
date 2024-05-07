# Web performance

El 53% de los usuarios dejará un sitio móvil si tarda más de 3 segundos
en cargar


## 1.1 RAIL MODE

Modelo centrado en el usuario para medir la experiencia de usuario.

Response: Dicta los tiempos ideales de respuesta a las acciones en la
página web. Animation: La duración ideal de las animaciones del sitio
web. Idle: Aprovechamiento de los tiempos muertos en el navegador Load:
El tiempo que tarda en cargar la página por completo

El tiempo estándar es de *entre 0 y 300ms* Entre 300 y 1000ms es
aceptable Entre 1000ms y 2000ms el usuario percibe un problema

## 1.2 Medición

Para medir se utilizarán los Chromedev tools o equivalentes Otra
herramienta bastante útil es Lighthouse, que también se encarga de
optimizar el SEO, PWA.

## 1.3 Métricas

LCP Largest Contentful Paint FID First input Delay CLS Cumulative Layour
Shift

### 1.3.1 LCP

Trata sobre la carga. El tiempo que tarda en pintar el *mayor elemento
visible* en la ventana

-   Bien de 0 a 2.5s
-   Regular de 2.5 a 4s
-   Mala de 4s en adelante

### 1.3.2 FID

Es sobre la interactividad. Demora del primer input, incluye botones.
Mide el peor de ellos

-   Bien de 0 a 100ms
-   Regular de 100 a 300ms
-   Malo de 300ms en adelante

### 1.3.3 CLS

Se enfoca en la estabilidad. Mide los cambios inesperados en el layout
de una página

-   Bien de 0 a 0.1 segundos
-   Regular de 0.1 a 0.25
-   Malo de 0.25 en adelante

## 1.4 CRP

Critical rendering Path. Comprende varias etapas:

1.  DOM
2.  CSSOM
3.  Render
4.  Layout
5.  Paint

Los pasos 1,2 corresponden al Object Model El paso 3 es Render Tree.
Mientras que los pasos 4 y 5 se refieren al Layout/Paint, siendo Paint
el paso más pesado de todos

### 1.4.1 Object Model

Se encarga de construir el árbol del DOM y el CSSOM (CSS object model)
Una vez creados estos dos árboles se fusionarán en uno solo.

### 1.4.2 Render tree

Aquí se empieza a determinar que elementos se van a renderizar en la
pantalla y cuales no.

### 1.4.3 Layout/Paint

El viewport le dice las dimensiones del dispositivo al navegador para
que realice los calculos pertinentes. Realizamos el layout y después
pintamos los pixeles en la pantalla.

## 1.5 Recursos bloqueantes

Javascript y CSS son recursos que bloquean el renderizado del HTML en el
navegador. Podemos modificar este comportamiento con los atributos defer
y async.

![image](Notes/WebPerformance/img/defecto.png)

### 1.5.1 Critical CSS

Permite extraer el CSS necesario para renderizar la sección más visible
de una ventana (Above the Fold).

### 1.5.2 defer

El atributo defer le dice al navegador que descargue un archivo pero no
lo ejecute.

``` html
<script defer src="ruta-del-script/script.js">
```

![image](Notes/WebPerformance/img/defer.png)

### 1.5.3 Async

El atributo async descarga el script en paralelo, pero en cuanto se
acaba de descargar lo ejecuta, bloqueando el parsing.

![image](Notes/WebPerformance/img/async.png)

``` html
<script async src="ruta-del-script/script.js">
```

## 1.6 Priorización de recursos

Podemos asignar prioridades a los archivos diviendo los archivos y
usando media queries, sin embargo hay que recordar que cada archivo
nuevo es una nueva request, por lo que es **importante mantener un
balance.**

``` html
<link rel="stylesheet" href="/desktop.css" media="screen and (min-width: 600px)" />
```

La linea anterior hará que en pantallas pequeñas se le asigne prioridad
baja a desktop.css, mientras que en pantallas grandes se le dé prioridad
alta.

## 1.7 Preloading y fetching de recursos

Podemos hacer un prefetching del contenido de los CDN para llevar a cabo
el handshake antes de que se haga la petición de los recursos. Debemos
tener cuidado con los subdominios, pues deberemos removerlos

### 1.7.1 Preloading

Podemos precargar recursos usando el atributo rel llamado preload. Este
se diferencia de prefetch en que se enfoca en hacer fetching para la
navegación. Es usada por Next.js y Gatsby al hacer hover en los
elementos de su página.

``` html
<link rel="preload" href="/_next/static/chunks/chunk.js" as="script"/>
```

### 1.7.2 Preconnect

Preconnect permite al navegador establecer conexiónes tempranas antes de
que la petición HTTP se mande al servidor, esto incluye búsquedas DNS,
negociaciones TLS y handshakes TCP, lo anterior elimina la latencia y
ahorra tiempo.

``` html
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
```

### 1.7.3 Prefetch

Prefetch nos permite conectarnos previamente a dominios en el tiempo
inactivo del navegador. Es un proceso de baja prioridad. Una vez
descargados los guarda en la cache asumiendo que se necesitarán.

``` html
<link rel="prefetch" href="/uploads/images/pic.png"/>
```

### 1.7.4 Prefetch-dns

Este es una versión simple de preconnect, pues se encarga únicamente de
hacer una búsqueda dns de los recursos, se recomienda para contenido
servido por un CDN

``` html
<link rel="dns-prefetch" href="//fonts.googleapis.com"/>
```

## 1.8 Fases Paint y Layour del CRP

Todas las propiedades que no sean opacity o transform causan un Paint.
Paint es **la etapa más costosa para un navegador**.

## 1.9 Detectando Paints costosos

Podemos detectar paints costosos usando la herramienta performance y
luego record del navegador. Podemos especificarle al navegador que va a
cambiar usando el atributo de css will-change, esta puede tomar varios
valores como scroll-position, contents, transform, opacity, left, top,
etc.

Recordemos que todo lo que no sea opacity o translate es costoso para el
navegador en términos de paint.

``` css
.clase{
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
}
```

Por su versión menos costosa a nivel paint

``` css
.clase {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 1);
    opacity: 0.4;
}
```

También podemos reemplazar el margin-left:

``` css
.clase:hover{
    margin-left: 100px;
}
```

por su versión en transform, que es menos costosa a nivel paint

``` css
.clase:hover{
     transform: translateX(100px);
}
```

## 1.10 Complejidad de selectores

Hay que buscar que los selectores del navegador que cortos y directos.
Mientras menos anidaciones, mucho mejor. Lo mejor es evitar las
anidaciones por completo.

``` css
.menu div img {...} /*Peor*/
.menu img {...} /*Mejor*/
.menu__img {...} /*Mucho mejor*/
```

Se busca que todos los selectores sean una única clase y se evitan los
id. Para eso podemos nombrar las clases con el estándar. Para esto
podemos echar mano de la estructura BEM (Block Element Modifier).

``` html
<header class="header">
  <div class="header__menu--is-open"></div>
</header>
```

Debido a que CSS es un elemento bloqueando, **no es recomendable colocar
elementos que deseamos que carguen primero en el CSS**

``` css
.logo {
    background-image: url("https://example.org/logo.png");
}
```

En su lugar es mejor pasar la imagen al HTML

``` html
<img src="https://example.org/logo.png"/>
```

## 1.11 Webfonts

Impactan de manera muy negativa en el rendimiento, se recomienda usar
**máximo 2 webfonts por página**.

Existen 3 formas de cargar fuentes: \* Como estilo \<link\> \* Flash of
Unestyled Text (FOAT) De forma alterna, cargando una fuente por defecto
de manera asíncrona y luego cambiándola por la nuestra. \* Flash of
Invisible Text (FOIT) No mostrar texto hasta que se descargue la fuente.

### 1.11.1 Google Fonts

Nos permite cargar previamente una fuente cambiando el parámetro "block"
por "swap"

``` html
<link href="https://fonts.googleapis.com/css?family=Muli&display=block" rel="stylesheet"/>
```

### 1.11.2 Web Font Loader

Web Font Loader es una libreria que nos permite cargar fuentes desde
otros proveedores. Además de darnos mucho más control sobre la carga de
fuentes. Basta con copiar el script de la documentación oficial para que
cargue webfont. Podemos ponerlo al final para que no detenga el
renderizado.

``` html
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
      google: {
            families: ['Nuestra_fuente', '']
                }
                  });
                  </script>
```

Web Font Loader nos da eventos que nos avisan del estado del cargado de
la fuente. Estos cambiarán la clase de la etiqueta HTML de nuestro
código. De esta manera podemos especificar la fuente para cada evento.

``` css
html {
    font-family: Helvetica, Arial, sans-serif;
}

html.wf-active {
    font-family: 'Font';
}
```

Ahora nos cargará las primeras fuentes por defecto, cuando por fin haya
cargado la fuente la cambiará por nuestra fuente Font.

``` css
@font-face {
  font-family: 'MyWebFont'; /* Define the custom font name */
    src:  url('myfont.woff2') format('woff2'),
            url('myfont.woff') format('woff'); /* Define where the font can be downloaded */
              font-display: fallback; /* Define how the browser behaves during download */
          }
```

Donde font-display puede tomar los siguientes valores:

-   block: El navegador renderiza texto invisible y lo cambia por la
    fuente personalizada (FOAT)
-   swap: El navegador carga la fuente por defecto y luego la cambia por
    la fuente personalizada (FOIT)
-   fallback: El navegador espera 100ms para ver si la fuente cargó, si
    no lo hizo usará la fuente por defecto y luego la cambiará por la
    fuente personalizada.
-   optional: Este valor le dice al navegador que esconda el texto,
    entonces transiciona a una fuente predeterminada hasta que la
    personalizada esté disponible para su uso. Sin embargo deja libre
    elección al navegador sobre si usa o no la fuente personalizada,
    dependiendo de la conexión a internet.

Esquema del funcionamiento de font-display

![](Notes/WebPerformance/img/FontDisplay.jpg)

## 1.12 Imágenes, formato y compresión

Hay que elegir los tipos de imágenes correctos para el propósito
requerido.

### 1.12.1 GIF

Ideal para imágenes con poca densidad de colores.

### 1.12.2 JPG

Tiene dos modos, progresivo y no progresivo. Donde en uno va cargando
linea por linea, el modo progresivo muestra una imagen de baja
resolución y luego la reemplaza por la imagen real.

### 1.12.3 webp

El mejor tipo de formato para imagen hasta el momento, sin embargo no es
recomendable por el momento porque no todos los navegadores le dan
soporte.

## 1.13 Web Fonts, imágenes o SVG

### 1.13.1 web fonts

Son prácticos, fáciles de usar y distribuir, sin embargo requieren una
conexión extra HTTP, son bloqueantes.

### 1.13.2 SVG

Son livianos, accesibles, permiten animaciones, sin embargo requieren un
diseñador y pueden incrementar el largo del HTML.

Son perfectos para logotipos simples, de pocos colores, ilustraciones e
ilustraciones animadas. Son ideales para la parte superior de la página.

## 1.14 Lazy Loading

### 1.14.1 Imágenes

Podemos cargar las imágenes solo cuando se van utilizando.Para hacer un
lazy Loading hay 3 formas:

Podemos implementarlo de manera nativa, aunque por el momento no está en
safari, opera ni internet explorer.

``` html
<img src="gatito.png" loading="lazy" alt="...">
```

Está la opción de Intersection Observer, es la opción preferida, no está
soportado por internet Explorer.

``` javascript
let observer = new IntersectionObserver(callback, options);
```

Luego describimos un objeto donde nos especifique el root, el margen del
root y el porcentaje de observación del objeto.

``` javascript
const options = {
  root: document.querySelector('#main-container'),
    rootMargin: '10px 0px', // like css property
      threshold: 1.0
      }
```

Ahora podemos usar el observer para observar cualquier elemento del DOM

``` javascript
let target = document.querySelector('#itemId');
observer.observe(target);
```

Si la condición se cumple se va a ejecutar el callback que se definió al
crear el objeto. Esta función recibe dos argumentos: \* Una lista de
objetos IntersectionObserverEntry \* El objeto observer

De esta manera podremos iterar sobre el primer argumento para modificar
el atributo src de etiquetas img y que empiece a cargar la imagen al
momento.

``` html
const callback = (entries, observer) => {
   entries.forEach(entry => {
      if(entry.isIntersecting){
          entry.target.src = entry.target.dataset.src;
          observer.unobserve(entry.target);
      }  
   }
}
```

El unobserve es porque solo deseamos cargar una imagen cada vez.

También podemos hacer uso de la librería
[lozad.js](https://github.com/ApoorvSaxena/lozad.js)

La tercera opción es usar un scroll listener, es compatible con todos
los navegadores pero impacta de forma negativa el performance de la
página.

## 1.15 Técnicas avanzadas de Responsive Loading

Una excelente técnica es cambiar el tamaño de la imagen de acuerdo al
dispositivo (parecido a lo que hace DjangoVersatileImage). No se
ahondará en esto pues hay variadas maneras acorde al lenguaje.

## 1.16 Javascript

Es importante usar el modo producción en webpack para que este tome las medidas
necesarias para optimizar el bundle.js

### 1.16.1 Webpack Bundle analyzer

Puede usarse para analizar el código y decirnos exactamente como está
coconformado nuestro bundle. Si lo incluimos en los plugins, al correr una
compilación en producción nos abrirá una ventana en el navegador con la
información. Podemos personalizar su uso de la siguiente manera.

``` bash
npm install webpack-bundle-analyzer
```

``` javascript
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin

const plugins: []

const shouldAnalyze = process.argv.includes('--analyze')

if (shouldAnalyze) {
  plugins.push(new BundleAnalyzerPlugin())
}

const config = {
  ...
  plugins,
}
```

Esto nos permitirá identificar las partes críticas que necesitamos reducir.
**Hay que reemplazar aquellas librerías de las que solo usamos una o dos
funciones por otras más pequeñas**. Es muy común agregar librerías completas
para solo usar una o dos funciones.

![image](Notes/WebPerformance/img/bundleAnalyzerPlugin.jpg)

### 1.16.2 Uso de Bundlephobia[Bundlephobia](https://bundlephobia.com/) nos da muestra el costo de añadir un
nuevo paquete de npm

## 1.17 treeshaking

Treeshaking nos permite deshacernos de todas las funciones que no
necesitamos de una librería. Webpack hace treeshaking automáticamente.
Para que webpack detecte las funciones específicas que necesitamos
debemos especificarlas por medio de destructuración.

Mira el siguiente ejemplo:

``` javascript
import _ from 'lodash'

_.get()
```

Reemplacemos el código por lo siguiente.

``` javascript
import { get } from 'lodash'
import get from 'lodash/get'

get()
```

Nota: Moment, por su sintaxis, no permite treeshaking. Un reemplazo de
moment.js puede ser date-fns.

## 1.18 Code splitting

Consiste en la divisón del bundle en diferentes partes.

``` javascript
const config = {
...
output: {
  ...
  filename:'[name].bundle.js',
},
optimization: {
  splitChunks: {
    chunks: 'all'
}
}
```

Esto nos permite dividir el bundle en otras partes, lo cual será
bastante útil usando cache o usando Lazy Module Loading.

## 1.19 Lazy Module Loading

Se trata de cargar los modulos de manera perezosa, justo en el momento
en el que los necesitemos.

Webpack permite hacer un lazyloading creando una importación tipo
promesa. usando *then.()*

``` javascript
if(accionParaImportarLibreria){
  import('./libreria').then(({functionRequerida})=>{
      funcionRequerida()
  }
}
```

Nota: Podemos especificar los chunks de webpack con un comentario en
formato json con el atributo webpackChunkName: "nombre".

``` javascript
if(accionParaImportarLibreria){
  import(/* webpackChunkName: "modal" */'./libreria').then(({functionRequerida})=>{
      funcionRequerida()
  }
}
```

## 1.20 Event Propagation

**Un solo listener es mucho más eficiente que tener un montón de
ellos**. En lugar de tener varios podemos tener un único listener en su
antecesor, y usarlo para propagar el evento hasta donde querramos
manejarlo.

``` javascript
document.body.addEventListener('click', event => {
  const tagName = event.target.tagName
  if(['IMG', 'A'.includes(tagName)){
      functionToExecute(event)
  }
}
```

## 1.21 SSR

Podemos mover los renderizados de javascript del navegador al
servidor.El SSR no se lleva a cabo en el caso de Lazy module loading. El
SSR no va a reducir el tiempo de conexión web, sino que solo se
trasladará del cliente al servidor. Si el API está en el mismo servidor
donde está el server code tendremos un tiempo de respuesta menor. Por
otro lado, si está en un dominio diferente requerirá evaluarse si es
mejor que lo haga el servidor o el navegador.

## 1.22 Static Site Generation

Un archivo web estático es el contenido más rápido y sencillo de servir

El SSG es la generación de un archivo estático a través de algún
proceso, incluso con el contenido de una API. En este último caso se
hará la petición a la API una sola vez, esta información se guardará por
un periodo de tiempo y se utilizará para generar un archivo por medio de
una plantilla. De esta manera la petición web se realiza una sola vez y
tenemos un boost de peformance.

Sin embargo no todas las páginas webs se pueden renderizar, sobre todo
aquellas donde el contenido cambia constantemente.

## 1.23 Cache y CDN

En redes distribuidas hay cache que nos permite mejorar el rendimiento.

## 1.24 Netifly

Netifly permite subir automáticamente los proyectos en node y se encarga
de todo el lado del servidor (No de la API), donde ellos se encargan de
tener un setup óptimo para el rendimiento

## 1.25 Github Actions

Github actions es una herramienta de CI. Es decir, podemos especificar
las tareas automáticas que queremos que se ejecuten con cada push desde
Github. Hay numerosas acciones disponibles en el
[marketplace](https://github.com/marketplace?type=actions) de Github

Para que github reconozca los archivos necesitan estar dentro de una
carpeta llamada *.github* que a su vez tenga una carpeta llamada
workflows, aquí colocaremos nuestro archivo build.

Este archivo tiene la siguiente estructura, la opción cron, dentro de
schedule, corresponde al formato de un crontab de GNU/Linux.

``` yaml
name: Nombre

on:
  schedule:
    - cron: '0 10 * * 1'

jobs:
  build: 
    name: Nombre
    runs-on: ubuntu-latest
    steps:
      - name: Name
        run: comando
```

El comando puede ser cualquier cosa. Por ejemplo, netifly permite usar
hooks al hacer build, cada vez que se llama creará una dirección a la
que podemos hacer un ping desde nuestro repositorio de github.

Aquí hay un ejemplo para lighthouse

``` yaml
name: Audit live site
on: push

jobs:
  audit:
    runs-on: ubuntu-latest
    steps:
    - name: Audit live URL
      uses: jakejarvis/lighthouse-action@master
      with:
        url: 'https://jarv.is/'
    - name: Upload results as an artifact
      uses: actions/upload-artifact@master
      with:
        name: report
        path: './report'
```

## 1.26 Cache con service Worker

Pasos para ejecutar el cache son service worker.

1.  Instalar el SW en el navegador
2.  Escuchar 'fetch'
3.  Cache o request

El service worker funciona como un intermediario que devuelve la cache
si la encuentra o hace una petición para posteriormente devolverlo.

``` javascript
const CACHE_NAME = 'app-v1'

self.addEventListener('fetch', myCustomFetch)
self.addEventListener('activate', clearCache)

function myCustomFetch(event) {
    const response = cacheOrFetch(event)
    event.respondWith(response)
}

async function cacheOrFetch(event) {
    // event.request contiene la informacion del request, i.e.: la url
    // 1. Verificar la respuesta que necesitamos ya se encuentra en el cache
    let response = await caches.match(event.request)

    // 2. Si es cierto, retornamos la respuesta desde el cache > end
    if (response) {
        return response
    }

    // 3. Si no, hacemos un fetch al servidor para obtener la respuesta
    response = await fetch(event.request)
    // 3.1 Si la respuesta no es valida > end
    if (
        !response ||
        response.status !== 200 ||
        response.type !== 'basic' ||
        !isAssetCSS(event.request.url)
    ) {
        return response
    }

    // 4. Cuando tengamos la respuesta devuelta del servidor, la almacenamos
    //    en el cache para proximas respuestas.
    const clonedResponse = response.clone() // Stream que solo se puede leer una vez
    caches.open(CACHE_NAME).then(cache => {
        cache.put(event.request, clonedResponse)
    })

    return response
}
const assetsRegExp = /.png|.gif|.jpg|.jpeg|.css|.js/g

function isAssetCSS(url) {
    return assetsRegExp.test(url)
}

function clearCache(event) {
    const deletePromise = caches.delete(CACHE_NAME)
    event.waitUntil(deletePromise)
}
```

Podemos ver los service-workers.js en Application -\> Service worker en
las heramientas de desarrollador. Podemos corroborar que lo que estamos
cacheando se encuentra en la sección de Cache en la misma pestaña.

Además podemos usar un service worker para:

-   Pre-fetching
-   Caché
-   Offline experiences (PWA)
-   Background services

## 1.27 Performance Budget

Para medir el performance budget tenemos que

-   Elegir nuestras métricas que son relevantes
-   Establecer los límites permitidos
-   Automatizar la auditoría

Una vez elegidas nuestras métricas importantes, cada auditoría sucesiva
debe asegurarse de que las métricas mejoran.

### 1.27.1 Automatizar auditoría

Podemos usar github actions, podemos integrarlo con Netifly, sitios
estáticos, puppeter y otras tecnologías. Ponemos una carpeta oculta con
el nombre de .github dentro de la carpeta de nuestro proyecto. En este
enlace de
[lighthouse](https://github.com/marketplace/actions/lighthouse-ci-action)
viene la action te Github que permite automatizar la auditoria.

Asimismo podemos usar lighthouse con npm usando la opcion --output json
para generar un reporte en JSON que podremos usar para obtener las
métricas y luego usar asserts en un la configuración de un archivo de
auditoria.

El audit lo especificaremos desde nuestro archivo audit.yml

``` yml
# Flujo automatizada para auditar cada Pull Request con Lighthouse

name: Performance Audit

# Control: Ejecute la acción para cada Pull Request
# Y cada Push a nuestro bello branch de producción
on:
  pull_request:
  push:
    branches:
      - master

jobs:
  lighthouse:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2

      - name: Use Node.js 12.x
        uses: actions/setup-node@v1
        with:
          node-version: 12.x

      - name: Install and build
        run: |
          npm install
          npm run build

      - name: Audit with lighthouse CI
        uses: treosh/lighthouse-ci-action@v2
        with:
          # Configuración para auditar sobre un sito estático
          # Lee más en:
          # treosh/lg-ci-action options https://github.com/marketplace/actions/lighthouse-ci-action
          runs: 5
          uploadArtifacts: true
          configPath: './.github/workflows/setup/lighthouse-audit.json'
```

Dentro de este archivo que especificamos en configPath colocaremos
nuestras métricas a cumplir.

``` json
{
  "ci": {
    "collect": {
      "staticDistDir": "."
    },
    "assert": {
      "assertions": {
        "categories:performance": ["error", { "minScore": 0.8 }],
        "first-contentful-paint": ["error", { "maxNumericValue": 1000 }],
        "interactive": ["error", { "maxNumericValue": 1500 }],
        "resource-summary:font:count": ["error", { "maxNumericValue": 1 }],
        "resource-summary:script:size": [
          "error",
          { "maxNumericValue": 150000 }
        ],
        "resource-summary:stylesheet:size": [
          "error",
          { "maxNumericValue": 100000 }
        ]
      }
    }
  }
}
```

## 1.28 RUM

Todo lo anterior son métricas de laboratorio. Es necesario tomar
métricas reales desde el sitio de producción. Para esto necesitamos
tener una población de usuarios con tráfico real.

Algunos servicios que permiten este monitoreo son los siguientes:

-   [New Relic](https://newrelic.com/)
-   Pingdom
-   Web Page Test
