# Administración de servidores Linux

Es recomendable siempre usar versiones Long Term Support(LTS), pues
cuenta con 10 años de soporte, tanto para CentOS, como para Ubuntu
Server.

Ubuntu Server es la versión más popular de distribución de GNU/Linux, de
acuerdo a las estadísticas de w3tech.


## 1.1 Terminales de GNU/Linux

Las consolas físicas tienen una terminación de tty1 hasta tty6. Cada
usuario activo en nuestro sistema operativo crea una nueva conexión.
Podemos ver todas estas. Para verlas usamos el comando w o who. Es
recomendable matar aquellas que no estamos usando.

### 1.1.1 chvt

Se encarga de cambiar la terminal.

Para matar las consolas usamos el siguiente comando:

``` bash
ps -ft tty0
```

### 1.1.2 sort

El comando sort nos permite ordenar un output por una llave específica.

El flag -n compara según el número, el flag -r los invierte y el flag -k
sirve para indicar la llave.

Siendo las keys la columna respectiva

``` bash
# ps auxf
# USER PID %CPU %MEM VSZ RSS TTY STAT START TIME COMMAND
sort -n -k 2 # Ordena según la columna 2
```

### 1.1.3 Conocer el número de procesadores

Para mirar el número de procesadores usamos

``` bash
cat /proc/cpuinfo | grep "processor"
```

Muestra los 5 procesos que más consumen CPU

``` bash
sudo ps auxf | sort -nr -k 3 | head -5
```

Muestra los 5 procesos que usan más RAM

``` bash
sudo ps auxf | sort -nr -k 4 | head -5
```

## 1.2 Manejo de redes

Las IPs privadas se usan para identificar los dispositivos en una red
local, mientras que las públicas son para identificar cualquier
dispositivo conectado a internet.

Para mirar las direcciones usamos

``` bash
ip a
```

Podemos filtrar las direcciones ipv4 con

``` bash
ip -4 a
```

Mientras que para las direcciones ipv6

``` bash
ip -6 a
```

Para ver la identificación del equipo usamos

``` bash
hostname
```

Y para ver las direcciones IP asignadas

``` bash
hostname -I
```

### 1.2.1 nslookup

Para ver las direcciones IP usamos nslookup, y sirve para internet o
para las redes locales

``` bash
nslookup google.com
```

Y esto nos arrojará la información pertinente

### 1.2.2 curl

Para realizar peticiones http

``` bash
curl localhost:8000
```

### 1.2.3 wget

Para descargar archivos de internet

``` bash
wget https://example.org
```

## 1.3 Administración de paquetes

### 1.3.1 RedHat/CentOS/Fedora

Su gestor de paquetes es rpm. Su base de datos está en /var/lib/rpm

Para listar todos los paquetes

``` bash
rpm -qa
```

#### 1.3.1.1 Instalación de paquetes rpm

Para instalar y remover paquetes utilizamos

``` bash
rpm -i <nombre-del-paquete.rpm>
rpm -e <nombre-del-paquete.rpm>
```

Para ver todos los paquetes instalados

``` bash
rpm -qa
```

Para ver la información de un paquete

``` bash
rpm -qi <paquete>
```

Para ver la configuración de un paquete

``` bash
rpm -qc <paquete>
```

#### 1.3.1.2 yum

Yum nos permite instalar o buscar el nombre del paquete. Es el
equivalente de apt en Debian.

``` bash
yum install nombre-del-paquete
yum search nombre-del-paquete
```

### 1.3.2 Debian

Su administración de paquetes es con .deb

#### 1.3.2.1 dpkg

para instalar un paquete usamos el comando dpkg

``` bash
dpkg -i nombre-del-paquete-deb
```

Su base de datos está disponible en /var/lin/dpkg

Para listar sus paquetes instalados usamos

``` bash
dpkg -l
```

Para eliminar un paquete

``` bash
dpkg -r nombre-del-paquete-deb
```

### 1.3.3 apt

Es el equivalente de yum en red hat.

#### 1.3.3.1 apt install

Además, podemos usar apt para manejar los paquetes

``` bash
apt install <nombre-del-paquete>
```

#### 1.3.3.2 apt update

Actualiza la información local sobre los repositorios.

#### 1.3.3.3 apt upgrade

Actualiza todos los programas que tenemos lados en la máquina.

#### 1.3.3.4 snap install \<nombre-del-paquete\>

