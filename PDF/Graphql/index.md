# Graphql

GraphQL es un lenguaje de consulta y manipulación de datos para APIs, y
un entorno de ejecución para realizar consultas con datos existentes.​
GraphQL fue desarrollado internamente por Facebook en 2012 antes de ser
liberado públicamente en 2015.​ Su función principal es crear un endpoint
para manejar complejas consultas REST.


## 1.1 Instalación

Se instala directamente desde npm o yarn.

``` bash
npm install graphql
```

## 1.2 Tipos en graphql

Existen 5 tipos de principales de datos en Graphql. Si no se especifica
un tipo se tratará como null.

-   String
-   Int
-   Float
-   Boolean
-   ID

En graphql **no existe un campo estándar definido para el tipo date**,
usado para el manejo de fechas.

## 1.3 Creación de un schema

Un schema es la estructura que define lo que devolverá un API. En un
schema solo puede haber un tipo Query, que es el que define el conjunto
de búsquedas que se pueden realizar a la API.

``` javascript
'use string'

const { graphql, buildSchema } = require('graphql')

const schema = buildSchema(
    type Query {
        hello: String
    }
)
```

Ahora le pasamos el schema ala función graphql

``` javascript
graphql(schema, '{hello}').then(data=>console.log(data))
```

## 1.4 Query

Una query permite realizar una petición al API, dentro de una query se
indica la consulta a realizar y los campos a obtener.

GraphQL retornará siempre un objeto con la información dentro del objeto
data.

``` javascript
{
"data": data,
//
}
```

### 1.4.1 Errores la query

Graphql devuelve una respuesta en forma de objeto con un campo data y un
campo error, este es un arreglo.

``` javascript
{
"data": data,
"error": []
}
```

## 1.5 Resolver

Para realizar un query **se requiere del objeto resolvers**, este objeto
contiene **una propiedad del mismo nombre que la query** que va a
resolver o ejecutar.

``` javascript
const resolvers = {
    hello: () => {
        return 'Hola Mundo'
    }
}
```

Para ejecutar una query ejecutamos el método graphql, el primer
argumento será el schema, el segundo la consulta y el último los
resolvers. Esto nos devolverá una promesa que podremos procesar. La
palabra query en la consulta es completamente opcional y puede omitirse.

``` javascript
graphql(schema, 'query { hello }', resolvers).then((data) => {
    console.log(data);
});
```

## 1.6 Graphql con express

Instalamos express y express-graphql

``` bash
npm i express express-graphql
```

Podemos crear un servidor

``` javascript
const express = require('express')
const { graphqlHTTP } = require('express-graphql'); 

const app = express()
const port = process.env.port || 3000
```

Ahora podemos correr el servidor y tendremos una pantalla para realizar
pruebas y documentación automática en la ruta */api*

``` javascript
app.use('/api', graphqlHTTP({
    schema: schema,
    rootValue :resolvers,
    graphiql: true
}))

app.listen(port, () => {
    console.log(`Escuchando en http://localhost:${port}`)
})
```

## 1.7 Custom types

Graphql nos permite definir nuestros propios tipos de datos.

``` javascript
type <Nombre del tipo> {
    propiedad: Tipo de dato
}
```

Estos types los podemos crear en un archivo externo con extension
graphql

``` javascript
// lib/schema.graphql
type Query {
    hello: String
}
```

Para luego leerlos de la siguiente manera

``` javascript
const schema = buildSchema(readFileSync(join(__dirname, 'lib', 'schema.graphql'), 'utf-8'))
```

### 1.7.1 Anidación de types

Los types pueden ser anidados e incluso especificar arreglos de types.

``` javascript
type Course {
    _id: ID
    title: String
    teacher: String
    description: String
    topic: String
}

type Query {
    getCourses: [Course]
}
```

## 1.8 Graphql-tools

Es un wrapper de buildSchema con funciones mejoradas **DESACTUALIZADO**

``` javascript
const { makeExecutableSchema } = require('graphql-tools') 
```

Requiere dos argumentos, los types y los resolvers

``` javascript
const schema = makeExecutableSchema({ typeDefs, resolvers })
```

El objeto resolvers **necesita una propiedad llamada Query** que
contenga un objeto que, a su vez, tiene cada una de las queries o
consultas.

``` javascript
module.exports = {
Query: {
    getCourses: () => {
    return courses
    }
}
}
```

## 1.9 Querys con argumentos

Podemos especificar un nuevo tipo de query, este recibirá un argumento
llamado id, y será de tipo ID. El caracter ! indica que es un campo
obligatorio.

``` javascript
type Query {
"Devuelve todos los cursos"
getCourses: [Course]
"Devuelve un curso"
getCourse(id: ID!): Course
}
```

Ahora podemos personalizar el comportamiento de nuestro resolver. El
resolver recibirá root como primer argumento y un objeto con los
argumentos como segundo argumento.

``` javascript
module.exports = {
Query: {
    getCourses: () => {
        return courses
    },
    getCourse: (root, args) => {
        const course = courses.filter(course => course._id === args.id)
        return course.pop()
    }
}
}
```

## 1.10 Aislando variables de entorno

El paquete dotenv lee variables de entorno en un archivo llamado .env en
la raiz del proyecto.

``` bash
npm i dotenv
```

El archivo de variables de entorno debería verse así

``` bash
DB_USER=usuario
DB_PASSWD=password
DB_HOST=host
DB_PORT=puerto
DB_NAME=base_de_datos
```

Una vez instalado basta requerirlo y ejecutar su método config. Esto
mandará las variables de entorno a process.env, desde donde podremos
obtenerlas

``` javascript
require('dotenv').config()

