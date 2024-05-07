# React

React cumple su función como biblioteca ya que para utilizar su código se debe
importar. También es un Framework aunque las convenciones de cómo debe ser
organizado todo no son estrictas.

React está estructurado por componentes que son como pequeños bloques de lego
que al ser unidos forman aplicaciones de React. Estos componentes pueden tener
estilos, ser enlazados a eventos y sus estados pueden ser modificados.

Cambios importantes a partir de la versión 19
- useMemo, useCallback, memo son gestionados automáticamente por el React compiler
- forwardRef se reemplaza por un prop nativo llamado ref
- useContext y throw en las promesas se reemplazará por use(Context)
- <Context.Provider> se reemplaza por <Context>





## 1.1 ReactDOM y React

React y ReactDOM trabajarán en conjunto.

-   React como análogo a createElement
-   ReactDOM a appendChild

ReactDOM.render(que, donde) toma dos argumentos: Qué queremos renderizar y dónde
lo queremos renderizar.

Siempre que escribas JSX es requisito importar React.

## 1.2 Creando una app con Create-react-app

Nota: create-react-app ya está deprecado y el mismo React desaconseja su uso.

### ¿Qué usar en su lugar?

Recomiendan usar las herramientas directas de frameworks como Gatsby, Nextjs o Vite.

## 1.3 ReactDOM

ReactDOM.render() toma dos argumentos: Qué queremos renderizar y dónde lo
queremos renderizar.

Siempre que escribas JSX es requisito importar React.

## 1.4 JSX

JSX es una extensión de JavaScript creada por Facebook para el uso con la
biblioteca React. Sirve de preprocesador (como Sass o Stylus a CSS) y transforma
el código generado con React a JavaScript.

JSX tiene su alternativa que es React.createElement pero es preferible JSX
porque es mucho más legible y expresivo. Ambos tienen el mismo poder y la misma
capacidad.

React.createElement recibe 3 argumentos:

El tipo de elemento que estamos creando sus atributos o props y el children que
es el contenido.

## 1.5 Componentes

Los componentes en React son bloques de construcción.

No hay que confundir un elemento con un componente. Un elemento es a un objeto
como un componente es a una clase.

Es una buena práctica que los componentes vivan en su propio archivo y para ello
se les crea una carpeta.

Todos los componentes requieren por lo menos el método render que define cuál
será el resultado que aparecerá en pantalla.

El source de las imágenes en React puede contener direcciones en la web o se le
puede hacer una referencia directa importándola. Si se importa deben usarse
llaves para que sea evaluado.

## 1.6 Estilos

Cómo aplicar estilos Para los estilos crearemos una carpeta llamada Styles y
allí vivirán todos los archivos de estilos que tienen que ver con los
componentes. Para usar los estilos es necesario importarlos con import React
funciona ligeramente diferente y para los atributos de clases **no se utiliza
class sino className** Es posible utilizar Bootstrap con React, sólo debe ser
instalado con npm install bootstrap y debe ser importado en el index.js Existen
estilos que son usados de manera global o en varios componentes, así que deben
ser importados en el index.js

## 1.7 Props

Los props que es la forma corta de properties son argumentos de una función y en
este caso serán los atributos de nuestro componente como class, src, etc.

Estos props salen de una variable de la clase que se llama this.props y los
valores son asignados directamente en el ReactDOM.render()

``` javascript
reactDOM.render(<badge firstName="Alan" lastName="Turing" />, container)
```

Estos props se leerian así:

> this.props.firstName this.props.lastName

## 1.8 Enlazando eventos

React dispone de eventos. Cada vez que se recibe información en un input se
obtiene un evento onChange y se maneja con un método de la clase
this.handleChange

``` javascript
<input onChange={this.handleChange}/>

...

class BadgeForm extends React.Component{
handleChange = e => {
    console.log(e)    
    }
...
}
```

Los elementos button también tienen un evento que es onClick.

Cuando hay un botón dentro de un formulario, este automáticamente será de tipo
submit. Si no queremos que pase así hay dos maneras de evitarlo: especificando
que su valor es de tipo button o manejándolo desde el formulario cuando ocurre
el evento onSubmit.

## 1.9 Manejo de estado

Hasta esta clase todos los componentes han obtenido su información a través de
props que vienen desde afuera (otros componentes) pero hay otra manera en la que
los componentes pueden producir su propia información y guardarla para ser
consumida o pasada a otros componentes a través de sus props. La clave está en
que la información del state a otros componentes pasará en una sola dirección y
podrá ser consumida pero no modificada.

Para guardar la información en el estado se usa una función de la clase
component llamada setState a la cual se le debe pasar un objeto con la
información que se quiere guardar.

``` javascript
this.setState({
    [e.target.name]: e.target.value,
})
```

Aunque no se ve, la información está siendo guardada en dos sitios. Cada input
guarda su propio valor y al tiempo la está guardando en setState, lo cual no es
ideal. Para solucionarlo hay que modificar los inputs de un estado de no
controlados a controlados.

``` javascript
value = {this.state.valueOfInput}
```

Si los colocamos nada más así nos sacará un error, hay que inicializar el estado

``` javascript
state = {}
```

## 1.10 Introducción a React Router

Las aplicaciones que se trabajan en React son llamadas single page apps. Esto es
posible gracias a React Router que es una librería Open Source. React Router
(v4): Nos da las herramientas para poder hacer SPA fácilmente. Usaremos 4
componentes:

> -   BrowserRouter: es un componente que debe estar siempre lo más arriba de la
>     aplicación. Todo lo que esté adentro funcionará como una SPA.
> -   Route: Cuando hay un match con el path, se hace render del component. El
>     component va a recibir tres props: match, history, location.
> -   Switch: Dentro de Switch solamente van elementos de Route. Switch se
>     asegura que solamente un Route se renderize.
> -   Link: Toma el lugar del elemento \<a\>, evita que se recargue la página
>     completamente y actualiza la URL.

### 1.10.1 Divison de la aplicación en rutas

Tenemos que importar los componentes, dentro de BrowserRouter solo debe haber un
elemento child, esto se soluciona metiendolos en un Switch, que solo permitirá
que se ejecute una sola ruta. El prefijo exact permite que se muestre el
componente solo si la ruta coincide al 100%

``` javascript
import { BrowserRouter, Route, Switch } from 'react-router-dom'

function App(){
    return (
        <BrowserRouter>
            <Switch>
                <Route exact path="/badges" component = {Badges} />
                <Route exact path="/badges/new" component = {BadgeNew} />
            <Switch>
        </BrowserRouter>  

    )
}
```

