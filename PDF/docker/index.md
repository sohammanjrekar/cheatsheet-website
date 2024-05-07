# Docker

Docker es una herramienta que permite empaquetar una aplicación y sus dependencias en un contenedor muy ligero. 


## 1.1 Problemas al desarrollar software

Problemáticas del desarrollo de software

### 1.1.1 Construir - Escribir código en ambiente del desarrollador

Problemática:

-   Dependencias de desarrollo (packetes)
-   versiones de entornos de ejecución (runtime)
-   Equivalencia de entornos de desarrollo (compartir el código)
-   Equivalencia con entornos productivos (pasar a producción)
-   versiones/compatibilidad de 3rd party (integración con otros
    servicios ejem: base de datos)

### 1.1.2 Distribuir - Llevar la aplicación donde se va a desplegar

Problemática:

-   Output de build heterogeo (múltiples compilaciones)
-   Acceso a servidores productivos (No tenemos acceso al servidor)
-   Ejecución nativa vs virtualizada
-   Entornos Serverless

### 1.1.3 Ejecutar - Implementar la solución en el ambiente de producción

El reto Hacer que funcione como debería funcionar

Problemática:

-   Dependencia de aplicación (paquetes, runtime)
-   Compatibilidad de sistema operativo (sistema operativo poco amigable
    con la solución)
-   Disponibilidad de servicios externos (Acceso a los servicios
    externos)
-   Recursos de hardware (Capacidad de ejecución)

## 1.2 Conceptos fundamentales

Los contenedores son diferentes y más ligeros a una máquina virtual pues
no es necesario emular el sistema operativo completo.

Docker cuenta con muchísimas imágenes de contenedores diferentes en
docker hub.

Una imagen de un contenedor es una plantilla que no va a cambiar.

## 1.3 Comandos básicos

### 1.3.1 Correr un contenedor

Para correr un contenedor usaremos el comando run. Además, puedes
especificar como quieres que se llame tu contenedor con la opción –name

``` bash
docker run hello-world
docker run --name mi_nombre hello-world
```

Tras ejecutar el comando anterior, Docker descargará la imagen de
hello-world y creará un contenedor, este contenedor se ejecutará,
realizará su función y terminará de ejecutarse. Descargar una imagen

Si solo quieres traer una imagen para que esté disponible, sin
ejecutarla puedes usar el comando docker pull, seguido del nombre de la
imagen.

``` bash
docker pull hello-world
Using default tag: latest
latest: Pulling from library/hello-world
Digest: sha256:4cf9c47f86df71d48364001ede3a4fcd85ae80ce02ebad74156906caff5378bc
...
```

### 1.3.2 Buscar una imagen

Para buscar una imagen podemos usar el comando docker search. Lo que
hace este comando es conectarse a docker hub y buscar la imagen que le
indiquemos.

En Dockerhub existen imágenes de mysql, de nginx, de alpine linux, de
python, de django, wordpress, ghost y casi cualquier otra tecnología que
puedas nombrar.

``` bash
docker search nginx
NAME                               DESCRIPTION                                     STARS               OFFICIAL            AUTOMATED
nginx                              Official build of Nginx.                        13802               [OK]                
jwilder/nginx-proxy                Automated Nginx reverse proxy for docker con…   1885                                    [OK]
richarvey/nginx-php-fpm            Container running Nginx + PHP-FPM capable of…   787                                     [OK]
```

Por otro lado, si prefieres hacerlo de una manera más visual puedes
visitar Docker hub. Ahí se puede conseguir cualquier tipo de imagen que
te imagines, incluso subir las tuyas. Date una vuelta y mira todas las
opciones que están disponibles para descargar. Ver las imágenes

Si ahora ejecutamos docker images va a aparecer nuestra imagen
descargada. Mira el bajo tamaño de la imagen, ¡pesa sólo 13.3kB!
Asimismo mira la columna IMAGE ID. Cada imagen, incluida las
personalizadas, tiene un id que la representa y que es único.