const {
    DB_USER,
    DB_PASSWD,
    DB_HOST,
    DB_PORT,
    DB_NAME
} = process.env
```

## 1.11 Configurando MongoDB para Graphql

Para crear una cuenta y tener disponible mongodb en la nube, directo de
la página oficial, podemos usar Mongo Atlas, los pasos son los
siguientes:

1.  Crear una cuenta en [Mongo Atlas](https://cloud.mongodb.com/) y
    generar un nuevo cluster
2.  En el nuevo cluster, hacer click en Connect
3.  Colocar nuestra IP en la lista blanca de direcciones IP
4.  Crear un usuario y una contraseña para la Base de datos
5.  Seleccionar la opcion "connect your application"
6.  Copiar la cadena de conexión
7.  En la pestaña de la base de datos ir a collections y agregar una
    base de datos

### 1.11.1 Configurar de un administrador GUI para mongoDB

Descargar e instalar Robot 3T para nuestro sistema operativo aquí hay un
[tutorial bastante
completo](https://angelcruz.dev/post/instalar-robo-3t-formerly-robomongo-en-ubuntu-1804)

1.  En robot3t hagan click en Create en la ventana MongoDB Connections
2.  Pegar la cadena de conexion copiada anteriormente, reemplazando las
    variables sensibles entre mayor que y menor que, en el input al lado
    de la leyenda "From SRV"
3.  Click en From SRV
4.  Click en test connection
5.  Si todo salio bien y la conexión fue exitosa, guardar con Save.

## 1.12 Configurar MongoDB en el proyecto

Mongo db requiere la instalación del paquete mongo

``` bash
npm i mongodb
```

La función connect requiere una url en formato
*mongodb+srv://${DB_USER}:${DB_PASSWD}@${DB_HOST}/${DB_NAME}* para
conectarse. Y posteriormente un nombre de base de datos para su método
db.

``` javascript
// db.js
const { MongoClient } = require('mongodb')

const mongoURL = `mongodb+srv://${DB_USER}:${DB_PASSWD}@${DB_HOST}/${DB_NAME}`
let connection

async function connectDB () {
  if (connection) return connection
  let dbConnection, client
  try {
    client = await MongoClient.connect(mongoURL, {useNewUrlParser : true})
    dbConnection = client.db(DB_NAME)
  } catch (error) {
    console.error('Could not connect to db', mongoURL, error)
    process.exit(1)
  }
  return dbConnection
}

module.exports = connectDB
```

Esa función de conexión se requiere para integrarse con los resolvers.

``` javascript
const connectDb = require('./db')

module.exports = {
Query: {
    getCourses: async () => {
    let db
    let courses = []
    try {
        db = await connectDb()
        courses = await db.collection('courses').find({}).toArray()
    } catch (error) {
        console.error(error)
    }
    return courses
    },
}
}
```

Si queremos obtener un objeto individual usando MongoDB usamos el método
findOne y especificamos el campo, para convertir un string de id en un
ObjectId compatibles con Mongo, usamos la función del mismo nombre que
nos provee

``` javascript
const connectDb = require('./db')
const { ObjectId } = require('mongodb')

