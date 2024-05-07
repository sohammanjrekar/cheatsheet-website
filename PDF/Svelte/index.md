# Svelte

Es un framework de Javascript para construir interfaces de usuario,
entre las ventajas que tiene sobre otros frameworks están las
siguientes:

-   Menos código
-   No más código innecesario
-   No virtual DOM (A diferencia de [React](../React/1.-React.md))
## 1.1 Creación de una instancia

Para crear un entorno de trabajo con svelte podemos partir de una
plantilla con el siguiente código

``` bash
npx degit sveltejs/template
```

Ya con la plantilla creada deberemos instalar las dependencias

``` bash
npm install
```

## 1.2 Estructura

Lo anterior nos dejará un espacio de trabajo con la siguiente estructura

``` bash
.
├── node_modules
├── package.json
├── package-lock.json
├── public
├── README.md
├── rollup.config.js
└── src
```

El archivo *rollup.config.js* sirve para compilar el proyecto.

Para habilitar el espacio de trabajo ejecutamos el comando a
continuación. Esto creará un servidor en localhost en el puerto 5000

``` bash
npm run dev
```

Dentro de la carpeta src tendremos un archivo *main.js* y un archivo
*App.svelte*

El archivo *main.js* presenta la configuración inicial

``` javascript
import App from './App.svelte';

const app = new App({
    target: document.body,
    props: {
        name: 'world'
    }
});

export default app;
```

Podemos apreciar el target y los props.

Por otro lado en el archivo App.svelte tenemos todo lo que necesitamos
para trabajar con Svelte, tenemos código javascript, el html y los
estilos. Los props aparecen entre llaves y van a ser tomados del archivo
*main.js*

## 1.3 Contenido

Cada archivo .svelte tiene 3 etiquetas; script, para la lógica; un div,
componente o equivalente, para el contenido; y style, para los estilos.

``` html
<script></script>
<div></div>
<style></style>
```

## 1.4 Estilos

Todo lo que esté dentro de las etiquetas style va a ser leído. Para
crear estilos globales usamos *:global*

``` css
:global(body) {
    background-color: #f2eee2;
    color: #0084f6;
}
```

Para establecer variables para el tema completo las especificamos usando
*:root*

``` css
:global(:root) {
    --theme-color: purple;
}
```

Para especificar una variable

``` css
p {
    color: var(--theme-color);
    font-size: 22px;
}
```

## 1.5 Variables

Podemos agregar variables en el archivo *main.js* e utilizarlas
directamente en la parte inferior, dentro de la etiqueta main. Para ello
deberemos declararlas. Estas podemos definirlas ahí mismo o pasarlas
como props.

``` javascript
<script>
    export let name;
    export let lastName;
    export let svelteLogo = "https://arepa.s3.amazonaws.com/svelte-logo.png"
</script>

<main>
    <h1>Hello {name} {lastName}!</h1>
    <p>Visit the <a href="https://svelte.dev/tutorial">Svelte tutorial</a> to learn how to build Svelte apps.</p>
    <img src={svelteLogo} alt="Svelte Logo"/>
</main>
<style>
    ...
</style>
```

## 1.6 Componentes

Parar crear componentes creamos una carpeta llamada components dentro de
la carpeta src, *deberemos crear un archivo que empiece con mayúscula y
que termine en .svelte*, lo anterior nos crea la siguiente estructura:

``` html
src/
├── App.svelte
├── components
│   └── About.svelte
└── main.js
```

Cada componente va a contar con una parte de lógica, una parte de
estilos y otra de código. Es recomendable adoptar la convención de
colocarle una clase a la etiqueta div con el nombre del componente.

``` html
<script>
</script>

<div class="About">
</div>

<style>
</style>
```

Para importar un componente al archivo *main.js* lo traemos de su
ubicación

``` html
<script>
    import About from "./components/About.svelte";
    export let name;
    export let lastName;
    export let svelteLogo = "https://arepa.s3.amazonaws.com/svelte-logo.png"
</script>

<main>
    <h1>Hello {name} {lastName}!</h1>
    <p>Visit the <a href="https://svelte.dev/tutorial">Svelte tutorial</a> to learn how to build Svelte apps.</p>
    <img src={svelteLogo} alt="Svelte Logo"/>
</main>

<style>
    ...
</style>
```

