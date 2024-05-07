# Kubernetes

## 1.1 ¿Qué es kubernetes?

La tarea de automatizar y administrar una gran cantidad de contenedores (y de
interactuar con ellos) se conoce como orquestación. Esta herramienta open
Source, también conocida como k8s, de administración de contenedores y
desarrollada por Google se encarga de esto.

Kubernetes combina la automatización de contenedores con una extensa API para
crear una entidad de administración.

### 1.1.1 Relación entre Docker y Kubernetes

Docker se encarga del ciclo de vida de los contendores y Kubernetes de asignar
el nodo en el que nodo deben correr.

Si no existiera kubernetes tendriamos que encargarnos de los siguientes aspectos
de manera manual.

-   Logearnos en diferentes computadoras, crear contenedores
-   Escalarlos de acuerdo a cambios en la demanda
-   Mantener un almacenamiento consistente con las instancias
-   Distribuir la carga entre los contenedores
-   Lanzar nuevos contenedores si alguno falla

Los contenedores se usan normalmente para crear soluciones mediante una
arquitectura de microservicios.

#### 1.1.1.1 ¿Qué es un microservicio?

Los Microservicios es un servicio web que es pequeño, bien definido y
desacoplado del resto de servicios, además de ser individualmente desplegable.
No requieren usar el mismo lenguaje o framework.

## Clusters

### Clusters

Un cluster es una agrupación de máquinas que corren una cierta cantidad de servicios.

Cada cluster corre

* Docker runtime
* Kubelet agent
* Network proxy
## Nodos

Un nodo es un worker machine, una máquina dentro de un cluster, puede ser una VM o una máquina física, debe contar con todos los servicios para ejecutar los pods.

### 1.5.2 Nodos

Anteriormente **se les conocia como minions**. Todos los nodos y masters están
conectados a una red física para poder comunicarse entre sí.

#### 1.5.2.1 Componentes muy importantes que viven en los nodos

-   Kubelet: Agente de kubernetes, se conecta con el control play y le pregunta
    que recursos (pods, contenedores) debo correr al scheduler via API Server.
    **Monitorea los pods constantemente** para saber si están activos, los
    recursos disponibles, etc. y se comunica constantemente con scheduler por
    medio del API Server.
-   Kube-proxy: Se encarga de balancear el tráfico que corre a través de
    nuestros contenedores/servicios. Una vez llega una request este se encarga
    de decidir a que pod y contenedor debe de ir.
-   Container-runtime: El contenedor local, que contiene las aplicaciones
    corriendo.

## 1.2 ¿Qué problema resuelve?

Cuando las aplicaciones crecen demasiado es muy complicado la administración de
decenas o cientos de conetendores.

Sin embargo, Kubernetes no realiza un provisionamiento de la infraestructura, solo su orquestación.

## 1.3 ¿Qué hace kubernetes en la práctica?

-   K8s permite correr varias réplicas y asegurarse de que todas se encuentren
    funcionando.
-   Provee un balanceador de carga interno o externo automáticamente para
    nuestros servicios.
-   Establecer mecanismos para hacer roll-outs de código.
-   Políticas de scaling automáticas.
-   Jobs batch.
-   Correr servicios con datos stateful.

Todos los contenedores que viven dentro de un mismo Pod comparten el mismo
segmento de red.

## 1.4 Contenedores en Kubernetes

Los contenedores, (como los de [Docker](../../Docker/1.-Docker.md)) no son un first class citizen del kernel de Linux. Es un
concepto abstracto conformado por diferentes tecnologías que se potencian las
unas a las otras y trabajando en conjunto componen esta tecnología.

-   Cgroups o Control Groups: Son los que permiten que un contenedor o proceso
    tenga aislado los recursos como memoria, I/O, Disco y más. Limitan los
    recursos del Sistema operativo.

-   Namespaces: Permiten aislar el proceso para que viva en un sandbox y no
    pueda haber otros recursos del sistema operativo o contenedores.  
    -   Mount Namespaces: Permite que nuestro proceso tenga una visibilidad
        reducida de los directorios donde trabaja.
    -   Networking Namespaces: Permite que cada contenedor tenga su stack de
        red.
    -   PID.

-   Chroot: Cambia el root directory de un proceso.

> Aunque Kubernetes es un orquestador de contenedores, la unidad mínima de
> ejecución son los pods:

## 1.5 Arquitectura de kubernetes

Kubernetes consiste en:

-   Un nodo master llamado master o nodo maestro
-   Worker nodes: llamados minions o simplemente nodos

Generalmente solo se necesita interaccionar con el nodo master, este recibe
instrucciones de una API a la que se accede con una UI o un CLI.

![image](Notes/Kubernetes/img/arquitectura-kubernetes.jpg)

### 1.5.1 Estructura del nodo master

El nodo master consiste en los siguientes elementos:

-   API Server: A lo que todo se conecta, los agentes, el CLI, el dashboard etc.
    Se usa el algoritmo de ruft para algoritmo de elección. Si el nodo master se
    cae perdemos el API server pero el resto de los nodos siguen funcionando.

Este primer elemento se comunicará con los otros tres:

-   Scheduler: Cuando es necesario crear un job, un pod en máquinas específicas,
    el scheduler se encarga de asignar los pods a los nodos, revisando siempre
    las restricciones y los recursos disponibles.
-   Controller Manager: Es un proceso que está en un ciclo de reconciliación
    constante buscando llegar al estado deseado con base al modelo declarativo
    con el que se le dan instrucciones a K8s. Lo realiza a través del control de
    los controllers, tales como:
    -   Replica manager
    -   Deployment manager
    -   Service manager
    -   Etcd: Key value store que permite que el cluster este altamente
        disponible.
-   etcd, es un key-value store que guarda la configuración del cluster de
    kubernetes.

### Kubernetes Networking

- Todo el cluster es una gran red del mismo segmento
- Todos los nodos deben conectarse entre si, sin NAT
- Todos los pods deben conectarse entre si, sin NAT
- kube-proxy es el componente para conectarnos a pods y contenedores (userland proxy / iptables)
- Los pods trabajan a capa 3 y los servicios a capa 4
- Concepto de CNI (container networking interface)

### El modelo de red es el modelo OSI

Capas del Modelo OSI.

* Aplicacion
* Presentacion
* Sesion
* Transporte
* Red
* Enlace de Datos
* Fisica

Una buena técnica mnemotécnica para memorizarlo es:

[A]ll [P]eople [S]eems [T]o [N]eed [D]ata [P]rotection

![](Notes/Kubernetes/img/arquitectura-de-red.jpg)

## 1.6 Declarativo vs imperativo

Kubernetes hace enfasis en ser un sistema declarativo.

### 1.6.1 Diferencias entre sistemas imperativos y declarativos

Un sistema es imperativo cuando ejecuta una serie de pasos a seguir. Si algún
paso se interrumpe, la secuencia inicia desde el primer paso.

Un sistema es declarativo cuando trata de converger a un estado meta, a partir
de un estado actual.

## 1.7 Kubectl y flujo de trabajo

