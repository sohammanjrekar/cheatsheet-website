# Curso de Postgresql

Toda jerarquía de base de datos se basa en los siguientes elementos:

-   Servidor de base de datos: Computador que tiene un motor de base de datos
    instalado y en ejecución.
-   Motor de base de datos: Software que provee un conjunto de servicios
    encargados de administrar una base de datos.
-   Base de datos: Grupo de datos que pertenecen a un mismo contexto.
-   Esquemas de base de datos en PostgreSQL: Grupo de objetos de base de datos
    que guarda relación entre sí (tablas, funciones, relaciones, secuencias).
-   Tablas de base de datos: Estructura que organiza los datos en filas y
    columnas formando una matriz.



## 1.1 ACID

Las bases de datos deben de seguir los principios *ACID*

-   Atomicidad
-   Consistencia
-   Isolation (Aislamiento)
-   Durabilidad

## 1.2 Instalar y configurar

Se puede instalar directo de los repositorios en GNU/Linux.

``` bash
# Debian
sudo apt-get update && apt-get upgrade

# Instalar motor de bases de datos
sudo apt-get install postgresql postgresql-client postgresql-contrib libpq-dev
```

### 1.2.1 Ingresar

Para ingresar a la base de datos lo haremos de la siguiente manera

``` bash
# Acceso de usuario, desde la cuenta de root
su -
su - postgres
```

### 1.2.2 Crear un usuario

Podemos crear un usuario directo desde la consola

``` bash
# Crear usuario y base de datos
createuser --interactive
    role? -> usuario
    superuser?

psql
    # \password usuario
    # \q
```

### 1.2.3 Crear una base de datos

Para crear una base de datos usamos el comando createdb

``` bash
createdb nom_bbdd

# Crear un usuario administrador
createuser -s -P -e nom_usuario
```

### 1.2.4 Interfaz gráfica

Existe una interfaz gráfica llamada pgadmin, también está disponible para
instalar desde los repositorios.

## 1.3 Comandos básicos

### 1.3.1 Comandos de navegación

-   \l Lista todas las tablas.
-   \c nombre_de_base_de_datos Se conecta con una base de datos.
-   \d nombre_de_tabla Describe la tabla. Es necesario estar conectado a la base
    de datos.
-   \dt Lista las tablas de la base de datos
-   \df Lista los esquemas de la base de datos actual
-   \dn Listar los esquemas de la base de datos actual
-   \df Listar las funciones disponibles de la base de datos actual
-   \dg Listar los atributos de los roles
-   \dv Listar las vistas de la base de datos actual
-   \du Listar los usuarios y sus roles de la base de datos actual
-   \h Todas las funciones a ejecutar como comandos SQL.
-   \h nombre_de_comando Nos muestra.
-   SELECT version(); Nos muestra la versión instalada.
-   \\? Muestra todos los comandos disponibles

### 1.3.2 Comandos de inspección y ejecución

-   \g Ejecuta el último comando, puede haberse ejecutado desde otro servicio.
-   \s Ver el historial de comandos ejecutados
-   \s \<nombre_archivo\> Si se quiere guardar la lista de comandos ejecutados
    en un archivo de texto plano
-   \i \<nombre_archivo\> Ejecutar los comandos desde un archivo
-   \e Permite abrir un editor de texto plano, escribir comandos y ejecutar en
    lote. e abre el editor de texto, escribir allí todos los comandos, luego
    guardar los cambios y cerrar, al cerrar se ejecutarán todos los comandos
    guardados.
-   \ef Equivalente al comando anterior pero permite editar también funciones en
    PostgreSQL

### 1.3.3 Comandos de debug

-   \timing Inicializar el contador de tiempo para ver cuanto tarda en
    ejecutarse cada consulta

### 1.3.4 Cerrar consola

-   \q Cierra la consola

## 1.4 Archivos de configuración

Existen tres archivos de configuración. La mala configuración de archivos nos
causará la mayor cantidad de problemas.

