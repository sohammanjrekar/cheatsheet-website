# Node
## 1.2 Middleware

Node permite el uso de middleware. El middleware puede regresar una
respuesta http o una llamada a next(), este último le indicará que debe
la petición debe continuar con su flujo normal. Esta pieza de middleware
se encargará de validar un JWT Token, y asignará el usuario recibido al
objeto requests.

``` javascript
const jwt = require('jsonwebtoken')
const User = require('../models/user')

const auth = async (req, res, next) => {
    try {
        const token = req.header('Authorization').replace('Bearer ', '')
        const decoded = jwt.verify(token, 'thisismynewcourse')
        const user = await User.findOne({ _id: decoded._id, 'tokens.token': token })

        if (!user) {
            throw new Error()
        }

        req.user = user
        next()
    } catch (e) {
        res.status(401).send({ error: 'Please authenticate.' })
    }
}

module.exports = auth
```

Para hacer uso de este middleware lo agregamos como un segundo parámetro
al objeto router, para que se ejecute cuando la dirección \'users/me\'
sea solicitada.

``` javascript
const express = require('express')
const User = require('../models/user')
const auth = require('../middleware/auth')
const router = new express.Router()

router.get('/users/me', auth, async (req, res) => {
    res.send(req.user)
})
```

## 1.3 Logging out

Para hacer un cambio en el estado de loggeo debemos seleccionar el token
que usaremos para cerrar sesión. Recuerda que al tener varios tokens que
representan diferentes sesiones, no queremos cerrar todas las sesiones.

``` javascript
router.post('/users/logout', auth, async (req, res) => {
    try {
        res.user.tokens = req.user.tokens.filter((token)=>{
return token.token !== req.token 

})
await req.user.save()
res.send()

} catch (e) {
 res.status(500).send()
}
```

})

## 1.4 Hide private data

Solo debemos mostrarle información necesaria para el usuario. Esto
excluye el password hash, los tokens innecesarios.

``` javascript
router.post('/users/login', async (req, res) => {
    try {
        const user = await User.findByCredentials(req.body.email, req.body.password)
        const token = await user.generateAuthToken()
        res.send({user, token})
    } catch (e) {
        res.status(400).send()
    }
})
```

En el esquema de MongoDB podemos reemplazar el método toJSON() para que
elimine el atributo password y tokens. El método toJSON() se llama de
manera automática al hacer el send del objeto respuesta.

``` javascript
// Desde el schema de MongoDB
userSchema.methods.toJSON = function () {
    const user = this
    const userObject = user.toObject()

    delete userObject.password
    delete userObject.tokens

    return userObject
}
```

Podemos filtrar los datos usando el

``` javascript
router.get('/tasks', auth, async (req, res)=> {

  if(req.query.completed) {
    match.completed = req.query.completed=== 'true'
  }
  try{
     await req.user.populate({
       path: 'tasks',
       match
     }).execPopulate()
     res.send(req.user.tasks)
  } catch (e) {
     res.status(500).send()
})
```

## 1.5 Pagination

Para fijar una paginación especificamos la propiedad limit dentro de
options. parseInt se encarga de transformar un string de número en un
valor de tipo int.

``` javascript
router.get('/tasks', auth, async (req, res)=> {

  if(req.query.completed) {
    match.completed = req.query.completed=== 'true'
  }
  try{
     await req.user.populate({
       path: 'tasks',
       match,
       options: {
         limit: parseInt(req.query.limit)
       }
     }).execPopulate()
     res.send(req.user.tasks)
  } catch (e) {
     res.status(500).send()
})
```

Mientras que para especificar un punto de partida y brincar todos los
valores anteriores usamos skip.

``` javascript
router.get('/tasks', auth, async (req, res)=> {

  if(req.query.completed) {
    match.completed = req.query.completed=== 'true'
  }
  try{
     await req.user.populate({
       path: 'tasks',
       match,
       options: {
         limit: parseInt(req.query.limit),
         skip: parseInt(req.query.skip)
       }
     }).execPopulate()
     res.send(req.user.tasks)
  } catch (e) {
     res.status(500).send()
})
```

## 1.6 Ordenando

Para ordenarr valores vamos a usar la propiedad sort, que aceptará como
valor un campo. Como parámetro GET usaremos sortBy.