Instala un paquete con el nuevo gestor de paquetes de Canonical.

## 1.4 Descomprimir archivos

El comando tar se usa para descomprimir, generalmente se usa con las
opcionex xvfz.

``` bash
tar -xvfz <nombre-de-archivo.tar.gz>
```

Donde las opciones son:

-   x para extraer
-   v para verbosidad
-   f para indicar el archivo
-   z para indicar la desempaquetación

## 1.5 Trabajando con usuarios

### 1.5.1 Identificación de usuarios

El comando id nos muestra el identificador del usuario. En Debian
empiezan a contar desde el número 1000, en Red Hat desde el 500.

``` bash
id
# uid=1000(eduardo) gid=1000(eduardo) grupos=1000(eduardo),7(lp),24(cdrom),25(floppy),27(sudo),29(audio),30(dip),44(video),46(plugdev),107(render),109(netdev),115(bluetooth),122(scanner),127(docker),134(lpadmin)
```

El comando whoami recupera la informacion de /etc/passwd

``` bash
whoami
# eduardo
```

### 1.5.2 Contraseñas de usuarios

Las contraseñas, cifradas, de los usuarios se guardan en la ruta
/etc/shadow. Este archivo no debe manipularse de manera directa.

Para cambiar el password de un usuario usamos el comando passwd, si no
le pasamos ningún usuario, cambiará el password del usuario actual.

``` bash
passwd <nombre-del-usuario>
```

En versiones más nuevas de Ubuntu el usuario root viene desactivado,
para activarlo se usa el comando passwd sobre el usuario root.

``` bash
sudo passwd root
```

### 1.5.3 Creación de usuarios

Los usuarios se crean con useradd, es necesario tener los privilegios
necesarios, generalmente se usan

``` bash
sudo useradd <nombre-de-usuario>
```

### 1.5.4 Eliminación de usuarios

Para eliminar un usuario se usa:

``` bash
sudo userdel <nombre-de-usuario>
```

### 1.5.5 Cambio de usuario

Para cambiar de usuario usamos

``` bash
su - <nombre-de-usuario>
```

Si tenemos los permisos con sudo (o wheel para CentOS), podemos cambiar
directamente sin conocer la contraseña

``` bash
sudo su - <nombre-de-usuario>
```

## 1.6 grupos

Los grupos son útiles para asignar los mismos permisos a una serie de
usuarios al mismo tiempo.

Para ver los grupos a los que pertenece un ususario

``` bash
groups <nombre-de-usuario>
```

Para agregar usuarios a un nuevo grupo

``` bash
sudo gpasswd -a <nombre-de-usuario> <nombre-de-grupo>
```

Para eliminarlos se usa el mismo comando con el parámetro -d

``` bash
sudo gpasswd -d <nombre-de-usuario> <nombre-de-grupo>
```

Otra opción para modificar grupos es con el comando usermod

``` bash
sudo usermod -aG <nombre-de-grupo> <nombre-de-usuario>
```

### 1.6.1 Sudo y wheel

El grupo sudo permite realizar acciones como superusuario en sistemas
basados en debian, mientras que wheel es para sistemas basados en
RedHat, como CentOS.

## 1.7 PAM

PAM es un mecanismo para la administración de usuarios. Permite
autenticar usuarios, controlar la cantidad de procesos que ejecutan cada
uno, validar contraseñas, ver la actividad de los usuarios y otras.

Pam se encuentra en la ruta /etc/pam.d

### 1.7.1 pwscore

Solo disponible en CentOS. Sirve para evaluar un password, verifica que
tenga más de 8 caracteres, la presencia de caracteres especiales y la
presencia en diccionarios.

``` bash
pwscore
```

Para instalarla en sistemas debian es necesario instalar la librería

``` bash
sudo apt install libpwquality-tools
```

### 1.7.2 ulimit

ulimit nos indica las limitaciones que tiene el usuario en cuanto a
infraestructura, memoria, número de procesadores, etc.

``` bash
ulimit -a
# Maximum size of core files created                           (kB, -c) 0
# Maximum size of a process’s data segment                     (kB, -d) unlimited
# Maximum size of files created by the shell                   (kB, -f) unlimited
# Maximum size that may be locked into memory                  (kB, -l) 1009945
# Maximum resident set size                                    (kB, -m) unlimited
# Maximum number of open file descriptors                          (-n) 1024
# Maximum stack size                                           (kB, -s) 8192
# Maximum amount of cpu time in seconds                   (seconds, -t) unlimited
# Maximum number of processes available to a single user           (-u) 31264
# Maximum amount of virtual memory available to the shell      (kB, -v) unlimited
```

