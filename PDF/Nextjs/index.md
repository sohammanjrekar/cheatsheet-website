# Nextjs

NextJS es un framework de desarrollo web basado en [React](../React/1.-React.md).

Muchas veces mejorando cada aspecto de la aplicación de manera personal
no agregamos valor al proyecto del cliente, sino que solo estamos
optimizando sin mejorar la experiencia de los usuarios. Con Nextjs
podemos ahorrarnos el trabajo de configuración de React y su ecosistema.


## 1.1 Cost of ownership

Al crear tan personalizado estamos creando un framework personalizado,
que muchas veces tiene un alto costo de mantenimiento que no se ve
compensado con el valor de la aplicación.

## 1.2 ¿Por qué usar Next.js?

NextJS es un framework que se encarga de muchos aspectos, inclusive del
deploy.

-   Un sistema de enrutamiento intuitivo basado en páginas (con soporte
    para rutas dinámicas)
-   La representación previa, tanto la generación estática (SSG) como la
    representación del lado del servidor (SSR) son compatibles por
    página
-   División automática de código para cargas de página más rápidas
-   Enrutamiento del lado del cliente con captura previa optimizada
-   Compatibilidad con CSS y SASS incorporada, y compatibilidad con
    cualquier biblioteca CSS-in-JS
-   Entorno de desarrollo con soporte Fast Refresh
-   Rutas de API para crear endpoints de API con funciones sin servidor
-   Totalmente ampliable

## 1.3 Instalación

### 1.3.1 Instalar dependencias

Recomendable tener las versiones más actualizadas de Node.

``` javascript
npm init -y
```

Luego instalaremos las dependencias de next junto con next

``` javascript
npm install next react react-dom
```

### 1.3.2 Crear carpeta pages

Nextjs requiere una carpeta llamada pages en el root del proyecto

``` bash
mkdir pages
```

### 1.3.3 Cambiar scripts

``` javascript
"scripts": {
    "dev": "next",
    "build": "next build",
    "start": "next start"
}
```

## 1.4 Create-next-app

Con el mismo espíritu de create-react-app, Nextjs implementó un comando
para crear aplicaciones de nextjs llamado *create-next-app*.

``` javascript
npx create-next-app@latest
```

Y si queremos usar typescript:

``` javascript
npx create-next-app@latest --typescript
```

## 1.5 Rutas básicas

Nextjs tomará los archivos index.js como los home de cada carpeta. Es un
routing basado en file system. Por lo que las pedidas a /about,
renderizarán el archivo about.js. Mientras que las que dirijan a
/product, irán al archivo index.js de la carpeta product.

``` javascript
pages
|-- about.js
|-- index.js
/-- product
```

## 1.6 Páginas dinámicas

Se crean usando una sintaxis que involucra corchetes y dentro de ellos
la variable a capturar. Si este archivo estuviera dentro de una carpeta
llamada carpeta, capturaria cualquier ruta del tipo carpeta/loQueSea

``` javascript
[nombre_de_variable_a_capturar].js
```

Para acceder a la variable existe en nextjs un paquete llamada useRouter

``` javascript
import React from 'react'
import { useRouter } from 'next/router'

const Componente = () => {
  const router = useRouter()

  return(
    <div>Esta es la pagina de {router.query.nombre_de_variable_a_capturar}</div>
  )
}

export default Componente
```

Lo que viene despues de la propiedad query será el nombre de nuestro
archivo.

## 1.7 Setup y páginas

En los scripts del archivo *package.json* build se encarga de compilar,
mientras que start inicia el servidor de node.

``` javascript
"scripts": {
    "dev": "next",
    "build": "next build",
    "start": "next start"
}
```

## 1.8 Enlazando páginas

Para enlazar páginas de manera dinámica se lleva acabo con el componente
Link que proviene de *next/link*. Es necesario colocar una etiqueta
anchor en el interior de Link. También se puede notar que el atributo
href se encuentra dentro de la etiqueta Link.

``` javascript
import Link from 'next/link'

const Componente = () => {

  return(
    <Link href="/"><a></a></Link>
  )
}

export default Componente
```

Nextjs hace un prefetch al hacer hover en un enlace y descarga la
información, de esta manera mejora la optimización.

## 1.9 Etiqueta Head

Nextjs implementa un componente Head que se encarga de añadir
información en la etiqueta head de una página

``` javascript
import Head from 'next/head'

function IndexPage() {
return (
   <div>
      <Head>
      <title>My page title</title>
      <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      </Head>
      <p>Hello world!</p>
   </div>
)
}

export default IndexPage
```

## 1.10 Link y Proxy

A partir de Nextjs 10 podemos duplicar rutas sin necesidad de duplicar
las carpetas. Rewrites nos permite solucionar este problema.

Creamos un archivo de next.config.js en la raiz donde especificaremos
las opciones.

``` javascript
module.exports = {
    async rewrites(){
        return [
            {
                source: '/product/:path*',
                destination: '/item/:path*'                
            }
        ]
    }
}
```

## 1.11 API

Las Api deben de ir dentro de una carpeta llamada Api,
*obligatoriamente*. La forma de crear rutas es la misma.

Nextjs esperará una función que reciba en el primer parámetro el request
y el segundo el response. Tal cual lo haría [Node](../../Node/1.-Node.md)

``` javascript
import { IncomingMessage, ServerResponse } from 'http'

const allData = async (request: IncomingMessage, response: ServerResponse) => {
  response.end(JSON.stringify({ status: "ok" }))
}

export default allData
```

### 1.11.1 Objetos response y request

Nextjs tiene objetos que fueron extendidos para manejar las respuestas y
peticiones web, estos son:

-   NextApiRequest
-   NextApiResponse

Podemos importarlos directo de next

``` javascript
import { NextApiRequest, NextApiResponse } from 'next'
```

Nextjs también incluye helpers para facilitar el envio de respuestas.

``` javascript
response.statusCode = 200
response.end(JSON.stringify({ data: entry }))
```

La siguiente linea es equivalente a las dos anteriores, pero mucho más
limpia.

``` javascript
response.status(200).json({data: entry})
```

## 1.12 Middleware

El middleware necesita ser una función middleware y estar dentro un
archivo llamado \_middleware, con extensión tsx o js, que se encuentre
dentro de pages. Los middleware se ejecutaran en orden de acuerdo a su
nivel de anidación. El nombre no es necesariamente middleware pero se
considera una convención.

``` javascript
import type { NextRequest, NextFetchEvent } from 'next/server'

export type Middleware = (
request: NextRequest,
event: NextFetchEvent
) => Promise<Response | undefined> | Response | undefined
```

Si manejas código asíncrono, es necesario agregar el prefijo async.

### 1.12.1 El objeto NextRequest

Es una extensión del objeto response con varios métodos y propiedades
añadidas

-   cookies
-   nextUrl, que incluye pathname, basePath, trailingSlash y i18n
-   geo, con country, region, city, latitude y longitude
-   ip, con la dirección IP
-   ua, useragent

### 1.12.2 El objeto NextResponse

Una extensión del objeto Response con los siguientes métodos y
propiedades añadidos

-   cookies
-   redirect()
-   rewrite()
-   next(), para continuar la cadena de middlewares

## 1.13 Personalización de NextJS

Document es el documento principal, dentro de esta se encuentra App y
dentro de esta se encuentra la aplicación.

### 1.13.1 Extendiendo document

Para modificar el document creamos un archivo, dentro de la carpeta
pages/, llamado \_document.tsx o \_document.js , ya sea que estemos
trabajando con typescript o javascript, respectivamente. Cualquier
cambio que se haga va a aplicar a todos los documentos