Para especificar el orden podemos colocar un caracter especial para más
tarde hacerles split y obtener el valor asc o desc.

``` javascript
router.get('/tasks', auth, async (req, res)=> {
  const match = {}
  const sort = {}

  if(req.query.sortBy) {
    const parts = req.query.sortBy.split(':')
    sort[parts[0]] = parts[1] === 'desc' ? -1 : 1
  }

  if(req.query.completed) {
    match.completed = req.query.completed=== 'true'
  }
  try{
     await req.user.populate({
       path: 'tasks',
       match,
       options: {
         limit: parseInt(req.query.limit),
         skip: parseInt(req.query.skip),
         sort: {
             createdAt: 
         }
       }
     }).execPopulate()
     res.send(req.user.tasks)
  } catch (e) {
     res.status(500).send()
})
```

## 1.7 File Upload

Para llevar a cabo un upload de un archivo usamos la libreria multer.
Esta libreria es un middleware para manejar multipart/form-data.

Para usarlo debemos configurarlo pasándole un objeto con el valor de la
carpeta de destino

``` javascript
const multer = require('multer')

const upload = multer({
  dest: 'images'
})
```

En la ruta usaremos en middleware de multer, upload.single() buscará el
archivo que se encuentre asociado al key llamado upload en el form-data
del request.

> app.post(\'/upload\', upload.single(\'upload\'), (req, res)=\>{
>
> :   res.send()
>
> })

### 1.7.1 Validación

Al recibir archivos debemos validarlos, podemos reestringir el tamaño y
el tipo de archivo. Estos valores podemos especificarlos en el objeto de
configuración al momento de instanciar multer.

Limits fijará el valor en bytes.

``` javascript
const upload = multer({
  dest: 'images',
  limits: {
    fileSize: 1000000
  }
})
```

Para validar el tipo de archivo usaremos la propiedad fileFilter, que
recibe los parámetros req, file y cb, que son request, file y callback,
respectivamente.

``` javascript
const upload = multer({
  dest: 'images',
  limits: {
    fileSize: 1000000
  },
  fileFilter(req, file, cb) {

  }
})
```

Podemos especificar el error pasándoselo al callback.

``` javascript
const upload = multer({
  dest: 'images',
  limits: {
    fileSize: 1000000
  },
  fileFilter(req, file, cb) {
    cb(new Error('El archivo debe ser un -inserta aqui- '))
    cb(undefined, true)
    cb(undefined, false)
  }
})
```