-   postgresql.conf
-   pg_hba.conf
-   pg_ident.conf

En el archivo postgresql.conf la configuración predeterminada está comentada.
Cualquier cambio requiere un reinicio de la base de datos.

Para que nos muestre el archivo de configuración podemos usar la consulta

``` sql
SHOW config_file;
```

### 1.4.1 El archivo pg_hba.conf

Es un archivo de permisos que indica quien se puede conectar a la base de datos.
Consta de 5 columnas que nos dicen el tipo de acceso, la base de datos, el
usuario, la dirección y el método de autenticación.

#### 1.4.1.1 Conexiones remotas

``` bash
# TYPE    DATABASE    USER    ADDRESS       METHOD
  host       all      all  <direccion ip>      md5
```

La dirección 0.0.0.0/0 aplica para todas las direcciones IP

Si establecimos el tipo host para conexiones remotas, deberemos recordar agregar las direcciones permitidas en el archivo *postgresql.conf*

``` bash
listen_addresses = '*'
```

#### 1.4.1.2 Conexiones locales

También recuerda establecer las direcciones y usuarios locales

``` bash
# TYPE    DATABASE    USER    ADDRESS       METHOD
  local       all      all   127.0.0.1/32     md5
```

### 1.4.2 El archivo pg_ident.conf

Permite mapear usuarios de postgres con usuarios de la base de datos. consta de
tres columnas

``` bash
#   MAPNAME        SYSTEM-USERNAME         PG-USERNAME
  mapeo-admin         usuario_SO         usuario_postgres
```

## 1.5 Crear tablas

Las tablas tienen los siguientes comandos:

-   CREATE
-   ALTER
-   DROP

## 1.6 Particiones

Cuando se tiene mucha información que queremos conservar en una tabla podemos
particionarla, para que las consultas NO SEAN sobre la totalidad de los datos de
la tabla. Lo anterior acelera la velocidad de las consultas enormemente. No se
pueden usar llaves primarias en tablas de particiones.

Sin embargo, no es necesario usar llaves primarias, ya que las tablas
particionadas es para información historica y la información hará referencia a
las tablas que sí cuentan con las llaves primarias.

``` sql
CREATE TABLE public.bitacora
(
    id integer NOT NULL DEFAULT nextval('bitacora_id_seq'::regclass),
    id_viaje integer,
    fecha date
) PARTITION BY RANGE (fecha) --Indica la columana para la partición
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.bitacora
    OWNER to postgres;
COMMENT ON TABLE public.bitacora
    IS 'Esta es una tabla será una tabla particionada para guardar las fechas por particiones y realizar más eficiente las búsquedas';



CREATE TABLE bitacora202001 PARTITION OF bitacora
FOR VALUES FROM ('2020-01-01') TO ('2020-01-31');

CREATE TABLE bitacora202002 PARTITION OF bitacora
FOR VALUES FROM ('2020-02-01') TO ('2020-02-28');


INSERT INTO public.bitacora(
    id_viaje, fecha)
    VALUES 
        (23,'2020-01-30'),
        (25,'2020-01-28'),
        (1,'2020-02-23'),
        (2,'2020-02-27')
        ;
SELECT * FROM bitacora;
```

## 1.7 Roles

Para ver los permisos podemos usar el comando

``` sql
\h CREATE ROL;
```

Podemos tener un rol que unicamente haga consultas

``` sql
CREATE ROLE usuario_consulta;
```

Para agregar permisos a un rol podemos usar el comando ALTER

``` sql
ALTER ROLE usuario_consulta with LOGIN;
```

Podemos asignar una contraseña para que el usuario pueda acceder a la consola

``` sql
ALTER ROLE usuario_consulta WITH PASSWORD 'contraseña_fuerte'
```

Para borrar un usuario podemos usar

``` sql
DROP ROLE usuario_consulta;
```

Podemos crear directamente el usuario con todos los privilegios en una sola
consulta, puede crearse directamente desde el pg_admin también, con una interfaz
un poco más visual e intuitiva