Es necesario sustituir todos los elementos a por Link, para evitar la recarga
completa de la página

``` javascript
import { Link } from 'react-router-dom'

<Link to="ruta/ruta">
```

### 1.10.2 Páginas 404

Esta es un ejemplo de como crear un 404

``` javascript
import { Redirect, Route } from "react-router-dom";

<Route path="/404" component={MiComponente404} />
<Redirect from="*" to="/404" />
```

### 1.10.3 Obtención de parametros de rutas

Los parametros de las rutas pueden obtenerse cuando estamos usando React Router
de la siguiente manera

``` javascript
this.props.match.params.parametroAObtener
```



## 1.10 React router

Reach Router es una versión simplificada y mejor optimizada de React
Router, su creador es Ryan Florence el mismo creador de React Router. Se
anunció que los dos paquetes se iban a unir, pero su API se va a parecer
más a Reach Router.

Al momento de escribir este apunte se instala así

``` javascript
npm i @reach/router
```

Y su uso es más simple que React/router. Aquí podemos indicarle la path
en la que se renderizará un componente directamente en el componente.
También cuenta con un componente redirect que redirige de una ruta a
otra.

``` javascript
<Router>
    <Home path='/'/>
    <Home path='/pet/:id'/>
    {!isAuth && <Redirect from='/favs' to='/login' />}
</Router>
```

Debemos cambiar la configuración de webpack

``` javascript
output: {
  filename: 'app.bundle.js',
  publicPath: '/'
},
```

Y el script de package.json que corre el servidor de desarrollo

``` javascript
"dev": "webpack serve --history-api-fallback",
```

### 1.10.1 Componente Link

Funciona igual que el de react router

``` javascript
import { Link } from '@reach/router'

<Link to={path}>

</Link>
```

##### 1.10.1.1.1 Obtener la página activa

@reach/router le añade el atributo aria-current="page" al componente
Link activo. Lo que nos permite darle estilos directamente buscando la
propiedad del componente y aplicandole estilos condicionales.

### 1.10.2 Renderizado condicional de rutas

Renderizar rutas de acuerdo a parametros tales como el estado de loggeo
se hace creando un componente que envolverá a otros componentes. En este
caso el componente UserLogged regresa el children y le pasa como
paramétro un objeto con isAuth.

``` javascript
const UserLogged = ({ children }) => {
  return children({ isAuth: false })
}
```

Nos asegurarnos de definir a children como una función, que reciba
parámetros y que retorne componentes. Usaremos el resultado del
parámetro creado para renderizar nuestros componentes envueltos en el
mismo objeto Router, como si se tratara de un router adicional al
principal.

``` javascript
<UserLogged>
  {
        ({ isAuth }) => isAuth
          ? <Router>
            <UserProfile path='/user' />
          </Router>
          : <Router>
            <LoginScreen path='/user' />
          </Router>
                  }
</UserLogged>
```

También es posible user el contexto para tener un código más ordenado

``` javascript
import React, {useContext} from 'react'
import Context from './Context'

const {isAuth} = useContext(Context)
<Router>
    {!isAuth && <Redirect from='/favs' to='/login' />}
</Router>
```

### 1.10.3 Páginas 404

React router puede especificar una página como default si no se
encuentra ninguna ruta colocandole un prop que diga default.

``` javascript
import { PageNotFound } from './pages/PageNotFound'

    <Router>
        <PageNotFound default/>
    </Router>
```
## 1.11 Ciclo de vida de un componentes

Cuando React renderiza los componentes decimos que entran en escena, cuando su
estado cambia o recibe unos props diferentes se actualizan y cuando cambiamos de
página se dice que se desmontan.

### 1.11.1 Montaje:

Representa el momento donde se inserta el código del componente en el DOM. Se
llaman tres métodos: constructor, render, componentDidMount.

### 1.11.2 Actualización:

Ocurre cuando los props o el estado del componente cambian. Se llaman dos
métodos: render, componentDidUpdate.

### 1.11.3 Desmontaje:

Nos da la oportunidad de hacer limpieza de nuestro componente. Se llama un
método: componentWillUnmount.

## 1.12 React.Fragment

React.Fragment es la herramienta que te ayudará a renderizar varios componentes
y/o elementos sin necesidad de colocar un div o cualquier otro elemento de HTML
para renderizar sus hijos. Al usar esta característica de React podremos
renderizar un código más limpio y legible, ya que React.Fragment no se renderiza
en el navegador.

``` javascript
render(
    <React.Fragment>
        ...
    </React.Fragment>
)
```

## 1.13 Portales

Hay momentos en los que queremos renderizar un modal, un tooltip, etc. Esto
puede volverse algo complicado ya sea por la presencia de un z-index o un
overflow hidden.

En estos casos lo ideal será renderizar en un nodo completamente aparte y para
esto React tiene una herramienta llamada Portales que funcionan parecido a
ReactDOM.render; se les dice qué se desea renderizar y dónde, con la diferencia
de que ese dónde puede ser fuera de la aplicación.

## 1.14 Hooks

Las funciones no tienen un estado propio que manejar como ciclos de vida a los
que deben suscribirse, mientras tanto las clases sí cuentan con ello.

Los hooks, disponibles desde la versión 16.8.0 en React, son una nueva
característica de la librería que nos permite tener estado en nuestros
componentes funcionalidades como manejo de estado y ciclo de vida que
anteriormente eran únicos de los class components.

Hooks: Permiten a los componentes funcionales tener características que solo las
clases tienen:

-   useState: Para manejo de estado.
-   useEffect: Para suscribir el componente a su ciclo de vida.
-   useReducer: Ejecutar un efecto basado en una acción.

Custom Hooks: Usamos los hooks fundamentales para crear nuevos hooks custom.
Estos hooks irán en su propia función y su nombre debe comenzar con la palabra
use. Otra de sus características es que no pueden ser ejecutados
condicionalmente (if).

useState regresa un arreglo de dos argumentos.

### 1.14.1 UseState

UseState es el reemplazo de state en los componentes de React. El método
useState nos provee de dos elementos; el primero, es el valor del estado; el
segundo, es una función para especificar el valor que querramos que tenga
nuestro estado. Así mismo podremos especificar un valor por defecto para el
primer valor, el cual pasaremos como parámetro a la función useState. Los
métodos que nos devuelve useState pueden tomar cualquier nombre que nosotros
especifiquemos.

``` javascript
import { useState } from 'react'

const [value, setValue] = useState([])
```

Para especificar un valor solo usamos setValue

``` javascript
setValue("Nuevo valor")
```

Al tomar el nuevo valor se llevará acabo un renderizado del componente.