``` bash
docker images
REPOSITORY        TAG            IMAGE ID            CREATED             SIZE
hello-world       latest         bf756fb1ae65        8 months ago        13.3kB
```

### 1.3.3 Inspeccionar una imagen

Para inspeccionar una imagen basta con usar docker inspect, seguido del
nombre o id de la imagen. Docker imprimirá información relacionada con
la imagen en formato JSON.

``` bash
docker inspect hello-world
[
    {
        "Id": "sha256:bf756fb1ae65adf866bd8c456593cd24beb6a0a061dedf42b26a993176745f6b",
        "RepoTags": [
            "hello-world:latest"
        ],
 ...] 
```

### 1.3.4 Historial de una imagen

Docker history nos muestra la historia de una imagen.

``` bash
docker history hello-world
IMAGE               CREATED             CREATED BY                                      SIZE                COMMENT
bf756fb1ae65        9 months ago        /bin/sh -c #(nop)  CMD ["/hello"]               0B                  
```

### 1.3.5 Borrar una imagen

Para borrar una imagen existe el comando rmi, sí como rm, pero con la i
de «image» a continuación, necesitaremos ya sea su id o su repository y
su tag separados por dos puntos «:»

``` bash
docker rmi repository:tag
docker rmi id_de_la_imagen
```

### 1.3.6 Ver los procesos de Docker

Si queremos ver los procesos ejecutados usamos docker ps con la opción
-a. Por favor nota que nuestro contenedor tiene un id y, además un
nombre, el cual es generado por Docker automáticamente si no lo
especificamos, en este caso «lucid_morse».

``` bash
docker ps -a
CONTAINER ID   IMAGE              COMMAND        CREATED          STATUS                     PORTS     NAMES
0f100ae4a21e   hello-world        "/hello"       10 minutes ago   Exited (0) 10 minutes ago            lucid_morse
```

Si le quitamos la opción -a mostrará los procesos activos. Como el
contenedor que creamos a partir de la imagen hello-world terminó de
ejecutarse no aparecerá en esta lista.

``` bash
docker ps
CONTAINER ID   IMAGE              COMMAND        CREATED        STATUS                  PORTS     NAMES
```

### 1.3.7 Borrar un contenedor al terminar de ejecutarlo

Cada vez que ejecutamos docker run se crea un nuevo contenedor. Para
evitar llenarnos de contenedores podemos borrarlos automáticamente
cuando estos terminan su ejecución usando la opción –rm después de
docker run.

``` bash
docker run --rm hello-world
```

Si ahora vuelves a ejecutar docker ps -a, verás que no sea creado un
contenedor adicional al que ya teníamos.

``` bash
```

------------------------------------------------------------------------

> docker ps -a CONTAINER ID IMAGE COMMAND CREATED STATUS PORTS NAMES
> 0f100ae4a21e hello-world "/hello" 10 minutes ago Exited (0) 10 minutes
> ago lucid_morse

### 1.3.8 Borrar un contenedor

Para borrar los contenedores, puedes usar el comando docker rm, con el
nombre o id del contenedor.

``` bash
docker rm nombre_o_id_del_contenedor
```

#### 1.3.8.1 Borrar todos los contenedores en Docker

Es bastante común querer borrar todos los contenedores en Docker. Para
hacerlo necesitamos conseguir todos los id de los contenedores. Si
ejecutas el siguiente comando verás como se imprime una lista con todos
los id de los contenedores. Así es, es el mismo comando que ejecutamos
anteriormente para ver todos los procesos de Docker, la opción -q hace
que solo nos muestre los id de esos procesos.

``` bash
docker ps -aq
8344e4d39fbf
42174ad3810d
46dd95607ff5
...
```

Ahora que tenemos todos los id, podemos usar esta lista con el comando
docker rm para eliminar todos los contenedores.

``` bash
docker rm $(docker ps -aq)
```

### 1.3.9 Acceder a la terminal de un contenedor