### 1.6.1 Componentes especiales

Svelte nos permite colocar una etiqueta svelte:head que nos sirve para
reemplazar el contenido del head, aquí podemos modificar los valores de
SEO, o title o cualquier otro valor que deseemos sobrescribir

``` html
<svelte:head>
    <title>Titulo </title>
</svelte:head>
```

### 1.6.2 Anidación de componentes

Para anidar un componente dentro de otro tenemos que especificar que el
primer componente va a ser usado como un contenedor, para esto
colocaremos una etiqueta *slot* dentro del componente.

``` html
<div class="Box">
  <slot/>
</div>
```

Una vez hecho esto ya podremos colocar otros elementos dentro del
componente.

``` html
<Box>
    <OtroComponente/>
</Box>
```

## 1.7 Reactividad

Los valores de las variables se modificarán automáticamente al cambiar.
Para poner un ejemplo podemos crear una función para actualizar valores,
asignando el evento click con *on:click* a la función handleClick()

``` html
<script>
    //Logica
    let someText = `Some text`;
    let count = 0;

    function handleClick() {
        count += 1;
    }

    function resetClick() {
        count = 0;
    }
</script>

<style>
    p {
       color: var(--theme-color);
    }
</style>

<div class="about">
    <p>{someText}</p>
    <button on:click = {handleClick}>Click {count === 0 ? '' : count }</button>
    {#if count > 0}
    <button on:click = {resetClick}>Reset</button>
    {/if}
</div>
```

### 1.7.1 Modificadores

También podemos usar eventos de submit para el manejo de formularios.

``` html
<form on:submit={addComment}>
  <input type="text" class="Comments-input" placeholder="Reply" id="text"/>
  <button type="submit">Post</button>
</form>
```

Cada evento tiene una serie de modificadores que podemos usar, para
cambiar la manera en la que se ejecuta el eventos. Los modificadores
disponibles son: preventDefault, stopPropagation, passive, capture,
once, self

``` html
<form on:submit|preventDefault={addComment}>
  <input type="text" class="Comments-input" placeholder="Reply" id="text"/>
  <button type="submit">Post</button>
</form>
```

Pueden tenerse varios modificadores para un mismo evento

``` html
<button on:click={increment} on:click={track}>Click me!</button>
```

## 1.8 Props

Los props (propiedades) pueden pasarse a los componentes

``` html
<Componente propiedad="prop a pasar al componente" />
```

Mientras que en el componente

``` html
<script>
</script>

<div class="Componente">
    {propiedad}
</div>

<style>
</style>
```

Podemos especificar valores por defecto

``` html
<script>
    export let propiedad="valor por defecto"
</script>

<div class="Componente">
    {propiedad}
</div>

<style>
</style>
```

Si una variable tiene el mismo nombre del prop podemos colocar el valor
dentro de llaves

``` html
<Componente {propiedad1} {propiedad2} {propiedad3} />
```

### 1.8.1 Pasar funciones

También podemos pasar funciones a los componentes

``` html
<Componente>
    {propiedad}
    on:click={onClickDoSomething}
</Componente>
```

Para el componente debemos solo declarar la función en el archivo con
terminación .svelte

``` html
<script>
    export let propiedad;
</script>

<div on:click>
    {propiedad}
</div>
```

## 1.9 Condicionales

``` html
<div class="Component">
    {#if variable}
        <p>{someText}</p>
    {:else}
        <p>{otherVariable}</p>
    {/if}
</div>
```

## 1.10 Estructuras de control

``` html
<div class="Component">

    {#each items as { id, name, qty }, i (id)}
        <li>{i + 1}: {name} x {qty}</li>
    {/each}

    {#each items as item (item.id)}
        <li>{item.name} x {item.qty}</li>
    {/each}

</div>
```