### 1.14.2 UseEffect

UseEffect viene a dotar a las funciones de los mismos ciclos de vida que tiene
un componente. useEffect() se ejecutará cada vez que un componente se renderiza.

``` javascript
import { useEffect } from 'react'

useEffect(()=>{
    console.log("Montado o actualizado")    
})
```

#### 1.14.2.1 Eliminar listeners y procesos en useEffect

Como useEffect() se ejecuta cuando hay una actualización o una montura de un
componente, podemos generar memory leaks al usar listeners o timeOuts. Hacer una
limpieza de nuestros procesos y listeners en el valor de retorno es una buena
práctica

``` javascript
useEffect(() => {
    return(()=> removeEventListener())
  })   
```

Hay que ser cuidadosos al colocar funciones que modifiquen el estado en el hook
useEffect(), puesto que podemos caer en un loop infinito

``` javascript
useEffect(() => {
    fetch(`https://api.com/api/${name}`)
      .then(res => res.json())
      .then(ourName => {
        setValueInState(ourName)
      })
  })   
```

UseEffect() puede recibir un segundo parámetro, mientras el parámetro que le
pasemos no cambie, useEffect() no se ejecutará nuevamente.

``` javascript
useEffect(() => {
    fetch(`https://api.com/api/${name}`)
      .then(res => res.json())
      .then(ourName => {
        setValueInState(ourName)
      })
  }, [name]) 
```

Si optamos por pasarle una lista vacia como parámetro useEffect() solo se
ejecutará al montarse o desmontarse nuestro componente.

``` javascript
useEffect(() => {
    fetch(`https://api.com/api/${name}`)
      .then(res => res.json())
      .then(ourName => {
        setValueInState(ourName)
      })
  }, [name]) 
```

#### 1.14.2.2 Múltiples useEffect por componente

Se pueden declarar múltiples useEffects dentro de un componente. Todos se
ejecutarán de acuerdo a sus parámetro opcional, después de la renderización.

``` javascript
useEffect(()=>{
}, [variable])

useEffect(()=>{
  }, [])
```

### 1.14.3 useContext

useContext sirve para especificar un contexto en común para todos los
componentes y evitar tener que pasar props de un componente a otro. Muy parecido
a lo que hace redux.

``` javascript
const UserContext = React.createContext(valor);
// Creamos un contexto

function App() {
  // Creamos un estado
  const [user] = React.useState({ name: "Fred" });

  return (
    {/* Necesitamos envolver al componente padre con un Provider */}
    {/* Le asignamos un el valor user que creamos con useState */}
    <UserContext.Provider value={user}>
      <Main />
    </UserContext.Provider>
  );
}

const Main = () => (
  <>
    <Header />
    <div>Main app content...</div>
  </>
);
```

Para consumir el contenido necesitamos envolverlo dentro de un contexto.

``` javascript
// Ahora especificamos donde queremos consumir el valor
// Nota que estamos envolviendo esto en una función que generará el componente
// para tener acceso al objeto user como parámetro de la función
const Header = () => (

  <UserContext.Consumer>
    {user => <header>Welcome, {user.name}!</header>}
  </UserContext.Consumer>
);
```

La función useContext puede simplificar la sintaxis de los componentes.

``` javascript
const Header = () => {
  // Le pasamos el objecto que creamos con createContext
  const user = React.useContext(UserContext);
  // Y removemos las etiquetas UserContext.Consumer
  return <header>Welcome, {user.name}!</header>;
};
```

## 1.15 useCallback

useCallback es un hook de React que se encarga de memoizar las funciones y que
no se rerenderizen al montarse los components. Es muy útil cuando se transfieren
funciones a componentes hijos.

La función useCallback acepta dos argumentos y retorna una función. El primer
argumento es la función a memoizar y el segundo, al igual que useEffect, es una
variable a vigilar, de manera que React no genere una nueva función mientras esa
variable no cambie. Al igual que con useEffect también podemos dejar el array
vacio, en lugar de value.

``` javascript
import { useCallback } from 'react'

const MyComponent = ({prop}) => {
  const callback = () => {
    return 'Result'
  };
  const memoizedCallback = useCallback(callback, [prop])
  return <ChildComponent callback={memoizedCallback} />
}
```

## 1.16 useMemo

Esta función es un hook de React que sirve para memoizar el valor que devuelve
una función. La función useMemo acepta dos argumentos y retorna un valor. El
primer argumento es la función y el segundo, al igual que useCallback, es una
variable a vigilar, de manera que no se generará un nuevo valor mientras esa
variable no cambie.

``` javascript
import { useMemo } from 'react'

// Ideal para funciones costosas de ejecutar, como factoriales o cálculos complejos
const OtherComponent({value}) => {
  const memoizedValue = useMemo(()=>getExpensiveValue(value), [value])
  return <div>...</div>
}
```

## 1.17 Memo

Memo **no es un hook**, es un High Order Component (HOC), es decir una función
que toma un componente como parámetro y retorna un nuevo componente.

Memo revisa si los props del componente que recibe han cambiado, si no lo han
hecho, devolverá el componente memoizado, sin renderizarlo.

``` javascript
import { memo } from 'react'

const MyComponent = ({id, title}) => {
    return <div>{id}{title}</div>
}

export default memo(MyComponent)
```

Memo es ideal para componentes que:

> -   Sufren múltiples renderizaciones con el uso de la aplicación y que
>     generalmente reciben los mismos props.
> -   Reciben props que cambian con poca frecuencia o simplemente no cambian.
> -   Componentes muy voluminosos que tienen un impacto muy grande en el
>     rendimiento.

## 1.18 Reducers

Los reducers se encargan de tomar un estado previo y una acción y devolver un
objeto actualizado. Generalmente toman la forma de un switch. Así mismo también
son la opción usada por Redux. Podemos usar los reducers con la función
useReducer de React para manejar el estado de nuestra aplicación. Así mismo
podemos combinarlos con useContext para manejar la información y pasarla a
través de nuestros componentes.

``` javascript
const initialState = { username: "", isAuth: false };