El siguiente comando nos introducirá en un contenedor creado a partir de
una imagen. Técnicamente lo que hace docker run -it es vincular la
entrada estándar (STDIN) de nuestro sistema operativo con la entrada
estándar (STDIN) de nuestro contenedor. Esto nos permite correr un
contenedor con el que podemos interactuar.

``` bash
docker run -it ubuntu
```

Nota como el prompt de la terminal cambiará y nos encontraremos en una
terminal desde la cual podremos interactuar.

Intenta ejecutar un ls o un pwd. Podrás notar que estás dentro de un
sistema operativo GNU/Linux. Si no sabes nada sobre comandos de
GNU/Linux puedes revisar mi entrada de los comandos básicos para
refrescar tu memoria.

``` bash
ls
bin  boot  dev  etc  home  lib  lib32  lib64  libx32  media  mnt  opt  proc  root  run  sbin  srv  sys  tmp  usr  var
pwd
/
```

### 1.3.10 Correr un contenedor en segundo plano

Cuando queremos que un contenedor permanezca ejecutándose en segundo
plano usamos la etiqueta -d, que viene de detach (también puedes
recordarlo fácilmente asociándolo con «demon»).

``` bash
docker run -d nginx
```

Si ahora ejecutamos docker ps, para ver los procesos que están corriendo
en Docker, podemos notar que el servidor Nginx que corrimos con el
comando anterior se encuentra activo.

``` bash
docker ps
CONTAINER ID    IMAGE           COMMAND                  CREATED             STATUS              PORTS        NAMES
8c7fbece083b    nginx           "/docker-entrypoint.…"   8 seconds ago       Up 6 seconds        80/tcp       boring_hugle
```

### 1.3.11 Ver los logs de un contenedor

Si nuestro contenedor no pudo ejecutarse de la manera en la que
esperábamos, examinar los logs sería un buen punto de partida. Para esta
tarea Docker nos provee del comando docker logs, al cual le
especificaremos el contenedor a inspeccionar.

``` bash
docker logs nombre_del_contenedor
[2020-09-26 02:25:14 +0000] [1] [INFO] Starting gunicorn 19.7.1
[2020-09-26 02:25:14 +0000] [1] [INFO] Listening at: http://0.0.0.0:8000 (1)
...
```

### 1.3.12 Ejecutar un comando en un contenedor corriendo

Para ejecutar un comando en un contenedor que está corriendo se usará el
comando exec. Es importante hacer notar que aquí se usa el nombre del
contenedor, no de la imagen. El comando siguiente ejecutará bash en el
contenedor.

``` bash
docker exec -it nombre_del_contenedor bash
```

El uso de exec no se limita a entrar en un terminal. Mira lo que sucede
si hacemos un curl a localhost en el contendor donde se está ejecutando
Nginx.

``` bash
docker exec -it boring_hugle curl localhost
<!DOCTYPE html>
<html>
<head>
<title>Welcome to nginx!</title>
...
```

### 1.3.13 Detener un contenedor

Para detener un contenedor que está corriendo basta con ejecutar docker
stop, seguido del nombre o id del contenedor.

``` bash
docker stop nombre_o_id_del_contenedor
```

### 1.3.14 Iniciamos un contenedor

Si queremos correr un contenedor que se encuentra detenido usamos ahora
docker start

``` bash
docker start nombre_o_id_del_contenedor
```

### 1.3.15 Reiniciar un contenedor

Si en lugar de eso queremos reiniciar un contenedor que se encuentra
corriendo podemos usar docker restart

``` bash
docker restart nombre_o_id_del_contenedor
```

### 1.3.16 Exponer un contenedor al exterior

Hasta ahora hemos creado contenedores con los cuales no podemos
interaccionar desde el exterior. Cada contenedor tiene su propia red y
sus propios puertos. Si queremos redirigir los puertos del contenedor
hacia los puertos de nuestra computadora usamos el comando -p, colocando
primero el numero de puerto nuestra computadora separado con dos puntos
del que corresponde al contenedor.

``` bash
docker run -d --name servidorNginx -p 8080:80 nginx
```

