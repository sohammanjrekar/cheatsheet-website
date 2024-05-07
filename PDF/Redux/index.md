# Redux

Redux es un manejador de estado.

## 1.1 Instalación

Es recomendable iniciar la construcción del sitio usando el siguiente
comando

``` bash
npx create-react-app my-app --template redux
```

Si ya tienes una aplicación de React previamente instalada puedes
instalar redux siguiendo el siguiente procedimiento.

Primero habrá que instalarlo en el sistema por medio de npm

``` bash
npm install redux react-redux
```

## 1.2 Actions

Para empezar crearemos un action sencilla. Lps actions son objetos de
javascript que **DEBEN TENER** una propiedad llamada *type*, a parte de
eso pueden contener lo que quieras

``` javascript
{type: 'type', payload: 'data'}
```

Para un manejo más cómodo las envolvemos en funciones que nos permiten
manipularlas y las llamamos *action creators*. Las action creators
describen que algo pasó, pero no especifican cómo cambió el estado de la
aplicación en respuesta. Usaremos una curry function para poder
asegurarnos de mandar la acción por medio del dispatch que nos ofrece
redux

``` javascript
export default function () => (dispatch) => {
    dispatch({type: 'type',
              payload: data})
    }
```

## 1.3 Reducers

Una vez que una acción ha mandado información y ha avisado que se ha
llevado a cabo una acción, el reducer se encargará de *reducirla*

``` javascript
//reducers/reducers.js
const INITIAL_STATE = {
  data : {},
  loading: false,
  error: false
}

const reducerFunction = (INITIAL_STATE, action) => {
    switch(action.type){
        case 'ACCION_LLEVADA_A_CABO':
            return {...INITIAL_STATE, data: payload.data, loading: payload.loading, error: payload.error}
        default:
            return {...INITIAL_STATE}
    }
}

export default reducerFunction
```

Podemos definir un estado inicial, el cual podremos destructurar para
poder sobreescribir las partes del objeto que querramos. Es
**importante** asegurarse de que nuestra función regrese siempre un
objeto o null para que react no nos marque error.

## 1.4 Preparando los reducers para pasarlos al store

Una vez que tengamos todos nuestros reducers podremos pasárselos al
store, para eso primero hay que combinarlos usando la función
combineReducers que nos provee redux. Recuerda que en caso de ser varios
reducers simplemente falta agregarlos a la función.

``` javascript
//reducers/index.js
import { combineReducers } from 'redux'
import reducerFunction from './reducers.js'

const reducerRoot = combineReducers({reducerFunction, })

export default reducerRoot
```

## 1.5 Store

Una vez hecho esto el store es el que recibirá nuestros reducers y se
encargará de almacenar nuestro estado global.

El store tiene las siguientes responsabilidades:

-   Contiene el estado de la aplicación
-   Permite el acceso al estado vía getState()
-   Permite que el estado sea actualizado vía dispatch(action)
-   Registra los listeners vía subscribe(listener)
-   Maneja la anuliación del registro de los listeners via el retorno de
    la función de subscribe(listener)

Para usarlo primero deberemos crear un store por medio de la función
createStore, importada de redux, a este store le pasaremos los reducers
que hemos combinado mediante combineReducers. El Provider es el
componente de Redux en el cual encerraremos nuestra aplicación para que
puedan comunicarse los componentes entre ellos. Para lograr esto
encerraremos la App dentro del componente Provider de react-redux y le
pasaremos el store como un prop.

``` javascript
import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import * as serviceWorker from './serviceWorker';

import { Provider } from 'react-redux'
import { createStore } from 'redux'
import reducerRoot from './reducers'

const store = createStore(
  reducerRoot,
  {})

ReactDOM.render(

  <React.StrictMode>
    <Provider store={store}>
      <App />
    </Provider>
  </React.StrictMode>,
  document.getElementById('root')
);

serviceWorker.unregister();
```

## 1.6 Acciones en el componente

Ya tenemos la estructura básica, ahora debemos colocar los reducers
dentro de los componentes para permitir la interacción con el usuario.
La función connect nos permitirá que el componente tenga acceso al
estado global de redux a través de los props y de la misma manera
seremos capaces de pasarle acciones al componente por medio de esta
misma función

``` javascript
import { connect } from 'react-redux'

<componente/>

const mapStateToProps = (reducers) => {
  return reducers.appReducers
};

export default connect(mapStateToProps, {/*actions*/})(componente)
```

## 1.7 Redux thunk

Redux thunk es un middleware que permite implementar la asincronía en el
store.

### 1.7.1 ¿Cómo lo consigue?

Intercepta las acciones antes de que lleguen al reducer y si es una
función la ejecuta, en caso contrario solo la deja pasar. De esta manera
permite que los actions regresen una función (llamada 'thunk'), en lugar
de una acción, esta función retorna una acción cuando se le llama.
Además de lo anterior también le otorga acceso a la función dispatch del
store de Redux, por lo que también puede hacer dispatch a otras
acciones.

### 1.7.2 ¿Cuando debe usarse?

Cuando querramos implementar funciones asíncronas como action creators,
por ejemplo *funciones que demoren mucho tiempo en ejecutarse o
peticiones API*

## 1.8 Instalación y uso

Primero deberemos instalarla por medio del siguiente comando

``` bash
npm install redux-thunk
```

Se le debe de pasar al createStore como un tercer parametro

``` bash
import thunk from "redux-thunk";
import {createStore, applyMiddleware} from 'redux';


const store = createStore(asyncReducer, applyMiddleware(thunk));
```
# Redux toolkit[Redux Toolkit](/Notes/ReduxToolkit/1.-Redux-toolkit.md)