En su documentación, Nextjs nos da una [plantilla
base](https://nextjs.org/docs/advanced-features/custom-document) para
poder personalizar lo que necesitamos.

Este archivo es ideal para colocar elemento adicionales en la etiqueta
Head, tales como favicons, webfonts o estilos personalizados

``` javascript
import Document, { Html, Head, Main, NextScript } from 'next/document'

class MyDocument extends Document {
  static async getInitialProps(ctx) {
    const initialProps = await Document.getInitialProps(ctx)
    return { ...initialProps }
  }

  render() {
    return (
      <Html>
        <Head>
        {/*favicons*/}
        {/*webfonts*/}
        {/*stylesheets*/}
        {/*scripts*/}
        <Head />
        <body>
          <Main />
          <NextScript />
        </body>
      </Html>
    )
  }
}

export default MyDocument
```

### 1.13.2 Extendiendo App

Igual que en el ejemplo de document, Nextjs proporciona una
[plantilla](https://nextjs.org/docs/advanced-features/custom-app) que
podemos usar para personalizar la App

Para hacer uso de esta personalización debemos colocar un archivo
\_app.tsx o \_app.js, si trabajamos con typescript o javascript,
respectivamente.

Esta personalización es para crear temas personalizados, providers,
hacer un layout común o pasar props adicionales a todas las páginas.

Aquí es uno de los mejores lugares para colocar un React.contextProvider

``` javascript
//import App from 'next/app'

function MyApp({ Component, pageProps }) {
  return <Component {...pageProps} />
}

// Only uncomment this method if you have blocking data requirements for
// every single page in your application. This disables the ability to
// perform automatic static optimization, causing every page in your app to
// be server-side rendered.
//
// MyApp.getInitialProps = async (appContext) => {
//   // calls page's `getInitialProps` and fills `appProps.pageProps`
//   const appProps = await App.getInitialProps(appContext);
//
//   return { ...appProps }
// }

export default MyApp
```

Por ejemplo, si quisieramos que todos las páginas conteniera un Navbar y
un footer podemos envolver el componente que devuelve app dentro de otro
componente.

``` javascript
import {AppProps} from 'next/app'
import Layout from '../components/Layout/layout'

function MyApp({Component, pageProps}: AppProps) {
  return (<Layout>
    <Component {...pageProps}/>
  </Layout>)
}

// Only uncomment this method if you have blocking data requirements for
// every single page in your application. This disables the ability to
// perform automatic static optimization, causing every page in your app to
// be server-side rendered.
//
// MyApp.getInitialProps = async (appContext) => {
//    calls page's `getInitialProps` and fills `appProps.pageProps`
//   const appProps = await App.getInitialProps(appContext);
//
//   return { ...appProps }
// }

export default MyApp
```

El componente Layout recibiría un Children que colocaría debajo del
Navbar y arriba del footer.

``` javascript
import React from 'react'
import Navbar from '../Navbar/Navbar'


const Layout: React.FC= ({children}) => {
  return (
    <div>
          <Navbar/>
          {children}
          <footer>This is the footer</footer>
    </div>
  )
}

export default Layout
```

## 1.14 Path Alias

Para evitar la repeticion de salir de componentes una y otra vez

``` javascript
import Component from '../../../../components/component'
```

Para simplificar los paths podemos modificarlos con un archivo
tsconfig.json o jsconfig.json, para typescript o javascript,
respectivamente.

``` javascript
"compilerOptions": {
  "baseUrl": ".",
  "paths": {
    "@database": ["database/db.ts"],
    "@cors": ["cors-middleware.ts"],
    "@components/*": ["components/*"],
    "@store/*": ["store/*"]
  },
```

La diagonal y el asterisco despues de cada componente indica que es el
acceso a muchos archivos

## 1.15 CSS

Nextjs se muestra totalmente agnóstico sobre que tipo de implementación
de [CSS](../../HtmlYCss/1.-HTML-y-CSS.md) se debería usar.

1)  Global CSS (.css)
2)  Module CSS (.module.css)
3)  CSS-in-JS Styled JSX (Mantenida por los creadores de NextJS y
    Vercel)

### 1.15.1 Glocal CSS

Podemos integrarlo directo en el archivo \_app.tsx, de esta manera
estará disponible en todas las páginas-

``` javascript
import '../styles.css'
```

Ahora los estilos disponibles en el archivo styles.css deben estar
disponibles para todos las páginas.

### 1.15.2 Module CSS

El module.css se aplica por componente. Module css aplica hashes para
evitar colisiones dentro de los archivos.

``` javascript
import styles from './layout/module.css'

<div className={styles.container}></div>
```

### 1.15.3 CSS-in-JS

Tenemos que colocar una etiqueta estile con el atributo jsx y dentro los
estilos que queremos especificicar. De la misma manera NextJS creará
hashes para evitar colisiones de nombres.

``` javascript
<div className="container"></div>
<style jsx>{``
  .container {
    background: salmon;
  }
  ``}
</style>
```

### 1.15.4 Usando SASS

Para los que usamos SCSS o SASS 1) Debemos instalar las dependencias
@zeit/next-sass node-sass 2) Crear un archivo con el nombre
next.config.js en el root del proyecto 3) Pegar dentro del archivo
next.config.js\* el siguiente código

``` javascript
const withSass = require('@zeit/next-sass')
   module.exports = withSass({
   cssModules: true
})
```

Esto funciona para estilos globales y modulares.

Adicional a esto, si quieren importar fuentes locales a su proyecto: 1)
Debemos instalar la dependencia npm install --save nextjs-fonts 2)
Dentro del archivo next.config.js escribir el siguiente código

``` javascript
const withSass = require('@zeit/next-sass');
const withFonts = require('nextjs-fonts');

module.exports = withSass(withFonts({
  webpack(config, options) {
   return config;
  },
}));
```

## 1.16 Contenido estático

Nextjs espera una carpeta llamada **public** dentro del root del
proyecto. Podemos servir los contenidos estáticos de esta carpeta
pasando la ruta directamente. La carpeta public puede contener otras
subcarpetas también

``` html
<img src="/tu-imagen-en-public.jpg" alt=""/>
<img src="/subcarpeta/tu-imagen.jpg" alt=""/>
```

### 1.16.1 Imágenes con el componente Image

A partir de NextJS se incorpora un componente de imagen que se encarga
de optimizar la carga de las imágenes de manera perezosa, además de
crear diferentes tamaños para reducir la carga de transferencia.

``` javascript
import Image from 'next/image'

<Image src="/profile-picture.jpg" width="400" height="400" alt="Profile Picture">
```

El ancho y largo se forzan, para minimizar el impacto en el cumulative
layour shift

## 1.17 Pre-render modes

Nextjs nos provee dos maneras de servir el contenido SSG (Static Site
Generation) y SSR (Server Side Rendering)

## 1.18 SSR

El useEffect de React siempre se ejecuta en el navegador, por lo que
siempre va a tomar la función de SSR.

Hay que recordar que con este método pasamos la petición de la api del
lado del cliente al lado del servidor. Cada request que se hace al
servidor implica una petición web, por lo que siempre recibirá el
contenido actualizado, este método es ideal para contenido que se
actualiza constantemente.

### 1.18.1 SSR con getServerSideProps

Su función es comunicar los props de nuestro componente con código que
ejecutamos antes de que Next.js responda al cliente.

Esta función se exporta desde una página, es imposible usarla desde
cualquier otro componente. La función debe ser async y debe retornar los
props. Este método no se ejecutará en modo desarrollo, para verla en
acción deberemos hacer un build y correrlo con npm run build y npm run
start.

``` javascript
export const getServerSideProps = async (params) => {
    return {
        props: {
            ourProps
        }
    }
}
```

Para utilizar los props que nos provee *getServerSideProps* en nuestro
componente, necesitamos pasarselos como props.

``` javascript
const Component = ({ourProps}) => {...}
```