Para modificar los parámetros usamos el flag correspondiente

``` bash
ulimit -u <número-máximo-de-procesos>
```

Para limitar el acceso a los usuarios por tiempo modificamos el archivo
/etc/security/time.conf. Dentro de este archivo existen instrucciones
para el manejo de la sintaxis.

La sintaxis es:

``` bash
<srvices>;<ttys>;<users>;<times>
```

Por ejemplo:

``` bash
*;*;usuario|otro_usuario;Wk0800-1900
```

Donde ponemos Wk para indicar entre semana y luego el horario en formato
miliar.

## 1.8 SSH

Secure Shell, es un protocolo que permite conectar dos computadoras de
forma remota sin necesidad de un password, por medio de una conexión
segura basada en cifrado RSA.

Para revisar la configuración de ssh podemos modificar el archivo de
configuración:

``` bash
sudo vim /etc/ssh/sshd_config
```

En este archivo podemos bloquear la autenticación por password y otras
medidas.

### 1.8.1 Generación de llaves

Para la generación de llaves se usa

``` bash
ssh-keygen
```

El número de bits por defecto es 2048, en caso de que no se especifique
ninguno. El comando nos indicará la dirección donde se guardarán las
llaves generadas.

### 1.8.2 Uso de SSH

Para usar un servidor remoto

``` bash
ssh <nombre-de-usuario>@<ip-del-servidor>
```

Para copiar la llave pública al servidor

``` bash
ssh-copy-id -i <directorio>/<llave_publica.pub> <nombre-de-usuario>@<ip-del-servidor>
```

### 1.8.3 Aplicar cambios en SSH

Para aplicar los cambios reiniciamos el servicio

``` bash
sudo systemctl restart ssh
```

### 1.8.4 Problemas de conexión en ssh

Para obtener más información del proceso podemos especificar el nivel de
verbosidad, de acuerdo al número de "v"

``` bash
ssh -v <nombre-de-usuario>@<ip-del-servidor>
# ...
ssh -vvvv <nombre-de-usuario>@<ip-del-servidor>
```

## 1.9 Configurando DNS con bind

En 1983 se conectaron cerca de 70 sitios a la red de CS. En 1983 se
publicó el RFC 882 que define el servicio de nombre de dominios.
Posteriormente, en octubre de 1984 se crearon 7 TLDs (Dominios de nivel
superior), conocidos como dominios de propósito general .arpa, .com,
.org, .edu, .gov, .mil y la letra de los países respetando su código
ISO.

### 1.9.1 Instalación de bind

``` bash
sudo apt install -y bind9
```

Si la instalación funcionó, el puerto 53 estará abierto

``` bash
netstat -ltn
# tcp 0 0 127...:53 ESCUCHAR
```

Y podremos verificar los manuales usando

``` bash
dpkg -L bind9
```

También podremos ver la versión usando el flag -v.

``` bash
named -v
```

### 1.9.2 Dig

dig nos permite realizar consultas al dns. Para esto se usará un dominio
y una ubicación

``` bash
dig www.<dominio>.<extension> @<direccion-ip>
```

### 1.9.3 Configuración de bind

El archivo de configuración de bind estará en /etc/bind/named.conf

## 1.10 Arranque, detención y recarga de servicios

Systemd se encarga de la gestión de todos los servicios, los comandos
más comunes son:

Verificar el estado de un servicio usamos

``` bash
sudo systemctl status <servicio>
```

Para que un servicio cargue al iniciar el sistema

``` bash
sudo systemctl enable <servicio>
```

Para remover un servicio del arranque del sistema

``` bash
sudo systemctl disable <servicio>
```

Iniciar un servicio

``` bash
sudo systemctl start <servicio>
```

Detener un servicio

``` bash
sudo systemctl stop <servicio>
```

Reiniciar un servicio

``` bash
sudo systemctl restart <servicio>
```

Para listar los servicios del sistema

``` bash
sudo systemctl list-units -t <servicio> --all
```

si queremos ver los logs de un servicio. La -f es para realizar un
follow, escuchará cambios en los logs.

``` bash
sudo journalctl -fu <servicio>
```