function reducer(state, action) {
  switch (action.type) {
    case "LOGIN":
      return { username: action.payload.username, isAuth: true };
    case "SIGNOUT":
      // could also spread in initialState here
      return { username: "", isAuth: false };
    default:
      return state;
  }
}
```

Ya que tenemos el reducer necesitamos pasarle una acción. Le pasaremos la acción
por medio de una funcion llamada dispatch que nos provee el método useReducer de
React

``` javascript
function App() {
  // useReducer requiere una función y un estado inicial para funcionar
  const [state, dispatch] = useReducer(reducer, initialState);
  // Tendremos el estado obtenido en el objeto state

  // useReducer nos provee una función llamada dispatch, esta función recibe un parámetro
  // el parámetro es el action que interactuará con el switch del reducer
  function handleLogin() {
    dispatch({ type: "LOGIN", payload: { username: "Ted" } });
  }

  function handleSignout() {
    dispatch({ type: "SIGNOUT" });
  }

  return (
    <>
      Current user: {state.username}, isAuthenticated: {state.isAuth}
      <button onClick={handleLogin}>Login</button>
      <button onClick={handleSignout}>Signout</button>
    </>
  );
}
```

## 1.19 Deploy

Para hostear una aplicación de node y que esta se mantenga activa incluso si se
presentan errores podemos usar pm2 o forever.

``` bash
pm2 start npm --name "Mi aplicación" -- run serve -- --port 3001
```

Esta será accesible y podemos vincularla a un gestor de servicios como systemd

## 1.1 Webpack

Webpack empaquetará la aplicación y permitirá que podamos usar los
módulos EcmaScript para resolver dependencias.

### 1.1.1 Instalación de webpack

Procedemos a instalar webpack, webpack-cli y webpack-dev-server para su
uso como dependencias de desarrollo

``` bash
npm i webpack webpack-cli webpack-dev-server --save-dev
```

A continuación vamos a instalar el plugin de html que se encarga de
crearnos un index.html como punto de entrada

``` bash
npm i html-webpack-plugin
```

### 1.1.2 Configurar webpack

La configuración de webpack consiste en especificar un modo, un archivo
de salida y la lista de plugins que debe usar. El archivo de entrada
será, de manera predeterminada, src/index.js en la raiz del proyecto.

``` javascript
const HtmlWebpackPlugin = require('html-webpack-plugin')

module.exports = {
    mode: 'development',
    output: {
        filename: 'app.bundle.js'
    },
    plugins: [
        new HtmlWebpackPlugin()
    ]
}
```

Una vez configurado podemos crear nuestros scripts en package.json para
tener un servidor de webpack. Build compilará nuestro código javascript,
mientras que dev iniciará el servidor de desarrollo en el puerto 8080

``` javascript
"scripts": {
  "build": "webpack",
  "dev": "webpack serve"
}
```

## 1.2 Instalación de react

React es la librería en si misma y react-dom nos permite usar los
componentes de react en el DOM

``` bash
npm i react react-dom
```

Creamos un punto de entrada para nuestra aplicación en un nuevo archivo
src/index.html con un div con un id que querramos, usaremos app

``` bash
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petgram</title>
</head>
<body>
    <div id="app"></div>
</body>
</html>
```

Y le indicaremos al html-webpack-plugin que use ese archivo a través del
webpack.config.js

``` javascript
plugins: [
    new HtmlWebpackPlugin({
        template: 'src/index.html'
    })
]
```

Ahora le pediremos a react que renderize en nuestro punto de entrada

``` javascript
import React from 'react'
import ReactDOM from 'react-dom'

ReactDOM.render('Hello', document.getElementById('app'))
```

## 1.3 Instalación de Babel

Para crear código compatible con todos los navegadores usaremos Babel.
Lo instalamos como dependencia de desarrollo

``` javascript
npm i @babel/core @babel/preset-env @babel/preset-react babel-loader --save-dev
```

Añadimos Babel a la configuración de webpack.config.js

``` javascript
module: {
    rules: [{
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
            loader: 'babel-loader',
            options: {
                presets: [
                    '@babel/preset-env', 
                    '@babel/preset-react'
                    ]
            }
        }
    }]
}
```

## 1.4 StandardJS

Unas reglas para lintar nuestro código. A pesar de lo que diga su
nombre, Standard, no es oficial, sin embargo es bastante popular entre
la comunidad de usuarios de Javascript

### 1.4.1 Instalacion

El linter standard se instala con

``` bash
npm i standard --save-dev
```

Modificamos el archivo package.json. Ignoramos /api/. Agregamos el
comando lint para que nos muestre los errores y agregamos la
configuración para que los editores de código los detecte.

``` javascript
"standard": {
  "ignore": [
    "/api/**"
  ]
},
"scripts": {
  "build": "webpack",
  "dev": "webpack serve",
  "lint": "standard"
},
"eslintConfig": {
  "extends": ["./node_modules/standard/eslintrc.json"]
}
```

## 1.5 Deploy con Vercel

Instalamos vercel. Dado que vercel cambia la configuración de sus
archivos e instrucciones es mejor revisar la documentación oficial al
momento de hacer el deploy

``` bash
npm i -g vercel
```

``` bash
vercel init

Vercel CLI 23.0.1
> Select example: (Use arrow keys)
❯ amp 
  angular 
  blitzjs 
  brunch 
  create-react-app 
  custom-build 
  docusaurus 
  docusaurus-2 
  dojo 
  eleventy 
  ember 
  gatsby 
  gridsome 
  hexo 
  hugo 
(Move up and down to reveal more choices)
```

## 1.6 Styled components

Librería que nos permite estilar de forma muy sencilla, siguiendo CSS y
usando los tags de HTML que queramos usar en nuestra aplicación y
cualquier componente que acepte una prop className.

Se encarga de evitar colisiones de nombres y te permite colocar el css
directamente en el archivo js o ts. Así como el renderizado condicional
de CSS

``` bash
npm i styled-components
```

Para crear un estilo usaremos la siguiente sintaxis

``` javascript
import styled from 'styled-components'

export const Anchor = styled.a``
    display: flex;
    text-align: center;
    text-decoration: none;
    flex-direction: column;
    width: 75px;
``
```

Estos estilos pueden usarse directamente en los archivos o exportarse
como componentes para usar en nuestros archivos

``` html
<Anchor href="#"/>
```

Styled componentes también acepta componentes como argumento.

``` javascript
import styled from 'styled-components'
import { Link } from '@reach/router'

export const Anchor = styled(Link)``
``
```

### 1.6.1 Estilos globales

Creamos un archivo globalStyles

````` javascript
import { createGlobalStyle } from 'styled-components'

