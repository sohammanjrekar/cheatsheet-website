# Vite

Vite es un blunder de tercera generación para el desarrollo Frontend.

Vite.js se caracteriza por su velocidad, ya que el tiempo para compilar y transpilar es mucho más rápido. Superando a otros blunders, como [Webpack](../Webpack/1.-Webpack.md)


## 1.1 Características

* Pre-bundling, en el que Vite adapta módulos al formato estándar de ECMAScript, los ES Modules.
* Usa un servidor de archivos estático para exponer los archivos vía URL y posteriormente los importa.
* Reemplaza los imports por imports URL.
* Sirve los archivos con caché.
* Realiza la recarga de la página sin perder el estado de la aplicación.
* Soporte nativo para Vue.
* Resuelve la importación sin usar loaders.
* Manejo de archivos multimedias sin plugins de terceros.
* Soporte a web works y web assembly
* Vite se encarga aplicar hashes a los bundles de nuestros archivos de manera automática.
* Vite se encarga de actualizar cambios en el código por medio del HMR (Hot module Replacement)

## 1.2 Importar CSS con Vite

Vite incluye soporte con PostCSS para optimizar la producción y dar soporte a preprocesadores de CSS.

Vite usa caché para reducir los tiempos de espera. Cada cambio genera un nuevo archivo que se cachea.

Vite une automáticamente los archivos pequeños para usarlos como uno solo y si es muy grande los importa por separado.

Cada archivo que vite importa es un archivo estático y es servido a través de una URL.
Import dentro de un archivo javascript

Para importar dentro de un archivo javascript usamos import, como si se tratara de cualquier modulo de javascript.

``` javascript
import './<archivo>.css'
```

### 1.2.1 Import dentro de un archivo CSS

Dentro de un archivo CSS podemos usar la sintaxis de import anteponiendo un arroba a la ubicación del archivo.

``` javascript
@import './<archivo>.css'
``` 

## 1.3 Soporte para pre-procesadores de CSS

Vite tiene soporte para archivos LESS o SASS de manera automática.

``` javascript
import './<archivo>.<sass|less>'
```

Incluso pueden mezclarse diferentes formatos.

``` javascript
import './<archivo>.sass'
import './<archivo>.less'
```

## 1.4 Soporte para módulos CSS

Los CSS modules son archivos que terminan en .module.css.

Estos archivos pueden importarse con la sintaxis de import de javascript y usarse como si fueran un objeto para dotar de clases a nuestros componentes.

``` javascript
import styles from './layout/<archivo>.module.css'

<div className={styles.<clase>}></div>
```

## 1.5 Importar imágenes

Vite cuenta con soporte para importar imágenes.

``` javascript
import <img> from './<imagen>.<formato>'

function imagen(){
    return <img src={${<img>}} alt="some text"/>
}
```

## 1.6 Importar JSON

En Vite podemos realizar un import de manera directa.

``` javascript
import <data> from './<archivo>.json'
```

Si queremos importar un único atributo del objeto JSON desestructurándolo de nuestro objeto.

``` javascript
import { <atributo> }  from './<archivo>.json'
```

## 1.7 Importación global

Vite permite importar el contenido de un directorio completo usando el método glob y usando asterisco como un wildcard.

``` javascript
const modules = import.meta.glob('./modules/*.<ext>')
```

Estos modulos son iterables y podemos llamarlos como si fueran promesas, que podemos resolver de manera asíncrona.

``` javascript
for (const path in modules){
    modules[path]().then(module=>module)
}
```

## 1.8 Soporte para typescript

Vite ya cuenta con soporte para Typescript de manera predeterminada, por lo que no necesita de ningún plugin externo, basta con importarlo para usarlo.

``` javascript
import <function> from './<archivo>.ts'
```

### 1.8.1 Typescript con configuración personalizada

Si queremos usar una configuración diferente basta con agregar un archivo tsconfig.json a la raiz del directorio.

Cada vez que realicemos un cambio a este archivo necesitamos borrar el caché del navegador.

## 1.9 Configuración de Vite

Para modificar las configuraciones por defecto de Vite es necesario crear un arcivo vite.config.js.

