# Arquitectura de alta concurrencia



## 1.1 Escalabilidad

Se divide en dos:

-   Escalamiento vertical: Aumentar el tamaño de la instancia.
-   Escalamiento horizontal: Aumenta el número de instancias.

## 1.2 Stateless y statefull en alta concurrencia

Stateless: El estado está fuera de la aplicación, por ejemplo JWT.
Statefull: El estado está dentro de la aplicación, por ejemplo sesiones
manejadas del lado del servidor.

Es más sencillo escalar una aplicación stateless, debido a que no
requiere la información del servidor.

## 1.3 Métricas a usar para escalar

Para escalar base de datos podemos hacer réplicas de lectura, ya que,
generalmente, se realizan más lecturas que escrituras.

En bases de datos No SQL se puede usar Sharding, para separar las
distintas partes en varios servidores y facilitar el escalamiento
horizontal.

Los orquestadores generalmente se encargan del escalado automático por
medio de métricas tales como:

-   CPU/Memoria
-   Cola de mensajes
-   Métricas internas
-   RPS

## 1.4 Manejo de tráfico por paises

Si usamos CDN son ellos quienes se encargarán de dirigir el tráfico a la
región más cercana y tener redundancia en el contenido.

## 1.5 ¿Por qué se usa GNU Linux?

Linux cuenta con varias ventajas frente a otras alternativas

-   Más económico por ser de código abierto y libre.
-   Más estable (Históricamente).
-   Más seguro (Existe un sólido sistema que permite granularidad de
    permisos).
-   Código abierto. Se puede modificar.
-   Soporte de la comunidad.

### 1.5.1 Lenguajes de alta concurrencia

Para manejar aplicaciones de alta concurrencia hay lenguajes que están
optimizados, tales como:

-   Go
-   Python
-   C
-   Java
-   JavaScript con Nodejs

## 1.6 Manejo de usuarios en entorno de stagging y producción

Generalmente se usa almacenar la información en un sistema externo, como
Redis, con el propósito de que la aplicación sea stateless.

### 1.6.1 Secretos

el manejo de secretos es responsabilidad del equipo de infraestructura y
bajo ninguna circunstancia deben quedar registrados en logs o control de
versiones.

## 1.7 Orquestadores y serverless

### 1.7.1 Orquestadores

Hay varios orquestadores diferentes.

-   K8s
-   Openshift
-   Docker Swarm

El orquestador se encarga de ubicar los contenedores en diferentes
servidores y crear nuevos en caso de que fallen.

Además los orquestadores pueden implementar medidas de autoescalado que
responden a diferentes métricas.

### 1.7.2 Serverless

Es útil en escenarios de alta concurrencia pues los proveedores se
encargan de autoescalar la aplicación de acuerdo al nivel de tráfico.

## 1.8 Motores de bases de datos y caché

### 1.8.1 Motos de base de datos

Se pueden dividir en:

> -   SQL, con campos fijos en las tablas. Ideal aplicaciones con alto
>     enfasis en escritura.
>
>     > -   MySQL (Relacional): escalar con réplicas verticalmente. Por
>     >     ejemplo con <https://vitess.io/>
>
> -   No SQL, con campos flexibles en su estructura.
>
>     > -   MongoDB (Documentos): Al ser no relacional escala más fácil.

### 1.8.2 Caché

Por su rapidez son usadas para guardar sesiones y autenticación.

-   Redis
-   Memcached
-   CDNs

## 1.9 CDN en alta concurrencia

Nos permiten correr un proxy delante de la aplicación para cachear
archivos estáticos o workers con lógica sencilla.

### 1.9.1 Algunos proveedores de Cloudflare

> -   Cloudflare
> -   Fastly

## 1.10 Manejo de ataque DDOS

Es ideal bloquear los paquetes desde la Capa 4 del modelo OSI, por medio
de IP tables.

WAF, una aplicación que funciona con una lista de request para bloquear
el tráfico antes de que llegue a la aplicación.

## 1.11 gRPC o REST en alta concurrencia

Los RPCs funcionan de la siguiente manera:

> -   Un cliente invoca un procedimiento remoto, serializa los
>     parámetros y envía el mensaje al servidor.
> -   El servidor, al recibir el mensaje, serializa el contenido,
>     ejecuta el procedimiento y envía al cliente el resultado.

### 1.11.1 Protobuffer

El formato usado por gRPC, existen en formato binario y permite la
serialización y deserialización de datos estructurados, el desarrollador
define los datos y los compila.

### 1.11.2 ¿Cuándo usar REST o gRPC?

gRPC es recomendado para microservicios o APIs internas, por su
estabilidad y respuesta ed baja latencia.

REST se recomienda para integraciones con clientes y APIs públicas, por
su facilidad de uso e implementación.

## 1.12 Consideraciones de negocio para alta concurrencia y caso de uso

Pablo Fredrickson recomienda:

-   Crear un monolito

    > -   Usar caché
    > -   CDNs
    > -   Contenedores

-   Separar en funciones

-   Usar serverless para tareas asíncronos