``` sql
CREATE ROLE usuario_consulta WITH
  LOGIN
  NOSUPERUSER
  INHERIT
  NOCREATEDB
  NOCREATEROLE
  NOREPLICATION
  ENCRYPTED PASSWORD'md57d24e489563fca3e9842fd8407d58dbf';
```

Podemos otorgar permisos a nivel tabla dando click derecho en la tabla en
"Grant" y ahí podemos indicar los privilegios. También puede hacerse directo de
consola

``` sql
GRANT INSERT, SELECT, UPDATEONTABLEpublic.estacion TO usuario_consulta;
GRANT INSERT, SELECT, UPDATEONTABLEpublic.pasajero TO usuario_consulta;
GRANT INSERT, SELECT, UPDATEONTABLEpublic.trayecto TO usuario_consulta;
GRANT INSERT, SELECT, UPDATEONTABLEpublic.tren TO usuario_consulta;
GRANT INSERT, SELECT, UPDATEONTABLEpublic.viaje TO usuario_consulta;
```

## 1.8 Llaves foráneas

Podemos asignar acciones en cambios y actualización

``` sql
ALTER TABLE public.trayecto
    ADD FOREIGN KEY (id_estacion)
    REFERENCES public.estacion (id) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE CASCADE
    NOT VALID;
ALTER TABLE public.trayecto
    ADD FOREIGN KEY (id_tren)
    REFERENCES public.tren (id) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE CASCADE
    NOT VALID;
```

## 1.9 Inserción masiva de datos

Si queremos poblar una tabla masivamente podemos usar la herramienta
<https://mockaroo.com>

La herramienta permite elegir entre diferentes tipos de datos, desde números de
seguro social hasta valores flotantes o modelos de productos. Una vez que
seleccionamos la cantidad de datos que queremos generar es posible exportar un
archivo SQL o directamente los comandos SQL.

Es importante seleccionar el formato correcto de fecha, para averiguarlo podemos
correr la consulta

``` sql
SELECT current_date;
```

## 1.10 Funciones especiales principales

-   ON CONFLICT DO
-   RETURNING
-   LIKE/ILIKE
-   IS/IS NOT

### 1.10.1 ON CONFLICT DO

Cuando haya un conflicto, por ejemplo un id que ya existe podemos manejar la
situación.

``` sql
INSERT INTO public.estacion(id, nombre, direccion) VALUES (1, "ya existe ese id", "id repetido") ON CONFLICT(id) DO UPDATE SET nombre = 'Nombre', direccion= 'Dirección';
```

### 1.10.2 RETURNING

El comando nos permite retornar un valor. Puede ahorrarnos consultas pues
podemos ver lo modificado o insertado sin hacer otra consulta

``` sql
INSERTO INTO public.estacion(id, nombre, direccion) VALUES (1, "ya existe ese id", "id repetido") ON CONFLICT(id) DO UPDATE SET nombre = 'Nombre', direccion= 'Dirección';
```

### 1.10.3 LIKE/ILIKE

El comando nos permite buscar texto

``` sql
SELECT nombre FROM public.pasajero WHERE nombre ILIKE 'o%';
```

### 1.10.4 IS/IS NOT

El comando nos permite ver si un campo es un valor en especifico, en sql no
podriamos comparar directamente usando el operador '=' porque NULL no es un tipo
de dato estándar

``` sql
SELECT * FROM public.trem WHERE modelo IS NOT NULL;
```

## 1.11 Funciones avanzadas

-   COALESCE: Compara una serie de valores y retorna el que no es nulo
-   NULLIF: Compara dos valores y retorna NULL si son iguales
-   GREATEST: Compara un arreglo de valores y retorna el mayor
-   LEAST: Compara un arreglo de valores y retorna el mayor
-   BLOQUES ANONIMOS: Ingresa condicionales dentro de una consulta de base de
    datos.

