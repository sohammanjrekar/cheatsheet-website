# Webpack

Webpack es un module bundler. Su propósito es empaquetar archivos de javascript para su uso en el navegador, también es capaz de transformar [CSS](../HtmlYCss/1.-HTML-y-CSS.md), imágenes y otros archivos característicos del desarrollo web. 


## 1.1 Introducción a Webpack

Webpack es un empaquetador para Javascript y sus amigos. Convierte
módulos con dependencias en archivos estáticos que los navegadores
entienden.

Nos permite empaquetar, optimizar los diferentes módulos Javascript y
sus dependencia en nuestro proyecto. Es usado en proyectos basados en
Javascript como: React, Vue, Angular entre otros.

El User Experience se logra con una aplicación que:  
Funcione Sea rápida Cumpla sus necesidades Se actualice Responda a sus
interacciones Producto de calidad

Mientras que el Developer Experience:  
Escribir aplicaciones de manera eficiente. Tener un código limpio.
Aplicar tecnología para resolver sus problemas. Tener un conjunto de
reglas y convenciones. Entorno de desarrollo optimizado en productividad

## 1.2 Webpack-cli

Webpack-cli, la API que expone webpack en forma de CLI (Command Line
Interface) que nos va a permitir interactuar y configurar Webpack desde
la terminal. El comando webpack tiene una bandera llamada --mode que nos
permite cambiar entre los modos producción y desarrollo. Recuerda que
por defecto nos pone en modo producción si no la especificamos.

## 1.3 Entry point

Creamos un archivo llamado *webpack.config.js*

Entry Point: Es la ruta del archivo principal de nuestra aplicación JS a
ser procesado por Webpack. Se pueden tener varios Entry Points. Output:
Es la ruta de salida donde va a generar nuestro bundle con todos
nuestros archivos especificados como Entry Points empaquetados en uno
sólo.

``` javascript
const path = require('path')

module.exports = {
        entry: './index.js',
        mode: 'development',
        output: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
}
```

Luego corremos el comando

``` bash
npx webpack
```

Ya que se está usando path para las rutas lo recomendable sería separar
las carpetas por comas

``` javascript
const path = require('path');

module.exports = {
  mode: 'development',

  entry: {
    home: path.resolve(__dirname, 'src', 'javascripts', 'index.js'),
    precios: path.resolve(__dirname, 'src', 'javascripts', 'precios'),
    contacto: path.resolve(__dirname, 'src', 'javascripts', 'contacto')
  },

  output: {
    path: path.resolve(__dirname, 'dist', 'js'),
    filename: 'bundle-[name].js'
  }
};
```

## 1.4 Cargando configuraciones por defecto y personalizadas

Por medio del uso de la bandera --config podemos especificar un archivo
de configuración externo con el nombre que queramos en lugar del nombre
por defecto *webpack.config.js*

Para ahorrarnos tiempo y/o poder especificar diferentes modos agregarse
al archivo *package.json*

``` javascript
"scripts": {
   "build": "webpack --mode production",
   "build:local": "webpack --mode development --config localConfiguration.webpack.js"
 },
```

Si queremos anexar alguna instrucción extra en node podemos usar la
siguiente notación *--*

``` bash
npm run build:local -- -w
```

## 1.5 Manejo de assets con Loaders

Los Loaders son la funcionalidad que nos da Webpack para interpretar
tipos de archivos no soportados de forma nativa por Javascript.

style-loader sirve para inyectar un tag style (el CSS) al DOM de nuestro
HTML, mientras que css-loader sólo sirve para interpretar archivos CSS.

## 1.6 CSS

Para poder utilizar css usando webpack es necesario instalar dos
programas: \* css-loader \* style-loader

Esto podemos hacerlo directamente usando npm

``` bash
npm install style-loader --save-dev
npm install css-loader --save-dev
```

El modulo style-loader permite inyectar el código css en la página, el
module css-loader permite insertarlo en archivos de javascript para que
sea procesado junto con el resto del código

``` javascript
module: {
  rules: [
    {
    test: /\.css$/,
    use:
      [
        'style-loader',
        'css-loader'
      ]
    }
  ]
}
```

El plugin de html-webpack-plugin crea un archivo html con los archivos
javascript y css que se encuentran procesados por webpack. Podemos
cargar plugins a webpack de la siguiente manera. Hay que recordar que
quitamos el style-loader porque cargaremos el css de manera natural, sin
javascript, en cambio usamos el loader *MiniCSSExtractPlugin.loader*