export const GlobalStyle = createGlobalStyle````
    html {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
````
`````

Después importamos ese archivo y lo colocamos en el nivel superior de la
app, en el componente APP en este ejemplo.

``` javascript
import { GlobalStyles } from './GlobalStyles'

export const App = () => (
  <>
    <GlobalStyles />
    <MainComponent/>
  </>
)
```

### 1.6.2 Creando animaciones

Podemos crear animaciones reutilizables usando keyframes directamente de
la librería de styled-components.

``` javascript
import {keyframes, css} from 'styled-components'

export const fadeIn = ({time = '1s', type='ease'} = {}) => css``
    animation: ${time} ${fadeInKeyframes} ${type};
``

const fadeInKeyframes = keyframes``
    from {
        filter: blur(5px);
        opacity:0;
    }
    to {
        filter: blur(0px);
        opacity:1;
    }

``
```

Una vez creadas podemos usarlas en los estilos de nuestros componentes

``` javascript
export const Img = styled.img``
    ${fadeIn()}
    box-shadow: 0 10px 14px rgba(0,0,0,0.2);
``
```

## 1.7 Hooks

Para ver los hooks principales revisa los apuntes de React básico.

### 1.7.1 useRef

El hook useRef nos permite guardar una referencia, esta referencia puede
ser a cualquier elemento.

#### 1.7.1.1 useRef al componente

useRef nos permite capturar la referencia al elemento en el DOM. Ref no
hace referencia al elemento en el cual se crea, sino a aquel que se lo
colocamos como un prop.

``` javascript
import {useRef} from 'react'

const Component = () => {
    const ref = useRef(null)
}
```

Por ejemplo, la variable ref contendrá una referencia a la etiqueta
article.

``` javascript
import {useRef} from 'react'

const Component = () => {
    const ref = useRef(null)
    return (<article ref={ref}>...<article/>)
}
```

Y para acceder directamente a la etiqueta necesitamos llamar a la
propiedad current de la referencia.

``` javascript
haz_algo(ref.current)
```

#### 1.7.1.2 UseRef al estado

También podemos referenciar un estado de React. Esto es bastante útil al
mezclarlo con useEffect en ocasiones donde queremos asignar un callback,
pero el estado (state) aún se encuentrará vacio.

Por ejemplo:

``` javascript
useEffect(()=> {
 // fetch data and set state
 socket.onmessage = (event) => {
      const messageJson = JSON.parse(event.data)
      // si realizamos esto dentro de un useEffect
      setState([messageJson.payload, ...state])
      }
   }
})
```

El estado (state) va a estar vacio y el callback se creará con el estado
vacio, dejándonos con un estado vacio.

En cambio, si guardamos una referencia usando un doble useEffect,
podemos guardar el nuevo estado en nuestra referencia usando un
useEffect que solo se ejecutará cuando cambie nuestra información (en
este caso data).

``` javascript
useEffect(()=>{
  // this sets a reference to posts and saves it in current
  stateRef.current = data
}, [data])

useEffect(()=>{
    // fetch data
    socket.onmessage = (event) => {
          const messageJson = JSON.parse(event.data)
          // si realizamos esto dentro de un useEffect
          setState([messageJson.payload, ...stateRef.current])
       }
    }
)
```

Usando este acomodo podemos crear un callback que funcionará de manera
correcta usando la referencia que hemos creado hacia el estado.

### 1.7.2 Context

Context nos permite acceder a datos sin usar las Props por medio de un
contexto global.

Para usarlo necesitamos importar el createContext de React

El Context nos va a proporcionar 2 componentes:

-   Provider: componente que debe envolver a nuestra aplicación.
-   Consumer: nos va a permitir acceder a las render props que
    declaremos en el Provider.

``` javascript
import { createContext } from 'react'

export const Context = createContext()
```

Luego usaremos ese componente para envolver nuestra aplicación

``` javascript
ReactDOM.render(<Context.Provider value={{isAuth: true}}><App /></Context.Provider>, document.getElementById('app'))
```

Y envolveremos el componente que querramos que tenga acceso al contexto
que creamos.

``` javascript
<Context.Consumer>
  {
        ({ isAuth }) => isAuth
          ? <Router>
            <UserProfile path='/user' />
          </Router>
          : <Router>
            <LoginScreen path='/user' />
          </Router>
                  }
</Context.Consumer>
```

### 1.7.3 Custom hooks

Sirven para poder reutilizar la lógica en diferentes componentes. Para
poder utilizarlos, deben empezar por la palabra use (useMiNombreDeHook).
Los custom hooks pueden usar otros hooks incluso, otros custom hooks.

##### 1.7.3.1.1 Intersection observer

Un uso común del intersection observer es revisar si el elemento
referenciado está en el viewport del usuario. En la función useEffect de
abajo, creamos un observador y le pedimos que observe el elemento que
estamos referenciando, en este caso ref.current. Podemos ver el estado
directamente en las propiedades de entries

``` javascript
useEffect(()=>{
  const observer = new window.IntersectionObserver((entries)=>{
  const { isIntersecting } = entries[0]
  if(isIntersecting){
    setShow(true)
    observer.disconnect()
  }
  })
  observer.observe(ref.current)
}, [ref])
```

Hay que recordar un par de cosas. La primera es que, para que pueda
seguirse detectando el elemento con ref, es necesario devolver un
componente con el prop ref. Es decir, no podemos ejecutar ternarias u
operadores && para condicionar la renderización de componentes. La
segunda es que si un elemento no tiene una altura, todos van a estar en
el viewport al cargar la página. Por lo anterior es bueno dotar de
height o min-height a los elementos a observar.

``` javascript
//Si show es false ya no va a existir ref
show && <article ref={ref}>...<article/>

// Podemos reemplazarlo por
<article ref={ref}>{show&&<contenido/>}<article/>
```## 1.8 RenderProps

Es una técnica para compartir código entre componentes en React que
utiliza una prop (cómo children u otra de otro nombre, aunque
normalmente se usa render) como función, que recibe como parámetro
información y devuelve el componente que queremos que renderice.

``` javascript
<DataProvider render={data => (
  <h1>Hello {data.target}</h1>
)}/>
```

También funciona con children

``` javascript
<Mouse children={mouse => (
  <p>The mouse position is {mouse.x}, {mouse.y}</p>
)}/>
```

Ya sea pasándole el parmáetro children como prop o directamente
colocándolo como un children

``` javascript
<Mouse>
  {mouse => (
    <p>The mouse position is {mouse.x}, {mouse.y}</p>
  )}
</Mouse>
```

## 1.10 React router

Reach Router es una versión simplificada y mejor optimizada de React
Router, su creador es Ryan Florence el mismo creador de React Router. Se
anunció que los dos paquetes se iban a unir, pero su API se va a parecer
más a Reach Router.

Al momento de escribir este apunte se instala así

``` javascript
npm i @reach/router
```

Y su uso es más simple que React/router. Aquí podemos indicarle la path
en la que se renderizará un componente directamente en el componente.
También cuenta con un componente redirect que redirige de una ruta a
otra.

``` javascript
<Router>
    <Home path='/'/>
    <Home path='/pet/:id'/>
    {!isAuth && <Redirect from='/favs' to='/login' />}