El trabajo lo realizamos con una cli, como kubectl.

### 1.7.1 Kubectl

Kubectl es el cliente de kubernetes, se encarga de interactuar con un cluster de
kubernetes.

1.  El kubectl traduce el comando a una o más llamadas REST a la API del
    kube-apiserver
2.  Tras validar las llamadas, kube-apiserver llama al kube-scheduler para
    selecionar un nodo disponible y ejecutar el trabajo
3.  El kube-scheduler retorna el nodo objetivo y el kube-apiserver despachará
    las tareas
4.  El proceso de kubelet en el nodo objetivo recibe la tarea y habla con el
    motor de contenedores para crear un contenedor con todos los parámetros
    indicados
5.  Este job y su especificación serán guardados en una la base de datos etcd.

## 1.8 Objetos de kubernetes

Los objetos de kubernetes representan:

> -   Aplicaciones en contenedores y cargas de trabajo
> -   Redes asociadas y recursos de discos
> -   Otra información de los procesos del cluster

Los objetos más frecuentes son:

> -   Pod
> -   Servicio
> -   Volumen
> -   Namespace

Los objetos de algo nivel son:

> -   ReplicationController
> -   ReplicaSet
> -   Deployment
> -   StatefulSet
> -   DaemonSet
> -   Job

## 1.9 ¿Como desplegar un cluster de kubernetes?

### 1.9.1 Minikube

Minikube usa opciones de hypervisor como virtualbox, hyperkit o KVM2 para
despleguar un cluster mínimo. En otras palabras, usa una máquina virtual para
instalar un cluster de kubernetes a partir del cual interaccionaremos con un
cliente de kubernetes.

