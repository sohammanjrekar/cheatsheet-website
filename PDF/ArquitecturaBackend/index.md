# Arquitectura backend



## 1.1 Sistema monolítico

Una sola pieza, por ejemplo: LAMP

## 1.2 Sistema distribuido

Múltiples piezas que se comunican por red

### 1.2.1 Elementos que podemos encontrar en un Sistema Distribuido

Existen

-   Load Balancers
-   Máquinas Virtuales
-   Bases de datos Relacionales o No Relacionales
-   Servicios de Colas (Ejemplo: SQS)
-   Servicios de Storage (Ejemplo: S3)
-   Servicios Publisher-Suscriber (Ejemplo: SNS)
-   Pipelines

## 1.3 Conexión en el backend

Una API o Interfaz de programación de aplicaciones entrega una series de
servicios llamados endpoints.

-   POST -\> Create
-   GET -\> Read
-   PUT -\> Update
-   PATCH -\> Partial Update
-   DELETE -\> Eliminacion

## 1.4 Documento de diseño

Es un archivo que contendrá todos los detalles que necesitamos para
poder desarrollar el sistema. Es completamente agnóstico al sistema.
Puede tener una sección de outofscope, costos, alcance.:

    # Titulo: Template de documento de diseño
    ---
    ## Overview: Problema a resolver
    Descripción..

    ### Alcance(Scope)
    Descripción..

    #### Casos de uso
    Descripción...
    * Caso de uso 1
    * Caso de uso 2
    * ...

    #### Out of Scope (casos de uso No Soportados)
    Descripción...
    * Caso de uso 1
    * Caso de uso 2
    * ...
    ---
    ## Arquitectura

    ### Diagramas
    poner diagramas de secuencia, uml, etc

    ### Modelo de datos
    Poner diseño de entidades, Jsons, tablas, diagramas entidad relación, etc..

    ---
    ## Limitaciones
    Lista de limitaciones conocidas. Puede ser en formato de lista.
    Ej.
    * Llamadas del API tienen latencia X
    * No se soporta mas de X llamadas por segundo
    ---
    ## Costo
    Descripción/Análisis de costos
    Ejemplo:
    "Considerando N usuarios diarios, M llamadas a X servicio/baseDatos/etc"
    * 1000 llamadas diarias a serverless functions. $XX.XX
    * 1000 read/write units diarias a X Database on-demand. $XX.XX
    Total: $xx.xx (al mes/dia/año)

Casos de uso: Es importante establecer los casos de uso soportados y no
soportados.

Limitaciones: Aquí podemos especificar tiempos de latencia.

Costo: En esta parte hacemos estimaciones del costo del sistema

## 1.5 Revisión de diseño

Cosas importantes a tener en cuenta:

-   ¿Por qué? Para evaluar alternativas de arquitectura
-   ¿Cómo afecta la infraestructura?
-   ¿Cómo ligarlo con los requerimientos originales del negocio?
-   ¿Cómo mejoran los costos?

Elaboración de la arquitectura del sistema

## 1.6 Elaboración de la arquitectura del sistema

Podemos combinar diferentes arquitecturas, bases de datos de acuerdo a
nuestras necesidades.

Por ejemplo: Un serverles y NoSQL para escribir datos Un servicio para
leer con una base de datos relacional. La base de datos NoSQL puede
transferirse a la base de datos SQL posteriormente, quizás una vez por
día. Implementar cache en diversos puntos del sistema.

Para elaborar la arquitectura podemos usar
[diagramas](https://www.diagrams.net/)

Diseños de bajo nivel, planes de prueba e integración continua

## 1.7 Entidad

Una entidad es un objeto que satisface las reglas del negocio, las
cuales pueden ser computadas.

## 1.8 Escalabilidad, Throttling y Retry Policy

Podemos limitar la cantidad de peticiones por minuto usando Throttling.