``` javascript
const path = require('path')
const MiniCSSExtractPlugin = require('mini-css-extract-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')

module.exports = {
  entry: path.resolve(__dirname, 'index.js'),
  output: {
    path: path.resolve(__dirname),
    filename: 'bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          {
            loader: MiniCSSExtractPlugin.loader
          },
          'css-loader'
        ]
      }
    ]
  },
  plugins: [
    new HtmlWebpackPlugin({
      title: 'Plugins'
    }),
    new MiniCSSExtractPlugin({
      filename: 'css/[name].css'
    })
  ]
}
```

## 1.7 Recargar los cambios en tiempo real

Hay un servidor de webpack que se installa con el siguiente comando

``` bash
npm install -D webpack-dev-server
```

Al correr el comando anterior nos cargará un servidor en el puerto 8080.
Podemos hacer cambios en la configuración del servidor cambiando la
entrada devServer de nuestro archivo webpack.config.js

``` javascript
...
devServer: {
  hot: true,
  open: true,
  port: 9000
},
...
```

Importante: Si va a usarse servidor de desarrollo es conveniente quitar
los minificadores de código, para facilitar la recarga.

## 1.8 Hot module replacement

El hot module replacement permite escuchar los cambios en los archivos
sin tener que recargar el navegador. Unicamente debe usarse en
desarrollo, nunca en producción

``` javascript
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const HtmlWepackPlugin = require('html-webpack-plugin');
const webpack = require('webpack');

module.exports = {
  entry: path.resolve(__dirname, 'src/js/index.js'),
  mode: 'development',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/index.js'
  },
  devServer:{
    hot: true,
    open:true,
    port: 9090,
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          'style-loader',
          'css-loader'
        ]
      }
    ]
  },
  plugins: [
    new webpack.HotModuleReplacementPlugin(),
    new HtmlWepackPlugin({
      title : 'Hot Reload'
    })
  ]
}
```

Hay que notar que se saco el plugin **MiniCssExtractPlugin**, ya que a
la hora de trabajar en modo development es mucho mas rapido hacer una
inyeccion directa de nuestro codigo css al navegador Tambien es
necesario indicar en nuestros js que queremos que escuche para que solo
haga el cambio en una funcion especifica, esto se hace con el codigo

``` javascript
import'../css/styles.css'
import drawText from'./drawText';

drawText()

if(module.hot) {
  module.hot.accept('./drawText', function(){
    console.log('Haciendo el hot reload')
    drawText()
  })
}
```

## 1.9 Soporte de Javascript moderno

Para poder usar Javascript moderno y tener una buena Developer
Experience sin afectar la User Experience, existe Babel. Babel transpila
nuestro código moderno de Javascript a una una versión que todos los
navegadores pueden entender.

``` bash
npm install --save-dev @babel/core babel-loader @babel/preset-env
```

Hay que recordar que Babel no necesita de webpack para ser usado, sino
que es una libreria externa completa. Los @ indican que son
subdependencias de babel.

Una vez instalado procederemos a modificar nuestro archivo de
configuración

``` javascript
...
rules: [
  {
    test: /\.js$/,
    use: 'babel-loader',
    exclude: /node_modules/,
  },
]
...
```

Existe un archivo .babelrc donde se pondrá la configuración de babel

``` javascript
{
  "presets": [
    "preset-env"
  ]
}
```

Las funciones asincronas que necesitas await y async necesitan ciertas
dependencias extras

``` bash
npm install --save-dev @babel/plugin-transform-runtime
npm install @babel/runtime
```

## 1.10 Archivos JSX de React

JSX es un lenguaje de templates para React que permite definir
componentes con un código muy similar al HTML.

No existe navegador que entienda JSX porque no es un estándar, es algo
especifico de React. Afortunadamente Babel puede transpilar el código
JSX de nuestros archivos JS a código que el navegador.

¿Cómo instalar React.js con Webpack?

``` javascript
npm install --save-dev --save-exact @babel/preset-react
npm install --save --save-exact react
npm install react-dom --save --save-exact 
```

Actualizar el archivo de .babelrc (el archivo que tiene tu configuración
de babel)

``` javascript
"presets": [
        "@babel/preset-env",
        "@babel/preset-react"
    ]
```

React necesita un elemento container en el HTML, para ello modificaremos
nuestro HTML hecho automaticamente con webpack

Actualizar en webpack.config.js el plugin de HTML

``` javascript
plugins: [

        new webpack.HotModuleReplacementPlugin(),

        new HtmlWebpackPlugin({
            title: "plugins",
            minify: {
                collapseWhitespace: true
            },
            template:  path.resolve( __dirname, "index.html" )  
        })
    ]
```

Y añadiremos el elemento container que llamaremos en el index.js de
React.

``` html
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <metacharset="utf-8">
</head>
<body>
    <divid="root"></div>
</body>
</html>
```

