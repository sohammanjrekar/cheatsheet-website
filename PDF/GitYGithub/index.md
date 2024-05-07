# GIT

Es un sistema de control de versiones para llevar un seguimiento de los
cambios en el código y poder acceder a ellos en cualquier momento.

## 1.1 ¿Cómo funciona internamente git?

Internamente git se comporta como un grafo, donde existen tres tipos de
objetos principales en git:

-   blob
-   tree
-   commit

Estos objetos se guardan en la carpeta *.git/objects*, en la raiz donde
fue inicializado git, dentro de esta carpeta encontraremos subcarpetas
que empiezan con los primeros dos digitos de su identificador
hexadecimal.

### 1.1.1 Objeto blob

Blob es un binary large object, que contiene el contenido de los commits
comprimido. Cada blob tiene un identificador que es el resultado de
aplicar la función SHA1 seguido de su compresión usando zlib.

### 1.1.2 Objeto tree

Un tree es un apuntador a un blob o a otro tree.

### 1.1.3 Objeto commit

Un commit son los metadatos de un snapshot que toma de la configuración
del sistema. Un commit guarda una referencia a su commit padre o commit
anterior.

Si quieres profundizar más, aquí hay un excelente video sobre el
[funcionamiento interno de
git](https://www.youtube.com/watch?v=LjwR--_ZUt8)

## 1.2 Comandos de alto nivel

Generalmente no se trabaja con los objetos de manera directa, sino con
comandos de alto nivel en los que el flujo de trabajo consiste en

1.  Realizar cambios en los archivos
2.  Pasar los cambios al staging area
3.  Guardar los cambios en el sistema de archivos de git

## 1.3 Traer código de repositorios

Podemos traer códigos a un proyecto usando el comando clone

Clone funciona tanto con directorios, repositorios externos o ssh.

``` bash
git clone <ruta>
```

Actualizar código

## 1.4 Establecer los origines del código

Podemos registrar un origen para el código usando el comando remote,
seguido de add

``` bash
git remote add <nombre> <url>
```

Para listar nuestros origenes usamos simplemente

``` bash
git remote
```

Y para eliminar un origen usamos el comando rm

``` bash
git remote rm <nombre>
```

## 1.5 Actualizar el código

Hay dos comandos para actualizar el código, fetch y pull

### 1.5.1 fetch

Fetch obtiene los cambios a nuestro directorio de trabajo, pero sin
realizar un merge.

``` bash
git fetch <origen>
```

Podemos especificar una rama o recuperarlas todas

``` bash
git fetch <origen> <rama>
git fetch <origen> --all
```

### 1.5.2 pull

Mientras que pull obtiene los cambios y realiza un merge con la actual.

``` bash
git pull <origen>
```

## 1.6 Agregar cambios

El comando add nos permite agregar los cambios realizados en nuestro
proyecto al staging area, desde donde podremos guardarlos en el control
de versiones de git. Git add puede recibir un nombre de archivo, una
ruta o múltiples archivos por medio wildcards y patrones.

``` bash
git add <patron>
```

## 1.7 Guardar cambios

Un commit es una fotografía o snapshot que guarda el estado de un
proyecto en un momento determinado.

### 1.7.1 Commit en un solo paso

Abreviación para agregar archivos y hacer un commit

``` bash
git commit -a -m <mensaje>
```

## 1.8 Moverse a estados anteriores u otras ramas

Con git checkout cambiamos a un commit pasado u otra rama, lo que
cambiará los archivos en nuestro directorio de trabajo.

``` bash
git checkout <hash_del_commit>
```

Si usamos git checkout con un archivo, cambiará únicamente el archivo
que le indiquemos

``` bash
git checkout <hash_del_commit> [<archivo>]
```

## 1.9 Branches o ramas

Una rama es una bifurcación del código desde el punto en que se creo,
esto para que el código siga evolucionando sin afectar la rama
principal. Una vez que una nueva característica se ha desarrollado
podemos volver a unir la rama con la linea de código principal (rama
main) para integrar los nuevos cambios al código. La rama principal es
la rama main.

``` bash
git branch <nombre_de_rama_nueva>
```

También podemos hacerla a partir de un checkout, con el flag -b

``` bash
git checkout -b <nombre_de_rama_nueva>
```

### 1.9.1 Eliminar ramas

Podemos borrar ramas con

``` bash
git checkout -D <nombre_de_rama>
```

Estos comandos nos muestran las ramas locales y las remotas

``` bash
git branch -r # se muestran todas las ramas remotas
git branch -a # se muestran todas las ramas tanto locales como remotas
```

Para mandar una rama al repositorio remoto hacemos un push con el nombre
de la rama.

``` bash
git push <origen> <nombre_de_la_rama>
```

## 1.10 Mezclar cambios

El comando git merge crea un nuevo commit con la combinación de dos
ramas. Unirá la rama donde nos encontramos con la que especifiquemos
después de merge. Al hacer merge se *creará un nuevo commit*

``` bash
git checkout main
git merge <nombre_de_la_rama>
```

## 1.11 Borrar archivos

El comando git rm elimina archivos de git **sin eliminar su historial
del sistema de versiones**.

Debemos usar uno de los flags para indicarle a Git cómo eliminar los
archivos

### 1.11.1 Mantener archivos en disco duro

La opción --cached elimina los archivos del área de staging y del
próximo commit pero los mantiene en nuestro disco duro.

``` bash
git rm --cached <nombre_de_archivo>
```

### 1.11.2 Eliminar los archivos del disco duro

La opción --force Elimina los archivos de Git y del disco duro. Git
siempre guarda todo, por lo que podemos acceder al registro de la
existencia de los archivos, de modo que podremos recuperarlos si es
necesario (pero debemos usar comandos más avanzados).

``` bash
git rm --force <archivo_o_archivos>
```

## 1.12 Deshacer o resetear cambios

Con git reset volvemos al pasado **sin la posibilidad de volver al
futuro. Es permanente**

Este comando es muy peligroso y debemos usarlo solo en caso de
emergencia. Recuerda que debemos usar alguna de estas dos opciones:

### 1.12.1 Conservar el staging

La opción --soft borra el historial y registros pero conserva el staging

``` bash
git reset --soft <archivo_o_archivos>
```

### 1.12.2 Borrar el staging

La opción --hard **borra los archivos tanto del staging como de los
registros.**

``` bash
git reset --hard: <archivo_o_archivos>
```

## 1.13 Editar el último commit

El comando git commit, con la opción --amend, nos permitirá agregar
cambios al commit anterior.

``` bash
git commit --amend
```

## 1.14 cherry pick

El comando cherry-pick trae un commit del pasado y lo agrega al HEAD de
una rama, modificando la historia. El uso de este comando *se considera
una mala práctica por algunos desarrolladores, debido a que modifica la
historia*

``` bash
git cherry-pick <hash_de_la_rama>
```

Esto modifica un repositorio agregando el commit elegido al final de la
rama.

``` bash
a - b - c - d   Main
     \
       e - f - g Feature

a - b - c - d - f   Main
     \
       e - f - g Feature
```

## 1.15 rebase

Con rebase puedes recoger todos los cambios confirmados en una rama y
ponerlos sobre otra. Esto mejorar la legibilidad del código, pues
mantiene la historia en una sola linea, sin ramificaciones. *Git rebase
es considerado una mala práctica por algunos desarrolladores, debido a
que modifica la historia*.

Para usarlo, nos posicionamos sobre la rama a la que queremos agregar
los cambios y ejecutamos rebase sobre la rama cuyos cambios queremos
agregar.

``` bash
git checkout <rama_a_aplicar_rebase>
git rebase <rama_con_los_cambios>
```

Visualmente se ve de la siguiente manera

``` bash
a - b    Main
     \
       c - d - e - f Feature

a - b - c - d - e - f  Main
     \
       c - d - e - f Feature
```

Además, si ocurren cambios en la rama main que son más recientes se
agregarán antes de los de la rama donde hacemos rebase.

``` bash
a - b - - - - - x   Main
     \
       c - d - Feature

a - b - c - d - x  Main
     \
       c - d  Feature
```

Considera que la rama que estamos agregando no desaparece.

## 1.16 shortlog

Shortlog muestra los commit que han hecho los miembros del equipo

### 1.16.1 Contar commits

Muestra cuantos commit han hecho cada miembros del equipo.

``` bash
git shortlog -sn
```

### 1.16.2 Mostrar commits eliminados

La opción *-all* muestra cuantos commit han hecho cada miembros del
equipo hasta los que han sido eliminado y merges.

``` bash
git shortlog -sn --all #
```

### 1.16.3 Mostrar commits sin eliminados ni merges

Muestra cuantos commit han hecho cada miembros quitando los eliminados y
los merges

``` bash
git shortlog -sn --all --no-merges # 
```

## 1.17 blame

Para poder responsabilizar por los cambios, linea a linea del código, se
usa el comando git blame, seguido del nombre del archivo

``` bash
git blame <ruta_al_archivo>
```

### 1.17.1 blame linea por linea

También es posible monitorear los cambios linea por linea con la opción
-L

``` bash
git blame <ruta_al_archivo> -L<linea_inicial>,<linea_final>
```

## 1.18 help

Muestra a profundidad los detalles del comando de git que especifiquemos

``` bash
git <comando> --help
```

## 1.19 Borrar los archivos no seguidos

git clean borra los archivos que no están siendo rastreados por git.
Recuerda que todos aquellos archivos duplicados y que correspondan con
algún patrón en el archivo *.gitignore* quedan excluidos del alcance de
este comando.

### 1.19.1 Confirmación antes de borrar

La opción --dry-run verifica y te indica cuales son los archivos que se
van a borrar.

``` bash
git clean --dry-run
```

Mientras que la opción -f borra los archivos de manera directa.

``` bash
git clean -f
```

## 1.20 Guardar cambios temporalmente

Git stash guarda todos aquellos cambios en el staging area de manera
temporal en memoria para su posterior recuperación.

Se usa cuando queremos hacer checkout a un punto en el pasado, pero no
estamos listos para hacer commit a los cambios, ya sea porque hace mucho
que no hacemos un commit, o simplemente deseamos realizar pequeños
cambios o experimentos que no vale la pena guardar, pero que tampoco
queremos perder.

Para guardar los cambios en memoria usamos el comando git stash:

``` bash
git stash
```

Visualizamos los cambios se guardados con

``` bash
git stash list
```

Una vez los cambios se encuentren en memoria podemos movernos entre
commits y ramas.

``` bash
git checkout <hash_de_commit_pasado>
```

### 1.20.1 Recuperar los cambios en stash

Cuando querramos recuperar los cambios volvemos a nuestra rama

``` bash
git checkout <rama>
```

Usamos git stash, seguido de pop.

``` bash
git stash pop
```

También podemos guardar los cambios en una nueva rama

``` bash
git stash branch <nombre_rama>
```

Por otro lado, si queremos perder los cambios que tenemos en stash
usamos *drop*

``` bash
git stash drop
```

## 1.21 Información sobre los commits

Git tiene un comando derivado de grep para buscar información en los
repositorios, llamado git grep.

### 1.21.1 Encontrar un patrón

El comando grep -n nos devuelve el patrón buscando y la linea donde se
encuentra. Al igual que el grep original, cuenta con múltiples opciones
que son un tema en si mismo, es mejor revisar en la [documentación de
git](https://git-scm.com/docs/git-grep)

``` bash
git grep -n <patron_a_buscar>
```

### 1.21.2 Contar patrones

La opción -c busca cuantas veces se uso el patrón.

``` bash
git grep -c <patron_a_buscar>
git grep -c “TAG_A_BUSCAR” # Busca cuantas veces se uso la ese tag pero entre comillas
```

### 1.21.3 Búsqueda en los mensajes de commits

Git tambien permite buscar información en los mensajes de los commits
con el siguiente commando

## 1.22 Ver los logs

En git, el comando log nos muestra información relativa a los commits

``` bash
git log -S <patron_a_buscar>
```

Podemos ver las estadísticas de lineas cambiadas y borradas, y archivos
cambiadas y borrados por commit usamos la opción --stat.

``` bash
git log --stat
```

Podemos ver los cambios de manera gráfica con el flag --graph

``` bash
git log --all --graph --decorate --oneline
```

Debido a que el comando es muy largo es recomendable crear un alias.

## 1.23 Creación de alias

Para crear un alias de un comando lo hacemos a través del comando *git
config*, pasándole el nombre del comando después de la sentencia
"alias."

``` bash
git config --global alias.stats <comando_entre_comillas>
git stats
```

## 1.24 Recuperar cambios borrados

El comando git reflog nos permite recuperar todos los cambios hechos en
el repositorio, incluso aquellos que fueron desechos con *git reset
--hard*.

``` bash
git reflog
```

## 1.25 Excluir archivos del indice de git

El comando rm seguido de la opción --cached, mantendrá el archivo en el
directorio de trabajo pero lo borrará del índice de git, por lo que ya
no se le hará seguimiento.

``` bash
git rm --cached <nombre_de_archivo>
git rm -r --cached <nombre_del_directorio>
```

## 1.26 Prevenir que git vigile carpetas grandes

El método *update-index* es para optimización. Para manejar una carpeta
o una serie de archivos que no cambiarán. Este comando le dice a git que
deje de revisar este folder cada vez que algo cambia. El contenido se
reescribirá si existe un pull al archivo o directorio.

``` bash
git update-index --assume-unchanged <path_name>
```

Esto le dice que quieres tu propia versión independiente de un archivo o
directorio.

``` bash
git update-index --skip-worktree <path_name>
```

Este comando no se propagará con git tiene que ejecutarse por cada
usuario de manera individual.

## 1.27 Ignorar archivos con .gitignore

La presencia de un archivo *.gitignore* en la misma carpeta .git,
encontrada en la raiz del proyecto, le indica a git deje fuera del
seguimiento a los archivos que le indiquemos. El archivo *.gitignore*
funciona con expresiones regulares separadas por saltos de linea.

Un archivo *.gitignore* se vería así

``` bash
#.gitignore
node_modules/
*.pyc
```

### 1.27.1 Plantillas de gitignore.io

A veces es buena idea partir de una plantilla *.gitignore* sobre todo en
entornos de desarrollo muy complejos con varios frameworks y
tecnologías. A la fecha de estas notas existe una página web localizada
en *https://gitignore.io* donde es posible acceder varias plantillas de
archivos *.gitignore* para diferentes tecnologías de desarrollo.

## 1.28 Interfaz gráfica o GUI de git

Existen diferentes versiones de GUI para git, entre las que se
encuentran gitk, gitkraken entre otras. Sin embargo generalmente no son
usadas por la comunidad de desarrolladores.

## 1.29 Github

### 1.29.1 Tags y versiones

Los tags son útiles en github como referencia interna en github,
generalmente fuera de github no son tan usados.

Para crear un tag necesitamos declarar el nombre y el mensaje

``` bash
git tag -a v0.1 -m <mensaje_entre_comillas> <hash_del_commit>
```

Mostramos la lista de todos los tags con

``` bash
git tag
```

Para consultar que commit está conectado un tag usamos

``` bash
git show-ref --tags
```

El push de los tags creados se crea con el comando:

``` bash
git push <origen> --tags
```

Si queremos borrar un tag. El tag se borrará del repositorio local, pero
se mantendrá en github.

``` bash
git tag -d <nombre_del_tag>
```

Para borrar la referencia al tag en github usamos el siguiente comando.

``` bash
git push <origen> :refs/tags/nombre_del_tag
```

### 1.29.2 branches en github

Para mostrar todas las ramas

``` bash
git show-branch -all
```

## 1.30 Flujo de trabajo en github

Para modificar un repositorio **jamás se deben realizar commits directos
a main**. El flujo correcto es crear una nueva branch o rama que
contenga los cambios.

### 1.30.1 Para colaboradores

Si la persona que realizó los cambios es un colaborador podremos obtener
los cambios de su rama y realizar un merge de manera directa.

``` bash
git checkout <rama_principal>
git merge <nombre_de_rama>
git push origin <rama_principal>
```

### 1.30.2 Para no colaboradores

Si la persona que realiza cambios no es un colaborador se necesitará
realizar un *pull request* (puede tener otros nombres en gitlab,
bitbucket u otras páginas de repositorios) directo desde la plataforma
de github dando click en el botón que dice *Compare & pull request*, que
aparecerá tras haber subido los cambios. O directamente en el botón *new
pull request*.

### 1.30.3 Review changes

Tras presionar el botón review changes podreemos comentar, aceptar o
pedir una modificación a los cambios.

### 1.30.4 Pull Request

Es el estado intermedio antes de enviar el merge, sirve para que los
demás colaboradores del proyecto observen y aprueben los cambios antes
de la función, son la base de colaboracion de proyectos, es exclusivo de
repositorios de código y pueden nombrarse de diferente manera entre los
otros repositorios de código como gitlab, bitbucket, etc.

### 1.30.5 Traer datos del fork original

Para agregar una fuente desde donde traer datos a main se usa el comando
*remote add*. Nombrar a esta fuente de información con el nombre de
*upstream* es la convención pero puede nombrarse de forma libre.

``` bash
git remote add <nombre_personalizado_o_upstream> <direccion_url>
```

Para actualizar el proyecto de upstream usamos pull pasándole el nombre
que definimos en el paso anterior.

``` bash
git pull <nombre_personalizado_o_upstream> <main>
```

Una vez hecho esto podemos hacer un commit y push a origin main para
actualizar el repositorio.

## 1.31 Submodulos

Los submodulos son como otras instancias de git dentro de un proyecto,
tienen su propia carpeta .git y se manejan de manera independiente.
Puedes incluso meterte a la carpeta del submodulo, realizar cambios y
crear push desde ahí.

Para agregar un submodulo usamos el comando git submodule

``` bash
git submodule add <url> <destino>
```

Esto creará el submodulo en la ubicación especificada y creará un
vinculo desde tu proyecto por medio de un archivo .gitmodules

``` bash
[submodule <destino>]
    path = <destino>
    url = <url>
    branch = main
```

Este contenido tiene la ubicación del submodulo, que le indica a git
como debe tratar el submodulo.

Cuando queremos actualizar los submodulos hasta el commit más reciente
en nuestro proyecto usamos el comando

``` bash
git submodule update --recursive --remote
```

Y si estamos haciendo un checkout a la repo por primera vez necesitamos
inicializarlos.

``` bash
git submodule update --init --recursive
```
## Mostrar archivos de otra rama

Para mostrar archivos en otra rama usamos el comando git show en la siguiente forma:

``` bash
git show <branch-name>:<file-name>
```## Git bisect

Bisect se usa cuando hay un bug en cierta secuencia de cambios, pero no sabemos donde está. Git biseccionará el código y nos preguntará si el bug está presente para ir acotando los commits y llegar al commit que lo causa.

``` bash
git bisect
```

El commando bisect tiene múltipes subcomandos

### Iniciar sesión de bisect

Para empezar una sesión de biseccionado usaremos *start*

``` bash
git bisect start
```

### Marcar un commit malo

Para marcar un commit como malo (presenta el bug) hacemos un checkout o switch al commit del que sospechamos o establecerlo directamente en el comando.

``` bash
git bisect bad [<commit_hash>]
```

### Marcar un commit bueno

Funciona de la misma manera que el anterior pero reemplazando la palabra *bad* por *good*

``` bash
git bisect good [<commit_hash>]
```

### Sugerencias de bisect

Git bisect nos devolverá sugerencias de commits a checar para reducir el número de búsquedas al mínimo posible y dar con el commit causante del bug.

### Salir de sesión de bisect

Para salir usamos:

``` bash
git bisect reset
```