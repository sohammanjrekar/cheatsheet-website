# Mongoose

Mongoose es una librería para el manejo de MongoDB escrita en [Javascript](/Notes/FundamentosDeJavascript/1.-Fundamentos-de-Javascript.md).
## 1.1 Crear conexión

Antes de utilizarlo debemos crear una conexión con mongoDB. Esta
conexion debemos importarla al archivo que servirá como el enrutador.

``` javascript
const mongoose = require('mongoose')

mongoose.connect('mongodb://127.0.0.1:27017/task-manager-api', {
    useNewUrlParser: true,
    useCreateIndex: true,
    useFindAndModify: false
})
```



## 1.2 Schemas

En Mongoose un schema es únicamente la estructura que tendran los datos,
la estructura así como el tipo de los datos. Mientras que un modelo es
una estructura que toma un schema y que permite interactuar con los
datos por medio de funciones que permiten un CRUD de los objetos.

``` javascript
const mongoose = require('mongoose')

const Task = mongoose.model('Task', {
    description: {
        type: String,
        required: true,
        trim: true
    },
    completed: {
        type: Boolean,
        default: false
    }
})

module.exports = Task
```

### 1.2.1 Ids en los schemas

Los modelos en MongoDB tienen id en formato de hash. Normalmente
buscamos un objeto usando el método findById de su modelo.

``` javascript
const task = await Task.findById('hash')
```

### 1.2.2 Métodos para los schemas

Podemos especificar métodos para nuestros modelos. En este ejemplo
creamos un método para generar tokens de autenticación

``` javascript
userSchema.methods.generateAuthToken = async function () {
    const user = this
    const token = jwt.sign({ _id: user._id.toString() }, 'thisismynewcourse')

    user.tokens = user.tokens.concat({ token })
    await user.save()

    return token
}
```## 1.3 Queries

Podemos obtener las colecciones con el método getCollection

``` javascript
db.getCollection(name)     
```

### 1.3.1 Concatenación de queries

Luego podemos encadenar métodos de búsqueda como find

``` javascript
db.getCollection(name).find({owner: user._id})
```### 1.4.3 FindOne

En este ejemplo creamos un método para encontrar credenciales. El método
findOne nos lo provee mongoose para manipular nuestros modelos, le
pasamos un objeto con propiedades y nos encontrará un usuario que
contenga ese objeto

``` javascript
userSchema.statics.findByCredentials = async (email, password) => {
    const user = await User.findOne({ email })

    if (!user) {
        throw new Error('Unable to login')
    }

    const isMatch = await bcrypt.compare(password, user.password)

    if (!isMatch) {
        throw new Error('Unable to login')
    }

    return user
}
```## 1.5 Hooks

Podemos especificar acciones previas a ejecutar cuando un método se
ejecuta.

``` javascript
userSchema.pre('remove', async function(next){
const user = this
await Task.deleteMany({owner: user._id })
next()
})
```

El método pre ejecutará, antes de cualquier remove, la función que borra
cualquier Task cuyo usuario tenga el \_id del useEl método pre
ejecutará, antes de cualquier remove, la función que borra cualquier
Task cuyo usuario tenga el \_id del user
## 1.6 Relaciones tipo Foreign Key

Podemos crear relaciones tipo Foreign Key especificando un Id

``` javascript
const mongoose = require('mongoose')

const Task = mongoose.model('Task', {
    description: {
        type: String,
        required: true,
        trim: true
    },
    completed: {
        type: Boolean,
        default: false
    }
    owner: {
        type: mongoose.Schema.Types.ObjectId,
        required: true,
        ref: 'User'
    }
})

module.exports = Task
```## 1.7 Relaciones inversas

Para crear una relación inverse podemos usar la relación usando la
función virtual, esta es solo una relación virtual, no está en la base
de datos. La referencia es el modelo, el localField es el campo con el
que está asociado, mientras que foreignField es el nombre del campo en
el modelo del cual queremos obtenerlo, Task en este caso.

``` javascript
userSchema.virtual('tasks', {
    ref: 'Task',
    localField: '_id',
    foreignField: 'owner'
})
```## 1.8 Validación

También podemos especificar métodos de validación para cada campo.

``` javascript
const userSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true,
        trim: true
    },
    email: {
        type: String,
        unique: true,
        required: true,
        trim: true,
        lowercase: true,
        validate(value) {
            if (!validator.isEmail(value)) {
                throw new Error('Email is invalid')
            }
        }
    },
```

Podemos especificar una longitud mínima o eliminar los espacios con
minlength y trim, respectivamente.

``` javascript
password: {
    type: String,
    required: true,
    minlength: 7,
    trim: true,
    validate(value) {
        if (value.toLowerCase().includes('password')) {
            throw new Error('Password cannot contain "password"')
        }
    }
},
age: {
    type: Number,
    default: 0,
    validate(value) {
        if (value < 0) {
            throw new Error('Age must be a postive number')
        }
    }
},
```

### 1.8.1 Array de valores

También nos es posible tener array de valores, para casos donde tenemos
varias instancias de un mismo tipo de datos.

``` javascript
tokens: [{
    token: {
        type: String,
        required: true
    }
}]
})
```