### 1.11.1 COALESCE

Verifica que valor es nulo y regresa el otro

``` sql
SELECT COALESCE(nombre,'No aplica porque es nulo'), direccion FROM public.pasajero WHERE id = 1;
```

### 1.11.2 NULLIF

Compara si dos campos son iguales y returna NULL si lo son

``` sql
SELECT NULLIF (0,0);
```

### 1.11.3 GREATESTS

Retorna el mayor valor de un arreglo de datos

``` sql
SELECT GREATESTS (1,2,3,4,5,6,7);
```

### 1.11.4 LEAST

Retorna el menor valor de un arreglo de datos

``` sql
SELECT GREATESTS (1,2,3,4,5,6,7);
```

### 1.11.5 BLOQUES ANONIMOS

``` sql
SELECT id, nombre, direccion_residencia, fecha_nacimiento, CASE WHEN fecha_nacimiento > '2015-01-01'
    'niño'
ELSE
    'Mayor'
END 
    FROM public.pasajero;
```

La agregará como una columna extra.

## 1.12 Vistas

Hay dos tipos de vistas:

-   Vista: Se usa para centralizar una consulta en una sola función
-   Vista materializada: Hace la consulta una vez y se guarda en memoria.
    Podemos cometer el error de no traer los datos actualizados.

Para la vista materializada primero creamos la consulta

``` sql
CREATE MATERIALIZED VIEW public.despues_noche_mview AS SELECT * FROM viaje WHERE inicio > '22:00:00' WITH NO DATA;
```

La podemos consultar con

``` sql
SELECT * FROM despues_noche_mview;
REFRESH MATERIALIZED VIEW despues_noche_mview;
```

Cuando hacemos cambios es necesario volver a hacer un REFRESH para tener los
datos actualizados. Por esta razón este tipo de vista es recomendable para datos
que no cambian, pues se **se incrementa la eficiencia en la base de datos al no
tener que consultar los datos en cada consulta**

## 1.13 Procedimientos almacenados

En la sección de declaración Dos puntos igual ':=' es la asignación de variables

``` sql
DO $$

DECLARE 
    rec record ;
    contador integer := 0;

BEGIN
    FOR rec IN SELECT * FROM pasajero LOOP
        RAISE NOTICE 'Un pasajero se llama %', rec.nombre;
        contador := contador + 1;
    END LOOP;
    RAISE NOTICE 'conteo es %', contador;
END 
$$
```

Para poder utilizarlo necesitamos capturar el bloque de código en una función.
Es importante especificar que tipo de lenguaje, ya que postgres es compatible
con Python, C++, SQL y otros

``` sql
CREATE FUNCTION importantePL()
RETURNS void

AS $$
DECLARE 
    rec record ;
    contador integer := 0;

BEGIN
    FOR rec IN SELECT * FROM pasajero LOOP
        RAISE NOTICE 'Un pasajero se llama %', rec.nombre;
        contador := contador + 1;
    END LOOP;
    RAISE NOTICE 'conteo es %', contador;
END 
$$
LANGUAGE PLPGSQL;

SELECT importantePL();
```

Para poder utilizarlo necesitamos capturar el bloque de código en una función.
Es importante especificar que tipo de lenguaje, ya que postgres es compatible
con Python, C++, SQL y otros. Podemos hacer que retorne un valor al finalizar la
función usando *RETURN*

``` sql
CREATE FUNCTION importantePL()
RETURNS integer

AS $BODY$
DECLARE 
    rec record ;
    contador integer := 0;

BEGIN
    FOR rec IN SELECT * FROM pasajero LOOP
        RAISE NOTICE 'Un pasajero se llama %', rec.nombre;
        contador := contador + 1;
    END LOOP;
    RAISE NOTICE 'conteo es %', contador;
    RETURN contador;
END 
$BODY$
LANGUAGE PLPGSQL;

SELECT importantePL();
```

Entre los simbolos de '$' se coloca la palabra BODY pero puede ir cualquier
otra, PROCEDURE, o nada, es una convención únicamente.

