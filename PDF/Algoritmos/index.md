# Algoritmos

Un algoritmo es un conjunto de instrucciones o pasos que resuelven un
problema dado paso a paso y sin generar ambigüedades.



## 1.1 Desarrollo de un algoritmo

Los pasos recomendados para desarrollar un algoritmo son los siguientes:

1.  Definición del problema
2.  Análisis del problema
3.  Diseño del algoritmo
4.  Verificación o pruebas

Para la definición del problema debemos obtener los siguientes
elementos:

-   Entradas: ¿Qué se necesita para realizar los pasos?
-   Salidas: ¿Qué se obtiene al final del algoritmo?
-   Tipos de datos involucrados: Textos, números, listas, etc.

## 1.2 User defined data types

Los User Defined DataTypes son tipos de datos creados por los
desarrolladores de software para realizar múltiples acciones.

### 1.2.1 Abstract Data Types básicos: Lists, Stacks, Queues

Un tipo de dato abstracto (ADT) representa un set particular de
comportamientos, aunque no define su implementación. Mientras que una
estructura de datos es más concreta. Típicamente es la implementación de
un ADT. Es parecido al concepto de clases e instancias en programación.
Los ADT más básicos serían: Lists, Stacks, Queues, Diccionarios, Arrays,
Linked Lists, Trees

### 1.2.2 Tipos más comunes

-   List, Conjunto de valores ordenados secuencialmente donde son
    recuperados mediante un número del 0 al n.
-   Dictionary: Similar a las listas, pero con un índice numérico o no
    numérico del tipo de datos que se desee (aunque tiene que ser único)
-   Linked List: Cada elemento se vincula (Apunta) con el siguiente
    nodo, al no estar definidas de un inicio. las linked lists pueden
    tener el tamaño que sea.
-   Stack (LIFO, Last in First Out): En estos datos se van agregando
    elementos con la peculiaridad de que el último en agregarse será el
    primero en recuperarse.
-   Queue (FIFO, First in First Out): Al contrario del stack, los Queue
    se caracterizan por que la recuperación de datos siga la misma
    secuencia de la inserción de los datos, así el primer dato será
    recuperado al principio, y el último al final.

### 1.2.3 Métodos

Cada ADT tiene sus propias funciones acorde a sus características.

#### 1.2.3.1 Lista

-   get() – Retorna un elemento de la lista en cualquier posición
    especificada.
-   insert() – Inserta un elemento en cualquier posición de la lista.
-   remove() – Remueve la primera aparición de cualquier elemento en una
    lista no-vacía.
-   removeAt() – Remueve el elemento que se encuentre en la posición
    especificada en una lista que no esté vacía.
-   replace() – Reemplaza un elemento en cualquier posición por otro
    elemento.
-   size() – Retorna el número de elementos contenidos en la lista.
-   isEmpty() – Retorna true si la lista está vacía, si no, regresa
    false.
-   isFull() – Retorna true si la lista está llena, si no, regresa
    false.

#### 1.2.3.2 Stack ADT

-   push() – Inserta un elemento en un extremo de la pila denominado
    “cima”.
-   pop() – Remueve y retorna el elemento en la cima de la pila, si el
    stack no está vació.
-   peek() – Retorna el elemento en la cima del stack sin removerlo, si
    el stack no está vacío.
-   size() – Retorna el número de elementos en el stack.
-   isEmpty() – Retorna true si el stack está vacío, si no, retorna
    false.
-   isFull() – Retorna true si la lista está llena, si no, regresa
    false.

#### 1.2.3.3 Queue ADT

-   enqueue() – Inserta un nuevo elemento al final de la cola.
-   dequeue() – Remueve y retorna el primer elemento de la cola si la
    cola no está vacía.
-   peek() – Retorna el primer elemento de la cola sin removerlo.
-   size() – Retorna el número de elementos almacenados en la cola.
-   isEmpty() – Retorna true si la cola está vacía, si no, retorna
    false.
-   isFull() – Retorna true si la cola está vacía, si no, retorna false.

## 1.3 Algoritmos de ordenamiento

### 1.3.1 Merge Sort

Utiliza el paradigma divide y vencerás, Dividiendo los elementos para
compararlos y posteriormente volverlos a unir ordenados de la manera
correcta. Es un algoritmo eficiente para muchos datos, pero no lo es
tanto para pocos.

### 1.3.2 Insertion Sort

Vas comparando los elementos hasta que encuentren su lugar en la serie
de 1 a 1. Es un algoritmo eficiente para serie de datos cortas, pero no
para largas.

### 1.3.3 Bubble Sort

Se ordena por pares y se va repitiendo 1 a 1 hasta que queda totalmente
ordenado, es muy iterativo, poco eficiente (por la cantidad de
iteraciones), pero muy sencillo de ejecutar.

### 1.3.4 Quick Sort

Utiliza el paradigma divide and conquer, y va comparando desde las
esquinas al centro, es muy eficiente para serie de datos largos por lo
que es de los más importantes.

## 1.4 Recursividad

La recursividad es la capacidad de una función de llamarse a si misma.

Las funciones recursivas tienen las siguientes caracteristicas.

Se llaman a si mismas. Tienen de argumento un valor que cambio por cada
iteración. Regresan algún valor definido en cada iteración. Tienen una
condicional que define el fin del ciclo. Manejan un stack que es el
órden de las ejecuciones de las iteraciones de la función, empezando por
la última a llamar.

## 1.5 Graphos

Los graphos son mapas de set de nodos que tienen múltiples relaciones
entre sí mediante enlaces (edges).

Los graphos no tienen estructura de cascada como los árboles binarios,
pero comparten la lógica relacional.

Los graphos son definidos por G=(V,E), donde:

G = Representación del grapho V = Set de nodos (vértices) E = Enlaces
(edges) Los graphos son el pilar o los fundamentos que se ocupan en
bases de datos modernas como es el caso de la base de datos de:

Las relaciones de amistad de Facebook Las recomendaciones de Amazon Los
seguidores de Twitter
