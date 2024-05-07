# Cloud computing AWS

AWS cómputo se refiere a cualquier producto de AWS que nos permite
servir algún archivo, procesar o calcular algo. Hay varios disponibles:

-   EC2: Son máquinas virtuales que nos renta Amazon por segundo. Hay
    Linux o Windows. Podemos elegir número de CPUs, RAM, discos duros,
    tipo de conectividad, entre otras opciones. Se cobra por segundo
-   Lightsail: Es un producto particular porque es un VPS sobre Amazon
    similar a Dreamhost o Digital Ocean estando en la red de Amazon
    conservando los bajos costos de los VPS comerciales. El costo es
    fijo por mes
-   ECR/ECS/EKS: ECR es donde registramos contenedores, ECS es el
    producto de Amazon para Docker y EKS es el producto de Amazon para
    Kubernetes. Se cobra por capacidades
-   Lambda: Es la infraestructura de Amazon para poder correr diferentes
    funciones.
-   Elastic Beanstalk: Permite correr diversos software o cargas
    productivas, pudiendo autoescalar hacia arriba o hacia abajo de
    manera automática.



## 1.1 AMI

Máquinas virtuales llamadas instancias. Cuentan con imágenes
pre-configuradas, llamadas AMIs.

### 1.1.1 Ephemeral Storage

Almacenamiento que existe a menos que apaguemos o destruyamos la
instancia..

### 1.1.2 Elastic Block Storage

Este permanece a pesar que borremos la maquina virtual, podemos hacer
copias, restaurar o ir guardando en caso que este evolucionando algún
proyecto o alguna configuración de las maquinas.

### 1.1.3 Tipos de instancias EC2

Asegurate de tener la versión correcta de tus instancias o no se ver
ánada.

Las imágenes de Amazon vienen actualizadas con los últimos Drivers

La sección T2/T3 Unlimited en la configuración de la instancia nos sirve
si necesitamos mucha CPU o red, al habilitarla, Amazon nos lo dará sin
límite. El problema es que tiende a ser más costoso. Al parecer está
desactualizado, T2/T3 ya no aparece.

Es recomendable elegir un tagname adecuado para poder saber que hace la
instancia únicamente con verla.

El acceso a la máquina se hacáe por medio de una key. Es recomendable
guardarla en un lugar seguro o sera imposible conectarse por medio de
SSH

### 1.1.4 Proceso de creación de una instancia EC2

Elegimos la imagen principal

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen01.png)

Hay diferentes capacidades entre las que podemos elegir

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen02.png)

Podemos configurar número de instancias, ubicación y otras
características

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen03.png)

Elegimos el tamaño

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen04.png)

Es recomendable usar etiquetas para recordar fácilmente las instancias

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen05.png)

Un grupo de seguridad nos indica los puertos que estarán abiertos, es
bastante similar a usar UFW. En este ejemplo dejamos los puertos básicos
para acceder por SSH y servir contenido por HTTP y HTTPS

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen06.png)

Antes de lanzar la instancia AWS nos presentará un resumen de nuestra
configuración

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen07.png)

Podemos elegir un par de llaves para conectarnos por SSH

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen08.png)

La instancia demorará un poco en lanzarse pero AWS nos avisará cuando
esté disponible

![image](Notes/CloudComputingAWS/img/CreacionDeUnaImagen09.png)

### 1.1.5 Conectarse a la instancia por medio de SSH

Primero debemos quitarle permisos al archivo llave que se descargó

chmod 400 nuestra-llave.pem

Y ahora procedemos a conectarnos por medio de ssh

ssh -i \<path_del_archivo.pem\> ubuntu@\<dirección_IP_de_la_instancia\>

## 1.2 Imagenes de instancias

Cosas a tener en cuenta al momento de crear imágenes de instancias:

No reboot le indica a Amazon que no apague nuestra instancia para hacer
la copia, se corre el riesgo de copias corruptas.

Esa copia puede usarse para crear imágenes de distintos tamaños al
momento de crear una nueva instancia.

Al reiniciar la instancia se cambia la IP pública, por lo que ya no será
posible acceder a ella usando la misma IP