El comando anterior creó una instancia del servidor web Nginx, por lo
que redireccionaremos lo que sale de su puerto 80, a nuestro puerto
8080. Al terminar este comando puedes abrir tu navegador y comprobar que
está corriendo un servidor en Nginx. Persistencia de datos en Docker

Podemos vincular archivos de nuestro sistema a archivos dentro de un
contenedor. Este ejemplo crea un contenedor llamado mongoDB (–name
mongoDB), en modo detach (-d). La opción -v va a vincular la carpeta
especificada antes de los dos puntos, con el directorio del contenedor
que especifiquemos después de los dos puntos. Al final va el nombre de
nuestra imagen, en este caso mongo.

``` bash
docker run --name mongoDB -d -v /Users/usuario/Dev/database:/data/db mongo
```

Cualquier cambio que hagamos en nuestro contenedor o en nuestra máquina
va a modificar el volumen que especificamos.

## 1.4 Crear volúmenes en Docker

Podemos crear un volumen en docker usando el comando volume create,
seguido del nombre del volumen.

``` bash
docker volume create nombre_del_volumen
```

### 1.4.1 Montar volúmenes en Docker

Para montar un volumen que hemos creado en un contenedor usamos la
opción –mount, seguido del nombre del volumen (src) y de su destino en
el contenedor (dst), separados por una coma

``` bash
docker run -d --name db --mount src=nombre_del_volumen,dst=/data/db mongo
```

### 1.4.2 Listar volúmenes

Para listar todos los volúmenes que hemos creado usaremos el comando ls
volume en docker

``` bash
docker volume ls
DRIVER              VOLUME NAME
local               nombre_del_volumen
```

### 1.4.3 Limpiar volúmenes

Si tenemos volúmenes que no están asociados a ningún contenedor podemos
deshacernos de ellos usando docker volume prune.

``` bash
docker volume prune
```

### 1.4.4 Borrar volúmenes

Para borrar un volumen usamos el comando volume rm.

``` bash
docker volume rm nombre_del_volumen
```

## 1.5 Usando un Dockerfile para crear una imagen

Hasta ahorita todo se ha hecho de manera manual, pero que tal si
queremos una manera de guardar nuestro proceso de transformaciones a una
imagen para poder compartirlo fácilmente. Los Dockerfile permiten
justamente eso y facilitan poder diseñar una imagen acorde a nuestras
caprichosas exigencias.

Un Dockerfile es un archivo sin extensión donde especificaremos las
transformaciones que queremos aplicar a una imagen. En un Dockerfile
podremos agregar archivos de configuración personalizados, código
propio, librerías extras, abrir puertos personalizados o lo que
querramos. Preparación de un Dockerfile

Para este ejemplo vamos a crear una carpeta nueva, donde crearemos el
Dockerfile. Recuerda, que un Dockerfile es solo un archivo sin
extensión.

``` bash
mkdir dockerTest
cd dockerTest
touch Dockerfile
```

Ahora creamos un archivo de requerimientos para pip que incluya a Django
y a gunicorn. En caso de que no lo sepas, Django es un framework de
desarrollo web y gunicorn un servidor frecuentemente usado en conjunción
con Django.

``` bash
printf "Django==3.0.1\ngunicorn==19.7.1" > requirements.txt
```

Ahora vamos a crear un proyecto con django para usarlo como base para
nuestro proyecto. Asegúrate de tener instalado pip en tu sistema o no
podrás usar django-admin. En caso de que no puedas descargar la versión
3.0.1 puedes usar cualquier otra y también debería funcionar.

``` bash
sudo pip install Django==3.0.1
django-admin startproject myDjangoDockerApp
```

Si ahora revisamos nuestra carpeta actual veremos la siguiente
estructura de archivos y carpetas. Si no conoces Django ignora los
archivos, lo importante por ahora será que sepas que gunicorn únicamente
necesita saber donde está el archivo wsgi.py para iniciar el servidor.

