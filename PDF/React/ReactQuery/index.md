# React-Query

Es una librería para el manejo de peticiones, se encarga del cacheo y abstrae toda la funcionalidad.

## Instalación

Primero se necesita instalar React Query. Para usarse con Solid o Svelte se necesita instalar una versión diferente.

```bash
npm i react-query
```

### Creación de un provider

Necesitamos envolver nuestra aplicación en un *QueryClientProvider*

```javascript
import { QueryClient, QueryClientProvider } from 'react-query'

const queryClient = new QueryClient()
const root = document.getElementById("root")
// ...
ReactDOM.createRoot(root).render(
    <QueryClientProvider client={queryClient}>
        <App/>
    </QueryClientProvider>
)
```## Acciones de React-Query

React Query solo permite realizar dos tipos de acciones:
* Queries
* Mutations

```javascript
import { useQuery, useMutation } from 'react-query'
```
### useQuery

La función useQuery recibe un array de identificadores únicos y una promesa, bajo los nombres de *queryKey* y *queryFn*, respectivamente.

```javascript
const query = useQuery({
    queryKey: ["<key>"],
    queryFn: promesa
})
```

Podemos usar cualquier número de hooks useQuery en nuestra función.

La promesa que asignamos a *queryFn* puede recibir un objeto opcional como parámetro que contiene varias propiedades, entre las que se encuentran:

* meta
* pageParam
* queryKey
* signal

### Propiedades de useQuery

El objeto query que obtenemos tiene múltiples propiedades, de las que resaltan:

* data 
* error
* isLoading
* isError
* status (Igual a "error" o "loading", "iddle" o "success")

Podemos usar las propiedades para manejar el estado de nuestros componentes.

### useQuery y reintentos de fetching

useQuery intenta obtener la información 3 veces antes de devolver un error.

### Async mutate

El objeto useMutate tiene una versión asíncrona que usa promesas

```javascript
const mutation = useMutation({})

mutation.mutateAsync()
```
## useMutation

En el caso de mutationFn, este espera también una promesa, y recibe un único dato

```javascript
const mutation = useMutation({
    mutationFn: (variables) => promesa 
})
```

Ahora para llamar a la mutación, necesitamos usar el método *mutate*.

```javascript
mutate.mutation(variables)
```

### onSuccess

Para realizar cambios en la información una vez agregamos o modificamos nuevos datos usamos el hook onSuccess

```javascript
const mutation = useMutation({
    // ...
    onSuccess: () => {

    }
})
```

onSuccess recibe parámetros opcionales

```javascript
const mutation = useMutation({
    // ...
    onSuccess: (data, variables, context) => {

    }
})
```

### onError

onError se comporta bastante similar a onSuccess y se ejecuta si hubo algún error.

```javascript
const mutation = useMutation({
    // ...
    onError: () => {

    }
})
```

La función onError recibe parámetros opcionales

```javascript
const mutation = useMutation({
    // ...
    onError: (error, variables, context) => {

    }
})
```

### onSettle

La función onSettled 

```javascript
const mutation = useMutation({
    // ...
    onSettled: (data, error, variables, context) => {

    }
})
```

### onMutate

La función onMutate se ejecuta antes de que la mutación ocurra y recibe el objeto variables.

```javascript
const mutation = useMutation({
    // ...
    onSettled: (variables) => {

    }
})
```


### Actualizando información tras useMutate

Generalmente se hará uso del método *invalidateQueries* de useQueryClient para invalidar la información vieja tras un useMutation exitoso.

```javascript
    const queryClient = useQueryClient()
     
    const mutation = useMutation({
    // ...
    onSuccess: () => {
        queryClient.invalidateQueries(["<key>"])
    }
    })
```

Tras cualquier cambio en el *key* los datos se actualizarán realizando una nueva petición al servidor.

invalidateQueries vigila todos las llaves que **empiecen con** cada uno de los elementos del array en su primer argumento.

invalidateQueries recibe un segundo argumento que sobreescribe el primer argumento, para que solo vigile la key exacta.

```javascript
        queryClient.invalidateQueries(["<key>"], {exact: true})
```

### Propiedades de useMutation

El objeto mutation que obtenemos cuenta con múltiples propiedades, de las que resaltan:

* data 
* error
* loading
* isLoading
* isError
* status (Igual a "error" o "loading", "iddle" o "success")

### Retry

A diferencia de useQuery, use mutation no realiza intentos posteriores si ocure un fallo. 

Pueden habilitarse con la propiedad retry, aunque **no es recomendado**.

```javascript
    const queryClient = useQueryClient()
     
    const mutation = useMutation({
    // ...
    retry: <numero>
    })
```## Manteniendo la información actualizada

El hook useQuery detecta cambios de página para actualizar los datos ante focus y unfocus o perdida de conexión de internet. Mostrando primero la información cacheada y luego obteniendo la información actualizada.