Haz que algo que marque la diferencia suceda con tu App en React.js

``` javascript
Index.js


//Gracias a Webpack es que es posible hacer esto
import React from "react";
import {render} from "react-dom";
import App from "./components/App.js";
import"../css/index.css";

render(<App />, document.getElementById("root"))

App.js


import React from"react";

functionApp(props) {

    return(
        <sectionclassName="App">
            <h1>App Testing</h1>
        </section>
    )
}

export default App;
```

## 1.11 Webpack también procesa imágenes

Para soportar la importación de archivos binarios en nuestro código
Javascript cómo lo son: fuentes, imágenes y videos, podemos usar
url-loader. url-loader transforma archivos a un cadena de texto base64
para que carguen dentro de nuestros archivos Javascript y así ahorrarnos
un request al servidor por cada archivo transformado. Debemos tomar en
cuenta que sólo nos conviene convertir archivos pequeños, ya que
archivos muy grandes podrían hacer nuestro archivo bundle muy pesado. Es
por esto que la opción limit del url-loader sirve para asignar el peso
máximo que un archivo puede tener para ser transformado en base64.

Recuerda instalar file-loader junto con url-loader ya que cuando se
sobrepasa el limite establecido en la opción limit y el archivo no pueda
ser transformado a base64, url-loader hará uso del file-loader para
insertar un nombre y ruta de archivo en el lugar correspondiente.

Lo usa utilizando el loader llamado url-loader

``` javascript
test: /\.jpg|png|gif|woff|mp4|/,
use: {
  loader: 'url-loader',
  options: {
    limit: 9000000,
  }
}
```

Cuando un archivo no cumple los requerimientos necesitamos file-loader

## 1.12 Preprocesadores de estilos

Podemos instalar los preprocesadores

``` bash
npm install sass-loader stylus-loader less-loader postcss-loader
```

Todos requeririan el style-loader y el css-loader

``` javascript
...
test: /\.scss$/,
use: [
  'style-loader',
  'css-loader',
  'sass-loader'
]
...
```

## 1.13 Dynamic Link library

Mientras más librerías agregamos más lento se empiezan a volver nuestros
builds, arruinando así la Developer Experience. Por suerte podemos crear
una (o varias) Dynamic Link Library para acortar estos tiempos.

Una Dynamic Link Library (DLL) es un conjunto de librerías comunes que
no cambian frecuentemente por lo que se hace un build por adelantado de
las mismas para no re-empaquetar cada vez que hacemos build de nuestra
aplicación. Se deben tener dos archivos:

-   webpack.config.js
-   webpack.dll.config.js

El primero debe estar optimizado para producción, de esta manera

``` javascript
module.exports = {
  entry: {
    modules: ["react", "react-dom"]
  },
  mode: "production",
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "js/[name].js",
    library: "[name]"
  },
  plugins: [
    new webpack.DllPlugin({
      name: "[name]",
      path: path.join(__dirname, "[name]-manifest.json")
    })
  ]
};
```

En el segundo, tenemos que requerir el archivo modules-manifest.json
creado al final el primer archivo de configuración, en la sección de
plugins

``` javascript
newwebpack.DllReferencePlugin({
      manifest: require("./modules-manifest.json")
    })
```

En la clase, además se reemplazó el style-loader por el
mini-css-extract-plugin, agregando en la sección de plugins lo siguiente

``` javascript
newMiniCssExtractPlugin({
      filename: "css/[name].css",
      chunkFilename: "css/[id].css"
    }),
```

## 1.14 Evitar código duplicado

Para evitar el código duplicado, por ejemplo librerias, cuando
importamos varios archivos de javascript.

``` javascript
mode: 'production',
optimization: {
    splitChunks: {
      chunks: "all",
      minSize: 0,
      name: "commons"
    }
  }
```

## 1.15 Dynamic imports

Esto sirve para poder hacer import de librerias dinamicamente, como
resultado de cambios en el código, ya sea interacción de usuario.

1.  Instalar @babel/plugin-syntax-dynamic-import

``` bash
npm install --save-dev --save-exact @babel/plugin-syntax-dynamic-import
```

1.  En .babelrc agregar el plugin

``` javascript
"plugins": [
    "@babel/plugin-syntax-dynamic-import"
]
```

1.  En el atributo output de webpack.config.js agregar lo siguiente

``` javascript
publicPath:'dist/',
chunkFilename:'js/[id].[chunkhash].js' //opcional
```

Pd: Si el error "Module not found: Error: Can’t resolve
'@babel/runtime/helpers/asyncToGenerator’ ocurre, instalar
@babel/runtime, así

``` bash
npm install --save-dev --save-exact @babel/runtime
```