Aparte de esto, svelte permite crear un bloque en caso de que el arreglo
recorrido esté vacío, ejemplo:

``` html
<div class="Component">

    {#each todos as todo}
        <p>{todo.text}</p>
    {:else}
        <p>No tasks today!</p>
    {/each}

</div>
```

### 1.10.1 Promesas

Podemos usar la notación await, then y catch para manejar el estado de
las promesas y mostrar los componentes adecuados

``` html
{#await promise}
    <!-- promise is pending -->
    <p>waiting for the promise to resolve...</p>
{:then value}
    <!-- promise was fulfilled -->
    <p>The value is {value}</p>
{:catch error}
    <!-- promise was rejected -->
    <p>Something went wrong: {error.message}</p>
{/await}
```

## 1.11 Eventos del DOM y binding

Para unir un valor deberemos usar la sintaxis bind:value de la siguiente
manera

``` html
<script>
    export let name = "World"
</script>

<div class="Componente">
    <input type="text" bind:value={name} />
    <p> Hello {name}! </p>
</div>
```

Podemos especificar clases condicionales de acuerdo a variables usando
la siguiente sintaxis

``` html
<div class="clase1" class:clase2={variable}></div>
```

## 1.12 Ciclo de vida de un componente

Cada componente tiene un ciclo de vida, el cual inicia cuando el
componente se crea y termina cuando se destruye. Svelte tiene unos hooks
para poder aprovechar los eventos de cada componente, los principales y
más importantes son *onMount, onDestroy, beforeUpdate, afterUpdate*.

-   OnMount: Cuando el componente se renderiza
-   onDestroy: Cuando el componente se destruye
-   beforeUpdate: Antes de que el DOM se actualize
-   afterUpdate: Después de que el DOM se actualiza

``` html
<script>
    import { onMount } from 'svelte';
    let photos = []

    onMount(async ()=> {
        const response = await fetch('https://jsonplaceholder.typicode.com/photos?_limit=20');
        photos = await response.json();
})
</script>

<div class="Photos">
    {#each photos as photo}
        <figure>
            <img src={photo.thumbnailUrl} alt={photo.title}>
            <figcaption>{photo.title}</figcaption>
        </figure>
    {:else}
        <p>Loading...</p>
    {/each}
</div>
```

También podemos usar el :else del each para mostrar un componente de
carga cuando la api no ha devuelto una respuesta. Podemos pasarle el id
del elemento poniéndolo entre parentesis

``` html
<div class="Photos">
    {#each photos as photo (photo.id)}
        <figure>
            <img src={photo.thumbnailUrl} alt={photo.title}>
            <figcaption>{photo.title}</figcaption>
        </figure>
    {:else}
        <p>Loading...</p>
    {/each}
</div>
```

### 1.12.1 Tick

Hay también una función especial llamada tick que puede ser llamada
cuando sea. Retorna una promesa que se resuelve tan pronto como
cualquier cambio pendiente de estado haya sido aplicado al DOM (o
inmediatamente después si no ha habido cambios de estado pendientes)

``` html
<script>
    import { beforeUpdate, tick } from 'svelte';

    beforeUpdate(async () => {
        await tick();
    });
</script>
```

## 1.13 Stores

Necesitamos crear un archivo *store.js*, dentro de ese archivo debemos
traer el método *writable*, definiremos el nombre de la variable y le
asignamos un valor, en este caso cero.

``` javascript
import { writable } from 'svelte/store';

export const count = writable(0);
```

Para acceder a ese valor deberemos importarlo desde nuestro store y usar
el prefijo "$" antes del valor de la variable

``` html
<script>
    import { count } from "../store/store.js";
</script>

<button on:Click={handleClick}>
    Click {$count ===0 ? '' : $count}
</button>

<style>
</style>
```

Cualquier cambio en la variable debe hacerse por medio del método
*update*

``` html
<script>
    import { count } from "../store/store.js";
    function handleClick(){
        count.update(n=>n+1)
    }    

</script>

<button on:Click={handleClick}>
    Click {$count ===0 ? '' : $count}
</button>

<style>
</style>
```