module.exports = {
Query: {
    {//...},
    getCourse: async (root, { id }) => {
    let db
    let course
    try {
        db = await connectDb()
        course = await db.collection('courses').findOne({_id: ObjectId(id)})
    } catch (error) {
        console.error(error)
    }
    return course
    }
}
}
```

## 1.13 mutations

Un mutation va a requerir de un campo de tipo Input que son como
plantillas que le van a indicar qué campos son necesarios para insertar
o modificar información.

La sintaxis de una mutation queda de la siguiente manera:

``` javascript
nombreMutation(input: InputType): tipo
```

Y el InputType es otro tipo de graphql

``` javascript
input CourseInput {
    title: String!
    teacher: String
    description: String!
    topic: String
}

type Mutation {
    "Crea un curso"
    createCourse(input: CourseInput!): Course
}
```

Una vez creado el mutation se debe de especificar su comportamiento

``` javascript
const connectDb = require('./db')

module.exports = {
createCourse: async (root, { input }) => {
    const defaults = {
    teacher: '',
    topic: ''
    }
    const newcourse = Object.assign(defaults, input)
    let db
    let course
    try {
    db = connectDb()
    course = await db.collection('courses').insertOne(newcourse)
    newcourse._id = course.insertedId
    } catch (error) {

    }
    return newcourse
}
}
```

Una vez creado el objeto que contiene las Mutations, **se debe agregar
al objeto resolvers como una propiedad llamada Mutation**

``` javascript
const mutations = require('./mutations')

module.exports = {
Query: {...},
Mutation: mutations
}
```

Para hacer una query de un resolver usamos nuestra acción definida.
Además podemos especificar los campos de retorno, puesto que el resolver
devuelve un modelo. Esto se hace después del argumento de la función.

``` javascript
mutation {
createCourse(input:{
    title: "titulo 4",
    description: "descripción 4",
    topic: "topic 4",

}){
    _id
    title
    description
}
}
```

## 1.14 Nested types

Para poder agregar un subtipo en el schema necesitamos crear un resolver
donde creemos un objeto con el nombre del padre y una propiedad con el
nombre del hijo

``` javascript
const connectDb = require('./db')
const { ObjectId } = require('mongodb')

module.exports = {
Course: {
    people: async ({ people }) => {
    let db
    let peopleData
    let ids
    try {
        db = await connectDb()
        ids = people ? people.map(id => ObjectId(id)) : []
        peopleData = ids.length > 0 ? await db.collection('students').find({ _id: { $in: ids } }).toArray() : []
    } catch (error) {

    }
    return peopleData
    }
}
}
```

Y una vez especificado ya podemos agregarlo al schema.

``` javascript
type Course {
    _id: ID
    title: String!
    teacher: String
    description: String!
    topic: String
    people: [Student]
}
```

Y ahora tenemos que agregarlo a nuestros resolvers como si fuera uno
más, desestructurándolo. Nuestros resolvers de campos anidados se
ejecutarán cuando los campos sean consultados.

``` javascript
module.exports = {
    Query: queries,
    Mutation: mutations,
    ...types
}
```

## 1.15 Alias y fragments

Un alias permite ejecutar más de dos consultas al mismo tiempo y
nombrarlas de distinta manera para poder identificarlas.

La sintaxis de un Alias es bastante simple:

``` javascript
nombreDelAlias: tipoDeDato(argumento: tipo){
datos }
```

Ahora podemos ejecutar varias consultas al mismo tiempo

``` javascript
nombreDelAlias: tipoDeDato(argumento: tipo){
datos }
```

Además de los Alias, podemos agrupar campos para ser reutilizados en
distintas peticiones gracias a los Fragments.

``` javascript
fragment CourseFields on Course {
_id
title
description
}
```

Y ahora lo usamos desestructurándolo

``` javascript
getCourse(id: "id"){
...CourseFields
otroCampo
}
```

## 1.16 Variables

Podemos utilizar variables dentro de las peticiones que hagamos a
GraphQL simplemente definiéndolas con la siguiente sintaxis:

``` javascript
$nombre: tipo
```

## 1.17 Enums

tipos de datos escalares cuyos valores son configurables. Si definimos
un tipo de dato como enum sus valores posibles solamente serán aquellos
que se encuentren entre los definidos en el enum.

``` javascript
enum Nivel{
    principiante
    Medio
    Avanzado
}
```

Y ahora podemos especificar ese tipo en cualquier otro type. **Recuerda
añadir el level a todos los tipos que editan**

``` javascript
type Course {
...
level: Level
}
```

## 1.18 Interfaces

Una interfaz nos permite definir un tipo de datos padre que, utilizando
la palabra implements, va a implementar los campos que tenga definidos
dentro del tipo de dato que queramos. Es necesario que los tipos que
hereden de una interfaz tengan, de manera forzosa, todos los campos que
implementa la interfaz.

``` javascript
interface Person {
    _id: ID
    name: String!
    email: String!
}

type Student implements Person {
    _id: ID
    name: String!
    email: String!
    avatar: String
}

type Monitor implements Person {
    _id: ID
    name: String!
    email: String!
    phone: String
}
```

Una vez implementado podemos usar un resolver que maneje la interfaz y
devolver resultados diferentes verificando el tipo del hijo. Para lo
anterior, usamos la propiedad *\_\_resolveType*, que deberá devolverá el
type adecuado como un string.

``` javascript
Person: {
    __resolveType: (person, context, info) => {
    if (person.phone) {
        return 'Monitor'
    } else {
        return 'Student'
        }
    }
}
```

### 1.18.1 Queries con interfaces

En la query podemos usar el tipo de los hijos para agregar campos de
retorno opcionales en las queries. La sintaxis es por medio de tres
puntos seguidos de la palabra on.

``` javascript
{
getPeople{
    _id
    name
    email
    ... on Monitor{
    phone
    }
}
}
```

Al retornar la query graphql le agregará el campo phone únicamente a los
tipos Monitor.

## 1.19 Directivas

Las directivas son una instrucción que permite agregar comportamientos
especiales. Con ellas podemos modificar el flujo de nuestras queries.

### 1.19.1 @include

@include incluye el contenido si su argumento es true

``` javascript
@include(if: Boolean) {
    datos
}
```

Ejemplo

``` javascript
query getPeopleData($monitor: Boolean!){
    getPeople{
        name
        email
        ...on Monitor @include(if:$monitor){
            phone        
            }
        }
    }
```

### 1.19.2 @skip

Omite su contenido si el argumento es true.

``` javascript
query getPeopleData($monitor: Boolean!){
    getPeople{
        name
        email
        phone @skip(if: $monitor)
        }
    }
```

### 1.19.3 @deprecated

Para marcar propiedades que caducarán

``` javascript
type Monitor {
    name: String
    phone: String @deprecated

}
```

## 1.20 Unions

Unions permite agrupar tipos personalizados usando la palabra *union*.

Su sintaxis es la siguiente:

``` javascript
union UnionType = CustomType1 | CustomType2 | CustomType3
```

Y de esa forma también podemos definir arreglos de los unions

``` javascript
type Query {
    searchItems(keyword: String!): [SearchResult]
}
```

Al momento de realizar una query que retorna una union podemos
identificar el tipo de dato **solicitando el campo \_\_typename**

``` javascript
getCourse{
    __typename
} 
```

Y nos devolverá el \_\_typename.

``` javascript
{
"data": {
    "searchItems": [
    {
        "__typename": "Course",
        "title": "titulo 1",
        "description": "descripción 1"
    }
    ]
}
}
```

Ahora con ese \_\_typename podemos manipular la query para que se
comporte diferente dependiendo del type.

``` javascript
{
    searchItems(keyword: "searchTerm"){
    __typename
    ... on Course{
        title
        description
}
    ... on Monitor {
        name
        phone
}
    ... on Student {
        name
        email
}
}
}
```

### 1.20.1 Usando los unions para manejar búsquedas en múltiples collecciones

Para efectuar una búsqueda en múltiples collections, primero necesitamos
crear índices de búsqueda. Eso se crea en la sección "search index" de
Mongo Atlas. Una vez creado se usa la función aggregate para obtener los
resultados y la siguiente estructura:

-   index, el nombre del índice, lo establecemos al crear el índice
-   query, el término de búsqueda
-   path, campos donde buscará, por defecto es una wildcard

De esta manera:

``` javascript
courses = await db.collection('courses').aggregate([
        {
        $search: {
            index: 'courses_index',
            text: {
            query: keyword,
            path: {
                'wildcard': '*'
            }
            }
        }
        }
    ]).toArray()
totalItems = [...courses, ...]
```

## 1.21 Preparar para producción

Para subir un servidor de graphql a producción necesitamos el paquete de
express y un middleware. Usaremos el paquete cors, para los headers
necesarios para servir el contenido desde cualquier origen.

``` bash
npm i cors
```

Usaremos cors en el archivo de express para quitar la consola
interactiva de graphql

``` javascript
const app = express()
const cors = require('cors')
app.use(cors())
```

Y podremos usar la variable NODE_ENV para desactivarla directo en la
ruta /api de manera personalizada dependiendo de la variable de entorno.

``` javascript
const isDev = process.env.NODE_ENV !== 'production'

app.use('/api', graphqlHTTP({
    schema: schema,
    rootValue: resolvers,
    graphiql: isDev
}))
```

Ya en package.json o en otro archivo podemos hacer algo como:

``` javascript
"scripts": {
    "start": "NODE_ENV=production node index",
}
```

## 1.22 Peticiones HTTP

Para acceder al resultado de la api de Graphql le pasamos el parámetro
GET llamado query, seguido de nuestro string de consulta escapado

``` bash
/api?query={getCourses{
_id
topic
people{
  _id
  name
  email
}
}}
```

Que ya escapado con html entities se vería algo así

``` bash
/api?query={getCourses{%0A%20 _id%0A%20 topic%0A%20 people{%0A%20%20%20 _id%0A%20%20%20 name%0A%20%20%20 email%0A%20 }%0A}}
```