</Router>
```

Debemos cambiar la configuración de webpack

``` javascript
output: {
  filename: 'app.bundle.js',
  publicPath: '/'
},
```

Y el script de package.json que corre el servidor de desarrollo

``` javascript
"dev": "webpack serve --history-api-fallback",
```

### 1.10.1 Componente Link

Funciona igual que el de react router

``` javascript
import { Link } from '@reach/router'

<Link to={path}>

</Link>
```

##### 1.10.1.1.1 Obtener la página activa

@reach/router le añade el atributo aria-current="page" al componente
Link activo. Lo que nos permite darle estilos directamente buscando la
propiedad del componente y aplicandole estilos condicionales.

### 1.10.2 Renderizado condicional de rutas

Renderizar rutas de acuerdo a parametros tales como el estado de loggeo
se hace creando un componente que envolverá a otros componentes. En este
caso el componente UserLogged regresa el children y le pasa como
paramétro un objeto con isAuth.

``` javascript
const UserLogged = ({ children }) => {
  return children({ isAuth: false })
}
```

Nos asegurarnos de definir a children como una función, que reciba
parámetros y que retorne componentes. Usaremos el resultado del
parámetro creado para renderizar nuestros componentes envueltos en el
mismo objeto Router, como si se tratara de un router adicional al
principal.

``` javascript
<UserLogged>
  {
        ({ isAuth }) => isAuth
          ? <Router>
            <UserProfile path='/user' />
          </Router>
          : <Router>
            <LoginScreen path='/user' />
          </Router>
                  }
</UserLogged>
```

También es posible user el contexto para tener un código más ordenado

``` javascript
import React, {useContext} from 'react'
import Context from './Context'

const {isAuth} = useContext(Context)
<Router>
    {!isAuth && <Redirect from='/favs' to='/login' />}
</Router>
```

### 1.10.3 Páginas 404

React router puede especificar una página como default si no se
encuentra ninguna ruta colocandole un prop que diga default.

``` javascript
import { PageNotFound } from './pages/PageNotFound'

    <Router>
        <PageNotFound default/>
    </Router>
```
## 1.10 React router

Reach Router es una versión simplificada y mejor optimizada de React
Router, su creador es Ryan Florence el mismo creador de React Router. Se
anunció que los dos paquetes se iban a unir, pero su API se va a parecer
más a Reach Router.

Al momento de escribir este apunte se instala así

``` javascript
npm i @reach/router
```

Y su uso es más simple que React/router. Aquí podemos indicarle la path
en la que se renderizará un componente directamente en el componente.
También cuenta con un componente redirect que redirige de una ruta a
otra.

``` javascript
<Router>
    <Home path='/'/>
    <Home path='/pet/:id'/>
    {!isAuth && <Redirect from='/favs' to='/login' />}
</Router>
```

Debemos cambiar la configuración de webpack

``` javascript
output: {
  filename: 'app.bundle.js',
  publicPath: '/'
},
```

Y el script de package.json que corre el servidor de desarrollo

``` javascript
"dev": "webpack serve --history-api-fallback",
```

### 1.10.1 Componente Link

Funciona igual que el de react router

``` javascript
import { Link } from '@reach/router'

<Link to={path}>

</Link>
```

##### 1.10.1.1.1 Obtener la página activa

@reach/router le añade el atributo aria-current="page" al componente
Link activo. Lo que nos permite darle estilos directamente buscando la
propiedad del componente y aplicandole estilos condicionales.

### 1.10.2 Renderizado condicional de rutas

Renderizar rutas de acuerdo a parametros tales como el estado de loggeo
se hace creando un componente que envolverá a otros componentes. En este
caso el componente UserLogged regresa el children y le pasa como
paramétro un objeto con isAuth.

``` javascript
const UserLogged = ({ children }) => {
  return children({ isAuth: false })
}
```

Nos asegurarnos de definir a children como una función, que reciba
parámetros y que retorne componentes. Usaremos el resultado del
parámetro creado para renderizar nuestros componentes envueltos en el
mismo objeto Router, como si se tratara de un router adicional al
principal.

``` javascript
<UserLogged>
  {
        ({ isAuth }) => isAuth
          ? <Router>
            <UserProfile path='/user' />
          </Router>
          : <Router>
            <LoginScreen path='/user' />
          </Router>
                  }
</UserLogged>
```

También es posible user el contexto para tener un código más ordenado

``` javascript
import React, {useContext} from 'react'
import Context from './Context'

const {isAuth} = useContext(Context)
<Router>
    {!isAuth && <Redirect from='/favs' to='/login' />}
</Router>
```

### 1.10.3 Páginas 404

React router puede especificar una página como default si no se
encuentra ninguna ruta colocandole un prop que diga default.

``` javascript
import { PageNotFound } from './pages/PageNotFound'

    <Router>
        <PageNotFound default/>
    </Router>
```
## 1.11 React Helmet

Helmet nos permite reemplazar el title y colocar cualquier otro
contenido dentro de la etiqueta head. Para usarlo primero hay que
instalarlo desde

``` javascript
npm i react-helmet
```

Una vez instalado podemos usarlo colocándole el contenido que querramos
en el archivo que querramos.

``` javascript
import { Helmet } from 'react-helmet'

export default Component = () => {
return (
<>
  <Helmet>
    {title && <title>Petgram | {title}</title>}
    {description && <meta name='description' content={description} />}
  </Helmet>
  <OtrosComponentes/>
</>
)
}
```

React helmet es muy versátil. Incluso podemos crear subcomponentes que
incluyan a Helmet y modifiquen su comportamiento

``` javascript
import { Helmet } from 'react-helmet'