Todos las propiedades del objeto file están disponibles en la
\[documentación\](<https://www.npmjs.com/package/multer#api>)

``` javascript
const upload = multer({
  dest: 'images',
  limits: {
    fileSize: 1000000
  },
  fileFilter(req, file, cb) {
    if(!file.originalname.endsWith('.pdf')){
      return cb(new Error('Please upload a PDF'))
    }
    cb(undefined, true)
  }
})
```

Para múltiples tipos de archivo podemos usar expresiones regulares.

``` javascript
const upload = multer({
  dest: 'images',
  limits: {
    fileSize: 1000000
  },
  fileFilter(req, file, cb) {
    if(!file.originalname.(/\.(doc|docx)$/)){
      return cb(new Error('Please upload a PDF'))
    }
    cb(undefined, true)
    cb(undefined, false)
  }
})
```

## SSR con React en express

Para realizar SSR en [React](../../React/1.-React.md) necesitamos vincular un renderizado del HTML a la función encargada de servir nuestras rutas en express, o cualquier otro framework.

1. Convertir la aplicación en un string que será devuelto por Express. Un archivo que funja como servidor.
2. Cargar el código Javascript de React en la aplicación. Un archivo que funja como el script del cliente.

### SSR en express

Para el primer paso es necesario un método para generar strings a partir de JSX (renderToString) y renderizar un arreglo de rutas usando un StaticRouter y el paquete renderRoutes.

``` javascript
import { renderRoutes } from 'react-router-config'
import { StaticRouter } from 'react-router-dom/server'
import ReactDOMServer from 'react-dom/server'

const renderApp = (req, res) => {
    const store = createStore(reducer, initialState)

    const html = ReactDOMServer.renderToString(
        <Provider store={store}>
            <StaticRouter location={req.url}>
                {renderRoutes(serverRoutes)}
            </StaticRouter>
        </Provider>
    )
    res.send(setResponse(html))
}
```

Aprecia como la url que determinará lo que determina el StaticRouter se obtiene del objeto request.

Este HTML que obtenemos es lo que se encontraría dentro de App, es decir, no tiene las etiquetas body, html, head y demás.

Por lo que necesitamos una función que devuelva nuestra aplicación dentro del contenido HTML. 

``` javascript
const setResponse = (html) => {
    `
    <html>
        <head></head>
        <body>
            <div id="App">
                ${html}
            </div>
        </body>
    </html>
    `
}
``` 

Lo anterior también puede realizarse directamente desde un archivo HTML externo, usando la librería del file system o sistema de archivo (fs).

``` javascript
fs.readFile(path.resolve("./public/index.html"), "utf8", (err, data) => {
    if (err) {
      console.error(err);
      return res.status(500).send("An error occurred");
    }
})
```

Ahora podemos hacer simplemente express capture todas las rutas y las redirigá a la función principal.

```javascript
app.get("*", renderApp)
```

### Ignorar estilos en express

La configuración anterior, ocasionará que todas las rutas sean servidas por la misma función, incluido los estilos, por lo que será necesario excluirlos.

Para esto se puede echar mano del paquete *ignore-styles*

```bash
npm i ignore-styles
```

### Ejemplo mínimo de SSR

Encontré un excelente ejemplo del SSR con React en el siguiente [repositorio de github](https://github.com/juhanakristian/react-ssr-example)

## Assets require hook

Assets require hook es un hook que se encarga de importar todas nuestras imágenes en tiempo real cuando sean requeridas mediante SSR, en lugar de ser procesadas de manera manual por la función de express.

```bash
npm install asset-require-hook
```

Luego agregamos las siguientes lineas a nuestro archivo principal, las cuales especificarán los formatos a usar.

```bash
require('asset-require-hook')({
  extensions: ['jpg', 'png', 'gif'],
  name: '/assets/[hash].[ext]',
});
```

Y listo, tendremos cualquier tipo de imagen disponible en nuestro SSR app.## Hydrate en React con Redux.

Cuando estamos renderizando a un string no hay eventos de javascript asociados a esto. al entrar a frontend necesitamos hidratar el contenido con todos los *event listeners* que genera React.

```javascript
hydrateRoot(document.getElementById('root'), 
    <Provider store={store}>
        <Router history={history}>
            <App/>
        </Router>
    </Provider>
);
```

### Manejo de estado en SSR con Redux

Para realizar el manejo de estado necesitamos precargar el estado de la aplicación.

```javascript
const preloadedState = store.getState()
```

En el caso de Redux es recomendable revisar la documentación, para este curso se usará el siguiente snippet dentro del HTML ya renderizado.

```javascript
const setResponse = (html, preloadedState) => {
    return (
        `
        <html>
        //...
            <script>
            window.__PRELOADED_STATE__ = ${JSON.stringify(preloadedState).replace(/</g, '\\u003c')}
            </script>
        //...
        </html>
        `
    )
}
```

El estado inicial se convertirá en un string y se adaptará para funcionar en el lado del cliente.

Ahora podemos acceder al preloaded state desde el objeto window y usarlo para crear el store

```javascript
import { hydrateRoot } from 'react-dom/client';

const preloadedState = window.__PRELOADED_STATE__
const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE_ENHANCERS__
const store = createStore(reducer, preloadedState, composeEnhancers)

hydrateRoot(document.getElementById('root'), 
    <Provider store={store}>
        <Router history={history}>
            <App/>
        </Router>
    </Provider>
);

```

Para evitar que el usuario pueda acceder a esa información es necesario borrar el *preloaded state* tras la creación del store del objeto window.

```javascript
delete window.__PRELOADED_STATE__
```## Helmet y SSR en el servidor

Para configurar la ruta pública

``` javascript
app.use(express.static(`${__dirname}/public`))
```

Helmet contiene una serie de middleware que añaden cabaceras útiles para agregar a las respuestas de express. 

``` javascript
npm install helmet
```

Por ejemplo, para deshabilitar el x-powered-by, que le indica al navegador el nombre del servidor, usamos.

``` javascript
app.disable(‘x-powered-by’)
```