Dado que **el objeto window no existe en un entorno de servidor**,
podemos usar la librería isomorphic-fetch para reemplazar todas las
llamadas a windows.fetch por fetch. Considera que **Fetch solamente
aceptará url absolutas**

``` javascript
import fetch from 'isomorphic-fetch'

export const getServerSideProps = async (params) => {
    const response = await fetch('url-absoluta')
    const ourData = await response.json()

    return {
        props: {
            ourData
        }
    }
}
```

## 1.19 Variables de entorno

Si queremos que nextjs cargue variables de entorno en nuestra aplicación
deberemos crear un archivo llamado .env en la raiz de la aplicación

``` javascript
HOSTNAME=localhost
PORT=8080
HOST=http://$HOSTNAME:$PORT
```

Las variables que se carguen de esta manera estarán solo disponibles en
el entorno de node, no se expondrán al navegador.

Si queremos exponer una variable al navegador deberemos usar el prefijo
*NEXT_PUBLIC\_*

``` javascript
NEXT_PUBLIC_ANALYTICS_ID=abcdefghijk
```

Lo que permite que la variable se inyecte en el código Javascript

Podemos usar variables diferentes para desarrollo creando diferentes
archivos .env

-   .env: comunes a todos los entornos
-   .env.development: para desarrollo
-   .env.production: para producción
-   .env.local: sobreescribe todos los anteriores

Las 3 primeras deben incluirse en los repositorios. *.env.local* debería
añadirse a *.gitignore* y *.env.local* contendrá aquellos valores
sensibles.

## 1.20 SSG

El método de SSG creará páginas estáticas para servir contenido por
medio de Nextjs. La implementación consiste en hacer una única petición
y, posteriormente generar el contenido estático.

El SSG es ideal para contenido que no cambia con frecuencia.

### 1.20.1 SSG con getStaticProps

Esta función se exporta desde una página, es imposible usarla desde
cualquier otro componente. Este método no se ejecutará en modo
desarrollo, para verla en acción deberemos hacer un build y correrlo con
npm run build y npm run start.

``` javascript
import { getStaticProps } from 'next'

export const getStaticProps = async (params) => {
    return {
        props: {
            ourProps
        }
    }
}
```

Para que nuestro componente puede usar los props tenemos que pasárselos
como argumento.

``` javascript
const Component = ({ourProps}) => {...}
```

Así mismo debemos cambiar todos los métodos que no existen en un
contexto de servidor, como fetch.

### 1.20.2 SSG Páginas dinámicas

Estas páginas cambiarán

``` javascript
import { getStaticProps } from 'next'
import fetch from 'isomorphic-fetch'

export const getStaticProps = async ({ params }) => {
    const id = params?.id as string
    const response = await fetch(`https://tu-url-absoluta.com/api/${id}`)

    const {data: ourProps } = await response.json()

    return {
        props: {
            ourProps
        }
    }
}
```

## 1.21 Static Dynamic Static Generation

Con Static dynamic static generation podemos generar sitios estáticos
para una gran cantidad de páginas dinámicas, para eso necesitaremos dos
funciones:

-   getStaticProps, que indica los props respectivos para cada página
    dinámica.
-   getStaticPaths, que retornará la lista de páginas dinámicas a crear.

### 1.21.1 SDSG con getStaticPaths

NextJs requiere que le digamos de antemano todas las páginas dinámicas,
aquellas que usan corchetes en su sintaxis, por ejemplo *\[id\].js*, que
necesitará renderizar.

El método *getStaticProps* funciona para **solo una página**, por lo que
necesitamos otro método

Esta función debe retornar un objeto con la propiedad paths, con los id
de las páginas que se van a generar.

El objeto path, debe ser una lista de objetos con los id o valor
dinámico de las páginas a generar.

La diferencia entre getStaticProps y getStaticPaths radica en que el
primero obtiene la información o props para ser usados en el componente,
mientras que el segundo le dice a Next.js cuántas y qué páginas se
producirán.

``` javascript
// [id].js
import { getStaticPaths } from 'next'

export const getStaticPaths = async () => {
    return {
        paths: [
            {id: ...}, // podría ser variable para un archivo [variable].js
            {id: ...} //
        ]
    }

}
```

Podemos usar métodos como map, para generar estas rutas de manera
dinámica a partir de una petición a una api.

``` javascript
import { getStaticProps } from 'next'

export const getStaticPaths = async () => {
    const response = await fetch('https://tu-ruta-dinamica.com/api')
    const {data: ourProps} = await response.json

    // paths es una lista
    const paths = ourProps.map((data)=>({
        params: {
            id: data.id
        }
    }))

    return {
        paths: paths, // o paths usando el shortcut,
    }

}
```

Hay un segunda propiedad a indicar en el return. La propiedad se llama
fallback. Lo que hace es que cualquier página que no se incluya en los
paths nos retornará un error 404.

``` javascript
import { getStaticProps } from 'next'

export const getStaticPaths = async () => {
    const response = await fetch('https://tu-ruta-dinamica.com/api')
    const {data: ourProps} = await response.json

    const paths = ourProps.map((data)=>({
        params: {
            id: data.id,
        }
    }))

    return {
        paths: paths, // o paths usando el shortcut,
        fallback: false 
    }

}
```

Ahora con getStaticProps vamos a obtener cada uno de los id con su
respectivo parámetro para que los procese y obtenga los props que van a
ser usados para renderizar las páginas dinámicas.

``` javascript
export const getStaticProps: GetStaticProps = async ({ params }) => {
   const id = params?.id
   const response = await fetch(
   `https://sitio/api/product/${id}`
   )
   const { product } = await response.json()

   return {
      props: {
         product,
      },
   }
}
```

## 1.22 Deploy

Además de hacer deploy con Vercel se puede hacer un deploy de estáticos
haciendo un export por medio de next. Al usar next export se producirán
archivos planos de HTML, CSS y JavaScript desde Next.js

``` javascript
"scripts": {
    ...,
    "export": "next export"
    ...,
}
```

Tras correr el comando nos generará una carpeta llamada out. Esta
carpeta contiene páginas estáticas en html completamente planas. Estás
páginas podemos usarlas con cualquier servidor que sirva html plano.

## 1.23 Diferencia entre next build y next export

El primero construye una aplicación lista para producción de Node. El
segundo produce archivos estáticos.

## 1.24 Métricas

NextJs nos permite obtener métricas al exportar la funcion
reportWebVitals desde el archivo \_app.js o \_app.tsx. Estas podemos
mostrarlas o procesarlas de la manera en la que nosotros querramos.

``` javascript
export function reportWebVitals(metric){
    console.log(metric)
    process(metric)
}
```

## 1.25 Optimización de imagenes AVIF

A partir de la versión Nextjs 12, cuenta con soporte de optimización
para imágenes formato AVIF. Se activa modificando la propiedad
*images.format* en el archivo *next.config.js*

``` javascript
module.exports = {
   images: {
      formats: ['image/avif', 'image/webp']
   }
}
```

## 1.26 Troubleshooting

A veces los layouts no salen como queremos, sobre todo cuando usamos un
grid como estructura para el root de la aplicación. Si es el caso, hay
que recordar que la aplicación de nextjs se encuentra como hijo directo
de un div con un id igual a *\_\_next*, este id puede recibir sus
propios estilos CSS.

``` css
#__next {
   height: 100%;   
}
```
## Autenticación 

### 1.1 Autenticación clásica y moderna

Existen dos modelos de autenticación: clásica y la moderna.

### 1.1.1 Clásica

Se realiza por cookies. Se crea un objeto en el servidor que persiste en
todos los request del cliente. Generlamente usada por los frameworks de
PHP, Django y sistemas antiguos.

Es stateful, porque el servidor mantiene y controla por completo las
sesiones.

### 1.1.2 Moderna

Se crea un token firmado por el servidor y enviado al cliente. El
cliente puede leer algunas partes del token, pero no crear nuevos. El
servidor se encarga de verificar el token y otorgarle acceso.

Es stateless, por que el servidor no lleva un registro del número de
tokens creados. La verificación se basa en la firma criptográfica.

Tiene la ventaja de que se ahorra espacio, pues no se necesita guardar
los tokens en el servidor.

## 1.2 Oauth

Estandar abierto para la delegación de acceso que evita el usar las
contraseñas de los usuarios.

## 1.3 Patrones de autenticación

1.  validar en el cliente
2.  validar desde el servidor

## 1.4 Servicios de autenticación

Para el lado del cliente.

-   Firebase
-   Magic
-   Auth0

Para el lado del servidor, compatibles con cualquier DB

-   Iron/
-   iron-session
-   Auth0

## 1.5 Nextauth.js

Open source y construido para next.js siguiendo buenas prácticas de
seguridad.

### 1.5.1 Configuración

Instalar next-auth

``` go
npm i next-auth
```

Crear una variable de entorno en .env o .env.local

``` javascript
NEXTAUTH_URL=http://localhost:3000
```

Envolver todos los componentes que queramos que tengan acceso a la
sesión, para eso es conveniente usar el archivo *\_app.tsx*. Le pasamos
el objeto *session* que recibimos desde nextjs como un prop a nuestro
componente.

``` javascript
import type { AppProps } from 'next/app'
import { SessionProvider } from "next-auth/react"