export const Layout = ({ children, title, description, showTitle = false, showDescription = false }) => {
  return (
    <>
      <Helmet>
        {title && <title>Petgram | {title}</title>}
        {description && <meta name='description' content={description} />}
      </Helmet>
      <div>
        {(title && showTitle) && <h1>{title}</h1>}
        {(description && showDescription) && <div>{description}</div>}
        {children}
      </div>
    </>
  )
}
```
## 1.14 PWA

``` javascript
npm i webpack-pwa-manifest --save-dev
```

Para usarlo necesitamos agregarlo al archivo de configuraciónd de React

``` javascript
const WebpackPwaManifest = require('webpack-pwa-manifest')
```

Ahora agregaremos un objeto nuevo en la sección de plugins de
*webpack.config.js*. El array sizes creará iconos para cada una de los
tamaños especificados. Asegúrate de tener un archivo en la ruta
especificada o dará error.

``` javascript
plugins: [
    new WebpackPwaManifest({
          name: 'Nombre',
          short_name: 'Nombre corto',
          description: 'Tu propia descripción',
          background_color: '#ffffff',
          theme_color: '#2196f3',
          crossorigin: 'use-credentials', //can be null, use-credentials or anonymous
          icons: [
            {
              src: path.resolve('src/assets/img/icon.png'),
              sizes: [96, 128, 192, 256, 384, 512] // multiple sizes
            },
            {
              src: path.resolve('src/assets/img/icon.png'),
              size: '1024x1024' // you can also use the specifications pattern
            },
            {
              src: path.resolve('src/assets/img/icon.png'),
              size: '1024x1024',
              purpose: 'maskable'
            }
          ]
        }),
]
```

Lo anterior creará un archivo manifest en la misma carpeta de salida del
bundle que se genera con webpack.

### 1.14.1 Soporte offline como PWA

Para crear soporte como PWA google nos ofrece una aplicación llamada
workbox-webpack-plugin

``` javascript
npm i workbox-webpack-plugin --save-dev
```

Ahora lo requerimos en el archivo de *webpack.config.js*

``` javascript
const WorkboxWebpackPlugin = require('workbox-webpack-plugin')
```

Ahora en la sección de plugins colocamos una serie de caches donde cada
uno parte de una expresión regular.

-   urlPattern: Se refiere al patrón de expresiones regulares que
    definiremos, sus reglas se definirán abajo.
-   cacheName: Indica al nombre de la cache.
-   CacheFirst: Establece que se busque primero en la cache antes de
    intentar acceder a la red
-   NetworkFirst: Prioriza el acceso a la red para buscar información,
    esto con la finalidad de tener siempre datos actualizados.

``` javascript
new WorkboxWebpackPlugin.GenerateSW({
     swDest: 'service-worker.js',
     clientsClaim: true,
     skipWaiting: true,
     maximumFileSizeToCacheInBytes: 5000000,
     runtimeCaching: [
       {
         urlPattern: new RegExp(
           'https://(res.cloudinary.com|images.unsplash.com)'
         ),
         handler: 'CacheFirst',
         options: {
           cacheName: 'images'
         }
       },
       {
         urlPattern: new RegExp(
           'https://react-avanzado-testing-b39h5jmoy-eduardozepeda.vercel.app/'
         ),
         handler: 'NetworkFirst',
         options: {
           cacheName: 'api'
         }
       }
     ]
   })
```

A pesar de que la configuración ya está lista y que se está generando un
service-worker, necesitamos incluirlo en nuestro archivo html.

``` javascript
<script>
    if('serviceWorker' in navigator){
        window.addEventListener('load', function(){
            navigator.serviceWorker.register('/service-worker.js')
            .then(registration => {
                console.log('SW registrado')
            })
            .catch(registrationError => {
                console.log('SW no registrado')
            })
        })
    }
</script>
```

Recuerda que cualquier cambio en la configuración de webpack requiere el
reinicio del server.
## 1.12 React Lazy

React lazy se encarga de importar de manera dinámica los componentes
como se van necesitando. Para lograrlo necesitamos pasarle a la función
React.lazy, como parámetro, una función que devuelva un import.

``` javascript
const Favs = React.lazy(() => import('./pages/Favs')) // Recuerda que el import lleva paréntesis, ya que es una función

export const App = () => {
    return(
    <Router>
        <Favs path='/favs' />
    </Router>
    )
}
```

Otro requisito consiste en que el componente a importar debe estar
exportado como default.

``` javascript
export default () => {...}
```

Además necesita estar envuelto en un componente Suspense, que recibirá
un prop llamado fallback. Fallback se refiere al componente que
renderizará mientras se cargar el import dinámico.

``` javascript
import React, { useContext, Suspense } from 'react'
import { Spinner } from './components/Spinner'

<Suspense fallback={<Spinner/>}>
    <Router>
        <Favs path='/favs' />
    </Router>
</Suspense>
```

Si todo funcionó correctamente podrás ver que al acceder al componente,
este realiza una petición al código que necesita para renderizarse. De
esta manera, se reduce el tamaño del bundle principal y el resto del
código se va cargando conforme se necesite.## 1.13 PropTypes

Solia ser parte de React, pero fue separada. Es bastante similar al
tipado que ofrece Typescript.

``` javascript
npm i prop-types --save-dev
```

Ahora podemos verificar las props que recibe un componente creando un
objeto

``` javascript
import { PropTypes } from 'prop-types'

SingleComponent.propTypes = {
  liked: PropTypes.bool.isRequired,
  likes: PropTypes.number.isRequired,
  onClick: PropTypes.func.isRequired,
  disabled: PropTypes.bool
}
```

Podemos especificar si es un prop requerido agregando isRequired al tipo
de dato

De la misma manera que especificabamos el tipo, podemos establecer la
forma de los subtipos de datos que contiene una estructura, como el caso
de los arrays

``` javascript
ListOfSomethingComponent.propTypes = {
  favs: PropTypes.arrayOf(
    PropTypes.shape({
      id: PropTypes.string,
      src: PropTypes.string
    }))
}
```

### 1.13.1 Node es un proptype que se refiere a componentes de React

Hay ciertos componentes que reciben como prop un componente. En este
caso el tipo de dato será node, que se refiere a cualquier cosa que
React pueda renderizar.

``` javascript
import React from 'react'
import { Button } from './styles'
import { PropTypes } from 'prop-types'


export const SubmitButton = ({ children, disabled, onClick }) => {
  return <Button disabled={disabled} onClick={onClick}>{children}</Button>
}

SubmitButton.propTypes = {
  children: PropTypes.node.isRequired,
  onClick: PropTypes.func.isRequired,
  disabled: PropTypes.bool
}
```

### 1.13.2 PropTypes personalizados

También podemos crear validaciones de props personalizadas, para
componentes más complejos. Creando una función que recibe los props, el
nombre del Prop (propName) y el nombre del componente (componentName).
Podemos asignarle validación propia haciendo que retorne un objeto Error
con nuestra propia descripción

``` javascript
import { PropTypes } from 'prop-types'