## 1.3 Snapshots

Una imagen es una una copia total de una instancia. Para copiar una sola
de sus características se usa un Snapshot al volumen, es decir, al disco
duro.

Es mejor crear una imagen nueva o AMI al hacer un cambio mayor en la
instancia, versionando a través de las imágenes en caso de que se
necesite un rollback

## 1.4 Configuración de red

Es importante establecer una IP Elastic si quieres mantener tu IP
pública fija con cada reinicio.

## 1.5 Balanceadores de carga

Usando un balanceador de carga podemos balancear peticiones HTTP, HTTPS
o TCP con los servicios de AWS.

Cuando creamos un load balancer, podemos ver en sus configuraciones
básicas un DNS el cual podemos usar en Route 53 como CNAME para ponerme
un nombre de dominio o subdominio.

Accedemos a la opción de balanceadores de carga en el menú principal

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga00.png)

A continuación deberemos elegir un tipo de balanceador de carga.
Usaremos HTTP, HTTPS para el ejemplo

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga01.png)

Especificamos sí será interno o expuesto a internet

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga02.png)

Podemos configurar los grupos de seguridad o elegir uno ya existente.

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga03.png)

Elegimos el grupo de destino

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga04.png)

Si todo salió bien AWS nos mostrará un mensaje de confirmación

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga05.png)

El balanceador de carga aparecerá en la opción de balanceadores de carga
y podremos ver su dirección DNS a la que podemos acceder

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga06.png)

Si entramos en el enlace del balanceador podremos ver más detalles como
su IP pública y privada.

![image](Notes/CloudComputingAWS/img/BalanceadorDeCarga07.png)

## 1.6 Marketplace de AMI's

Es un repositorio de imágenes con la mayoría de las necesidades ya
resueltas.

<https://aws.amazon.com/marketplace>

## 1.7 Lightsail

Un VPS en Amazon

Cuenta con varios templates preconfigurados

-   LAMP
-   Magento
-   wordpress

Escala con unos clicks Tiene base de datos disponibles Multiregiones y
multizonas

### 1.7.1 Marketplace de Lightsail

Existen múltiples imágenes de Lightstail ya preconfiguradas, incluso
imágenes de windows disponibles.

### 1.7.2 Creación de un VPS

Instalar un proyecto en Lightsail es muy similar al proceso que se
realiza en EC2.

### 1.7.3 Creación de una base de datos

Ofrece dos configuraciones:

-   Estándar: Un servidor con una conexión desde afuera.
-   HA: Alta disponibilidad, donde tienes dos servidores o más con un
    load balancer.

## 1.8 ECR/ECS/EKS

ECR es el servicio que te permite usar los contenedores a través de
Dockerfiles en Amazon.

Primero necesitamos entrar a ECS, solo ahí podremos acceder a ECR.

Es requisito instalar AWS CLI y Docker, así como otras dependencias como
pip, python-pip y otras.

### 1.8.1 Creación de una imagen en ECR

Para crear la imagen necesitaremos un usuario con los siguientes
permisos

![image](Notes/CloudComputingAWS/img/CreacionDeUsuarioAWS6.png)

Procederemos a añadir al usuario

![image](Notes/CloudComputingAWS/img/CreacionDeUsuarioAWS5.png)

Elegimos un nombre de usuario

![image](Notes/CloudComputingAWS/img/CreacionDeUsuarioAWS4.png)

Podemos crear un grupo de permisos o asociar los permisos directamente

![image](Notes/CloudComputingAWS/img/CreacionDeUsuarioAWS3.png)

Nos permitirá revisar el usuario antes de agregarlo

![image](Notes/CloudComputingAWS/img/CreacionDeUsuarioAWS2.png)

Posteriormente nos creará una ID y una clave de acceso que serán
necesarios para configurar el awscli

![image](Notes/CloudComputingAWS/img/CreacionDeUsuarioAWS1.png)

### 1.8.2 Instalación de AWS

Înstalamos AWS por medio de pip

``` bash
pip install awscli
```

A continuación correremos el comando

``` bash
aws configure
```