export default function App({ Component, pageProps: { session, pageProps } }: AppProps) {

  return (
    <SessionProvider session={session}>
      <App/>
    </SessionProvider>)
}

```

Si estás usando el nuevo modelo de app route puedes agregar este session provider de la siguiente manera dentro de una carpeta llamada components dentro de app:

```javascript
// mark as client component
"use client";
import { SessionProvider } from "next-auth/react"

import React from 'react'

const SessionWrapper = ({children}: {children: React.ReactNode}) => {
  return (
    <SessionProvider>{children}</SessionProvider>
  )
}

export default SessionWrapper
```

Para posteriormente importarlo a nuestro archivo layout.tsx

``` javascript
import SessionWrapper from "./components/sessionWrapper";

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <SessionWrapper>
    <html lang="en">
      <body className={inter.className}>{children}</body>
    </html>
    </SessionWrapper>
  );
}

```


A continuación creamos un archivo dentro de la carpeta *pages/api/auth*
para tener una ruta dinámica, este archivo se llamará
*\[...nextauth\].ts* y tendrá un objeto llamado options que le pasaremos
a NextAuth.

``` javascript
import NextAuth from "next-auth";
import type { NextAuthOptions } from "next-auth";

const options: NextAuthOptions = {
    theme: 'light',
    debug: true,
    session: {},
    jwt: {},
    providers: [],
}

export default NextAuth(options)
```

En caso de que estés usando el nuevo modelo de App Route crea un archivo en *app/api/auth/[…nextauth]/route.ts*. NextAuth recibirá como único parámetro las opciones de autenticación, tal cual las recibe el bloque de código anterior.

Y los exportamos como GET y POST para que sea compatible con el modelo App Route de Nextjs

``` javascript
import NextAuth from "next-auth"

const handler = NextAuth({
  ...
})

export { handler as GET, handler as POST }
```

El objeto options tendrá una propiedad llamada providers que se refiere
a los diferentes métodos de autenticación. Hay muchos proveedores de
autenticación que se encuentran disponibles en la [documentación de
NextAuth](https://next-auth.js.org/configuration/providers#oauth-providers)

## 1.6 Autenticación manual

Provider usa oauth por debajo para manejar la autenticación. Si
accedemos a la propiedad *Credentials* seremos nosotros quienes nos
encargaremos de la autenticación.

``` javascript
import Credentials from "next-auth/providers/credentials"

providers: [Credentials({
    name: 'Credentials',
    credentials: {
        password: {
            type: 'password',
            label: 'Nunca pares de...'
        }
    },
    async authorize(credentials, req) {
        const res = await fetch(`${process.env.NEXTAUTH_URL}/api/auth/credentials`, {
            method: 'POST',
            body: JSON.stringify(credentials),
            headers: new Headers({ 'content-type': 'application/json' })
        })
        const user = await res.json()
        if (res.ok && user) {
            return user
        }
        return null
    }
})]
```

### 1.6.1 Creando una pantalla de login

El campo credentials será un objeto con diferentes atributos html5, aqui
especificamos el password y el label. Nextjs se encargará de crear
automáticamente la página.

La configuración anterior creará una pantalla de loggeo de manera
automática en la ruta */api/auth/signin*

![image](Notes/Nextjs/img/NextjsAuthSignin.png)

### 1.6.2 Función authorize

La función authorize llamará al provider que especificamos y se ejecuta
cuando intentamos hacer un loggeo en la pantalla de login.

La función authoriza llamará a su método de autenticación, el cual debe retornar una respuesta
y, en caso de ser necesario, un objeto.

Dado que especificamos 'Credentials' como la propiedad name en el objeto
*providers* de *NextAuthOptions*, crearemos un archivo con el mismo
nombre dentro de *pages/api/auth/*, llamado Credentials.ts que contendrá la
función que usaremos para autentificar al usuario. En caso de que la
autenticación sea exitosa, retornaremos un usuario. 

``` javascript
const credentials: NextApiHandler<User> = async (request: NextApiRequest, response: NextApiResponse) => {
    const invalidCredentials = { "message": "invalid credentials" }
    // Only POST method is valid
    if (request.method !== 'POST') {
        response.status(405).end()
        return
    }
    try {
        const loginRequest = await fetch(loginUrl, {
            method: 'POST',
            body: JSON.stringify(request.body),
            headers: new Headers({ 'content-type': 'application/json' })
        })
        // Invalid credentials
        if (loginRequest.status !== 200) {
            //TODO Bug, always returns 200 see https://github.com/vercel/next.js/issues/46621
            response.json(invalidCredentials)
            response.status(loginRequest.status).end()
            return
        }
        // Valid credentials
        if (loginRequest.status === 200) {
            const { key } = await loginRequest.json()
            // If user managed to login in server, get its current data from this endpoint using newly adquired token
            const currentUser = await fetch(getCurrentUser, {
                method: 'GET',
                // This route is only for authenticated users, add token to headers
                headers: new Headers({ 'content-type': 'application/json', 'Authorization': `Token ${key}` },)
            })
            const userData = await currentUser.json()
            response.json({ ...userData, "token": key })
            response.status(200).end()
            return
        }
    } catch (err) {
        response.json(err);
        response.status(500).end();
    }
}

export default credentials
```

## 1.7 Cookies de Nextjs

Si ahora nos loggeamos en la pantalla creada por nextjs y la
autenticación es exitosa, tendremos una cookie de sesión llamada
*next-auth.session-token*. Esta cookie viene con la propiedad de
HttpOnly y SameSite, por lo que es innaccesible para el código
javascript del frontend.

La propiedad Secure se utilizará solo cuando la conexión sea por HTTPS.

El token es firmado por defecto (JWS) pero no es encriptado (JWE)

``` bash
next-auth.session-token=eyJhbG...
```

## 1.8 Objeto sessión

El objeto de sesión que viene en la cookie *next-auth.session-token* es
innaccesible desde el frontend, por su propiedad HttpOnly, por lo que,
para acceder a los datos de sesión usaremos el hook useSession, que hace
una petición a la api */api/auth/session* que retorna los datos de la
sesión.

``` javascript
{
"user": {
    "name": "usuario",
    "email": "usuario@correo.com",
    "image": null
},
    "expires": "2021-11-09T20:11:42.029Z"
}
```

## 1.9 Cierre de sesión

Nextjs provee métodos para abrir y cerrar sesiones. Podemos usar estos
métodos para crear componentes con funcionamiento personalizado.

``` javascript
import { signIn, signOut, useSession } from "next-auth/client";