``` bash
.
├── Dockerfile
├── myDockerDjangoApp
│   ├── manage.py
│   └── myDockerDjangoApp
│       ├── __init__.py
│       ├── settings.py
│       ├── urls.py
│       └── wsgi.py
└── requirements.txt
```

## 1.6 Ejemplo, creación y análisis de un Dockerfile

Con todos estos archivos vamos a crear una imagen personalizada para
nuestro Dockerfile. Abre el archivo Dockerfile con tu editor de texto
favorito y vamos a escribir el siguiente contenido.

``` bash
FROM python:3.6
ENV PYTHONUNBUFFERED 1

ADD . /app/

WORKDIR /app/myDockerDjangoApp

RUN pip install -r /app/requirements.txt

EXPOSE 8000
ENV PORT 8000

CMD ["gunicorn", "myDockerDjangoApp.wsgi"]
```

-   FROM python:3.6: Todos los Dockerfile necesitan una imagen de la
    cual partir, en este caso esa imagen es python:3.6
-   ENV PYTHONBUFFERED 1: Permite que podamos leer los logs de Python en
    nuestra terminal
-   ADD . /app/: Agrega todos nuestros archivos en la carpeta actual a
    la carpeta /app/. También sirve COPY, la diferencia radica en que
    APP acepta archivos comprimidos o una url.
-   WORKDIR /app/myDockerDjangoApp: Establece la carpeta
    /app/myDockerDjangoApp como la carpeta base a usar al correr
    comandos con CMD, RUN, ADD o COPY
-   RUN pip install -r /app/requirements.txt: RUN permite ejecutar
    comandos, los cuales se ejecutan al momento de compilar la imagen y
    quedan grabados como una capa nueva en la imagen. Usaremos RUN para
    instalar todas las dependencias que especificamos en el archivo
    requirments.txt (solo Django y Gunicorn).
-   EXPOSE 8000: Expone el puerto 8000 al exterior.
-   ENV PORT 8000: Crea una variable de entorno llamada PORT con el
    valor de 8000. Esto nos servirá para poder acceder al puerto.
-   CMD \[«gunicorn», «myDockerDjangoApp.wsgi»\]: CMD ejecuta un comando
    al momento de poner en marcha un contenedor a partir de una imagen,
    los comandos y los argumentos se separan como si fueran una lista de
    Python. En este caso, como mencioné arriba, gunicorn solo necesita
    saber donde está el archivo wsgi que generó django automáticamente.

### 1.6.1 El orden es importante en un Dockerfile

La compilación de un Dockerfile es un proceso secuencial, cada paso crea
una imagen intermediaria que Docker puede guardar en cache. Docker usa
esa cache para evitar tener que repetir pasos innecesarios cuando ocurre
un cambio en un Dockerfile, es decir que si tú realizas un cambio en uno
de los pasos, Docker tratará de usar sus datos en cache para no repetir
todos los pasos anteriores. Ten en cuenta el orden en el que realizas
tus instrucciones para evitarte compilaciones de imágenes costosas en
tiempo y recursos.

``` bash
Sending build context to Docker daemon   12.8kB
Step 1/8 : FROM python:3.6
 ---> 46ff56815c7c
Step 2/8 : ENV PYTHONUNBUFFERED 1
 ---> Using cache
 ---> c55438b3c6a0
Step 3/8 : ADD . /app/
 ---> Using cache
 ---> ecedebf26f36
Step 4/8 : WORKDIR /app/myDockerDjangoApp
 ---> Using cache
 ---> 83b5ccaa1cc6
Step 5/8 : RUN pip install -r /app/requirements.txt
 ---> Using cache
 ---> 6cb2683c8fa8
Step 6/8 : EXPOSE 8000
 ---> Using cache
 ---> 744b46577c43
Step 7/8 : ENV PORT 8000
 ---> Using cache
 ---> 03111761fb54
Step 8/8 : CMD ["gunicorn", "myDockerDjangoApp.wsgi"]
 ---> Using cache
 ---> 6e3ffe358338
Successfully built 6e3ffe358338
Successfully tagged djangocontainer:0.1
```