Estos estados se obtienen a través de la propiedad *fetchStatus*

```javascript
postQuery.fetchStatus

```

La cual puede tomar valores como

* idle
* fetching
* stale

Es posible cambiar el *staleTime* en milisegundos modificando la propiedad defaultOptions.

```javascript
const queryClient = new QueryClient({
    defaultOptions: {
        queries: {
            staleTime: <milisegundos>
        }
    }
})
```

Esto nos garantiza que la información no se actualizará hasta que transcurra el tiempo que especificamos.

### Refetching

También podemos estar actualizando la información periódicamente

```javascript
const query = useQuery({
    // ...
    refetchInterval: <milisegundos>
})
```## Refetching

Para mantener actualizada la información periódicamente usamos la propiedad refetchInterval.

```javascript
const query = useQuery({
    // ...
    refetchInterval: <milisegundos>
})
```## Fetching condicional

Es posible condicionar la ejecución de una query usando la propiedad *enabled*.

```javascript
const query = useQuery({
    // ...
    enabled: <boolean>
})
```

Bastante útil usar un valor dinámico que dependa de la existencia de algún otro dato, como por ejemplo:

* session.status de nextjs: para saber si una session ha terminado de cargar
* router.isReady de nextjs: para saber si el router ha terminado de recibir los parámetros## Actualizando la caché

Para actualizar la caché de una query usamos el método setQueryData, si la query no existe, se creará. El primer argumento es el array de keys y el segundo la información con el que se actualizará.

```javascript
const queryClient = useQueryClient()

queryClient.setQueryData(["<key>", "<key.property>"], data)
```

Para actualizar múltiples queries se usa el método *setQueriesData*. ## Paginación

Para llevar a cabo la paginación es importante colocar la página dentro de la *queryKey* y usar *keepPreviousData*.

keepPreviousData mostrará la información antigua antes de cambiarla por la nueva.

```javascript
const { status, error, data, isPreviousData } = useQuery({
    queryKey: ["<key>", { page }],
    keepPreviousData: true,
    queryFn: () => paginateData(page)
})
```

Es recomendable agregar *hasNextPage* y *hasPreviousPage* como parte de la respuesta por el backend## Infinite scrolling

Para lograr el infinite scrolling echaremos de mano un hook diferente llamado useInfiniteQuery

con la diferencia de que requiere una propiedad llamada getNextPageParam 

```javascript
const { status, error, data, isFetchingNextPage, hasNextPage, fetchNextPage} = useInfiniteQuery({
    queryKey: ["<key>", "infinite"],
    getNextPageParam: prevData => prevData.nextPage,
    queryFn: ({pageParam=1}) => getDataPaginated(pageParam)
})
```

además la queryFn requiere un parámetro opcional llamado pageParam, que inciializamos en uno.

El método *fetchNextPage* lo llamamos cuando queremos actualizar la información.

Mientras que hasNextPage se deduce directamente de *getNextPageParam*

También existe *hasPreviousPage* y *fetchPreviousPage*## Multiples Queries

Para ejecutar múltiples queries usamos el hook useQueries

El cual se encarga de ejecutar múltiples queries

```javascript
const queries = useQueries({queries: query?.data?.map(()=>{
    return {
        queryKey: ["<key>", "<key.property>"],
        queryFn: () => getData("<key.property>")
    }
})})
```

El resultado de queries debe ser así mismo un query.## Prefetch queries

Podemos realizar un prefetch de las queries usando el método *prefetchQuery* de manera que cuando se requiera la información, esta ya se encuentre en la caché.

```javascript
queryClient.prefetchQuery({
    queryKey: ["<key>", 1],
    queryFn: () => getData(1)
})
```

Este prefetch podemos vincularlo a un *onMouseHover* o cualquier otro evento que consideremos pertinente.## Información inicial

Existen dos tipos de información inicial que podemos especificar en el objeto *useQuery*

* placeholderData
* initialData

La diferencia es que *initialData* es tratada como si se hubiera obtenido, guardándola en la caché y persistirá hasta que pase el staleTime. 

```javascript
queryClient.prefetchQuery({
    initialData: [{key: "<value>"}]
})
```

Por otro lado, *placeholderData* se reemplaza tan pronto como se obtenga información.

```javascript
queryClient.prefetchQuery({
    placeholderData: [{key: "<value>"}]
})
```
## convertir un objecto en formData

Para convertir un objecto en formData, bastante útil para subir archivos a django rest framework directamente, en lugar de usar base64 podemos echar mano de Javascript en el frontend
 
 ``` javascript
const convertToFormData = (data: <form>): FormData => {
   const formData = new FormData()
   formData.append('<campo_1>', data.campo1)
   formData.append('<campo_2>', data.campo2)
   if (data.<imagen> && data.<imagen>.length > 0) {
       formData.append('<imagen>', data.<imagen>[0])
   }
   return formData
}
 ```