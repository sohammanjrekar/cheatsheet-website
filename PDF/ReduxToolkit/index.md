# Redux toolkit

Redux toolkit nace como respuesta a una de las críticas principales de [Redux](../Redux/1.-Redux.md):
"es muy complicado configurarlo".

Redux toolkit abstrae muchísimas de las cosas que antes se necesitan
dejar explícitas en el código y vuelve el uso de redux mucho más simple
que su predecesor.

## 1.1 Instalación

La instalación se realiza de manera diferente a redux. Recuerda agregar
*react-redux* a la instalación si vas a usarlo en React.

``` bash
npm install --save @reduxjs/toolkit
```

## 1.2 Configurar un store

Para configurar un store necesitas importar el método *configureStore*
del toolkit y pasarle un único objeto: la combinación de todos los
reducers que usaremos. Los reducers a su vez necesitan ser combinados
usando la función *combineReducers*, que nos provee *redux*. La función
*combineReducers* ya implementa varios middleware de redux por debajo,
entre ellos *redux-thunk*.

``` javascript
import { configureStore } from '@reduxjs/toolkit'
import { combineReducers } from 'redux'

const reducer = combineReducers({
    // Todos los reducers van aquí
})
const store = configureStore({
reducer,
})

export default store;
```

## 1.3 Slices en react-redux toolkit

Un slice es un objeto que acepta un objeto reducers, que contiene los
reducers, un nombre y un estado inicial y que, generará automáticamente
action creators y action types correspondientes a los reducers y al
estado.

Redux.org recomienda que en lugar de separar los dispatch, las acciones
y los slices, se usen en un mismo archivo o en archivos separados pero
dentro de una misma carpeta. Un slice es el encartado de contener los
reducers, tiene un nombre y un estado inicial.

Internamente usa las funciones *createAction* y *createReducer*

``` javascript
// userReducers.js
import { createSlice } from '@reduxjs/toolkit'

// Slice
const slice = createSlice({
name: 'user',
initialState: {
    user: null
},
reducers: {
    loginSuccess: (state, action) => {
    state.user = action.payload
    },
    logoutSuccess: (state, action) => {
    state.user = null
    }
}
})

export default slice.reducer
```

## 1.4 Configurar acciones en react-toolkit

Las acciones realizan un dispatch del contenido que devuelvan los
reducers.

``` javascript
// userReducers.js
// Actions
const { loginSuccess, logoutSuccess } = slice.actions
export const login = ({ username, password }) => async dispatch => {
try {
    // const response = await api.post('/api/authentication/login/', { username, password })
    dispatch(loginSuccess({ username }))
} catch (err) {
    return console.error(err.message)
}
}
export const logout = () => async dispatch => {
try {
    // const response = await api.post('/api/authentication/logout/')
    return dispatch(logoutSuccess())
} catch (err) {
    return console.error(err.message)
}
}
```

Y ahora ya podemos pasarle los reducers que creamos a nuestra función
*combineReducers* para que configure el store.

``` javascript
import { configureStore } from '@reduxjs/toolkit'
import { combineReducers } from 'redux'
import userReducers from './userReducers'

const reducer = combineReducers({
    userReducers
})
const store = configureStore({
    reducer,
})

export default store;
```

## 1.5 Usando los actions

Cuando necesitemos usar una action simplemente importamos el hook de
react-redux llamado *useDispatch* y realizamos un dispatch

``` javascript
import {useDispatch} from 'react-redux'
import {login, logout} from './userReducers'

const dispatch = useDispatch()

dispatch(logout())
```

## 1.6 Acceder al store

Para acceder a los valores del store usamos el hook useSelector, que
recibe una función con el estado como parámetro y nos devuelve el valor
al que queremos acceder.

``` javascript
import {useDispatch, useSelector} from 'react-redux'

const { user } = useSelector(state => state.user)
```

## 1.7 Redux toolkit en React

Para usarlo con React hay que envolver nuestra aplicación en un
componente que tenga acceso al store de redux.

``` javascript
import { Provider } from 'react-redux'
import store from './store'

ReactDOM.render(
<Provider store={store}>
    <App />
</Provider>,

document.getElementById('root')
)
```

## 1.8 Extra reducers

Los slices contienen una propiedad opcional extra además de reducers,
llamada extraReducers. La diferencia con los reducers es que la
propiedad reducers crea una función para action creator y responde a esa
acción en el reducer del slice. Mientras que los extraReducers te
permiten responder a una acción en el reducer del slice, pero no se crea
una función de action creator.

Los extraReducers son para lidiar con acciones creadas en un lugar
diferente a la función *createSlice*, generalmente se usan para
funciones creadas con *createAsyncThunk*

## 1.9 createAsyncThunk

Es una función que acepta una string de un action type y una función que
**debe retornar una promesa**.

Genera types para el ciclo de vida basado en el prefijo del action type
que le pases y retorna un thunk action creator, el cual ejecutará la
promesa y hará dispatch los actions del ciclo de vida basado en la
promesa retornada.

``` javascript
import { createAsyncThunk, createSlice } from '@reduxjs/toolkit'

// NO está siendo creada con createSlice
const getWaifu = createAsyncThunk(
'anime/getWaifu',
async (thunkAPI) => {
    const response = await fetch('https://api.waifu.pics/sfw/neko').then(
    (data) => data.json()
).catch(error => error.message)
return response
})
```

*createAsyncThunk* establecerá ciertas propiedades para manejar los
diferentes estados de la aplicación.

-   Pendiente: para cuando la promesa está pendiente.
-   fulfilled: si la promesa se ha completado exitosamente.
-   rejected: para una promesa fallida.

``` javascript
export const postSlice = createSlice({
name: 'anime',
initialState,
reducers: {},
// Estamos manejando el estado de un reducer creado fuera de createSlice
extraReducers: {
    [getWaifu.pending]: (state) => {
        state.loading = true
    },
    [getWaifu.fulfilled]: (state, { payload }) => {
        state.loading = false
        state.entities = payload
    },
    [getWaifu.rejected]: (state) => {
        state.loading = false
    },
},
})
```