Muestra cuanto pesan los logs en el sistema operativo.

``` bash
sudo journalctl --disk-usage
```

Muestra los reinicios del ordenador

``` bash
sudo journalctl --list-boots
```

Muestra los mensajes que corresponden con determinada categoría

``` bash
sudo journalctl -p critic|notice|info|warning|error
```

Es posible obtener los logs en formato JSON con

``` bash
sudo journalctl -o json
```

Para recargar los archivos de configuración de un servicio sin
reiniciarlo

``` bash
sudo systemctl reload <servicio>
```

Para reducir el tamaño de los logs cierta cantidad

``` bash
sudo journalctl --vacuum-size=100M
```

Para reducir el tamaño de los logs a cierta cantidad de días

``` bash
sudo journalctl --vacuum-time=2days
```

## 1.11 Configuración de Nginx

Para instalar nginx con sus extras usamos

``` bash
sudo apt install nginx nginx-extras
```

### 1.11.1 Nginx amplify

NGINX Amplify es una herramienta que sirve para monitorear el servidor,
parámetros del sistema operativo, bases de datos, etc

Para activarlo vamos a modificar el directorio conf.d de nginx que suele
estar en /etc/nginx, para agregar un archivo nuevo.

``` bash
sudo cat > conf.d/stub_status.conf
server{
    listen 127.0.0.1:80;
    server_name 127.0.0.1;
    location /nginx_status {
        stub_status on;
        allow 127.0.0.1;
        deny all;
    }
}
```