function LoginLogout() {
    const [session] = useSession()
    console.log(session)
    if (session == null) {
        return <Button onClick={ () => signIn()}>Login</Button>
    }
        return <Button onClick={ () => signOut()}>Logout</Button>
}
```

## 1.10 Manejando el flash of unauthenticated

Este flash sucede justo despúes del cambio de estado entre un estado de
sesión iniciada. El hook *useSession* contiene también un estado de
loading que podemos obtener. De esta manera, si se está cargando react
no renderizará el componente original

``` javascript
const [session, loading] = useSession()

if(loading){return null}
```

## 1.11 Autenticando con Github

Creamos un Oauth application en
[Github](https://github.com/settings/apps) y especificamos el callback
como
[api/auth/callback/github](http://localhost:3000/api/auth/callback/github)
Nextjs ya entiende como manejar esta url.

Ahora agregamos un Provider a la configuración en \[...nextauth\].ts

``` javascript
providers: [
    Providers.GitHub({
        clientId: process.env.AUTH_GITHUB_ID,
        clientSecret: process.env.AUTH_GITHUB_SECRET
    }),
]
```

Tras agregar los valores en nuestro archivo de variables de entorno.
Tendremos un nuevo botón en la página de signin creada por nextjs en
*api/auth/signin*

## 1.12 JWT

si no existe una base de datos, se utiliza JWT almacenando el token en
una cookie.

## 1.13 Protegiendo rutas API

Podemos proteger las rutas de la carpeta api, que provee los resultados
para el backend, simplemente obteniendo el objeto session y observando
si tiene contenido. getSession Puede usarse tanto del lado del cliente
como del servidor.

``` javascript
const session = await getSession({ req: request })

if(session==null) {
    response.status(401).end()
    return
}
```

## 1.14 Protegiendo rutas en el frontend

useSession está escuchando constantemente al objeto window para
actualizar las páginas escuchando los cambios en el objeto session, para
validar la sesión constanemente. **useSession solo puede usarse del lado
del cliente y dentro de un componente de React**

``` javascript
import { useSession } from 'next-auth/client

const [session, loading] = useSession()

if (session == null) {
    return  <AccessDenied />
}
```

## 1.15 Soluciones basadas en Node.js: Passport, Auth0, emails y bases de datos

NextAuth ofrece soluciones para conectar con proveedores de email.

``` javascript
Providers.Email({
    server: 'servidor',
    host:'host',
    port:1111,
    auth: {
        name:'name',
        password:'password'
    }
})
```

Prisma es un ORM que está ganando popularidad y puede manejar diferentes
bases de datos.
## Extender el objeto session

Para extender el objeto session necesitamos comprender el flujo desde la función authorize en, que pasará el objeto usuario a la función jwt del callback en [...nextauth].ts, para posteriormente enviarlo al callback sessión. De esta manera tenemos que pasar primero el usuario al token y posteriormente a la sessión.


``` javascript
callbacks: {
    async jwt({ token, user }) {
        /* Step 1: update the token based on the user object */
        if (user) {
            token.username = user.username
            token.pk = user.pk
            token.token = user.token
        }
        return token;
    },
    async session({ session, token }) {
        /* Step 2: update the session.user based on the token object */
        if (token && session.user) {
            session.user.username = token.username
            session.user.pk = token.pk
            session.user.token = token.token
        }
        return session;
    },
}


Y, si estamos usando typescript crear los tipos adecuados, extendiendo los types JWT, User y Session.

``` javascript
import NextAuth, { DefaultSession, DefaultUser, Session as S } from "next-auth"
import { JWT } from "next-auth/jwt"


declare module 'next-auth/jwt' {
    /** Returned by the `jwt` callback and `getToken`, when using JWT sessions */
    interface JWT {
        username: string;
        token: string
        pk: number;
    }
}

declare module "next-auth" {
    interface User extends DefaultUser {
        username: string;
        token: string
        pk: number;
    }

    interface Session extends S {
        user?: {
            username: string;
            token: string
            pk: number;
        }
    }
}
```## Sobreescribir la página signin

Para sobreescribir la página signin, ya sea para meterla dentro de un layout, o para cambiar su apariencia predeterminada, agregamos el atributo pages en [...nextauth].ts

``` javascript
    pages: {
        signIn: "/auth/signin",
    }
```


Y creamos un archivo en */auth/signin/<provider>.ts*, con el formulario como lo querramos, este archivo puede obtener los providers por medio del método getProviders para mostrarlo en pantalla, también es importante agregar un campo para el token de protección contra CSRF


``` javascript
import { signIn, getCsrfToken, getProviders } from 'next-auth/react'
import type { GetServerSidePropsContext, InferGetServerSidePropsType } from "next";
import styles from '@styles/forms.module.css'
import { getSession } from 'next-auth/react'
import Link from 'next/link'
import { useRouter } from 'next/router'

const Signin = ({ csrfToken, providers }: InferGetServerSidePropsType<typeof getServerSideProps>) => {
    const router = useRouter()
    const { error } = router.query

    return (
        <div className={styles.formContainer}>
            <form className={styles.form} method="post" action="/api/auth/callback/credentials">
                <input name='csrfToken' type='hidden' defaultValue={csrfToken} />
                <button type="submit" className={styles.submit}>Login</button>
                {
                    providers &&
                    Object.values(providers).map(provider => {
                        if (provider.name === 'credentials') {
                            return
                        }
                        return (
                            <div key={provider.name} style={{ marginBottom: 0 }}>
                                <button className={styles.submit} onClick={() => signIn(provider.id)} >
                                    Sign in with{' '} {provider.name}
                                </button>
                            </div>
                        )
                    })
                }
            </form>
        </div>
    )
}

export default Signin

export async function getServerSideProps(context: GetServerSidePropsContext) {
    const { req } = context
    const session = await getSession({ req })
    if (session) {
        return { redirect: { destination: '/' } }
    }
    const providers = await getProviders()
    const csrfToken = await getCsrfToken(context)
    return {
        props: {
            providers,
            csrfToken
        },
    }
}
```
## Actualizar la sesión

useSession nos provee de un método llamado update, para actualizar la sesión.

``` javascript

export default function Page() {
  const { data: session, status, update } = useSession()
```
## Revisar los parámetros del router

El objeto router de Nextjs cuenta con un parámetro isReady, que le indica si ya se han cargado todos los parámetros de la url.

``` javascript
router.isReady: false
router.query: {}

router.isReady: false
router.query: {"key": "value"}
```
## 3.0 Internacionalización

## 1.1 i18n

Se refiere a la adecuación del idioma, formato fechas, monedas, números,
zonas horarias, de acuerdo a un país y región.

## 1.2 Anatomia de un Locale

Consta de 3 secciones. La primera es el lenguaje, la segunda la
representación del lenguaje y la tercera se refiere a la región

Por ejemplo: la-Scr-RE

-   language (ISO 639)
-   \[Script\] (ISO15924)
-   \[Region\] (ISO 3166-1)

Generalmente la segunda sección, el script, suele omitirse.

## 1.3 Arquitectura

Existe información dinámica e información estática, es decir, texto
hardcodeado en el html.

Podemos separar el contenido:

-   CMS - Contentful: proveniente del servidor. Debe proveer de una API
    con soporte para locale.
-   APP - React: Manejará los labels y los timezone.

## 1.4 Estrategias de rutas i18n

Hay dos estrategias que podemos tomar al respecto

-   sub-atch routing: /es/productos
-   domain routing: .es/productos

## 1.5 Configuración de locales en nextjs.config.js