### 1.6.2 Compilación de un Dockerfile

Para compilar un Dockerfile y crear una imagen personalizada creada a
partir del contenido de nuestro archivo, basta con ejecutar el comando
docker build y establecer la localización del Dockerfile. Docker build
nos permite especificar un tagname y una versión, separados por dos
puntos «:», usando la etiqueta –tag. Nota que el punto de al final no es
una mancha en tu pantalla o un error, sino que hace referencia a la
carpeta en la que nos encontramos.

``` bash
docker build --tag djangocontainer:0.1 .
```

Puedes ver que nuestra imagen ha sido creada ejecutando el comando
docker images

``` bash
docker images
REPOSITORY                                      TAG                 IMAGE ID            CREATED              SIZE
djangocontainer                                 0.1                 6e3ffe358338        About a minute ago   912MB
```

Ahora que ya contamos con la imagen basta con ejecutarla. Para este
ejemplo vincularemos nuestro puerto 8000 con el puerto 8000 de nuestro
contenedor, ejecutaremos nuestro contenedor en segundo plano y lo
nombraremos test_container.

``` bash
docker run -p 8000:8000 -d --name test_container djangocontainer:0.1
```

Si abrimos nuestro navegador y entramos a nuestro localhost en el puerto
8000 veremos el cohete de Django indicando que todo funcionó
perfectamente. Gunicorn está sirviendo nuestra aplicación de Django en
el puerto 8000, al que podemos acceder a través de nuestro puerto del
mismo número.

``` bash
docker run -p 8000:8000 -d --name test_container djangocontainer:0.1
```

## 1.7 Ignorar archivos

Al igual que git, docker tiene un archivo en donde listar los archivos o
carpetas a ignorar llamado **dockerignore**.

## 1.8 Construcción en multiples etapas

Esto nos permite usar Docker files con varias fases, donde una fase
puede usar el resultado de la otra.

## 1.9 Correr Dive dentro de Docker in Docker

Esto se hace usando este comando

``` bash
docker run --rm -it -v /var/run/docker.sock:/var/run/docker.sock -v $(which docker):/bin/docker wagoodman/dive:latest myapp
```

## 1.10 Miscelaneas

### 1.10.1 Herramienta dive

Esta herramienta busca la imagen y nos ofrece una mirada de como está
construida la imagen

``` bash
dive nombre_del_contenedor
```
## Docker compose

Cuando queremos administrar una gran cantidad de contenedores, usamos la herramienta Docker compose.## Redes en Docker

Docker nos permite crear redes para conectar contenedores. Si dos contenedores se encuentran en la misma red, pueden encontrarse por medio de su nombre, como si fuera un hostname.

### Listar redes

Para ver las redes en cualquier momento usamos:

``` bash
docker network ls
```

Docker cuenta con 3 redes habilitadas por defecto 

* bridge: El default, presente por retrocompatibilidad.
* host: Representación de la red de la máquina.
* none: Red especial para inhabilitar cualquier acceso a la red.

### Creación de redes

Para crear una red usamos el comando

``` bash
docker network create <name>
```

Si queremos que otras redes puedes unirse, usamos el flag attachable

``` bash
docker network create --attachable <name>
```

### Inspeccionar una red

Para inspeccionar una red usamos el comando network inspect.

``` bash
docker network inspect <name>
```

### Conectar un contenedor a una red

Para conectar un contenedor a una red usamos

``` bash
docker network connect <name> <container-name>
```

Esto puede corroborarse inspeccionando el contenedor, en la propiedad *Containers*## Docker in docker

Esto permite establecer un vínculo entre la máquina principal y el contenedor. 

``` bash
docker run -it --rm -v /var/run/docker.sock:/var/run/docker.sock docker:<version>
```
La configuración anterior nos permite tener contenedores que tienen acceso al sistema principal de docker, por lo que debe hacerse con cuidado, en un ambiente controlado.