Si queremos borrar una función que definimos previamente usamos el comando DROP

``` sql
DROP FUNCTION importantePL();
```

## 1.14 Triggers o disparadores

Son funciones que se ejecutan en respuesta a una acción en SQL.

-   Insert
-   Update
-   Delete

Suponiendo una tabla llamada cont_pasajero con los campos total, tiempo y una
llave primaria

``` sql
CREATE OR REPLACE FUNCTION public.impl()
RETURNS TRIGGER
LANGUAGE 'plpgsql'

AS $BODY$
DECLARE 
    rec record ;
    contador integer := 0;

BEGIN
    FOR rec IN SELECT * FROM pasajero LOOP
        contador := contador + 1;
    END LOOP;
    INSERT INTO cont_pasajero (total, tiempo) values (contador, now());
    RETURN NEW;
END 
$BODY$
```

La funcion debe retornar un TRIGGER y el cuerpo ya sea NEW u OLD, según lo que
se acepte. Retornar VOID significa que los cambios no se aprueban

Podemos la respuesta puede ocurrir antes de que ocurren los cambios, después o
en vez de usando las palabras BEFORE, AFTER y INSTEAD OF, respectivamente. Las
palabras NEW y OLD, acceden a los valores nuevos y antiguos de la fila de la
tabla. Tanto NEW como OLD son un objeto de tipo record y contiene dentro de si
el registro, es decir se puede acceder a los campos NEW.campo_nombre del
registro.

``` sql
CREATE TRIGGER mitrigger
AFTER INSERT
ON public.pasajero
FOR EACH ROW
EXECUTE PROCEDURE public.impl();
```

## 1.15 Base de datos remota

Podemos conectarnos a los datos de una base de datos sin acceder a su motor. Por
supuesto que el usuario debe tener los permisos adecuados.

``` sql
CREATE EXTENSION dblink;
SELECT * FROM dblink(
    '
        dbname=remota
        port=5432
        host=127.0.0.1
        user=usuario_consulta
        password=1234
    ', 
    'SELECT id, fecha FROM vip')
    AS datos_remotos(id integer, fecha date);
```

## 1.16 Transacciones

Las transacciones, tienen la capacidad para empaquetar varios pasos en una sola
operación “todo o nada” Si ocurre alguna falla que impida que se complete la
transacción, entonces ninguno de los pasos se ejecuta y no se afecta la base de
datos en absoluto.

Pgadmin viene con autocommit activado de manera predeterminado

``` sql
BEGIN
<consultas>
COMMIT | ROLLBACK
```

Si omitimos el commit o rollback la consulta quedará en espera y ya solo
deberemos usar commit o rollback, sin el resto de la consulta.

``` sql
BEGIN;
INSERT INTO public.estacion(id, nombre, direccion) VALUES ('Estación, transac', 'dirección')

INSERT INTO public.tren(modelo, capacidad) VALUES ('Modelo transporte', 123);
-- ROLLBACK;
-- COMMIT;
```

## 1.17 Otras extensiones

Postgres tiene por instaladas muchas extensiones por defecto. Para activarlas es
necesario crear la extensión correspondiente.

Estas funciones nos devuelven un entero que compara que tan parecidas son las
palabras, en cuanto escritura y en cuanto a pronunciación, respectivamente.

``` sql
CREATE EXTENSION fuzzystrmatch;
SELECT levenshtein('oswaldo', 'osvaldo');
SELECT difference('beard', 'bird');
```

## 1.18 Respaldo

Puede hacerse directo desde pgadmin

## 1.19 Mantenimiento

Postgres tiene dos niveles de limpieza son:

-   Liviano que se ejecuta en segundo plano y lo hace constantemente.
-   Full el cual es capaz de bloquear las tablas para hacer la limpieza y luego
    la desbloquea. En estas actividades no debemos involucrarnos al menos que
    sea necesario