El cual nos pedirá nuestra ID, clave de acceso y la región para
configurar las credenciales que usaremos para acceder

### 1.8.3 Instalación de Docker

La instalación de Docker depende de cada distribución, por lo que es
mejor revisar la documentación oficial.

### 1.8.4 Creación del repositorio ECR

A continuación creamos un repositorio privado con el nombre que
querramos.

![image](Notes/CloudComputingAWS/img/CreacionDeUnRepositorioPrivado.png)

Una vez creado, podremos seleccionarlo y hacer click en el botón de
"view push commands" para obtener los pasos a ejecutar para mandar
nuestra imagen

![image](Notes/CloudComputingAWS/img/PushCommands.png)

### 1.8.5 ECS

ECS es toda la infraestructura que te permite correr contenedores de
Docker directo en AWS.

Amazon se encarga de todo, nosotros solo elegimos las capacidades.

Solo se paga por la capacidad que se solicita

Escalamiento basado en un contenedor de manera manual.

#### 1.8.5.1 Configuración de Docker

Usaremos sla siguiente secuencia de comandos

``` bash
sudo su
apt-get update
snap install docker -y
apt-get install git -y
```

Ahora podemos ejecutar un git clone a nuestro proyecto con Docker y
posteriormente correr

``` bash
docker build
```

Con esto, ya podrás hacer imágenes de contenedores y siguiendo las
instrucciones de la clase, podrás enviarlo a ECR (El registro de
contenedores de AWS).

### 1.8.6 EKS

EKS es una implementación de Kubernetes en Amazon que no requiere la
coordinación de nodos primarios y secundarios

Crea un ambiente de workers de k8s en AWS. Corre con el dashboard de
Kubernetes o cualquier otro orquestador

EKS va desde poner el nodo maestro de Kubernetes, poner los workers para
posteriormente conectarse a la API y ejecutar las tareas.

## 1.9 Kops/k8s en AWS

Nos permite administrar Kubernetes en AWS.

Para instalarlo corremos

``` bash
sudo apt update
sudo apt install -y awscli
sudo snap install kubectl --clasic
curl -LO https://github.com/kubernetes/kops/releases/download/1.7.0/kops-linux-amd64
chmod +x kops-linux-amd64
mv ./kops-linux-amd64 /usr/local/bin/kops
```

Posteriormente se crea un usuario llamado kops en IAM. Le asignamos el
rol de Administrador Access. Y conservamos su Access Key ID y la
contraseña

``` bash
aws iam create-group --group-name kops
aws iam attach-group-policy --policy-arn arn:aws:iam::aws:policy/AmazonEC2FullAccess --group-name kops
aws iam attach-group-policy --policy-arn arn:aws:iam::aws:policy/AmazonRoute53FullAccess --group-name kops
aws iam attach-group-policy --policy-arn arn:aws:iam::aws:policy/AmazonS3FullAccess --group-name kops
aws iam attach-group-policy --policy-arn arn:aws:iam::aws:policy/IAMFullAccess --group-name kops
aws iam attach-group-policy --policy-arn arn:aws:iam::aws:policy/AmazonVPCFullAccess --group-name kops
aws iam add-user-to-group --user-name kops --group-name kops
aws s3api create-bucket --bucket s3kopstudominiocom --region us-west-2
Antes de ejecutar el próximo comando, anexen lo siguiente a su archivo ~/.bashrc al final:
export AWS_ACCESS_KEY_ID=tuaccesskey
export AWS_SECRET_ACCESS_KEY=tusecret
export KOPS_STATE_STORE=s3://s3kopstudominiocom
export KOPS_CLUSTER_NAME=kops-cluster-tudominio
```

cerramos sesión y posteriormente ejecutamos

``` bash
kops create cluster --name=kops-cluster-tudominio --cloud=aws --zones=us-west-2a --state=s3kopstudominiocom
```

Al terminar crearemos el dashboard con

``` bash
kubectl apply -f https://raw.githubusercontent.com/kubernetes/dashboard/master/src/deploy/recommended/kubernetes-dashboard.yaml
```

Nos logeamos con user admin