Especificamos dentro de la propiedad i18n los valores de locales y
defaultLocale, para especificar los idiomas disponibles y el valor por
defecto, respectivamente.

``` javascript
const config = {
  future: {
    webpack5: true,
  },
  images: {
    domains: ['images.ctfassets.net'],
  },
  i18n: {
    locales: ['en-US', 'es'],
    defaultLocale: 'en-US'
  }
}
```

En contenful podemos crear locales en settings\>locale. El valor de
fallback será el valor por defecto, si no tenemos todas las traducciones
del locale activado, usará este.

Para especificar un parámetro, lo pasamos como parámetro a graphql a
nuestra consulta.

``` javascript
getItemCollection (limit: 10, skip: 100, locale: "es"){}
```

La función getStaticProps recibe el parámetro locale que fijamos en
nextjs.config.js, por lo que si queremos especificarlo de acuerdo a la
url

``` javascript
export const getStaticProps: GetStaticProps<myProps> = async ({ locale }) => {
    getItemCollection (limit: 10, skip: 100, locale){}
}
```

Podemos crear traducciones en la sección Content de Contentful.

## 1.6 i18n en páginas dinámicas

Para usar i18n en páginas dinámicas necesitamos generar los paths
correspondientes por cada locale existente, junto con sus respectivos
params.

``` javascript
// pages/blog/[slug].js
export const getStaticPaths = ({ locales }) => {
return {
    paths: [
    // if no `locale` is provided only the defaultLocale will be generated
    { params: { slug: 'post-1' }, locale: 'en-US' },
    { params: { slug: 'post-1' }, locale: 'fr' },
    ],
    fallback: true,
}
}
```

## 1.7 i18n en páginas no dinámicas

getStaticPaths recibe *locales* (en plural) como parámetro

``` javascript
export const getStaticPaths: GetStaticPaths = async ({ locales }) => {}
```

Si usas typescript recuerda agregarlo al tipo de salida

``` javascript
type PathType = {
  params: {
    slug: string
  },
  locale: string
}
```

Podemos usar flatMap para aplanar el array y dejar un objeto con la
forma

``` javascript
export const getStaticPaths = ({ locales }) => {
  return {
    paths: [
      { params: { slug: 'post-1' }, locale: 'en-US' },
      { params: { slug: 'post-1' }, locale: 'fr' },
    ],
    fallback: true,
  }
}
```

## 1.8 Detección automática con Nextjs

Nextjs detecta automáticamente el idioma usando el header de preferencia
"Accept-language" que elige el navegador. Podemos desactivar la función
colocando el parámetro localDetection en false

``` javascript
module.exports = {
    i18n: {
        localeDetection: false,
    }
}
```

El componente Link que provee nextjs redirige automáticamente a la url
con el locale activo.

Si queremos modificar el comportamiento podemos hacer un router.push

``` javascript
router.push(
    url: string,
    as?: string, 
    { locale: 'br'}
)
```

También podemos eshabilitar la opción modificando el prop del componente
Link

``` javascript
<Link href="/br/about-us" locale={ false }/>
```

### 1.8.1 i18n cookie

Nextjs también puede colocar una preferencia de idioma por medio de la
cookie llamada NEXT_LOCALE, que sería leída por Nextjs. La cookie
NEXT_LOCALE tiene prioridad de la detección automática de Nextjs.

``` javascript
setCookie('NEXT_LOCALE', 'es')
```

## 1.9 Arquitectura de i18n para labels

Todo el texto se extrae del código y se mueve a un archivo JSON
(locales/es.json)

Se crea un archivo para cada idioma. Se carga el archivo según el local.

``` javascript
function myComponent(){
     <h3>{myText.key}</h3>
}
```

Separamos cada traducción por componente. Es decir, algo parecido a:

``` javascript
// locale/es/componente.json
{
  "buy": "Comprar",
  "vender": "Vender" 
}
```

Podriamos crear un componente similar a

``` javascript
function useTranslate(){
    const ctx = useContext(localeContext)
    const locale = ctx.getCurrentLocale()
    const labels = ctx.labels.get(locale)
    return labels
}
```

### 1.9.1 Librerías de i18n en React

Ya existen librerías que manejan la i18n en react.

-   react-intl
-   react-i18next
-   lingui
-   rosetta
-   next-intl

## 1.10 i18n con next-i18next

Primero debemos envolver nuestra app en la función appWithTranslation
que nos provee la librería.

``` javascript
import { appWithTranslation } from 'next-i18next'

export function index(){}

export default appWithTranslation(index)
```

Para implementar SSR debemos asegurarnos de devolver la configuración de
i18n en nuestra función getStaticProps:

``` javascript
import { serverSideTranslations } from 'next-i18next/ServerSideTranslations'
export const getStaticProps: GetStaticProps<OurProps> = async({locale}) => {

    const i18nConf = await ServerSideTranslations(locale!)

    return {
        props: {
            items, 
            ...i18nConf
            }
        }

}
```

Tras lo anterior ya podemos usar el hook para marcar las cadenas que
queremos traducir. Solo tenemos que indicarle, por medio de un array, el
componente o los componentes en los que se encuentran las traducciones
del componente.

``` javascript
import { useTranslation } from 'next-i18next'

export function componente(){
    const {t} = useTranslation(['common'])
    return <h2>{t('pages')}</h2>
}
```
## Seguridad

* [4.1-A1-Injection](<4.1-A1-Injection.md>)
* [4.2-A7-Cross-site-scripting-o-XSS](<4.2-A7-Cross-site-scripting-o-XSS.md>)
* [4.3-Otras-reglas-de-prevención](<4.3-Otras-reglas-de-prevención.md>)
* [4.4-Broken-Authentication](<4.4-Broken-Authentication.md>)
* [4.5-Protección-de-sesiones-en-el-cliente](<4.5-Protección-de-sesiones-en-el-cliente.md>)
* [4.6-Donde-guardar-una-sessión](<4.6-Donde-guardar-una-sessión.md>)
* [4.7-Cookies](<4.7-Cookies.md>)
* [4.8-Web-Storage](<4.8-Web-Storage.md>)
* [4.9-Dónde-guardar-un-token-JWT](<4.9-Dónde-guardar-un-token-JWT.md>)
* [4.10-Estrategia-de-las-dos-cookies](<4.10-Estrategia-de-las-dos-cookies.md>)
* [4.11-Sensitive-data-exposure](<4.11-Sensitive-data-exposure.md>)
* [4.12-Token-firmados-y-encriptados-en-Nextjs](<4.12-Token-firmados-y-encriptados-en-Nextjs.md>)
* [4.13-OWASP](<4.13-OWASP>)
## 1.1 A1: Injection

Es el agregar parte de una consulta para crear instrucciones extras que
serán ejecutadas en el lado del servidor.

``` bash
'Name'); DROP TABLE USERS;
```

Generalmente estos errores suceden al usar consultas sql por medio de
vanilla js, python, etc.

### 1.1.1 Prevención de Injection

-   Evitar usar el intérprete.
-   Usar herramientas ORM como Prisma, TypeORM.
-   Validar siempre los datos de entrada.

## 1.2 A7: Cross-site scripting o XSS

Son un tipo de ataque donde se logra ejecutar código en los navegadores
de los usuarios que acceden a un sitio web legítimo. Por ejemplo, la
inserción de etiquetas script para ejecutar código arbitrario o
simplemente con propósitos intrusivos como alerts y confirms de
javascript.

### 1.2.1 Prevención de XSS

-   Validación en formularios por medio de HTML5 (usando los tipos de
    input) o Yup.
-   El texto debe ser usado para fines de presentación.

### 1.2.2 Sanitize HTML

Sanitize HTML nos permite sanear el texto que recibimos de los usuarios.