Para instalarlo puedes hacerlo desde la url oficial de [la documentación de
minikube](https://minikube.sigs.k8s.io/docs/start/)

Minikube utiliza kubeadm internamente.

### 1.9.2 Kubeadm

```bash
kubeadm init --apiserver-advertise-address $(hostname -i) --pod-network-cidr <ip>
```

Al finalizar la inicialización del admin tendremos una dirección para unir nodos
a nuestro cluster.

Y ahora en cada nodo que querramos unir corremos el comando que aparece al final
de la salida del comando anterior. Obviamente el token será diferente.

```bash
kubeadm join <ip:port> --token <token> --discovery-token-ca-cert-hash sha256:<hash>
```

Y ahora vemos los nodos

```bash
kubectl get nodes
NAME    STATUS     ROLES                  AGE     VERSION
node1   NotReady   control-plane,master   12m     v1.20.1
node2   NotReady   <none>                 4m21s   v1.20.1
```

Si apreciamos el estado estarán como NotReady porque necesitamos un plugin de
network.

```bash
kubectl describe node node1
```

Por lo que es necesario correr un comando que se instale un plugin de network en
el cluster. Existen muchas empresas que se dedican a hacer estos plugins, por lo
que es mejor leer las especificaciones de cada uno.

```bash
kubectl apply -f https://raw.githubusercontent.com/cloudnativelabs/kube-router/master/daemonset/kubeadm-kuberouter.yml
```

Eventualmente los pods se inicializarán y veremos el cambio de estado. Este
proceso puede tomar algo de tiempo y es secuencial; un pod a la vez.

En el ejemplo se levanta un kluster de nginx

```bash
kubectl apply -f https://raw.githubusercontent.com/kubernetes/website/master/content/en/examples/application/nginx-app.yml
```

Y ejecutando get service podremos ver el puerto en el que estará disponible el
servidor

```bash
kubctl get service
NAME           TYPE           CLUSTER-IP       EXTERNAL-IP   PORT(S)        AGE
kubernetes     ClusterIP      10.96.0.1        <none>        443/TCP        33m
my-nginx-svc   LoadBalancer   10.105.142.114   <pending>     80:30070/TCP   43s
```

En este caso el puerto 30070.

```bash
kubectl get nodes -o wide
NAME    STATUS   ROLES                  AGE     VERSION   INTERNAL-IP    EXTERNAL-IP   OS-IMAGE                KERNEL-VERSION      CONTAINER-RUNTIME
node1   Ready    control-plane,master   15m     v1.20.1   192.168.0.13   <none>        CentOS Linux 7 (Core)   4.4.0-101-generic   docker://20.10.1
node2   Ready    <none>                 7m45s   v1.20.1   192.168.0.12   <none>        CentOS Linux 7 (Core)   4.4.0-101-generic   docker://20.10.1
```

### 1.9.3 EKS

EKS es el servicio de kubernetes de AWS. Con un cloud cluster nos brincamos la
parte de la configuración desde cero y la actualización de los clusters de
manera manual.

Es necesario crear roles para utilizar un cluster en AWS. Por lo que es buena
idea revisar la documentación vigente que ofrece Amazon.

### 1.9.4 Localmente con kind

Kind nos permite desplegar un cluster de manera local, usando contenedores..
Para ver las instrucciones accede a esta [guia para usar
kind](https://jamesdefabia.github.io/docs/getting-started-guides/docker/)

Una vez instalado kind es muy sencillo crear un cluster. 

Sin embargo kind, a la fecha, es un proyecto en Beta, que no ha alcanzado su versión 1.0 por lo que pueden ocurrir de compatibilidad.

## 1.10 Kubectl y sus comandos

Es el cliente para interaccionar con el cluster de kubernetes.

Kubectl guarda la configuración en una carpeta llamada *.kube* en el directorio
*home* del sistema, con un archivo config dentro.

Si queremos usar otro archivo usamos

```bash
kubectl --config <config_file>
```

### 1.10.1 Comandos de Kubectl

Para ver la lista de comandos es necesario llamar al comando con el flag --help

```bash
kubectl --help
```

Para ver el estados de los componentes.

``` bash
kubectl get componentstatuses

NAME                 STATUS    MESSAGE                         ERROR
scheduler            Healthy   ok                              
controller-manager   Healthy   ok                              
etcd-0               Healthy   {"health":"true","reason":""}  
```

El comando get all nos muestra la información de pods, deployments, servicios y
replica set.

```bash
kube get all

NAME                 TYPE        CLUSTER-IP   EXTERNAL-IP   PORT(S)   AGE
service/kubernetes   ClusterIP   10.96.0.1    <none>        443/TCP   2m48s
```

Para obtener los nodos usamos el comando get nodes

```bash
kubectl get nodes

NAME       STATUS   ROLES           AGE    VERSION
minikube   Ready    control-plane   3m3s   v1.26.1
```

Si queremos ver más detalles como versión de kernel, direcciones IP y datos
extras usamos.

```bash
kubectl get nodes -o wide
```

Si queremos ver todos los pods de todos los namespaces usamos la opción
--all-namespaces.

```bash
kubctl get pods --all-namespaces
```

Podemos ver los nodes de un namespace en particular con

```bash
kubectl get nodes -n <namespace>
```

Para mirar los certificados secretos.

```bash
kubectl get secrets -n <namespace>
```

Podemos recuperar el formato en formato yml, que nos dará el label, la memoria,
los cpu disponibles, si la red está disponible, las imágenes de docker que tiene
y muchísimos datos extra.

```bash
kubectl get nodes -o yml
```

Podemos obtener información detallada de un nodo en específico

```bash
kubectl describe nodes <nombre_nodo>

Name:               minikube
Roles:              control-plane
Labels:             beta.kubernetes.io/arch=amd64
# ...
```

Y para ver la explicación de los kinds o tipos de kubectl usamos el comando
*explain*.

```bash
kubectl explain <node|deployment|service|...>
```

Para ver la definición técnica de un tipo anidado (nodo.spec).

```bash
kubectl explain <node|deployment|service|...>.<subtype>
```

Mientras que para ver la definición técnica de de manera recursiva.

```bash
kubectl explain <node|deployment|service|...> --recursive
```

## 1.11 Recursos de kubernetes

Kubernetes cuenta con varios servicios que le permiten manejar aplicaciones:

-   Pod
-   ReplicaSet
-   Deployment
-   Services
-   Ingress
-   Endpoints

## 1.12 Ingress 

Viene de NGNIX Ingress Controller. Permite crear accesos a nuestros servicios basados en el path. K8s se encarga de un controlador nginx y va a leer el tipo de recurso, llamado ingress y se autoconfigurará para redireccionar el tráfico a donde debe. 

Es una excelente opción para manejar una solo load balancer y además existen otros ingress como traeffik y Kong.

No todos incluyen Ingress.

``` yaml
apiVersion: networking.k8s.io/v1
kind: Ingress
metadata:
  name: hello-app
spec:
  rules:
  - http:
    paths:
    - path: /v1
    pathType: Prefix
    backend:
      service:
        name: hello-v1
        port:
          number:8000
```

Podemos obtener los recursos tipo ingress con 

```bash
kubectl get ing
NAME        CLASS   HOSTS    ADDRESS         PORTS AGE
hello-app   <none>    *    <direccion_ip>     80    1m
```

Tras establecer el prefijo v1 podemos acceder a la dirección con el path que establecimos

```bash
curl <direccion_ip>/v1
```

## 1.13 Pod

Un pod es el más pequeño y más básico objeto que puede ser desplegado en
kubernetes. Representa una instancia de un proceso que corre en el cluster. Un
pod puede contener uno o más contenedores y **se aloja en un nodo**. Cuando un
pod ejecuta múltiples contenedores, los contenedores se manejan como una entidad
única y **comparten el mismo namespace de red (dirección IP) y el
almacenamiento.**. 

Generalmente no se gestionaran los pods de manera individual, sino a través de deployments o replicasets. Pero es posible crear pods sin los dos abstracciones anteriores.

Cuando se escala un pod en kubernetes se crean nuevas copias del pod, estas
copias son irrecuperables una vez se han eliminado, por lo que los pods son perfectos para elementos stateless. 

Si queremos desarrollar aplicaciones con data persistente necesitamos volúmenes.

La estructura de un pod se establece con un fichero yml.

``` yml
apiVersion: v1
kind: Pod
metadata:
    name: nginx
    namespace: default
    labels:
        app: nginx
spec:
    containers:
        - image:  nginx
        name:  nginx
```

Estableciendo la versión de la API, el tipo de recurso, la metada para
identificación del pod y las características del recurso.

### 1.13.1 Creación de un pod

Un pod se puede crear directo con el archivo yml que indica el kind pod y el
comando create.

```bash
kubectl create -f <pod>.yml
```

Podremos corroborar su creación y ver el nodo en el que se creo con

```bash
kubectl get pods -o wide
```

### 1.13.2 Gestión de un pod

Para describir un pod usamos el comando describe

```bash
kubectl describe pod <pod>
```

Delete permite eliminar un pod

```bash
kubectl delete pod <pod>
```

Para editarlo. Tras ejecutar el comando un editor de texto nos permitirá
modificar los valores, incluso aquellos que fueron definidos por defecto.

```bash
kubectl edit pod <pod>
```

Y si queremos acceder a su interior

```bash
kubectl exec -it <pod> -- /bin/bash
```

## 1.14 Replica set

Un ReplicaSet es un recurso de Kubernetes que garantiza que siempre se ejecute
un número de réplicas de un pod determinado. Sustitye al recurso más antiguo
ReplicaController. Además asegura lo siguiente:

-   Tolerancia a errores
-   Escalabilidad dinámica
-   Que no haya caída del servicio

Los replicaset generalmente dependen de un deployment y no se utilizan de manera aislada.

### 1.14.1 Definición de un yml de ReplicaSet

``` yml
apiVersion: extensions/v1beta1
kind: ReplicaSet
metadata:
name: nginx
namespace: default
spec:
replicas: 2
selector:
    matchLabels:
    app: nginx
template:
    metadata:
    labels:
        app: nginx
    spec:
    containers:
        - image:  nginx
        name:  nginx
```

El número de pods se establece en la opción replicas.

El selector indica el pod a replicar y controlar.

```bash
kubectl create <replica-set>.yml
```

Esto creará los pods, podemos acceder a la cantidad de ReplicaSets y su nombre

```bash
kubectl get rs
```

Y obtenemos los pods que la componen con

```bash
kubectl get pods
```

Para editar ReplicaSets usamos edit

```bash
kubectl edit rs <replica-set>
```

Y, manteniendo la sintaxis podremos borrar ReplicaSets con

```bash
kubectl delete rs <replica-set>
```

## 1.15 Deployment

Un deployment es una abstracción de la aplicación; a nivel práctico un deployment es un template para la creación y escalamiento de los pods o replicaset que la conforman.

La existencia de un deployment *no implica que podamos acceder a sus recursos desde el exterior*, para eso necesitamos un servicio.

Un deployment nos permite: 

-   Control de réplicas
-   Escabilidad de pods
-   Actualizaciones continuas
-   Despliegues automáticos
-   Rollback a versiones anterior

### 1.15.1 Canary deployment

Es un término que se utiliza cuando se quiere transicionar un deployment a nueva
versión código, de manera controlada.

Consiste en hacer el deploy de esta nueva versión y enviar un porcentaje del
tráfico general (early adopters) con el propósito de ir midiendo el
comportamiento de esta nueva versión, adicionalmente Kubernetes permite ir
analizando los health checks necesarios para decidir continuar o efectuar un
rollback a una versión anterior

Para definir un deployment en un archivo

``` yml
apiVersion: apps/v1
kind: Deployment
metadata:
  name: <name>
  labels:
    app: <name>
spec:
  replicas: 3
  selector:
    matchLabels:
      app: <name>
  template:
    metadata:
      labels:
        app: <name>
    spec:
      containers:
      - name: <name>
        image: <image-name>
        ports:
        - containerPort: 80
```

El deployment es la entidad de kubernetes con la que se interactuará más frecuentemente. El
despliegue de un Deployment conlleva la creación de un ReplicaSet y los Pods
correspondientes. Por lo que es necesario definir también el replicaSet
asociado.

-   revisionHistoryLimit establece la cantidad de replica set para hacer un
    rollback.
-   Strategy indica el modo en que se actualizará el deploymet.

### 1.15.2 Creación de deployments

Para crearlo a partir de un fichero usamos

```bash
kubectl create -f <deployment>.yml 
```

Anteriormente, para crear un deployment se usaba el comando run, ahora se usa el
comando create deployment.

```bash
kubectl create deployment <deployment> --image=<image>
```

### 1.15.3 Replicas en deployment

Para hacer replicas de nuestro deployment corremos el comando scale y le
indicamos el número de replicas que necesitamos.

```bash
kubectl scale deployments/<deployment> --replicas <numero>
```

Esto nos dará esa cantidad de pods que podremos ver con el comando *kubectl get
pods*.

Kubectl va a intentar mantener los pods en el estado que le indicamos. Por lo
que estarán monitoreados constantemente para mantener el estado declarado.

Si queremos ver el manifest file que establece las directivas del pod usamos

```bash
kubectl run --dry-run -o yml <nombre> --image <image> <comando>
```

Y para ver los logs de los pods usamos el comando *describe pods*

### 1.15.4 Actualizar deployment

Para actualizar un deployment podemos editar la imagen con el comando edit

```bash
kubectl edit deployment <deployment>
```

O cambiando la imagen directamente

```bash
kubectl set image deployment <deployment> <nginx>=<nginx>:version --all
```

El flag *--all* obliga a la actualización de los pods.

### 1.15.5 Logs deployment

Para ver los logs de un deployment usamos el comando logs. Este comando pueden
añadirsele opciones como --tail, que tiene la misma función que en linux,
mostrar el último número de n lineas.

```bash
kubectl logs <deploy/container>
kubectl logs <deploy/container> --tail <numero>
```

Para ver los logs de muchos pods ejecutándose.

```bash
kubectl logs -l run=<palabra>
```

### 1.15.6 Borrar deployment

Se eliminan, siguiendo la misma sintaxis

```bash
kubectl delete deployment <deployment>
```

## 1.16 Servicios

Normalmente no podemos acceder a los pods desde fuera del cluster de Kubernetes.

Los servicios son una abstracción para el acceso por red a un conjunto de pods que
implementan un microservicio (backend, frontend, etc.). Ofrecen una dirección
virtual y un nombre que identifica al conjunto de pods que representan.

La conexión a un servicio se puede realizar desde otros pods o desde el
exterior.

Se implementan con iptables y son monitoreados por el componente kube-proxy.

Cuando se crea un nuevo servicio, se le asigna una nueva ip interna virtual
(IP-CLUSTER) que permite la conexión desde otros pods.

### 1.16.1 Tipos de servicios

-   ClusterIP: Reserva una IP virtual fija para el servicio que elijamos. Solo
    permite el acceso interno entre distintos servicios. Es el tipo por defecto.
    Podemos acceder desde el exterior con la instrucción *kubectl proxy*
-   NodePort: Un puerto para el servicio en cada uno los nodos, generalmente en
    el rango de 30000 a 40000. Que nos permitirá acceder interna o externamente
    a partir de la ip del servidor master del cluster.
-   LoadBalancer: Balanceador externo provisionado para cloud providers (GKE,
    AKS o AWS). No se puede usar de manera local, excepto con *minikubetunnel*.
-   ExternalName: Entrada de DNS que es gestionada por CoreDNS.

### 1.16.2 Creación de un servicio tipo Cluster IP

Para crear un servicio, podemos establecer la definición del recurso en un
archivo yml:

``` yml
apiVersion: v1
kind: Service
metadata:
name: nginx
namespace: default
spec:
  type: ClusterIP
  ports:
  - name: http
      port: 80
      targetPort: http
      # targerPort: 80 también es válido
  selector:
      app: nginx
      #role: hello
```

El selector especifica todos aquellos pods que estarán disponibles para su acceso desde el exterior. Además de por
App, podriamos establecer un selector por rol, a partir de un deployment.

``` yml
kind: Deployment
# ...
spec:
  #...
  matchLabels:
    role: hello
    template:
      metadata:
        labels:
          role: hello
```

Una manera alternative, usando la lina de comandos, sería:

```bash
kubectl expose deployment/nginx --port=80 --type=ClusterIP
```

### 1.16.3 Acceso a un ClusterIP

Para acceder desde el exterior podemos usar kubectl proxy.

```bash
kubectl proxy [--port=<numero>]
```

Y nos dejará el acceso libre en la dirección:

```bash
http://localhost:8001/api/v1/namespaces/<NAMESPACE>/services/<SERVICE NAME>:<PORT NAME>/proxy/
# PORT_NAME = HTTP
```

### 1.16.4 Creación de un servicio Node Port

Para establecer el tipo NodePort lo podemos hacer directamente en el servicio, estableciendo el tipo y el nodePort. Este tipo tiene el inconveniente de que se necesita conocer la dirección IP de cada nodo para acceder a él.

``` yml
apiVersion: v1
kind: Service
metadata:
name: nginx
namespace: default
spec:
  type: NodePort
  ports:
  - name: http
      port: 80
      targetPort: 8080
      nodePort: 30000
  selector:
      app: nginx
      #role: hello
```

Tras hacerlo y realizar un kubectl get all

```bash
kubectl get nodes
NAME             TYPE
service/hello   NodePort
```

Tras esto podemos hacer un curl a la IP externa de nuestros nodos en el puerto que especificamos y deberiamos recibir una respuesta

```bash
kubectl get nodes - o wide
NAME             EXTERNAL-IP
pool-123          143.244.166.129

curl 143.244.166.129:30000
# Response
```

### 1.16.5 Acceso con kubectl-post-forward

Esto nos permite realizar lo mismo que kubectl-proxy, pero accediendo a
cualquier puerto del servicio expuesto en nuestro cluster

```bash
kubectl post-foward svc/<svc> <puerto_local>:<puerto_remoto> &
```

### 1.16.6 Acceso a NodePort

Si modificamos el type del archivo anterior

```bash
type: NodePort
```

Tendriamos acceso al servicio a partir de la dirección IP del cluster y el
puerto asignado.

```bash
kubectl get svc
NAME         TYPE        CLUSTER-IP       EXTERNAL-IP   PORT(S)        AGE
nginx        NodePort    <IP>             <none>        80:34325/TCP   3h
```

### 1.16.7 Ejemplo de deployment

Para este ejemplo creamos primero un deployment de una imagen

```bash
kubectl create deployment <deployment> --image <image>
```

A continuación escalamos una aplicación para crear múltiples pods con scale,
esto nos dejará con 10 pods.

```bash
kubectl scale deployment <deployment> --replicas=<numero>
```

Ahora exponemos nuestro deployment y sus pods como un servicio

```bash
kubectl expose deployment <deployment> --port=<numero>
```

Estará disponible como servicio y podremos verlo con el comando get svc
(servicios)

```bash
kubectl get svc
NAME         TYPE        CLUSTER-IP     EXTERNAL-IP   PORT(S)    AGE
httpenv      ClusterIP   10.96.204.73   <none>        8888/TCP   100s
kubernetes   ClusterIP   10.96.0.1      <none>        443/TCP    44m
```

Ahora si hacemos un curl, múltiples veces a esta dirección, podremos recuperar
las variables de entorno y apreciaremos un HOSTNAME diferente cada vez, lo que
indica que el balanceador de carga está funcionando.

```bash
curl http://10.96.204.73:8888 | jq ""
{
    "HOME": "/root",
    "HOSTNAME": "httpenv-57b8868f99-dqx52",
}
```

Podemos obtener las reglas de enrutado para el OUTPUT

```bash
sudo iptables -t nat -L OUTPUT
sudo iptables -t nat -nL KUBE-SERVICES
```

El administrador de todas las reglas es *kube-proxy*. Podemos buscar la IP de
nuestro servicio

Y eso nos dará la lista de servicios. Si, ahora obtenemos las reglas de ese
servicio

```bash
sudo iptables -t nat -nL KUBE-SVC-<ID>
```

Por defecto maneja una probabilidad azaroza (random probability), de 0 a 1, con
una diferente ponderación para cada pod.

Del output anterior buscamos el que querramos conocer y lo usamos para ver a
donde se dirige el tráfico, es decir a la **ip interna privada** de nuestro
nodo.

```bash
sudo iptables -t nat -nL KUBE-SEP-<ID>
```

## 1.17 Edpoints en kubernetes

Se refiere a las direcciones ip a las que tendriamos que consultar si
quisieramos acceder a ese servicio.

Los endpoints lo podemos ver con

```bash
kubectl describe endpoints <servicio>

Name:         httpenv
Namespace:    default
Labels:       app=httpenv
Annotations:  endpoints.kubernetes.io/last-change-trigger-time: 2022-01-26T21:10:56Z
Subsets:
Addresses:          10.5.1.12,10.5.1.13,10.5.1.14,10.5.1.15,10.5.1.16,10.5.1.17,10.5.1.18,10.5.1.19,10.5.1.20,10.5.1.21
NotReadyAddresses:  <none>
Ports:
    Name     Port  Protocol
    ----     ----  --------
    <unset>  8888  TCP

Events:  <none>
```

Es el único recurso que se nombra en plural, puesto que pertenecen a uno o más
pods.

## 1.18 Despliegue de una app en k8s

Recuerda que para que nuestra app funcione correctamente necesitamos exponer los
puertos correctos de nuestros deployments como un servicio.

```bash
kubectl expose deployment <deployment> --port <port>
```

Para exponer un puerto público en nuestra ip, usamos el comando expose con el
tipo --type=NodePort

```bash
kubectl expose deploy/<deployment> --type=NodePort --port=80
```

Para conocer el puerto público examinamos los servicios.

```bash
kubectl get svc
<servicio>  NodePort 10.96.240.45  <none>  80:30986/TCP  12m
```

Si estamos trabajando de manera local, es necesario saber que el puerto no mapea
desde el localhost o 127.0.0.1, kind hace un bind con una direccion local. Para
acceder a la dirección local, podemos hacerlo con docker, examinando las
configuraciones de red del contenedor.

```bash
docker inspect -f "{{ .NetworkSettings.Networks.kind.IPAddress }}" $(docker ps --filter="name=kind-control-plane" -q)
```

Ahora, ya con el puerto y la dirección podemos acceder a nuestra aplicación.

Durante el manejo de kubernetes los servicios tienen direcciones locales que son
innaccesibles para nuestra máquina, necesitamos acceder a ellas desde el
cluster.

Por ejemplo:

```bash
docker exec <nombre-cluster> comando <ip-interna>
docker exec kind-control-plane curl 10.244.0.30
```

## 1.19 Kubernetes dashboard

El dashboard es una interfaz web que permite manejar el cluster y obtener
información de este de una manera visual. El dashboard no está activo por
defecto. Para deployarlo corre el siguiente comando.

```bash
kubectl apply -f https://raw.githubusercontent.com/kubernetes/dashboard/v2.4.0/aio/deploy/recommended.yml
```

Este componente necesita acceder a los componentes del sistema, por lo que se
crea en otro namespace.

Al final de estos apuntes hay recursos para implementar el dashboard y
asegurarlo.

## 1.20 Daemon sets y balanceo de cargas

Los daemon sets es una forma de asegurarse de que exista **una copia de un pod
en cada nodo**.  Esto es ideal para aplicaciones de monitoreo, como logs, o estadísticas.

**Es imposible crear daemon sets desde kubectl**, su CLI, la
única manera es a través de los manifest files.

```bash
kubectl get deploy/<deployment> -o yml > <deployment>.yml
```

Al archivo exportado le cambiaremos el kind a DaemonSet

``` yml
kind: DaemonSet
```

Esto nos permitirá obtener el archivo yml. Sin embargo si intentamos aplicarlo
directamente, hay algunos atributos que estarán de más, por lo que necesitaremos
anular la validación con el flag --validate y establecerlo en falso.

```bash
kubectl apply -f <deployment>.yml --validate=False
```

Para ver los pods de nuestro daemonset podemos filtrar los pods con el flag
--selector

```bash
kubectl get pods --selector=app=<service>
NAME                   READY   STATUS    RESTARTS   AGE
rng-5d8b6c4cff-cw955   1/1     Running   1          21h
rng-bn5jj              1/1     Running   0          5m23s
```

Podremos comprobar los endpoints con

```bash
kubectl describe service <service>
Endpoints:         10.244.0.2:80,10.244.0.20:80
```

Cada service tiene los endpoints de los pods que se están ejecutando, de manera
que otros servicios puedan acceder.

## 1.21 Despliegues de nuevas versiones controlados

Al momento de realizar una actualización a una nueva versión, kubernetes se
encarga de crear los pods nuevos, manteniendo un mínimo para que nuestra app
siga funcionando.

Podemos obtener metadata de de nuestros deployments

```bash
kubectl get deploy -o json | jq ".items[] | {name:.metadata.name} + .spec.strategy.rollingUpdate"
{
"name": "hasher",
"maxSurge": "25%",
"maxUnavailable": "25%"
}
```

### 1.21.1 maxSurge

Es un campo opcional que indica el número máximo de Pods que pueden existir al
momento de que ocurra una aplicación. En el momento en el que se están
eliminando pods y creando nuevos puede haber un número mayor al número
establecido. Su número por default es 25%.

### 1.21.2 maxUnavailable

Es un campo opcional que indica el número máximo de Pods que pueden no estar
disponibles durante el proceso de actualización. Su número por default es 25%.

Para actualizar simplemente colocamos la imagen que querramos usar en nuestro
deploy.

```bash
kubectl set image deploy <deployment> <deployment> =<image>
```

Tip: Antes de cualquier cambio, verifica que todos los Pods estén en su estado
deseado, running, de lo contrario, es mejor hacer un RollOut y corregir el
problema.

Para ver los deploys

```bash
kubectl get replicasets -w
```

Si queremos editar un deploy en tiempo de ejecución

```bash
kubectl edit deploy <deployment>
```

Y si algo salió mal podemos hacer un rollout con

```bash
kubectl rollout undo deploy <deployment>
```

Podemos verificar el status de un deployment con

```bash
kubectl rollout status deployment <deployment>
```

## 1.22 Healtchecks

Healthchecks es un organismo que tiene kubernetes para evaluar el correcto
funcionamiento de nuestra aplicación.

Hay tres tipos de healtchecks:

-   readiness
-   liveness
-   startup

### 1.22.1 liveness

Kubelet usa pruebas tipo liveness para saber si un pod está vivo, cuando
reiniciar un contenedor.

### 1.22.2 readiness

Kubelet usa pruebas tipo readiness para saber si un container está listo para
recibir tráfico. Un pod se considera listo cuando todos sus contenedores se
encuentran listos. Si no es el caso, se considera un fallo y, tras superarse el
failureThreshold, se marca como "not ready" y se remueve del servicio de
balanceo de carga.

#### 1.22.2.1 Pruebas comunes

Command: Si el comando retorna 0, se considera exitoso, de otra manera se
elimina el contenedor y se reinicia.

Http request: Kubelet manda una petición HTTP, al servidor, si retorna una
respuesta se considera exitoso, de otra forma se elimina el contenedor y se
reinicia.

TCP: Kubelet intentará abrir un puerto y conectarse si no lo consigue se elimina
el contenedor y se reinicia.

### 1.22.3 startup

Kubelet usa pruebas de tipo startup para saber cuando una aplicación ha
iniciado. Puede ser usado para adaptar test de lveness en containers que
empiezan lento, evitando eliminarlos antes de que estén listos.

### 1.22.4 Agregar un healtcheck

Para agregar un deployment necesitamos editarlo.

```bash
kubectl edit deploy/<deployment>
```

Los healtchecks se pueden agregar a nivel de especificación de container.

```bash
spec:
    containers:
        livenessProbe:
            exec:
                command: ["redis-cli", "ping"]
```

Dentro de la sección liveness de la descripción de un pod podremos ver nuestras
pruebas. Así como parámetros opcionales de nuestras pruebas.

> kubectl describe pod \<name\> Liveness: exec \[redis-cli ping\] delay=0s
> timeout=1s period=10s \#success=1 \#failure=3

Para ingresar a un contenedor

```bash
kubectl exec <pod> -ti bash
```

## 1.23 Helm

Es una herramienta que funge como gestor de paquetes de Kubernetes a través de
sus manifest YML. Permite empaquetar una aplicación en un bundle. A estos
paquetes se les conoce con el nombre de chart.

Las versiones previas de Helm requerían correr el comando init. A partir de la
versión 3 ya no es necesario. También aparecía el Server Side Component de Helm
llamado tillir, esto ya no sucede.

### 1.23.1 Instalación de Helm

Lo mejor para instalar helm es ir a las [instrucciones en la página
oficial](https://helm.sh/docs/intro/quickstart/)

### 1.23.2 Prometheus

Es una herramienta de monitoreo bastante popular que está empaquetada en el
chart.

Primero necesitamos añadir la repo.

```bash
helm repo add prometheus-community https://prometheus-community.github.io/helm-charts
```

Si queremos buscar los charts relacionados

```bash
helm search repo prometheus
```

Si inspeccionamos el

```bash
helm inspect all prometheus-community/prometheus | less
```

Para instalar el chart

```bash
helm install my-prometheus prometheus-community/prometheus --set server.service.type=NodePort --set server.persistentVolume.enabled=false --version 15.0.1

helm install <target_name> <chart_name> 
```

### 1.23.3 Creación de un helm chart

Para crear un chart con helm corremos

```bash
helm create <chart>
```

Esto creará una serie de carpetas y archivos. Con una carpeta llamada templates.
Para personalizar el contenido de esta carpeta eliminamos o movemos su
contenido.

A continuación podemos exportar cada uno de nuestros servicios, en forma de
archivos yml, en el interior de la carpeta templates.

```bash
kubectl get -o yml deployment <service>
```

## 1.24 Gestionando configuraciones con Config Maps

La mayoría de las aplicaciones requieren configuraciones.

Existen formas de configuraciones diferentes:

-   Argumentos de linea de comandos
-   Variables de entorno
-   Archivos de configuración

### 1.24.1 Variables de entorno

Las variables de entorno se pueden establecer desde el manifiesto:

```yaml
spec:
    containers:
    - name : <nombre>
      image: <image>
      env:
      - name: <VARIABLE>
        value: "<valor>"
```

También es posible obtener variables desde otro lado

```yaml
      env:
      - name: <VARIABLE>
        valueFrom:
          fieldRef:
            FieldPath: stats.HostIP
```

### 1.24.2 Resources o recursos

Sirve para asignarle recursos mínimos a los contenedores, no a los pods. La
memoria se establece en Megabytes y el cpu en milicores; la milésima parte de un
core.

```yaml
    resources:
      requests:
        memory: "64Mi"
        cpu: "100m"
```

### 1.24.3 Limites

Los límites establecen los recursos máximos con los que cuenta un pod. Se
establecen a nivel kernel de Linux, si el pod  excede el límite establecido, se
terminará el proceso.

```yaml
    resources:
      limits:
        memory: "256Mi"
        cpu: "500m"
```

### 1.24.4 Config Maps

Un config map es un archivo que se hostea en kubernetes y se puede acceder desde los pods. Es ideal para establecer variables de entorno en los archivos.

```yaml
apiVersion: v1
kind: ConfigMap
metadata:
  name: <nombre_del_configmap>
data:
  <key>: <value>
```

Es útil puesto que podemos pasarles variables a los config maps

```yaml
apiVersion: v1
lind: Pod
# ...
spec:
  containers:
    env:
      valueFrom:
        configMapKeyRef:
          name: <nombre_del_configmap>
          key: <nombre_key>
```

Y en los volúmenes para crear archivos basados en una key y montarlos en la dirección del volumen. 

```yaml
spec:
  containers:
  # ...
    volumeMounts:
    - name: <nombre>
    mountPath: "/<ruta>"
    readOnly: true
volumes:
  - name: <nombre>
    configMap:
      name: <nombre_del_configmap>
        items:
        - key: <nombre_key>
          path: <path>


```

Estos archivos estárán disponibles si accedemos al pod en la dirección que usamos

```bash
kubectl get pods

kubectl exec -it <nombre_del_pod> -- bash
```

Dentro del pod podemos acceder al contenido de los archivos como si estuvieramos en cualquier terminal de GNU/Linux.

```bash
ls /<ruta>
```

Podemos crear un config map con el comando create y la opción configmap.

```bash
kubectl create configmap <name> --from-file=<archivo>
```

El comando anterior nos producirá un configmap con una configuración que podemos
consultar con get configmap

```bash
kubectl get configmap <name> -o yml

data: 
    haproxy.cfg: |+
        global
            daemon
```

Ahora solo basta con aplicarlo creando un pod que utilice ese configmap

```yaml
apiVersion: v1
kind: Pod
metadata:
name: haproxy
spec:
volumes:
- name: config
    configMap:
    name: haproxy
containers:
- name: haproxy
    image: haproxy
    volumeMounts:
    - name: config
    mountPath: /usr/local/etc/haproxy/ 
```

Resalta el uso del columen con un configMap del mismo nombre, y el container con
nombre e imagen del mismo nombre.

Ahora podemos crear el pod

```bash
kubectl apply -f <archivo>
```

Para modificar el configmap que estamos usando corremos edit.

```bash
kubectl edit configmap <name>
```

### 1.24.5 Secrets

Secret es un derivado de un configmap pero el contenido está codificado en base64. Debemos ser cuidadosos pues la base64 no representa un cifrado, sino un codificado, por lo que no es seguro guardar la información ahí.

```yaml
apiVersion: v1
kind: Secret
metadata:
  name: <nombre_ de_las_credenciales>
type: Opaque
data:
  <data_name>: <base64_str>
  <data_name>: <base64_password>
```

También se pueden crear a mano. 

```bash
kubectl create secret generic <nombre_de_las_credenciales> --from-literal=<data_name>=<valor> [--from-literal=<data_name>=<valor>]
```

Podemos hacer referencia como si fuera cualquier config map y k8s se encargará de decodificarlos de la base64.

## 1.25 Kustomization

Nos permite generar manifiestos a partir de un archivo yaml.

```yaml
apiVersion: Kustomize.config.k8s.io/v1beta1
kind: Kustomization

commonLabels:
  app: <common-label>

resources:
- <manifest_file>.yaml

secretGenerator
- name: <name>
  literals:
  - <key>=<value>
  - <key>=<value>
```

Ya ahora podemos obtener el resultado con el comando kustomize build.

```bash
kustomize build .
```


## 1.26 Volúmenes

Un volumen nos permite compartir archivos entre diferentes pods o archivos en
nuestro host que persisten incluso tras reinicios.

### 1.26.1 Ciclo de vida

-   Está vinculado al ciclo de vida de los pods
-   El volumen se crea cuando el pod se crea.
-   Un volumen se mantiene aún cuando se reinicie el contenedor
-   El volumen se destruye cuando el pod se elimina.

### 1.26.2 Diferencia entre docker y k8s

En docker comparten información en el mismo host, k8s permite compartir
información **entre contenedores del mismo pod**.

### 1.26.3 Especificar un volumen con claim templates

Podemos automatizar todo el proceso de creación de discos con componentes de
terceros, como digital ocean.

```bash
volumeClaimTemplates:
- metadata:
  name: <nombre>
  spec:
    accessModes:
    - ReadWriteOnce
    resources:
      requests:
        storage: 5Gi
    storageClassName: do-block-storage
```

## 1.27 Namespaces

Un namespace es un medio que tiene kubernetes para correr aplicaciones en un
entorno aislado. Permite tener recursos con el mismo nombre y tipo, pero en
diferente namespace.

Los namespaces son bastante útiles para desplegar múltiples copias o versiones
de una aplicación en un mismo cluster.

Sin embargo, un namespace no provee un entorno de recursos que se encuentra
completamente aislado; diferentes pods en diferentes namespaces pueden
comunicarse entre ellos.

```bash
kubectl get namespace
NAME                 STATUS   AGE
default              Active   4d19h
kube-node-lease      Active   4d19h
kube-public          Active   4d19h
kube-system          Active   4d19h
local-path-storage   Active   4d19h
```

Donde cada uno significa

-   default: Para objetos creados sin namespace específico
-   kube-node-lease:
-   kube-public: configurar claves de configuración. Creado por kube admin.
-   kube-system: donde viven los recursos administrativos del cluster

### 1.27.1 Creación de un namespace

Para crear un namespace usamos el comando create namespace.

```bash
kubectl create namespace <name>
```

Alternativamente pueden crearse con un archivo yml

``` yml
apiVersion: v1
kind: Namespace
metadata:
name: proyecto
```

Para correr un comando para un namespace especificamos el namespace con el flag
-n.

```bash
kubectl -n <name> get svc
```

**Los atributos que definen unicidad de un recurso son los siguientes:**:

-   Tipo de recurso
-   Nombre de recursos
-   Namespace

### 1.27.2 Cambio de namespace

Para configurar un contexto y no tener que especificar el flag -n en cada
servicio usamos set-context

```bash
kubectl config set-context --current --namespace=<name>
```

Si ya colocamos el contexto, ahora cuando corramos comandos básicos se
ejecutaran dentro del namespace que establecimos.

```bash
kubectl get pods
```

## 1.28 Autorización y autenticación

Cuando el API server recibe un request, intenta autorizarlo usando:

-   Certificados TLS
-   Bearer tokens
-   Basic Auth
-   Proxy de autenticación

Nota la ausencia de Oauth dentro de los mecanismos de autenticación.

Devolviendo un error 401 (unauthorized) en caso de que se rechace.

De manera predeterminada, un usuario anónimo es incapaz de realizar operaciones
en el cluster.

```bash
curl -k http://<direcion>
{
    "status": "forbidden",
    "message": "forbidden",
}
```

Para ver la configuración del kubectl del archivo kube config, que incluye los
usuarios y sus certificados TLS (encodeado en base 64)

```bash
kubectl config view --raw -o json
{    
    "users": [
    {
        "name": "kind-kind",
        "user": {
            "client-certificate-data": "LS0tLS1CRUdJTiBDRVJUSUZJQ0FURS0tLS0tCk1JSURJVENDQWdtZ0F3SUJBZ0lJYnF5dENYZ..."
        }
    }
}
```

### 1.28.1 Service account tokens

Este es un método de autenticación en kubernetes. Un service account puede
crearse, eliminarse y actualizarse, sirven para otorgar permisos a aplicaciones
y servicios

```bash
kubectl get serviceaccounts
kubectl get sa
```

esto nos mostrará el total de service accounts

```bash
NAME                               SECRETS   AGE
default                            1         4d20h
```

Por lo que ahora podemos obtener de uno en particular pasándoselo como un
parámetro extra

```bash
kubectl get sa default -o yml
apiVersion: v1
kind: ServiceAccount
metadata:
creationTimestamp: "2022-01-26T22:43:42Z"
name: default
namespace: default
resourceVersion: "403"
uid: a44307a3-d1ac-458f-9205-e1faea23e934
secrets:
- name: default-token-7djb7
```

Para

```bash
kubectl get secret default-token-00000 -o json

apiVersion: v1
data:
ca.crt: ABC==
namespace: ABC==
token: ABC
kind: Secret
metadata:
annotations:
    kubernetes.io/service-account.name: default
    kubernetes.io/service-account.uid: a44307f3-d1ac-458f-9205-e1faea23e933
creationTimestamp: "2022-01-26T22:43:42Z"
name: default-token-7djb7
namespace: default
resourceVersion: "399"
uid: 340e87b5-456b-4f8a-8e8c-56cf1b75d372
type: kubernetes.io/service-account-token
```

Y ahora podemos decodearlo en base 64

```bash
kubectl get secret default-token-00000 -o json | jq -r '.data.token' | base64 -d
```

Otra manera de obtener el token del usuario es ejecutando el siguiente comando.

```bash
kubectl -n kube-system describe secret $(kubectl -n kube-system get secret | grep admin-user | awk '{print $1}')

Data
====
ca.crt:     1066 bytes
namespace:  11 bytes
token: ABC
```

Ahora simplemente utilizamos el token en el Authorization header

```bash
"Authorization: Bearer ABC.ED..."
```

## 1.29 RBAC (Role based access control)

Un rol es un objeto con una lista de rules. **Un rolbinding asocia uno de estos
roles a un usuario.**

Pueden existir usuarios, roles y rolebindings con el mismo nombre. Es
recomendable tener un usuario por rol. Los clusters permiten definir permisos a
nivel de cluster, no únicamente de namespace.

Un pod puede estar asociado a un service-account. Con el token en
*/var/run/secrets*

```bash
kubectl create sa <rol>
```

Ahora necesitamos asociarlo

```bash
kubectl create rolebinding viewercanview --clusterrole=<rol> --serviceaccount=default:<rol>
```

Ahora podemos correr un pod para verificar

```bash
kubectl run eyepod --rm -ti --restart=Never --serviceaccount=viewer --image alpine
```

Dentro del pod, posteriormente, instalar kubectl

```bash
wget https://storage.googleapis.com/kubernetes-release/release/v0.0.0/bin/linux/amd64/kubectl
```

Darle permisos de ejecución al archivo y

```bash
chmod +x kubectl
```

E intentar crear un deployment para ver como falla, puesto que nuestro usuario
no tiene los permisos adecuados.

```bash
./kubectl create deployment testrab --image nginx
error: failed to create deployment: deployments.apps is forbidden: User "system:serviceaccount:default:viewer" cannot create resource "deployments" in API group "apps" in the namespace "default"
```

### 1.29.1 Consultar permisos

Para conocer los permisos podemos usar el comando auth, seguido de can-i con la
instrucción a consultar

```bash
kubectl auth can-i list nodes
kubectl auth can-i create pods
kubectl auth can-i get pods
kubectl auth can-i list nodes --as kube-admin
```

Esto nos devolverá una respuesta en forma de yes or no

Fuera del pod, si queremos conocer los permisos del kube-admin

```bash
kubectl get clusterrolebindings -o yml | grep -e kubernetes-admin -e system:masters

name: system: masters
```

Y para describir un rolebinding

```bash
kubectl describe clusterrolebinding cluster-admin
```

## 1.30 Recomendaciones

Establece una cultura de containers en la organización servicios

-   Escribir Dockerfiles para aplicaciones
-   Escribir compose files para describir servicios
-   Configurar builds automáticos de imágenes
-   Automatizar el CI/CD (staging) pipeline
-   Developer Experience: Acompañar a las procesas usando k8s

Elige un cluster de producción

Hay alternativas como Cloud, Managed o Self-managed, también puedes usar un
cluster grande o múltiples pequeños.

Recordar el uso de namespaces. Puedes desplegar varias versiones de tu
aplicación en diferentes namespaces.

Servicios con estados (stateful)

-   **Intenta evitarlos al principio**. No se encuentran completamente listos
    para producción al momento de la última actualización de estas notas.
-   Técnicas para exponerlos a los pods (ExternalName, ClusterIP, Ambassador)
-   Storage provider, Persistent volumens, Stateful set

Gestión del tráfico Http

-   Ingress controllers (virtual host routing)

Configuración de la aplicación

-   Secretos y config maps

Stacks deployments

-   GitOps (infraestructure as code)
-   Heml, Spinnaker o Brigade

## 1.31 GitOps

GitOps es una práctica que gestiona toda la configuración de nuestra
infraestructura y las aplicaciones en producción a través de Git, es decir que
Git se considerará la fuente de verdad. Por lo que que todo proceso de
infraestructura conlleva code reviews, comentarios en los archivos de
configuración y enlaces a issues y PR. **Gitops es diferente de CI.**

-   Infraestructura como código
-   Mecanismo de convergencia
-   Uso de CI como fuente de verdad
-   Pull vs Push
-   Developers y operaciones(git)
-   Actualizaciones atómicas

GitOps se volvió popular en el mundo de DevOps por el impacto que genera.

-   Despliegue de features nuevos rápidos
-   Menos tiempo en arreglar bugs
-   Confidencialidad y control
-   Muchos más deploys por día
-   80% menos tiempo en corregir errores en producción

En Gitops el se cambia el flujo de trabajo que incorpora un operador. El
operador tomará la configuración del repositorio mediante un pull y la aplicará.

![image](Notes/Kubernetes/img/gitops.jpg)

### 1.31.1 Flux

El [sync operator flux](https://fluxcd.io/docs/) permite crear un flujo de
trabajo. Obtenemos el código con *git clone* Y modificaremos el archivo
*flux/deploy/flux-deployment.yml* para decirle que repositorio y rama de
monitorear.

```bash
args:
# ...
--git-url=git@github.com:usuario/proyecto
--git-branch=prod
--git-poll-interval=20s
```

Y luego aplicar los cambios con kubectl.

```bash
kubectl apply -f deploy/
```

El recurso aparecerá en los pods

```bash
kubectl get pods
```

Ahora hay que tomar la clave SSH que aparece tras correr

```bash
kubectl get logs
identity.pub="<clave>"
```

A continuación llevamos esa clave a las credenciales del repositorio de github
en la sección deploy keys. Una vez fijada flux escuchará los cambios en el
repositorio y hará deploy la aplicación en la plataforma.

Ahora con cada push que hagamos se detectará el cambio y se volverá a
implementar las especificaciones del repositorio de github.

## 1.32 Conexión con digital ocean

En digital ocean podemos crear los clusters de kubernetes y descargar el archivo
de configuración. 

Ahora, podemos exportar una variable de entorno

```bash
KUBECONFIG=<ruta-del-archivo-de-configuración>
```

Y luego ejecutar 

```bash
kubectl get nodes
```

## 1.33 Recursos útiles

-   [Blog de José Domingo sobre pods, deployments, replicaSet y otros
    recursos](https://www.josedomingo.org/pledin/blog/)
-   [Seguridad del dashboard de k8skubectl apply -f
    kubernetes-dashboard.yml](http://link)
-   [Implementar
    kubernetes-dashboard](https://kubernetes.io/docs/tasks/access-application-cluster/web-ui-dashboard/)
-   [Configurar tests
    healtcheckhttps://kubernetes.io/docs/tasks/configure-pod-container/configure-liveness-readiness-startup-probes/](http://link)
-   <span class="title-ref">Repositorio de Flux
    https://github.com/weaveworks/flux</span>
-   [Juniper](https://www.juniper.net/documentation/en_US/day-one-books/topics/topic-map/kubernetes-basics.html)