Click derecho en una tabla o base de datos y luego Maintenance. Hay 4 opciones
principales:

-   Vacuum. En la pestaña Vacuum hay tres opciones para hacer mantenimiento,
    FULL se eliminará todos los indices y filas que ya no son aplicables,
    FREEZE, incluye que durante ese proceso se congelará la tabla o la bases de
    datos mientras se hace este proceso. ANALYZE solo analiza la bd.
-   Analize. No hace cambios en la tabla. Solo hace una revisión y la muestra.
-   Reindex. Aplica para tablas con numerosos registros con indices, como por
    ejemplo las llaves primarias.
-   Cluster. Especificamos al motor de base de datos que reorganice la
    información en el disco.

## 1.20 Replicas

La estrategia es tener una base de datos maestra donde se hacen modificaciones y
otras donde se hacen las lecturas, que serían las replicas de la base de datos
maestra.

Esta configuración necesita por lo menos 2 bases de datos: una maestra y una
réplica.

Es posible crear replicas de prueba en Cloudjiffy.

### 1.20.1 Configuración

En el archivo *postgres.conf* de la base de datos maestra deberemos modificar lo
siguiente para especificar su función como base de datos maestra.

``` bash
wal_level = hot_standby # Mantiene los archivos hasta que las replicas se lleven los datos y las ejecuten
max_wal_senders = 1 # La cantidad de replicas, de preferencia 2 o 3. En el ejemplo es 1.
archive_mode = on # Como guardar los archivos para que las replicas los añadan
archive_command = 'cp %p %/tmp/%f'
```

Tras esto deberemos reiniciar el servicio.

También debemos agregar la \*\* base de datos de replica \*\* en la lista de
servicios permitidos desde el archivo pg_hba.conf de la base de datos maestra
con la dirección Ip local

Con esta configuración le estamos diciendo que confie en la dirección interna,
con propósitos de replicación, sin pedir passwowrd, para evitar ingresos desde
fuera de la red.

``` bash
host replication all 192.168.x.x/32 trust
```

Tras esto reiniciamos master.


Necesitamos hacer más modificaciones por lo que deberemos detener el servicio. 

``` bash
sudo service postgresql stop
```

Borramos todos los datos locales.

``` bash
rm -rf /var/lib/pgsql/data/*
```

Podemos hacer un backup que trae todo lo de master y lo incializa en nuestra
base de datos de replica. Aquí la Ip local es la de la \*\* base de datos de
master\*\*

``` bash
pg_basebackup -U <usuario> -R -D /var/lib/pgsql/data/ --host=192.168.x.x --port=5432
```

En el archivo de *postgresql.conf* modificamos para decirle que su
funcionamiento es como base de datos de réplica.

``` bash
hot_standby = on # Aquí le especificamos que funcionará como una base de datos de replica.
```

Tras esto iniciamos nuevamente el servicio

``` bash
sudo service postgresql start
```

Ahora la contraseña de la réplica será la misma que la de master, la base de
datos réplica no efectuará ningún cambio que se haga sobre ella, y se
sincronizará con los datos de master.

## 1.21 Otras buenas prácticas

Básicamente el problema es de bloqueo de tabla, cuando una consulta tipo borrado
se debe ejecutar, le avisa al motor de base de datos su objetivo y este debe
detener todas las consultasy otras modificaciones a la tabla hasta que el
proceso termine, pero como la cantidad de inserciones es alta, la consulta de
borrado se queda esperando a que el motor le dé el turno de trabajar o peor
aún,si le llega a entregar el turno, el proceso de borrado puede llegar a tardar
minutos en el que ninguna inserción puede ser ejecutada, lo que causa
encolamiento de peticiones hasta que se desborda la capacidad del servidor.

Se tratará de crear una tabla con la misma estructura y alternar renombrandolas
para que cuando se ejecute

El servidor que recibe los datos de todos los dispositivos IoT y los procesa
debe tener una lógica que se ejecuta cada minuto o menos y es algo así