Vite viene configurado por defecto para cumplir la mayoría de las necesidades, sin embargo es posible personalizar por completo y tomar el control de lo siguiente:

* La carpeta raíz del proyecto.
* La url base
* El modo ( desarrollo o producción)
* Uso de pluggins.
* El servidor en modo desarrollo
* El build


Todas las directrices se encuentran en la documentación de Vite.

Esta configuración se requiere en formato JSON.

``` javascript
// vite.config.js
export default {
    <atributo>: {
        <opciones>: <valor>
    }
}
```

Para usar autocompletado usando typescript usamos

``` javascript
import { defineConfig } from 'vite'

export default defineConfig({
    <atributo>: {
        <opciones>: <valor>
    }
})
```

Para crear una configuración dinámica retornamos una función que retorne una configuración.

``` javascript
import { defineConfig } from 'vite'

export default defineConfig(() => {

    const <valor> = generaValor()

    return {
        <atributo>: {
            <opciones>: <valor>
        }
    }
})
```

## 1.10 Comando y modo

La función defineConfig puede recibir desestructurar algunos parámetros opcionales:

* command, el nombre del comando que ejecuta npm. Por ejemplo: En "npm run build" command tomaría el valor de "build".
* mode, el modo de ejecución de Vite, puede ser development o production, para desarrollo o producción, respectivamente.

``` javascript
import { defineConfig } from 'vite'

export default defineConfig(({command, mode}) => {

    const <valor> = generaValor()

    return {
        <atributo>: {
            <opciones>: <valor>
        }
    }
})
```

## 1.11 Variables de entorno

Vite mantiene todas las variables del archivo .env en la raiz ocultas, la única manera de que Vite lea las variables de entorno es si tienen el prefijo VITE_.

``` bash
VITE_<VARIABLE>=Valor
```

En el código necesitamos usar la función loadEnv para que Vite tenga acceso a ellas.

``` javascript
import { defineConfig, loadEnv } from 'vite'

export default defineConfig(({command, mode}) => {

    const env = loadEnv(mode, process.cwd())
    console.log(env.VITE_<VARIABLE>)
}
```

## 1.12 Sitios multi-página

Hay ocasiones donde querremos que una página tenga sus propias dependencias y fuentes.

Vite usa rollup por debajo, por lo que para eso necesitamos retornar un objeto JSON con atributos de la documentación de Rollup

``` javascript
import { resolve } from 'path'

export default defineConfig(({command, mode}) => {

    return {
        build: {
            rollupOptions: {
                input : {
                    main: resolve(__dirname, '<src>.html'),
                    <another>: resolve(__dirname, '<directory>', '<file>.html')
                }
            }
        }
    }
}
```

La función resolve concatena las rutas y los archivos para tener una ruta completa.

El output de la configuración anterior es un archivo HTML nuevo con el nombre especificado en la configuración.
Construcción de librerías con Vite

El archivo de configuración puede recibir el tipo de proyecto que deseamos, para que Vite realice las optimizaciones necesarias, incluso para librerías de Javascript.

``` javascript
import { resolve } from 'path'

export default defineConfig(({command, mode}) => {

    return {
        build: {
            lib: {
                entry: resolve(__dirname, '<directory>', '<src>.<ext>'),
                name: '<name>',
                fileName: (format) => `<file_name>.${format}.<ext>`
            }
        }
    }
}
```

Format se refiere a los formatos como es2017, modulos umd. Vite generará una salida para cada tipo de formato.

## 1.13 Vite para React y Vue

Vite brinda soporte completo para React y Vue.

Este comando nos pedirá contestar una serie de preguntas, entre ellas la elección de un framework. Basta con elegir uno de ellos y su variante, javascript o typescript, en caso de que aplique.

``` bash
npm create vite@latest 
```

Tras la creación del proyecto e instalar las dependencias, tendremos el archivo de configuración vite.config.js en la raiz del proyecto, junto con los comandos y el archivo index.html

### 1.13.1 Archivos estáticos en React

De igual forma, los archivos estáticos pueden colocarse en el interior de una carpeta llamada public, en la raiz del proyecto.