``` bash
kops get secrets kube --type secret -oplaintext
```

Podemos obtener Tokens de la siguiente manera

``` bash
kops get secrets admin --type secret -oplaintext
```

Al terminar el deploy tendremos la url en la sección de services

## 1.10 Creación de un cluster y tareas

Primero debemos elegir el tipo de Cluster

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea01.png)

Le asignamos un nombre y tags si las necesitamos

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea02.png)

Una vez creado procederemos a definiar la tarea que queremos ejecutar

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea03.png)

Creamos un task definition

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea04.png)

Seleccionamos el tipo de task, en este caso Fargate

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea05.png)

Colocamos el nombre y debemos asegurarnos de tener un rol con los
permisos **Elastic Container Service Task**, el cual podemos elegirlo si
le damos click al enlace a la consola IAM

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea06.png)

A continuación daremos click en el botón para definir el contenedor.
Pegamos el enlace a la imagen en ECR que queremos usar. Y abrimos el
puerto 80 para que esté disponible en el navegador.

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea07.png)

Elegimos las capacidades de nuestro contenedor

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea08.png)

Y al terminar esperemos hasta que esté activo para crear nuestra nueva
tarea

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea09.png)

Usaremos Fargate y el VPC, subnet y grupos de seguridad predeterminados

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea10.png)

Si examinamos el task, podremos apreciar la IP pública, la cual podremos
usar para acceder desde cualquier navegador.

![image](Notes/CloudComputingAWS/img/CreacionDeUnClusterYTarea11.png)

## 1.11 Lambda

Lambda es un producto que implementa la filosofía de Serverless, lo cual
significa no tener un servidor sino tener funciones que hagan cosas muy
específicas. Es código que puede conectarse a una base de datos,
servicios web, etc.

AWS soporta Node.js, Python, Java, C#, Go

Lambda escala automáticamente

A la fecha te permite un millón de llamadas gratis por mes.

### 1.11.1 Configuración

Cada función requiere una serie de permisos. Es recomendable usar el
principio de responsabilidad mínima.

La entrada de un Lambda es un API Gateway.

Podemos crear una lambda function a partir de diferentes opciones.
elegimos el lenguaje que querramos y podemos usar un rol que hayamos
creado o dejar que AWS cree uno con los permisos mínimos

![image](Notes/CloudComputingAWS/img/LambdaFunctions1.png)

Especificamos el contenido de la lambda functión y podemos asignarle un
trigger para que se ejecute dada una acción. Esta acción puede ser el
acceso a un endpoint

![image](Notes/CloudComputingAWS/img/LambdaFunctions2.png)

También peude ser cualquier otra cosa

![image](Notes/CloudComputingAWS/img/LambdaFunctions3.png)

Al crearla podremos asignarle diferentes opciones, dejarla a público o
que requiera acceso.

![image](Notes/CloudComputingAWS/img/LambdaFunctions4.png)

Podemos examinar el evento para ver el endpoint en caso de que cuente
con uno.

![image](Notes/CloudComputingAWS/img/LambdaFunctions5.png)

## 1.12 Elastic Beanstalk

Incluye todo lo que necesitas en un paquete

-   Endpoint para gestion de dominios a partir de Route 53
-   Load Balancer
-   Instancias de EC2 con Windows, Linux y soporte a muchos lenguajes.
-   Rollback en cuestión de minutos
-   Autoescalabilidad para arriba o para abajo
-   Base de datos interna

### 1.12.1 Creación de un ambiente

Requiere un archivo zip con todos los archivos.

``` bash
zip -r nombredelzipfile.zip archivos
```

Es recomendable colocar una versión para recordar la versión en caso de
rollback.

En la configuración avanzada podemos elegir entre bajo costo o alta
disponibilidad.

### 1.12.2 Configurando un ambiente para nuevas versiones

Es necesario un nuevo archivo zip.

Hay varias opciones, ya sea subir los cambios a todos los servidores
(all at once) al mismo tiempo o hacerlo paulatinamente (rollback).

Es importante programar las actualizaciones para reducir el impacto a
los usuarios.