``` sql
Consultar estadística;
Si está con datos, procesar mil datos y borrar lo procesado;
Si está vacía, no hacer nada;
```

Pero ésta lógica nunca va a lograr vaciar la tabla ya que llegan más datos por
minuto de los que puede procesar. Por lo tanto, se debe agregar una tarea para
poder usar el renombramiento de tablas como un potencializador del rendimiento
así

``` sql
Consultar estadistica_offload;
Si está con datos, procesar mil datos y borrar lo procesado;
Si está vacía, renombra tablas;
```

La idea es hacer la consulta sobre la tabla estadistica_offload que NO está
siendo “bombardeada” de datos, lo que permite que la lectura y modificación de
datos sea mucho más rápida que la tabla estadistica.

``` sql
BEGIN TRANSACTION ;ALTER TABLE estadistica RENAME TO estadistica_temp;
ALTER TABLE estadistica_offload RENAME TO estadistica;
ALTER TABLE estadistica_temp RENAME TO estadistica_offload;
COMMIT;
```

## 1.22 Comandos Linux

Entrar como el usuario postgres

``` bash
sudo -i -u postgres
```

Para crear un rol

``` bash
CREATE ROLE <user> WITH LOGIN ENCRYPTED PASSWORD '<password>';
```

Para exportar una base de datos podemos usar el comando

``` bash
pg_dump -U <username> <dbname> > dbexport.pgsql
```

Para importar una base de datos previamente exportada usamos. Es necesario tener
una base de datos en blanco, por lo que podemos usar

``` bash
dropdb dbname
createdb dbname
```

Si no podemos hacerlo desde la consola podemos ingresar al prompt de psql

``` bash
psql dbname username
```

Y una vez que ha sido creada la base de datos

``` bash
psql -U username dbname < dbexport.pgsql
```

Otorgar todos los permisos de una base de datos a un usuario

``` bash
GRANT ALL ON DATABASE <base_de_datos> TO <usuario>;
```## 1.23 Criptografía

Postgres soporta funciones criptográficas para manejar passwords para usarlas
necesitamos instalarlas

``` bash
sudo apt-get install postgresql-contrib libpq-dev
```

Dentro de la consola de Postgres podemos crear la extensión directamente:

``` sql
CREATE EXTENSION pgcrypto;
```

Comparar un password con su respectivo hash.

``` sql
crypt(<password>, <password_hash>);
```

Para crear un hash

``` sql
crypt(<password>, gen_salt('bf', <n>));
```

## 1.24 Contraints o restricciones

Los constraint son restricciones que se imponen a una tabla para modificar la
manera en la que se comportan las columnas y en las que podemos alterarlas. Por
ejemplo:

* NOT NULL Constraint − Impide los valores nulos.
* UNIQUE Constraint − Se asegura de que todos los valores en una columna sean
  diferentes
* PRIMARY Key − Identifica de manera única un campo en un registro.
* FOREIGN Key − Límita la información de un registro a otras tablas.
* CHECK Constraint − Se asegura de que los valores satisfagan ciertas
  condiciones
* EXCLUSION Constraint − La restricción EXCLUDE garantiza que si se comparan dos
  filas en las columnas o expresiones especificadas utilizando los operadores
  especificados, no todas estas comparaciones arrojarán VERDADERO.

### 1.24.1 Añadir un constraint

Si bien los constraint pueden tener más parámetros, la sintaxis normal para agregar un constraint es la siguiente

``` sql
ALTER TABLE <table_name>
ADD CONSTRAINT <nombre_del_constraint>;
```

Por ejemplo el constraint:

``` sql
ALTER TABLE <table_name>
ADD CONSTRAINT <nombre_del_constraint> UNIQUE (<columna>);
```

### 1.24.2 Eliminar un constraint

Mientras que para eliminar un constraint usamos:

``` sql
ALTER TABLE <table_name>
DROP CONSTRAINT <nombre_del_constraint>;
```