``` javascript
const safeHTML = sanitizeHTML(value)

const safeHTMLWithTags = sanitizeHTML(value, {
    allowedTags: ['strong', 'a', 'em', 'b'],
    allowedAttributes: {
        a: ['href', 'target']
    }
})
```

## 1.3 Otras reglas de prevención

-   Evitar el uso de eval
-   Evitar document.write, inner.HTML y outerHTML
-   Usar con precaución node.innerText
-   Preferir usar node.textContent

## 1.4 Broken Authentication

Recomendaciones, usar oAuth, OpenID

## 1.5 Protección de sesiones en el cliente

Para proteger una sesión creamos

``` javascript
if (session == null) {
    return <p>Acceso denegado</p>
}
```

Oauth en nextjs se encargará de escuchar los cambios en la sesión y
devolverá el componente que le indiquemos.

Es buena práctica crear un componente separado para manejar el contenido
protegido

``` javascript
<Protected>Contenido Protegido</Protected>
```

## 1.6 ¿Donde guardar una sessión?

Podemos guardarlo en las cookies o en el local storage, cada cual con
sus fortalezas y debilidades.

El sessión ID no debe ser obvio, estar expuesto en la URL o dar
información sobre las tecnologías o frameworks del cual provienen.

## 1.7 Cookies

Hay algunos atributos muy útiles para manejar la seguridad de nuestras
cookies.

Es la opción preferida, además tenemos múltiples atributos que nos
ayudan con la seguridad.

### 1.7.1 Atributo secure

Para mandar la cookie solo por una conexión segura de HTTPS.

### 1.7.2 Atributo HttpOnly

Las cookies serán accesibles únicamente por http, no por código
javascript.

### 1.7.3 Atributo SameSite

Controla si una cookie de terceros debe enviarse en peticiones entre
sitios.

Sus atributos son:

-   None: Las cookies se pueden usar entre sitios
-   Lax: Permite a las peticiones GET accesar a las cookies, pero no a
    las POST.
-   Strict: Deshabilitará el envío de las cookies a cualquier sitio web
    de terceros. Las cookies se enviarán solo si el dominio es el mismo
    que el path, para el cual la cookie ha sido colocada.

### 1.7.4 Path

Limita el alcance de la cookie usando el flag *Path*.

### 1.7.5 Expiration

Usa una fecha de expiración tan corta como sea posible.

## 1.8 Web Storage

-   LocalStorage. Persistente a través de sesiones en páginas del mismo
    origen. **Nunca debe usarse para guardar información sensible**
-   SessionStorage. Persiste solo mientras la pestaña está abierta.

## 1.9 ¿Dónde guardar un token JWT?

### 1.9.1 JWT en Cookies

Estaremos seguros contra ataques XSS, pero inseguros contra CSRF.

### 1.9.2 Session Storage

Nos mantendremos seguros contra ataques de CSRF, pero estaremos
inseguros contra ataques XSS.

### 1.9.3 Recomendaciones de OWASP

La recomendación para sesiones es

-   Guardar tokens en el sessiónStorage.
-   Fingerprint adicional contra XSS

La recomendación para cookies es

-   Si se usan cookies usar los atributos Secure y HttpOnly.
-   PRotección adicional contra CSRF.

### 1.9.4 Next Auth

Nextjs se encarga de realizar la Autenticación en el navegador. Los JWT
se crea en el server y se manda como cookie con los atributos Secure y
HttpOnly. Además, Next Auth usa CSRF para páginas de login y logout.

### 1.9.5 Guardar tokens

Podemos usar un webworker para interceptar las peticiones web y
adjuntarles un token, de la misma manera puede recibir las peticiones y
limpiarlas de datos sensibles. Una desventaja es que no todos los
navegadores tienen soporte para estos, además es sensible al mismo tipo
de vulnerabilidades.

## 1.10 Estrategia de las dos cookies

Peter Locke propone llevar a cabo la autenticación diviendo el JWT en
dos cookies:

-   header.payload. Con atributo secure y duración de 30 minutos. Pueden
    leerse por el frontend.
-   signature. Con atributo secure y HttpOnly. No disponible para el
    frontend y que se pierde una vez se cierra el browser.