Seguir las [instrucciones de instalación](https://amplify.nginx.com/) y
posteriormente

A continuación reiniciamos el servicio de nginx y lo habilitamos.

``` bash
sudo systemctl restart nginx && systemctl enable nginx
```

Tras reiniciar nginx activamos el servicio de nginx amplify eligiendo la
opción start.

``` bash
service amplify-agent <start | stop>
```

Una vez hecho lo anterior amplify-agent estará ejecutándose.

## 1.12 MySQL con Nagios

Nagios es un sistema de monitorización de redes, de código abierto, que
revisa el rendimiento de los equipos y servicios.

Primero instalamos MySQL

``` bash
sudo apt install mysql-server
```

Obtenemos el password de MySQL

``` bash
sudo vim /etc/mysql/debian.conf
# ...
# user = <user>
# password = <password>
```

Para inciar sesión usamos los datos del comando anterior. Usamos la
opción -p para que el password no quede guardado en el historial de
comandos.

``` bash
mysql -y <user> -p
```

Reforzamos la seguridad del server de la base de datos con el comando
interactivo.

``` bash
sudo mysql_secure_installation
```

### 1.12.1 Nagios

Instalamos los paquetes

``` bash
sudo apt install -y libmcrypt-dev make libssl-dev bc gawk dc build-essential snmp libnet-snmp-perl gettext
wget https://nagios-plugins.org/download/nagios-plugins-2.2.1.tar.gz -0 plugins.tar.gz -O plugins.tar.gz
```

Configuramos

``` bash
sudo ./configure
```

Verificamos la ausencia de errores

``` bash
sudo /usr/local/nagios/bin/nagios -v /usr/local/nagios/etc/nagios.cfg
```

Y una vez que nos aseguremos reiniciamos nagios.

``` bash
sudo systemctl restart nagios
```

Neceistamos descargar el plugin de MySQL en el Home.

``` bash
wget https://labs.consol.de/assets/downloads/nagios/check_mysql_health-2.2.2.tar.gz -O mysqlplugin.tar.gz
```

Y posteriormente desempaquetarlo

``` bash
tar -xzvf mysqlplugin.tar.gz
```

Creamos un usuario para ingresar en nagios

``` bash
sudo htpasswd -c /usr/local/nagios/etc/htpasswd.users nagiosadmin 
```

Nagios estará disponible en nuestro navegador web

``` bash
<direccion-ip>:8080/nagios
```

### 1.12.2 Configuración en base de datos

``` bash
grant select on *.* to '<user>'@'<ip>' identified by '<password>'
```

Ahora agregamos la siguiente linea dentro de /usr/local/nagios o
/etc/nagios.cfg

``` bash
cfg_file=/usr/local/nagios/etc/objects/mysqlmonitoring.cfg
```

### 1.12.3 Creación de comandos para nagios

Dentro de la ruta /usr/local/nagios/etc/objects/commands.cfg, agregamos

``` bash
define command {
    command_name check_mysql_health
    command_line $USER1$/check_mysql_health -H $ARG4$ --username $ARG1$ --password $ARG2$ --port $ARG5$  --mode $ARG3$
}
```

Por último, creamos el archivo cfg_file que declaramos en el archivo
nagios.cfg de la configuración. Su ubicación será la ruta
/usr/local/nagios/etc/objects/mysqlmonitoring.cfg

``` bash
define service {
    use local-service
    host_name localhost
    service_description MySQL connection-time
    check_command check_mysql_health!nagios!<password>*!connection-time!127.0.0.1!3306!
}
```

## 1.13 Manejo de logs

Hay varios comandos útiles para manejar logs

El comando siguiente encontrará todos los archivos que terminen en
".log", insensible a mayúsculas y minúsculas.

``` bash
find /var/log/ -iname "*.log" -type f
```

Para encontrar los logs que tuvieron salidas de error en los últimos
minutos. El 2 en el comando indica el output para STDERR

``` bash
sudo find /etc/ -mtime <minutos> 2
```

## 1.14 awk

awk es un comando que recibe patrones y nos permite condicionales y flujos de información, como si fuera un lenguaje de programación. 
Awk muy usado para visualizar los de una manera atractiva. 

Nos permite hacer referencia a las columnas con el simbolo "$", seguido del número de columna:

```bash
$<numero_de_columna>
```

### 1.14.1 print con awk

Por ejemplo:

``` bash
awk '{print $num_columna} <file>'
```

También podemos usar otro delimitador en lugar de los espacios

``` bash
awk -F "<delimitador>" '{print $num_columna}'
```

O imprimir múltiples columnas

``` bash
awk -F "<delimitador>" '{print $num_columna $num_columna $num_columna}'
```

También recibe expresiones regulares

``` bash
awk '/^\/dev\/sda5/ {print}'
```

O aquellas que son más largas de cierta longitud

``` bash
awk ' length($0) > <longitud> {print length} ' <directorio>
```

Para ver las IP conectadas a nuestro servidor usamos

O solo determinadas lineas

``` bash
awk 'NR==2, NR==4 {print $0}'
```

### 1.14.2 condicionales con awk

También podemos usar condicionales.

``` bash
awk '{if ($1=="<patron>") {
    print $2
} else { print $1 }
}' <file>
```

### 1.14.3 Mirando los logs de ngnix con awk

Sabiendo que los logs de nginx se localizan en la ruta /var/log/nginx/,
podemos visualizarlos de manera más amigable usando el comando awk.

``` bash
sudo awk '{print $1}' /var/log/nginx/access.log | sort | uniq -c | sort -nr
# 534 159.65.103.143
# 103 187.158.4.52
```

Para ver los códigos en nuestro servidor.

``` bash
sudo awk '{print $9}' /var/log/nginx/access.log | sort | uniq -c | sort -nr
# 4427 200
# 211 301
```

## 1.15 Otros servicios

### 1.15.1 Collectd

Genera reportes en web del rendimiento.

### 1.15.2 Nmon

Obtiene visualizaciones rápidas del sistema. Guardar archivos en formato
nmon que se pueden convertir a html

### 1.15.3 Munin

Analiza el rendimiento del servidor con gráficos históricos

### 1.15.4 Grafana

Visualiza alerta y entiende las métricas del negocio sin portar su
ubicación.

### 1.15.5 Pandora

Recomendado por la comunidad con una versión community.

## 1.16 Bash

Es una shell de UNIX y el intérprete de comandos por defecto en la
mayoría de distribuciónes GNU/Linux. Se pueden crear scripts que, por
convención, terminan con .sh

### 1.16.1 Cabecera

Para indicarle a GNU/Linux que un script se use con bash usamos

``` bash
#!/bin/bash
```

Para definir una variable usamos el operador =

``` bash
VARIABLE = "variable"
```

Para imprimirlas usamos echo

``` bash
echo $VARIABLE
```

Mientras que los comentarios usan el caracter hashtag o numeral

``` bash
# Este es un comentario
```

## 1.17 Variables de entorno

Para mirar todas las variables que están disponibles usamos el comando
*env*

``` bash
env
```

### 1.17.1 Variable $PATH

La variable PATH le indica que a GNU/Linux donde debe buscar los
binarios para ejecutar.

Para extender el PATH usamos

``` bash
export PATH=$PATH:~/otra/ruta
```

## 1.18 Vulnerabilidades en el servidor

### 1.18.1 Buenas prácticas

Hay buenas prácticas a realizar

-   desactivar el usuario root
-   Evitar login con usuario y password
-   Validar la versión de software usada
-   User telnet
-   Identificar los servicios y puertos abiertos
-   Asignarle los permisos mínimos a los usuarios

### 1.18.2 Mantener actualizado el servidor

En sistemas basados en RedHat

``` bash
yum check-update --security
yum update security
```

En sistemas basados en debian

``` bash
sudo apt update
sudo apt upgrade
```

### 1.18.3 Principio del menor privilegio

La superficie de ataque es el conjunto de datos conocidos o
vulnerabilidades.

Existen algunas soluciones para manejar las vulnerabilidades

-   Lynis

### 1.18.4 Frameworks de seguridad

Existen organizaciones encargadas de la seguridad.

-   SCAP, conjunto de reglas para la información relacionada con
    configuraciones y fallos
-   OWASP, proyecto destinado a pelear contra la inseguridad
    informática.

### 1.18.5 Implementación de firewall

ufw es un software que ya viene instalado por defecto en sistemas
ubuntu.

Generalmente para web se dejan abiertos únicamente los puertos 80, 443 y
22, que corresponden a HTTP, HTTPS y SSH, respectivamente.

#### 1.18.5.1 Uso de ufw

El nombre del comando ufw viene de Uncomplicated Firewall. 
Muestra el estado (activo/inactivo) y las reglas del firewall.

``` bash
sudo ufw status
```

Con el modificador numbered me muestra las reglas numeradas.

``` bash
sudo ufw status numbered
```

Para habilitar un puerto usamos allow

``` bash
sudo ufw allow <puerto>
```

Si queremos encender el firewall usamos enable

``` bash
sudo ufw enable
```

Para ver borrar un número de regla

``` bash
sudo ufw delete <numero-de-regla>
```

Para permitir la conexión de ciertas direcciones ip

``` bash
sudo ufw allow from <direccion-ip> proto <tcp|udp> to any port <numero-de-puerto> comment <commentario>
```

Tip: Recuerda que ssh usa el protocolo tcp

Si queremos eliminar todas las reglas

``` bash
sudo ufw reset
```

### 1.18.6 Escaneo de puertos con nmap

Nmap es una herramienta que se encuentra de manera nativa en Kali Linux,
usada para auditorias web.

``` bash
nmap -sV -sC -O -oA <dirección-ip>
```

Donde:

-   -sV Muestra información de los puertos abiertos
-   -sC Habilita el uso de Scripts
-   -O Detección de OS
-   -p Escanea todos los puertos
-   -oA Detecta la salida a un archivo
-   -Pn Para

## 1.19 Lynis

Es una herramienta de auditoria y seguridad, para endurecer servidores
GNU/Linux.

Lynis se instala con:

``` bash
sudo apt install lynis
```

Y para usarlo basta con correr el comando

``` bash
sudo lynis audit system
# [+] Users, Groups and Authentication
#- Administrator accounts [ OK ]
#- Unique UIDs [ OK ]
#- ...
```

Lynis nos hará recomendaciones respecto a nuestro sistema.

Emite un reporte muy completo con una checklist de las medidas y
recomendaciones a tomar en cuenta.

## 1.20 Comandos útiles

### compgen

El comando *compgen* se encarga de mostrarnos todos los comandos y keywords disponibles para el usuario activo.

```bash
compgen -c
```

### listar paquetes con dpkg

Lista todos los paquetes en sistemas Debian

```bash
dpkg -l
```

### Vaciado de memoria con procdump

Nos muestra comandos un picos de CPU para el monitoreo de un proceso.

```bash
procdump -o <output> -p <process_id>
```

También puedes usar el nombre del a imagen

```bash
procdump -w <aplicación>
```

### Fingir ser root con fakeroot

Permite ejecutar comandos falseando el UID y el GID para que sean 0. Esto no te vuelve root, solo engaña a ciertos programas para que crean que lo eres, sin embargo el kernel tiene la última palabra. 

El comando *fakeroot* es util para empaquetar y compilar software que requiere al usuario root sin tener que acceder a este último.

```bash
fakeroot
```

### Estadísticas de sockets con ss

El comando ss nos muestra estadísticas de sockets abiertos.

```bash
ss
```