PhotoCard.propTypes = {
  id: PropTypes.string.isRequired,
  liked: PropTypes.bool.isRequired,
  src: PropTypes.string.isRequired,
  likes: function (props, propName, componentName) {
    const propValue = props[propName]
    if (propValue == undefined){
      return new Error(``${propName} value must be defined``)
    }

    if (propValue<0){
      return new Error(``${propName} value must be greater than zero``)
    }
  }
}
```[[1.31-PWA]]
[[1.33-Testing-con-cypress]]## 1.15 Testing con cypress

``` javascript
npm i cypress --save-dev
```

Ahora agregamos un comando nuevo a *package.json*

``` javascript
"scripts": {
    "test": "cypress open"
}
```

Se creara una carpeta llamada cypress, dentro de la cual habrá una
carpeta llamada integration que es donde pondremos nuestras pruebas.

``` javascript
//cypress/integration/nuestro_projecto/test_specs.js

describe('Mi primer test', function(){
    it('para ver si funciona', function(){
        expect(true).to.equal(true)
    })
})
```

Al ejecutar nuestro comando test se nos abrirá una GUI desde donde
seleccionaremos el archivo que querramos ejecutar. Basta darle click
para que se ejecuten las pruebas.

``` javascript
npm run test
```

### 1.15.1 Configurar cypress

Al momento de ejecutar las pruebas se crea un archivo llamado
cypress.json, dentro de la raiz del directorio. En este archivo podremos
especificar una serie de parámetros para facilitar nuestras pruebas.

``` javascript
{
    "baseUrl": "https://react-avanzado-testing-eduardozepeda.vercel.app/", 
    "chromeWebSecurity": false,
    "viewportWidth": 500,
    "viewportHeight": 800
}
```

### 1.15.2 Pruebas

El objeto cy nos dotará de una serie de métodos que nos ayudarán a
visitar sitios y scrapear el DOM

``` javascript
it('Prueba si tras visitar el primer enlace de la navbar nos redirige al home de la app', function(){
    cy.visit('/objecto/1') // visita una página
    cy.get('nav a').first().click() // Clickea en el primer anchor de la navbar
    cy.url().should('eq', Cypress.config().baseUrl) // Revisa si ahora la url es /
})
it('Prueba si la ruta favs muestra dos formularios', function() {
    cy.visit('/favs') //Visita la ruta /favs
    cy.get('form').should('have.length', 2) //Obten los elementos form del DOM y asegúrate de que sean 2
})
```
## 1.9 Graphql

GraphQL es un lenguaje creado por Facebook para obtener solo los datos
que necesitamos.

React Apollo es un cliente que nos va a permitir conectarnos a un
servidor GraphQL.

``` javascript
npm install @apollo/client graphql
```

En nuestro archivo donde renderizamos con ReactDOM.render() importamos
las librerias necesarias, y creamos una constante cliente, la cual va a
contener el endpoint de nuestro graphql. Posteriormente, envolvemos el
componente de nuestra aplicación en el component ApolloProvider,
pasándole como un prop llamado client, la constante que acabamos de
crear.

``` javascript
import React from 'react'
import ReactDOM from 'react-dom'
import { App } from './App'
import { ApolloClient, ApolloProvider, InMemoryCache } from "@apollo/client";

const client = new ApolloClient({
  uri: "https://react-avanzado-testing-eduardozepeda.vercel.app/graphql/",
  cache: new InMemoryCache(),
});

ReactDOM.render(<ApolloProvider client={client}><App /></ApolloProvider>, document.getElementById('app'))
```

Ahora para usarlo, importamos las funciones requerias de @apollo/client
y creamos las consultas

``` javascript
import { useQuery, gql } from "@apollo/client"

const withPhotos = gql``
  query getPhotos {
    photos {
      id
      categoryId
      src
      likes
      userId
      liked
    }
  }
``
```

Ahora podemos usar la functión useQuery para obtener los datos

``` javascript
const { loading, error, data } = useQuery(whitPhotos);
```

### 1.9.1 Parámetros con graphql

Las queries tambien pueden recibir parámetros

``` javascript
const withPhotos = gql``
  query getPhotos($categoryId:ID) {
    photos(categoryId: $categoryId) {
      id
      categoryId
      src
      likes
      userId
      liked
    }
  }
``
```

Para que detecte los queries deberemos pasárselos dentro de la propiedad
variables del objeto que le pasaremos a la función useQuery como segundo
parámetro.

``` javascript
const { loading, error, data } = useQuery(withPhotos, { variables: { categoryId } });
```

### 1.9.2 Mutaciones

Las mutaciones nos permiten modificar datos y darles seguimiento.
Además, al igual que con useQuery, el hook de las mutaciones nos
devuelve el estado de error o carga de nuestra petición

``` javascript
import { gql, useMutation } from '@apollo/client'

const REGISTER = gql``
    mutation signup($input: UserCredentials!){
        signup(input: $input)
    }
``
export const useRegisterMutation = (email,password) => {
  const [registerMutation, { loading: mutationLoading, error: mutationError }] = useMutation(REGISTER, {variables: {input:{email, password}}})
  return { registerMutation, mutationLoading, mutationError }
}
```
## Clear component

En react cuando un componente se desmonta, pueden quedarse funciones activas funcionando, como setInterval, creando un memory leak. Por lo que es necesario "limpiar" las funciones cuando se desmonta el componente.

``` javascript
useEffect(()=>{
    const intervalId = setInterval(<function>, <tiempo>)

    return () => {
        clearInterval(intervalId)
    }

})
```

## Librerías interesantes de scroll

- [aos](michalsnik.github.io/aos)
- [scrollimator](github.com/mxdubois/scrollimator)
- [scrolltrigger](greensock.com/scrolltrigger)
- [locomotive-scroll](locomotivemtl.github.io/locomotive-scroll)

## Previsualizar una imagen en un form

Esto nos permite subir una imagen en un campo field. El método consiste en:
- Revisar la existencia del archivo en el campo
- Colocar un atributo en una imagen que sea resultado del método createObjectUrl, al haber un cambio en el input.

``` javascript
// Set src attribute to uploaded image before form submit
function handleImageUpload(e: ChangeEvent<HTMLInputElement>) {
    let file
    if (e.target.files) {
        file = e.target.files[0]
    }
    if (file) {
        imageRef.current?.setAttribute("src", URL.createObjectURL(file))
    }
}

const profilePicture = register("profile_picture", { required: false })

<img ref={imageRef} src={...} alt="" />
<input
    id={"profile_picture"}
    type='file'
    accept='image/*'
    {...profilePicture}
    onChange={(e) => {
        profilePicture.onChange(e)
        // override onChange method with handle input
        handleImageUpload(e)
    }}
/>

```## No utilices múltiples await

Cuando tienes múltiples awaits el código para, es mejor ejecutar las promesas de forma concurrente con

``` javascript
Promise.all()
Promise.allSettled()
```