Más información en su [post en
medium](https://medium.com/lightrail/getting-token-authentication-right-in-a-stateless-single-page-application-57d0c6474e3)

## 1.11 Sensitive data exposure

Todo tipo de información sensible jamás debe de mandarse en un token que
persista en el tiempo ni almacenarse en el local storage.

### 1.11.1 ¿Cuánto tiempo debería durar un access_token?

A mayor tiempo de existencia de duración mayor peligro. Pero depende del
tipo de aplicación. Se tiene que encontrar un balance. No es lo mismo el
tiempo de sesión para un banco o una red social. El primero querra un
tiempo muy corto, mientras que el segundo lo más largo posible.

OWASP recomienda tiempos muy cortos de almacenaje.

Session Storage es ideal para bancos, páginas de trading u otra
información sensible pues la sesión dura hasta que se cierra el
navegador.

### 1.11.2 Ajustar tiempo con Next Auth

``` javascript
const options: NextAuthOptions = {
session: {
    jwt: true,
    MaxAge: 60 * 15 
    }
}
```

## 1.12 Token firmados y encriptados en Nextjs

En NextAuth, de manera predeterminada, el token es firmado pero no
encriptado.

### 1.12.1 Tiempo de sesión

Para cambiar el secreto del JWT.

``` javascript
const options: NextAuthOptions = {
session: {
    jwt: true,
    MaxAge: 60 * 15
    },
jwt: {
    secret: process.env.AUTH_JWT_SECRET
    }
}
```

Donde AUTH_JWT_SECRET debe ser una llave SHA de 256 bits.

### 1.12.2 Llave de firmado

También podemos definir la llave que se usa para firmar en el mismo
objeto jwt en NextAuthOptions

``` javascript
const options: NextAuthOptions = {
session: {
    jwt: true,
    MaxAge: 60 * 15
    },
jwt: {
    secret: process.env.AUTH_JWT_SECRET,
    signingKey: process.env.AUTH_JWT_SIGNING_KEY
    }
}
```

Estas llaves pueden crearse con el paquete de npm llamado
*node-jose-tools*.

``` bash
jose newkey -s 256 -t oct -a HS512
# {kty: "oct", kid: "", alg: "HS512", k: ""}
```

El resultado se pasa tal cual como un objeto.

También podemos crear una llave simétrica para encriptar

``` javascript
const options: NextAuthOptions = {
    session: {
        jwt: true,
        MaxAge: 60 * 15
    },
    jwt: {
        secret: process.env.AUTH_JWT_SECRET,
        signingKey: process.env.AUTH_JWT_SIGNING_KEY,
        encryption: true,
        encryptionKey: process.env.AUTH_ENCRYPTION_KEY
        }
}
```

De la misma manera que en el ejemplo anterior, es posible generar la
AUTH_ENCRYPTION_KEY con el paquete *node-jose-tools*

``` bash
jose newkey -s 256 -t oct -a A256GCM
# {...}
```

Para especificar otros algoritmos de cifrado cambiamos la opción
*decryptionOptions*.

``` javascript
jwt: {
    decryptionOptions = {
        algorithms: ['A256GM']
    }
}
```

También existen hooks para especificar nuestras propias opciones de
cifrado

``` javascript
jwt: {
    async encode({secret, token, maxAge}) {},
    async decode({secret, token, maxAge}) {},
}
```
## 4.13 OWASP

OWASP es una organización que aboga por las buenas prácticas de
seguridad en las aplicaciones web, su [sitio web](https://owasp.org)
contiene una serie de recomendaciones; generales, para cada aspecto de
un sitio web, desde la recuperación de contraseña hasta el loggeo; y
específicas, destinadas a una sola tecnología como docker o ruby on
rails.

## 5.0 JAM Stack

Jamstack es una arquitectura de desarrollo web moderna basada en
JavaScript del lado del cliente, API reutilizables y marcado
predefinido, en donde el contenido prerenderizado es servido por un CDN
y se vuelve dinámico usando APIs y serverless functions.

Existen dos tipos de formas de renderizar una aplicación:

-   Navegador
-   Servidor

## 1.1 Tipos de renderizado

Procesamiento de fragmentos de código y datos para mostrar un resultado.
Por ejemplo de JS a HTML.

Modos de rendering:

-   Client-side: El rendering sucede en el navegador. Ejemplo:
    create-react-app
-   Server-side: El servidor de backend se encarga del renderizado, ya
    sea total o parcial. Ejemplos con Python (Django), PHP, etc.
-   Static rendering: Rendering por compilado de la aplicación. Este
    proceso se ejecuta una sola vez. Por ejemplo: Nextjs, Jekyll,
    Gatsby, Hugo.

Next.js permite crear aplicaciones híbridas, con uno o varios de los
tipos de renderizado.

## 1.2 Arquitectura

La arquitectura general de una aplicación Jamstack es la siguiente:

Datos-\> Generador estático -\> Html/CSS

Para este ejemplo podemos usar un CMS, entre las opciones están:

-   contentful
-   Prismic
-   Sanity
-   storyblock
-   directus

## 1.3 Instalación del contentful-cli

Primero necesitamos instalar el cli de contentful, por lo que lo haremos
usando npm

``` bash
npm install -g contentful-cli
```

Necesitaremos pasarle una configuración con la siguiente forma:

``` json
{
  "spaceId": "space_id",
  "managementToken": "CFPAT-token",
  "contentFile": "import/contentful-platzipedia.json"
}
```

Ahora importamos la configuración directo desde nuestro archivo.

``` bash
contentful space import --config import/config.json
```

## 1.4 Autogeneración de data con graphql

Es posible generar tipos de typescript usando graphql con el siguiente
recurso:

<https://www.graphql-code-generator.com/>

## 1.5 getStaticProps

Get static props permite efectuar el renderizado en el servidor.
useEffect no es compatible con el renderizado en el servidor por lo que
debe reemplazarse por el método getStaticProps. Para Typescript le
pasamos el tipo GetStaticProps que nos provee nextjs.

``` javascript
import { GetStaticProps } from 'next'

type HomeProps = { plants: Plant[]}

export const getStaticProps: GetStaticProps<HomeProps> = async () => {

const plants = await getPlantList({ limit: 10 })

  return {
    props: {
      plants
    }
  }
}
```

De la misma manera usamos InferGetStaticPropsType, unido con typeof para
obtener el tipo de los props dinámicamente de getStaticProps

``` javascript
import { GetStaticProps, InferGetStaticPropsType } from 'next'

// ...

export default function Home({plants}: InferGetStaticPropsType<typeof getStaticProps>) {

  return  (
  <Layout>
    <PlantCollection plants={plants} variant="square"/>
  </Layout>
  )
}
```

## 1.6 Ventajas y desventajas de SSG

### 1.6.1 Ventajas de SSG

Archivos estáticos que son faciles de subir para servidor por cualquier
servidor. Esto mejora el SEO y la velocidad de carga.

### 1.6.2 Desventajas de SSG

No todos los sitios se pueden volver archivos estáticos, sobre todos
aquellos que requieren datos actualizados desde la base de datos.

El tiempo de compilado puede incrementarse en proporción directa al
número de páginas. Por lo que en sitios con demasiadas páginas tendremos
problemas con el compilado.

## 1.7 Incremental Site Regeneration

Permite escalar el sitio sin importar el número de páginas por medio de
la generación dinámica de páginas estáticas. Se construye un número bajo
de páginas estáticas y las demás páginas se generan bajo demanda.

Con SSG se tienen que construir todas las páginas en tiempo de
compilación (build time); con ISG solo un fragmento, y el resto se hace
incrementalmente en producción.

ISG permite regenerar las páginas cada cierto periodo de tiempo para
actualizarlas, para hacerlo agregamos un parámetro revalidate dentro de
nuestra función getStaticProps, que le dice a Nextjs durante cuanto
tiempo serán válidas las páginas.

``` javascript
export const getStaticProps: GetStaticProps<HomeProps> = async () => {

  const plants = await getPlantList({ limit: 10 })
  const authors = await getAuthorList()

  return {
    props: {
      plants,
      authors,
    },
    revalidate: 5 * 60
  }
}
```

Para páginas que no cambien es bueno ponerle valores altos, pero para
páginas que cambien seguido o que requieran un estado constante de
actualización podemos ponerle valores muy bajos, de hasta 1 segundo.

### 1.7.1 Leyendo desde el sistema de archivos

En lugar de recibir la información de una API, podemos recibirla desde
el sistema de archivos. Lo anterior es posible porque nextjs ejecuta
getStaticProps desde el servidor.

``` javascript
import fs from 'fs'
import path from 'path'
export const getStaticProps: GetStaticProps<HomeProps> = async () => {
    const plantEntriesToGenerate = fs.readFileSync(path.join(process.cwd(), 'paths.txt'), 'utf-8').toString()
    const plantEntries = plantEntriesToGenerate.split('\n')
    // ...
}
```

## 1.8 Fallback

El parámetro fallback de getStaticPaths puede tomar tres valores,
'blocking', false o true.

``` javascript
export const getStaticPaths: GetStaticPaths = async () => {

  const entries = await getPlantList({ limit: 10 })

  const paths: PathType[] = entries.map(plant=>({
    params: {
      slug: plant.slug,
    }
  }))

  return {
    paths,
    fallback: 'blocking'
  }
}
```

-   false: Devuelve 404 si la página no está prerendrizada.
-   blocking: Si una página no existe, la busca la página en el servidor
    y la devuelve usando SSR. Peticiones futuras servirán la página
    desde la caché. Ideal cuando el prerendrizado no demora mucho
    tiempo.
-   true: Avisa del estado de carga del servidor, útil para devolver
    estados de loading donde avisamos que la página está siendo
    procesado, esto por medio de la propiedad isFallback del objeto
    router que nos provee nextjs

``` javascript
const router = useRouter()

if(router.isFallback){
    return <Spinner/>
    }
```

## 1.9 Enfoque stale-while-revalidate

Cada vez que un usuario ingresa nextjs responde con páginas listas, si
el contenido en contentful cambia. Nextjs empieza a descargar la página
nueva, mientras sigue devolviendo la página antigua, una vez terminada
la nueva página. Todo lo anterior se realiza sin que el usuario lo sepa,
de manera que el usuario siempre reciba una respuesta.

## 1.10 Trade-offs de ISG

Requiere un servidor de Node.js El build-time no aumenta con el número
de páginas No podemos ajustar tiempos de revalidación ante un enlace que
se vuelve viral No es apto para todas las páginas, por ejemplo
dashboard, información en tiempo real, como bancaria, bolsa de valores
ISG no brinda ningún beneficio para sitios con pocas páginas, quizás
hasta 1000 páginas.

## 1.11 SSR ventajas y desventajas

### 1.11.1 Nextjs SSR Ventajas

-   La información siempre estará actualizada
-   Poder modificar la respuesta con base en la petición puede ser muy
    conveniente

### 1.11.2 Nextjs SSR desventajas

-   Golpea el servidor por cada petición y puede ser costoso. (consume
    recursos y consume dinero)

## 1.12 Nextjs Export

Nextjs exporta un renderizado HTML, CSS y Javascript, por lo que el
contenido puede servirse con un servidor de archivos estáticos. Sin
embargo se pierden las funcionalidades de SSR como ISG, SSR, rutas,
i18n, optimización de imágenes, revalidación, etc.
