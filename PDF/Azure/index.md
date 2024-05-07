# Azure


## 1.1 ¿Qué es Azure?

Es una plataforma informática en la nube operada por Microsoft para la gestión de aplicaciones a través de centros de datos distribuidos en todo el mundo.

Proveedor de prácticamente cualquier servicio, con más de 100 servicios en la
nube y datacenters al rededor del mundo.

## 1.2 Datacenter

* Una facilidad física
* Con un grupo de servidores conectados en red
* Con su propia alimentación de energia, enfriado e infraestructura de redes

Se mantiene constantemente en actualización hacía nuevos servicios,
descontinuando los obsoletos.

Sus servicios se pueden dividr en 10:

* Computación
* Networking
* Almacenamiento
* Móvil
* Base de datos
* Web
* IOT (Internet of things)
* Macrodatos
* AI
* DevOps

Su funcionamiento se basa en la virtualizanción de computadoras y sus
componentes principales en servidores que son orquestados dentro de un data
center, recibiendo instrucciones del usuario.

## 1.3 Modelos de servicio

Azure ofrece los siguientes tipos de servicio:

* PaaS: Platform as a service
* IaaS: Infrastructure as a service
* SaaS: Software as a service

Las características de cada uno se resumen en la siguiente tabla. 


|            | On premise | IaaS | PaaS | SaaS |
| ---------- | ---------- | ---- | ---- | ---- |
| Data       |            |      |      | ✓    |
| App        |            |      |      | ✓    |
| Runtime    |            |      | ✓    | ✓    |
| OS         |            |      | ✓    | ✓    |
| Hypervisor |            | ✓    | ✓    | ✓    |
| Compute    |            | ✓    | ✓    | ✓    |
| Network    |            | ✓    | ✓    | ✓    |
| Storage    |            | ✓    | ✓    | ✓    |

Cada servicio se encarga de abstraer cierta capa de la aplicación total. On
premise se refiere a la propiedad total, donde el cliente se encarga de todo.

## 1.4 Tipos de Nubes

### 1.4.1 Nube pública

Los servicios se ofrecen a través de la red Internet pública y están disponibles
para cualquiera que quiera comprarlos. Los recursos de nube, como los servidores
y el almacenamiento, son propiedad de un proveedor de servicios en la nube de
terceros, que los explota y los distribuye a través de Internet.

### 1.4.2 Nube privada

Una nube privada consta de recursos informáticos que determinados usuarios de
una empresa u organización usan en exclusiva. Una nube privada puede estar
ubicada físicamente en el centro de datos local (entorno local) de la
organización o estar hospedada por un proveedor de servicios de terceros.

### 1.4.3 Nube híbrida

Una nube híbrida es un entorno informático que combina una nube pública y una
nube privada, lo que permite compartir datos y aplicaciones entre ellas.

## 1.5 Microsoft learn

Azure cuenta una plataforma educativa donde puedes capacitarte en sus mismos
servicios.

## 1.6 Arquitectura de Azure

### 1.6.1 Azure funciona con virtualización

Recibidas y organizadas por medio de un hypervisor.

### 1.6.2 Estructura del Data center

Internamente Azure recibe instrucciones de su portal y el CLI, los cuales
interaccionan con una API, el API con un orquestador que los lleva a un fabric
controller para generar una respuesta

![image](Notes/Azure/img/EstructuraDataCenterAzure.jpg)

Externamente Azure cuenta con:

* Portal
* Marketplace

El marketplace de Azure está disponible via Portal o usando su sitio web
*azuremarketplace.microsoft.com*

### 1.6.3 Cuentas de Azure

Una cuenta de Azure puede tener múltiples subscripciones, una suscripcion puede
tener múltiples grupos de recursos y un grupo de recursos puede tener múltiples
recursos.

Una suscripción de Azure es una unidad lógica de servicios de Azure que está
vinculada a una cuenta de Azure. Una suscripción de Azure es un objeto que
representa un contenedor en el que se pueden colocar recursos. Las suscripciones
están vinculadas a los inquilinos, por lo que un inquilino puede tener muchas
suscripciones, pero no viceversa.

* Recursos: Instancias de los servicios disponibles, tales como máquinas
    virtuales, disco duro, FaaS, base de datos. **Los recursos solo pueden
    pertenecer a un grupo de recursos**, pero pueden comunicarse con los otros.
* Grupo de recurso: Contenedor lógico donde se implementan los recursos de
    Azure: Aplicaciones web. Los grupos de recursos no pueden anidarse.
* Suscripción: Agrupación de cuentas de usuario y recursos creados por otras
    cuentas, con límites o cuotas definidas. Heredan las condiciones de su grupo
    de suscripción.
* Grupo de administración: Administran el acceso, la ordenación jerarquica de
    los recursos en colecciones, las directivas y cumplimientos de las
    suscripciones. 

![image](Notes/Azure/img/cuentasAzure.jpg)

### 1.6.4 Suscripciones grupos de administración

Se necesita de una suscripción de Azure para utilizar servicios, existen
cuentas:

* Desarrollador
* Prueba
* Suscripción
* Estudiante

#### 1.6.4.1 Limites de suscripción

* Facturación mensual
* Control de acceso a recursos

#### 1.6.4.2 Situaciones donde se necesitan otras suscripciones

##### 1.6.4.2.1 Entornos

Ideal para separar entornos de trabajo.

##### 1.6.4.2.2 Estructura organizacional

Para apegarnos a la estructura de la empresa.

##### 1.6.4.2.3 Facturación

Para manejar los costos de producción, desarrollo y pruebas por separado.

##### 1.6.4.2.4 Límites por suscripción

Para evitar las limitaciones de hardware que pueden ocurrir como parte de las
limitaciones por suscripción.

### 1.6.5 Grupos de administración

Podemos limitar los diferentes accesos para cada grupo o rol diferente de
suscripciones. Las suscripciones se organizan en contenedores llamados grupos de
administración y las condiciones de gobernanza se aplican a los grupos de
administración.

#### 1.6.5.1 Limitaciones de los grupos de administración

* Se admiten 10 000 grupos de administración en un único directorio.
* Un árbol de grupo de administración puede admitir hasta seis niveles de
    profundidad. Este límite no incluye el nivel raíz ni el nivel de
    suscripción.
* Cada grupo de administración y suscripción solo puede admitir un elemento
    primario.
* Cada grupo de administración puede tener muchos elementos secundarios.
* Todas las suscripciones y grupos de administración están dentro de una única
    jerarquía en cada directorio.

### 1.6.6 Recursos y grupos de recursos

#### 1.6.6.1 Características de los recursos

Un recurso es un elemento gestionable en Azure.

* Todos los **recursos deben pertenecer a un único grupo**.
* No puede haber recursos no asignados sin un grupo.
* No se pueden anidar.
* Son móviles entre grupos.

### 1.6.7 Azure resource manager

Nos permite automatizar la creación de recursos comunicándonos a través de Azure
Portal, Azure PowerShell, Azure CLI o un cliente REST por medio de plantillas.

Azure Resource Manager, permite administrar los recursos por grupos, RBAC (Role
Based Access Control), etiquetas y facturación.

Puedes agrupar los recursos por tags o políticas para replicar los tags en un
mismo tipo de recursos.

### 1.6.8 Características de los grupos de recursos

Un grupo de recursos es un contenedor de recursos.

* Si se elimina un grupo de recursos se borran todos los recursos del grupo.
* Utiliza permiso de control basado en roles (RBAC)
* Se organizan generalmente por:
    -   tipo
    -   tiempo de vida
    -   departamento
    -   facturación
    -   ubicación
    -   una combinación de los anteriores

### 1.6.9 Regiones

Un area geográfica en el planeta con uno o más datacenters conectados con una
latencia menor a 2ms.

* Algunos servicios solo están disponibles en ciertas regiones
* Algunos servicios son globales
* Hay más de 50 regiones
* Existen regiones especiales de gobierno (US DoD Central, US Gov Virginia, Gov
  Iowa)
* Existen regiones en asociacion (Este de China y Norte de China)

#### 1.6.9.1 Zonas de disponibilidad

Zonas donde existen al menos tres datacenters en una sola región, equipados con
sistemas de energía de emergencia, refrigeración y redes independientes, lo que
permite redundancia de servicios y datos ante errores.

No todas las regiones son compatibles con zonas de disponibilidad, usualmente
implica un costo extra.

Zonas de Azure

* Zona 1: Centro de Australia, Oeste de EE. UU., Este de EE. UU., Oeste de
    Canadá, Oeste de Europa, Centro de Francia y otras
* Zona 2: Este de Australia, Japón Occidental, Centro de la India, Sur de
    Corea del Sur y otras
* Zona 3: Sur de Brasil, Norte de Sudáfrica, Oeste de Sudáfrica, Centro de
    Emiratos Árabes Unidos, Norte de Emiratos Árabes Unidos
* Zona 1 de Alemania: Centro de Alemania y Nordeste de Alemania

#### 1.6.9.2 Pares de regiones

Azure siempre cuenta con al menos dos regiones con un máximo de 500 km de
distancia entre ambas, para la replicación de recursos en caso de
interrupciones. Se llevan acabo actualizaciones planeadas entre los pares. Los
pares son estáticos y no pueden ser elegidos.

## 1.7 Bases de datos

Azure ofrece bases de datos SQL y NoSQL, con soluciones para cada una.

### 1.7.1 Tipos de datos

* Estructurados. La información puede representarse usando tablas con un esquema
  estricto. Cada fila debe seguir un esquema, algunas tablas se relacionan entre
  si.
* Semiestructurado. La información puede ser representada con tablas, pero sin
  un esquema estricto, las filas deben tener un identificador único
* No estructurados. Cualquier archivo en cualquier formato. Por ejemplo:
  binarios, aplicaciones, imágenes, video, etc.

### 1.7.2 Azure Cosmos DB

Servicio de base de datos NoSQL, elástico e independiente al rendimiento y
almacenamiento de las regiones. Es una base de datos globalmente distribuida.

Almacena datos en formato de secuencia de registro de átomos (ARS),
posteriormente se abstraen y se proyectan como API.

Diseñado especialmente para:
* Ser altamente responsivo, con tiempos de latencia < 10 ms
* Para aplicaciones multiregión.

Compatibilidad con Gremlin, MongoDB, Cassandra.

### 1.7.3 Azure SQL Database

Basado en Microsoft SQL Server como un PaaS, donde se encargan de las funciones
administrativas: copias de seguridad y otras operaciones de mantenimiento
comunes.

* Alto rendimiento
* Estabilidad y confiabilidad
* Segura
* Administrada

### 1.7.4 Azure SQL Managed Instance

Bastante similar con Azure SQL Database, pero con las siguientes diferencias.

* Comando para backup
* Common language runtime (CLR).
* Transacciones entre base de datos
* NO cuenta con un escalado automático

Cuenta con un servicio de migración a la nube llamado Azure Database Migration
Service.

### 1.7.5 Azure Database for MySQL

También hay servicios compatible con MySQL community edition

### 1.7.6 Azure Database for PostgreSQL

Para PostgreSQL. Existen dos modalidades:

* Servidor único, con escalamiento vertical
* Hiperscala (Citus) para cargas de 100 GB o más, con escalamiento horizontal

### 1.7.7 Azure Database for Maria

Base de datos relacional MariaDB totalmente administrada y escalable con alta
disponibilidad y seguridad.

## 1.8 Análisis big data

El Big Data se define por tres características, llamadas las 3 V's

* Velocidad de el procesado/transferencia
* Volumen de la data
* Variedad de la data (complejidad)

### 1.8.1 Azure synapse Analytics

Análisis de datos de todo tipo: **sin procesar, refinados o seleccionados.**
Compatible con SQL y Apache Spark.

### 1.8.2 Azure HDInsight

Herramienta multi propósito para big data y análisis de datos con muchas
tecnologías open source disponibles: Spark, Hadoop, Kafka, Hbase, Hive, Storm.
Admite ELS. PaaS

### 1.8.3 Azure databricks

Descubre información de volúmenes masivos de datos. Compatible con Apache Spark
Funciona con múltiples lenguaje de programación. PaaS

### 1.8.4 Azure Data Lake Analytics

Para realizar análisis bajo demanda. Enfocado a la extracción, la transformación
y la carga de datos (ETL) en lugar de la configuración de hardware.

Modelo *pay as you go*.

## 1.9 Computo en la nube

### 1.9.1 Azure virtual machines

Son un ejemplo de IaaS:

Ideal para: 
* Pruebas y desarrollo 
* Ejecutar aplicaciones en la nube
* Extender recursos 
* Recuperación ante desastres (Con costo extra)

Servicio de migración para máquinas locales llamado *lift and shift*

### 1.9.2 Azure batch

Conjunto de VM, con configuración en minutos de máquinas auténticas, por lotes
paralelos, a gran escala de informática de alto rendimiento (HPC) y con
escalabilidad automática.

### 1.9.3 Conjuntos o sets de escalado de máquinas virtuales

Los conjuntos de escalado le permiten administrar, configurar y actualizar de
forma centralizada un gran número de máquinas virtuales, idénticas, en cuestión
de minutos para proporcionar aplicaciones altamente disponibles.

A medida que la demanda aumente, se pueden agregar más instancias de máquina
virtual. A medida que la demanda disminuya, se pueden quitar más instancias de
máquina virtual. El proceso puede ser manual, automatizado o una combinación de
ambos.

### 1.9.4 Azure container instances (ACI)

La manera más sencilla y rápida de correr un contenedor en Azure. Al ser
contenedores en lugar de máquinas virtuales cargan mucho más rápido, pero con la
desventaja ed que comparten un entorno de ejecución. Los contenedores, como
Docker, son un ejemplo PaaS:

* Sencillo
* Sin servicios adicionales
* Permite carga de contenedores

Los contenedores son una excelente opción si quiere ejecutar varias instancias
de una aplicación en un solo equipo host.

Están diseñados para correr aplicaciones web pequeñas y sencillas, background
jobs y scripts programados.

### 1.9.5 Azure Kubernetes Service

Orquestación (automatización y administración) de contenedores en volumen. Otro
ejemplo de PaaS

Utilidad de contenedores: 
* Dividir las partes de una aplicación. 
* Hacer cambios sin afectar otras partes. 
* Hacer pruebas dentro de entornos aislados

### 1.9.6 Azure App Service

PaaS para crear y alojar aplicaciones conectadas a la web. Compatible con
Windows, Linux e implementaciones automatizadas.

Tipos de servicios: 
* Aplicaciones web. 
* Aplicaciones de API. 
* Operaciones en segundo plano. 
* Aplicaciones móviles.

Se paga por los recursos de Azure Compute que la aplicación usa mientras procesa
las solicitudes según el plan de App Service que elija

## 1.10 Azure serverless

La informática sin servidor es una opción excelente para bajas cargas de trabajo
que responden a eventos entrantes: 
* Peticiones REST. 
* Temporizador. 
* Mensajes de otros servicios. 
* Colas

#### 1.10.1.1 Azure Functions

Con desarrollo orientado al código (imperativo). Ejecutable localmente y en la
nube asignando recursos de manera automática.

Tienen ciertas características: 
* Escalan automáticamente de acuerdo a la demanda. 
* Sin estado. 
* Con estado, perduran en el tiempo (Durable Functions), encadenables.

Solo se paga por el tiempo de CPU usado mientras se ejecuta la función.

#### 1.10.1.2 Azure Logic Apps

Con flujo de desarrollo Conjuntos de escalado de máquinas virtualesorientado al
diseño (declarativo). solo ejecutable en la nube.

* Flujos de trabajo basados en eventos.
* Cuenta con una GUI que permite crear apps a través de conectores.
* Se puede crear sin GUI usando JSON.
* Cuenta con más de 200 conectores y bloques en la opción sin código, se cobra
    por conector.

Los flujos de trabajo se conservan como un archivo JSON con un esquema de flujo
de trabajo conocido.

#### 1.10.1.3 Comparación entre Functions y Logic Apps

Functions y Logic Apps pueden crear orquestaciones complejas. Una orquestación
es una colección de funciones o pasos que se ejecutan para realizar una tarea
compleja.

* Con Functions, se escribe código, es imperativo, gralmente sin estado,
    ejecutada localmente o en la nube
* Con Logic Apps, se usa una GUI para definir relaciones, es declarativo, con
    estado, ejecutada en la nube.

#### 1.10.1.4 Azure Service Fabric

Plataforma de sistemas distribuidos que se ejecuta en Azure o en el entorno
local.

#### 1.10.1.5 Azure Virtual Desktop

Es un servicio de virtualización de escritorios y aplicaciones que se ejecuta en
la nube. Permite aislar la máquina del trabajador de la información del negocio.

* Permite tener Windows en cualquier lugar
* Compatible con los sistemas operativos mas populares o incluso navegadores
web. 
* Ventajas: 
  > - Compatibilidad total con windows. 
  > - Mejor experiencia de uso. 
  > - Seguridad. 
  > - Rendimiento. 
  > - Inicio de sesión múltiple. 
  > - Licencias propias.

Proporciona administración centralizada de la seguridad de los escritorios con
Azure Active Directory, autenticación multifactor y protección de datos mediante
controles de acceso basados en roles (RBAC)

## 1.11 Almacenamiento

Los datos que se almacenan en una cuenta de almacenamiento de Azure tienen al
menos 3 copias automáticamente pero no tienen un backup automático a otro centro
de datos.

### 1.11.1 Tipos de datos aceptados por Azure

* Estructurados
* No estructurados
* Semi estructurados

### 1.11.2 Tipos de base de datos en Azure

Azure acepta bases de datos de tipo SQL y NoSQl.

### 1.11.3 Azure Blob Storage

Blob Storage (Binary large object)

Servicio de almacenamiento no estructurado. Sin restricciones y con soporte para
miles de cargas simultáneas.

#### 1.11.3.1 Usos de blob

* Visualizar imágenes o videos en el navegador.
* Acceso distribuido.
* Streaming de audio y video.
* Backup para copia de seguridad y recuperación ante de sastres
* Análisis de datos local o en la nube.
* Almacenamiento de VMs mayor a 8 TB.

#### 1.11.3.2 Niveles de acceso disponibles

* Hot, Frecuente: Imágenes o descargas de un sitio web.
* Cold, Esporádico (Al menos 30 días): Reportes mensuales, facturas, etc.
* Archivo (Al menos 180 días): Copias de seguridad. Datos sin conexión. El
    acceso y la rehidratación de los datos son los más costosos.

Donde a menor frecuencia de acceso, mayor tiempo de acceso.

Es posible crear una URI con un token de Firma de acceso compartido (SAS) para
permitir el acceso a un recurso privado solo durante un período corto de tiempo.

### 1.11.4 Azure File storage

El equivalente de a Onedrive. Azure nos provee de la posibilidad de utilizar
discos magnéticos, de estado sólido o algunos de calidad premium, que podemos
utilizar para cuestiones específicas, para alamcenamiento de nuestros datos.

Recursos compartidos administrados en la nube bajo protocolos SMB y NFS. Pueden
estar en local o en la nube. Similar a OneDrive

Ideal para: 
* Cuando muchas aplicaciones usan recursos compartidos. * Acceder a recursos
desde varias VMs.

### 1.11.5 Azure Disk Storage

Discos para Azure Virtual Machines, de manera que las aplicaciones puedan
usarlos. De diferentes tamaños y velocidades (HDD, SSD y SSD Premium)

### 1.11.6 Azure Queue Storage

Almacén de datos para la puesta en cola y la entrega confiable de mensajes entre
aplicaciones.

### 1.11.7 Azure Table storage

Table Storage es un servicio que almacena datos estructurados no relacionales
(también conocidos como datos NoSQL estructurados o semiestructurados) en la
nube, lo que proporciona un almacén de claves y atributos con un diseño sin
esquema.

## 1.12 Web

### 1.12.1 Azure App Service

Creación rápida de aplicaciones en la nube eficaces basadas en web.

### 1.12.2 Azure Notification Hubs

Envíe notificaciones push a cualquier plataforma desde cualquier back-end.

### 1.12.3 Azure API Management

Publique API para desarrolladores, asociados y empleados de forma segura y a
escala.

### 1.12.4 Azure Cognitive Search

Esta búsqueda completamente administrada se implementa como servicio.

### 1.12.5 Característica Web Apps de Azure App Service

Cree e implemente rápidamente aplicaciones web críticas a escala.

### 1.12.6 Servicio Azure SignalR

Agregue funcionalidades web en tiempo real con facilidad.

## 1.13 Network

### 1.13.1 Azure Virtual Network

Permite a los recursos de Azure comunicarse entre sí, con usuarios de internet y
equipos cliente en local.

* Funcionalidades:

    > -   Aislamiento y segmentación
    >
    > -   Comunicación con internet
    >
    > -   Comunicación entre recursos
    >
    >     > -   Redes virtuales.
    >     > -   Puntos de conexión de servicio.
    >
    > -   Comunicación entre recursos locales
    >
    >     > -   Redes virtuales de punto a sitio. Desde un equipo ajeno, con una
    >     >     conexión VPN cifrada
    >     > -   Redes privadas virtuales (VPN) de sitio a sitio. La conexión
    >     >     entre el VPN Gateway de microsoft y el propio se cifra y
    >     >     funciona a través de Internet.
    >     > -   Azure ExpressRoute. Una conectividad privada dedicada a Azure
    >     >     que no viaja por Internet ideal, para altas cargas.
    >
    > -   Enrutamiento del tráfico de red
    >
    >     > -   Tablas de ruta. Personalizadas para enrutar paquetes en subredes
    >     > -   Protocolo de puerta de enlace de borde (BGP). Propaga las rutas
    >     >     BGP locales a las redes virtuales de Azure.
    >
    > -   Filtrado del tráfico de red
    >
    >     > -   Grupos de seguridad de red. Reglas de seguridad de entrada y
    >     >     salida con base en IP, protocolo y puerto.
    >     > -   Aplicaciones virtuales de red. Un máquina virtual especializada
    >     >     con una función especializada (Firewall, optimizar WAN, etc.)

#### 1.13.1.1 Conexión de redes virtuales

Puede vincular redes virtuales entre sí mediante el emparejamiento de red
virtual, lo que les permite comunicarse entre si.

#### 1.13.1.2 Configuración

Al configurar una red virtual, se define el espacio de direcciones internas con
el formato de Enrutamiento de interdominios sin clases (CIDR).

* 10.0.0.0/\<8 \| 16 \| 24\>

Y podemos elegir opcionesde seguridad

* El servicio Azure Bastion proporciona conectividad RDP y SSH segura e
    ininterrumpida a las máquinas virtuales directamente en Azure Portal a
    través de SSL.
* Firewall
* DDoS Protection estándar

Entre las configuraciones adicionales están:

* Grupo de seguridad de red
* Table de rutas
* Delegación de subred

### 1.13.2 Azure Load Balancer

Equilibra las conexiones entrantes y salientes a aplicaciones o puntos de
conexión de servicio.

### 1.13.3 Azure Application Gateway

Optimiza la entrega de granjas de servidores de aplicaciones y, al mismo tiempo,
aumenta la seguridad de las aplicaciones.

### 1.13.4 Azure Content Delivery Network

Entrega contenido de gran ancho de banda a los clientes globalmente.

### 1.13.5 Azure DDoS Protection

Protege las aplicaciones hospedadas en Azure frente a ataques por denegación de
servicio distribuido (DDoS). 

### 1.13.6 Azure VPN Gateway

Conecta redes locales a Azure vía VPN de sitio a sitio/punto, a sitio, a través
de protocolos IPsec e IKE.

Necesitan los recursos 
* Red virtual 
* Hateway subnet 
* Dirección IP pública 
* Puerta de enlace de red local 
* Puerta de enlace de red virtual 
* Conexión

Y los recursos locales

* Un dispositivo VPN compatible con VPN Gateway.
* Una dirección IPv4 de acceso público.

### 1.13.7 Azure ExpressRoute

Genera conexiones privadas entre Azure y la infraestructura, de forma confiable
y rápida, sin utilizar internet público. La comunicación **es privada pero no
está cifrada**.

El número máximo de circuitos de Azure ExpressRoute por cada suscripción es de
10

#### 1.13.7.1 Ventajas

* Redundancia integrada
* Conectividad con los servicios en la nube de microsoft
* Conectividad local con Gloal Reach de Express Route
* Enrutamiento dinámico

#### 1.13.7.2 Modelos de conectividad

Para conectar la red local con la nube de microsoft contamos con las siguientes
opciones:

* Ubicación de CloudExchange
* Conexión Ethernet de punto a punto
* Conexión universal
* Directamente desde sitios de ExpressRoute

### 1.13.8 Azure Network Watcher

Supervisa y diagnostica problemas de red mediante el análisis basado en el
escenario.

### 1.13.9 Azure Network Security Group (NSG)

Puede usar el grupo de seguridad de red de Azure para filtrar el tráfico de red
hacia y desde los recursos de Azure de una red virtual de Azure. Un grupo de
seguridad de red contiene reglas de seguridad que permiten o deniegan el tráfico
de red entrante o el tráfico de red saliente de varios tipos de recursos de
Azure. Para cada regla, puede especificar un origen y destino, un puerto y un
protocolo.

Por ejemplo: Su empresa desea desplegar varios servidores web y servidores de
bases de datos en Azure y se busca limitar los tipos de conexiones desde los
servidores web hacia las bases de datos.

### 1.13.10 Azure Firewall

Implementa un firewall de alta seguridad y alta disponibilidad con escalabilidad
ilimitada.

### 1.13.11 Azure Virtual WAN

Crea una red de área extensa (WAN) unificada que conecta sitios locales y
remotos.

## 1.14 Inteligencia artificial

### 1.14.1 Introducción

* Deep Learning: usa redes neuronales para descubrir, aprender y crecer.
* Machine learning: utiliza datos existentes para entrenar modelos y
    pronosticar.

Tiene servicios de:

* Visión
* Voz
* Asignación de conocimiento
* Bing search
* Procesamiento de lenguaje natural

### 1.14.2 Azure Machine Learning

Se usa cuando se necesita analizar datos para predecir resultados futuros a
partir de datos históricos privados

* PaaS para realizar predicciones conectándose a datos para entrenar y probar
    modelos.
* Ofrece control completo del diseño y entrenamiento de algoritmos.
* Requiere proporcionar los datos

### 1.14.3 Azure Cognitive Services

Modelos de ML creados que permiten a una aplicación ver, oír, hablar, entender y
pensCognitive Sear. No se necesitan conocimientos en ML o DS.

Categorías: 
* Lengua 
* Voz 
* Visión 
* Decisión

No es necesario tener conocimientos de aprendizaje automático ni ciencia de
datos para usar estos servicio. Se accede a ellos por medio de una API.

#### 1.14.3.1 Azure Cognitive Services personalizer

Nos permie predecir el comportamiento del usuario o proporcionar a los usuarios
recomendaciones personalizadas en la aplicación

### 1.14.4 Azure Bot Service

Funciona internamente con Azure Cognitive Services. Ideal para asistentes
virtuales.

* Bot Framework.
* Creación de agentes virtuales que pueden usar otros servicios.

Su caso de uso es para los asistentes virtuales

## 1.15 Azure DevOps Services

Cuenta con un sistema de permisos mucho más granular que el de Github, además es
capaz de generar informes.

1.  Azure Repos

    > -   Repositorios de código fuente centralizado para publicar código y
    >     colaborar. Similares a Github.

2.  Azure Boards

    > -   Tableros para gestión de proyectos bajo un modelo de Kanban, informes,
    >     incidencias, epics, etc. En paralelo con el resto de herramientas de
    >     Azure.

3.  Azure Pipelines

    > -   Herramienta de automatizar el deployment del código, similares a los
    >     pipelines de Jenkins:
    >
    >     > -   Continuos Integration
    >     > -   Continuos Delivery

4.  Azure Artifacts

    > -   Repositorio para alojar artefactos que se incluyen en el flujo de
    >     pruebas o implementación. Asegurar la calidad del código.

5.  Azure Test Plans

    > -   Herramientas de pruebas automatizadas para garantizar la calidad antes
    >     de lanzar software.

### 1.15.1 GitHub & GitHub Actions

* GitHub Actions

    > -   Automatización de flujos de trabajo basado en triggers, especialmente
    >     para CI/CD.

### 1.15.2 Azure DevTest Labs

Medio automatizado para administrar proceso de compilación, configuración y
anulación de VMs y otros recursos.

Caso de uso: automatizar la creación y la administración de un entorno de
laboratorio de pruebas.

Por ejemplo: administrar las máquinas virtuales que los desarrolladores y los
evaluadores necesitan para asegurarse de que una nueva aplicación funciona en
diferentes sistemas operativos.

Otro ejemplo: Un equipo de desarrolladores de su empresa quiere desplegar y
luego eliminar 50 máquinas virtuales cada semana. 25 de ellas ejecutan Windows
Server y 25 ejecutan Ubuntu Linux.

## 1.16 Monitoreo y supervisión de Azure

* Azure Advisor: nos brinda recomendaciones y evalúa recursos a través del
    portal de Azure o su API. Ideal para el recorte de costos. Disponible en el
    portal y la API.
* Azure Monitor: recopila datos para tomar decisiones basados en métricas del
    **entorno local o la nube**. Las fuentes son diversas como ser SO,
    aplicaciones, suscripciones. Sirve para monitorear las máquinas virtuales o
    instancias del contenedor y su escalamiento automático. Además puede enviar
    alertas a los grupos de seguridad de Azure Active Directory.
* Azure Service Health: brinda una vista personalizada del estado de los
    servicios, regiones y recursos de Azure. Ideal monitorizar los problemas de
    menor y mayor importancia de Azure. Supervisa problemas de servicio,
    mantenimiento planeado, avisos de estado por parte de Azure. **Ofrece un
    análisis oficial de la causa principal** (RCA) de la interrupción en los
    incidentes de Azure.

## 1.17 Administración de entorno

Al trabajar en la nube es necesario tener un buen control y administración del
trabajo. Azure nos brinda de herramientas para la administración de trabajo, las
cuales pueden ser visuales o basadas en código.

### 1.17.1 Herramientas visuales

#### 1.17.1.1 Azure Portal

Es una consola unificada basada en web que proporciona una alternativa a las
herramientas de línea de comandos. Con Azure Portal, puede administrar su
suscripción a Azure mediante una interfaz gráfica de usuario.

![image](Notes/Azure/img/AzurePortal.png)

Además permite generear informes personalizados.

#### 1.17.1.2 Azure mobile app

Permite acceder a los recursos de Azure desde dispositivos android e iOS

* Compatible con iOS y Android
* Supervisa estado de Azure
* Alertas, diagnósticos y correcciones
* Ejecutar comandos de CLI o Azure PowerShell

### 1.17.2 Herramientas basadas en código

Las tres primeras son ideales para escenarios de un solo uso.

* Azure PowerShell. Permite ejecutar coomandos llamados cmdlets o command
    tests, que llaman a la API. Por su sintaxis, es ideal para usuarios de
    windows.
* Azure CLI. Permite ejecución de comandos bash que llaman a la API REST de
    Azure. Por su sintaxis, es ideal para usuarios de Linux.
* Cloud Shell. Es Azure CLI pero desde el navegador.
* Azure Resources Manager

#### 1.17.2.1 Azure resources manager templates (ARM)

Es un administrador de plantillas de recursos con un formato declarativo en
JSON. Pueden ejecutar scripts de PowerShell y Bash antes o después de la
configuración del recurso. 

Azure resource manager templates es la mejor forma para provisionar recursos,
funcionan con paralelismo y son ideales para versionarse en repositorios de
código.

* Formato JSON
* Capaz de crear múltiples recursos en paralelo.
* Se comprueban antes de ejecutarse
* Se define el estado y configuración de cada recurso, la plantilla hace el
    resto.

Caso de uso: Su empresa tiene varias unidades de negocio. Cada una de ellas
necesita 10 recursos de Azure para sus operaciones diarias. Todas ellas
necesitan el mismo tipo de recurso de Azure y se necesita automatizar la
creación de estas.

## 1.18 Azure serverless

### 1.18.1 Azure functions

Alojamiento de métodos o funciones que se ejecutan en respuesta a eventos:

* Solicitudes HTTP
* Temporizadores
* Mensajes
* Acciones

Ventajas:

* Escalado automático.
* Pago por función ejecutada.
* Con o sin estado.
* Tareas de orquestación (durable functions).

Lenguajes compatibles

* C#
* JavaScript
* Python
* TypeScript
* Java
* Shell

Funciona de manera imperativa.

### 1.18.2 Azure Logic Apps

> Logic Apps es excelente a la hora de orquestar una gran variedad de servicios
> distintos mediante sus API para pasar y procesar los datos a través de los
> muchos pasos de un flujo de trabajo.

* No-code/Low-code.
* Ideal par automatizar y organizar.
* Integra aplicaciones, datos y sistemas.

Funciona de manera declarativa.

### 1.18.3 Diferencias

Ambos trabajan con eventos, sin servidores. La diferencia es que functions
trabaja en el numero de ejecuciones y el tiempo, mientras que logic apps cobra
según el número y tipo de conectores lógicos.

## 1.19 Azure Internet of Things

Debido a que aún quedan muchos estándares por definir en IoT, el contar con un
SDK y software propio de Microsoft brinda mayor seguridad.

¿De dónde vienen los datos?

* Sensores:

    > -   Temperatura.
    > -   Humedad.
    > -   Códigos (barras, QR).
    > -   Proximidad.
    > -   Ubicación geográfica.
    > -   Sonido.
    > -   Movimiento.
    > -   Biométricos.

* Azure IoT Hub. Se basa en IoT Hub y agrega un panel que le permite conectar
    bidireccionalmente, supervisar y administrar sus dispositivos de IoT. Ideal
    si solo se requiere telemetría remota y actualizaciones, sin una interfaz
    gráfica. Soporta múltiples protocolos y tiene SDK en los lenguajes populares
    (C, C#, Java, Python, Node.js)

    > -   Centro de mensajes entre aplicaciones IoT y dispositivos.
    > -   Permite control remoto manual o automatizado de dispositivos.
    > -   Cuenta con supervisión

* Azure IoT Central. SaaS para crear aplicaciones de IoT usando plantillas
    específicas de la industria. Ideal cuando se requiere una interfaz gráfica
    (GUI) para el visualizado de informes y errores.

    > -   Basado en IoT Hub con interfaz visual.
    > -   Posee plantillas para escenarios comunes.

* Azure Sphere. crea una solución de IoT de un extremo a otro de alta
    seguridad para los clientes que lo abarca todo, desde el hardware y el
    sistema operativo del dispositivo (Sphere OS, basado en linux) hasta el
    método seguro para enviar mensajes desde el dispositivo al centro de
    mensajes. Ideal para dispositivos en los que se requiera garantizar que no
    han sido modificados y la seguridad sea un factor crítico (cajeros, cajas de
    votación, etc).

    > -   Avnet Azure Sphere MT3620 Starter Kit.
    >
    > -   Seeed MT3620 Mini Dev Board
    >
    > -   Kit de desarrollo de Seeed Azure Sphere MT3620
    >
    > -   Partes:
    >
    >     > -   Unidad de Microcontrolador (MCU). Procesa SO y señales.
    >     > -   Sistema operativo (SO). Controla la comunicación con el servicio
    >     >     de seguridad y puede ejecutar el software del proveedor.
    >     > -   Servicio de seguridad (AS3). Se encarga de asegurar la
    >     >     integridad del dispositivo.
    >
    > -   Requisitos:.. image:: Notes/Azure/img/EstructuraDataCenterAzure.jpg
    >
    >     > -   Kit de desarrollo.
    >     >
    >     > -   Windows
    >     >
    >     >     > -   Visual Studio.
    >     >     > -   Visual Studio Code.
    >     >     > -   Línea de comandos con CMake.
    >     >
    >     > -   Linux
    >     >
    >     >     > -   Visual Studio Code.
    >     >     > -   Línea de comandos con CMake.

## 1.20 Seguridad en Azure

### 1.20.1 Azure Security Center

Servicio que brinda un punto único donde revisar la visibilidad del nivel de
seguridad de los servicios en Azure y local. Emite recomendaciones para mejorar
la seguridad.

Azure Security Center puede definir una lista de aplicaciones permitidas para
asegurarse de que solo se puedan ejecutar las permitidas

* Supervisa la configuración de seguridad.
* Aplica cambios automáticamente.
* Brinda recomendaciones.
* Detecta y bloquea amenazas de malware con ML.
* Detecta ataques e investiga amenazas.
* Proporciona control de acceso Just-in-Time.Bloqueando el tráfico el tráfico
    selectivamente en ciertos puertos.

Con Azure Security Center puede definir una lista de aplicaciones permitidas
para asegurarse de que solo se puedan ejecutar las permitidas. Azure Security
Center también puede detectar y bloquear la instalación de malware en las
máquinas virtuales.

### 1.20.2 Puntuación de seguridad

Security center ofrece un número representativo del nivel de seguridad y
permite:

* Notificar el estado actual.
* Mejorar el nivel.
* Compara puntos de referencia.

### 1.20.3 Azure Sentinel

Azure Sentinel es el SIEM basado en la nube de Microsoft. Un SIEM agrega datos
de seguridad de muchos orígenes diferentes para proporcionar capacidades
adicionales para la detección de amenazas y la respuesta a estas.

SIEM (security information and event management) en la nube de análisis de
seguridad inteligente y análisis de amenazas.

* Recopila datos a gran escala de usuarios, dispositivos, infraestructura y
    aplicaciones
* Detecta amenazas no detectadas anteriormente
* Investiga con IA a gran escala de actividades sospechosas
* Responde a incidentes por medio de la orquestación de tareas comunes
    integradas.

### 1.20.4 Azure Key Vault

Servicio centralizado para almacenar datos confidenciales. Administra:

* Secretos. 
* Claves de cifrado. 
* Certificados SSL/TLS. 
* Respaldados por módulos de seguridad de hardware (HMS).

### 1.20.5 Azure Dedicated Host

Algunas organizaciones deben ajustarse a un cumplimiento normativo que las
obliga a ser el único cliente que usa el equipo físico en el que se hospedan sus
máquinas virtuales

* Servidores físicos que no se comparten con otros inquilinos y/o
    aplicaciones.
* Ofrece visibilidad y control.
* Asegura requisitos de cumplimiento de seguridad.
* Personalizable.
* Puede tener mayor costo.
* Linux y windows disponibles

El costo es por host dedicado, independientemente de los host virtuales que se
implementen.

## 1.21 Conectividad de red segura

La defensa en profundidad se puede visualizar como un conjunto de capas, con los
datos que se deben proteger en el centro.

* capa de seguridad física es la primera línea de defensa para proteger el
    hardware informático del centro de datos.
* capa de identidad y acceso controla el acceso a la infraestructura y al
    control de cambios.
* capa perimetral usa protección frente a ataques de denegación de servicio
    distribuido (DDoS) para filtrar los ataques a gran escala antes de que
    puedan causar una denegación de servicio para los usuarios.
* capa de red limita la comunicación entre los recursos a través de controles
    de acceso y segmentación.
* capa de proceso protege el acceso a las máquinas virtuales.
* capa de aplicación ayuda a garantizar que las aplicaciones sean seguras y
    estén libres de vulnerabilidades de seguridad.
* capa de datos controla el acceso a los datos empresariales y de clientes que
    es necesario proteger.

Los principios comunes de los datos son CIA, por sus siglas en inglés:

* Confidencialidad. Principio de privilegios mínimos 
* Integridad. Hash para garantizar la integridad 
* Disponibilidad. Evitar ataques DDoS.

### 1.21.1 Servicios de Seguridad de Red

* Azure Firewall. Con estado, usa una IP pública estática. Permite configurar:

    > -   Reglas de aplicación
    > -   Reglas de red
    > -   Reglas de traducción de direcciones de red (NAT)

* Azure DDoS Protection

    > -   Básico. Habilitado por defecto en todos los servicios.
    >
    > -   Estándar. Tiene que ser habilitado de manera manual en el DDoS
    >     marketplace. Si un servicio está protegido y el ataque causa
    >     autoescalamiento los costos serán cubiertos por Microsoft y se
    >     retornarán los créditos correspondientes. Puede ayudar a evitar:
    >
    >     > -   Ataques volumétricos
    >     > -   Ataques de protocolo
    >     > -   Ataques a nivel de recurso (nivel de aplicación)

* Grupos de seguridad de red. Un firewall interno. Filtra el tráfico desde y
    hacía recursos de Azure en una red virtual de Azure. Funcionan a partir de
    reglas con las siguientes propiedades

    > -   Nombre
    > -   Priority
    > -   Origen
    > -   Protocolo
    > -   Dirección
    > -   Intervalo de puertos
    > -   Acción.

### 1.21.2 Azure active identity

* Servicios de Identidad

    > -   Autenticación (AuthN): Solicitar credenciales legítimas. establece la
    >     identidad del usuario.
    > -   Autorización (AuthZ): Establecer el nivel de acceso a una persona o
    >     servicio autenticado.

* Azure Active Directory, no condunfir con Active Directory (local). Es un
    servicio de administración de acceso e identidades basado en la nube. Azure
    AD permite a una organización controlar el acceso a las aplicaciones y los
    recursos en función de sus requisitos empresariales. Aquí se conectan las
    aplicaciones para obtener tokens de seguridad.

    > -   Autenticación. Normal o Multifactor, lista de contraseñas prohibidas y
    >     servicios de bloqueo.
    > -   Inicio de sesión único. Una sola identidad para el acceso a múltiples
    >     recursos y aplicaciones de distintos proveedores.
    > -   Administración de aplicaciones.
    > -   Administración de dispositivos.

* MultiFactor Authentication. Con SMS, llamada telefónica.

* Inicio de Sesión Único (SSO)

### 1.21.3 Acceso condicional

Herramienta que usa Azure Active Directory para permitir (o denegar) el acceso a
los recursos en función de señales de identidad, tales como la identidad, su
ubicación y el dispositivo.

### 1.21.4 Comandos del CLI

Para mostrar grupos de seguridad asociados

``` bash
az network nsg list \
    --resource-group <resource-group> \
    --query '[].name' \
    --output tsv
```

Para mostrar las reglas asociadas al grupo

``` bash
az network nsg rule list \
    --resource-group <resource-group> \
    --nsg-name my-vmNSG
```

El comando anterior, en modo tabla se vería así

``` bash
az network nsg rule list \
*-resource-group <resource-group> \
*-nsg-name my-vmNSG \
*-query '[].{Name:name, Priority:priority, Port:destinationPortRange, Access:access}' \
*-output table
```

Para crear una reglas de seguridad podemos hacer algo parecido a

``` bash
az network nsg rule create \
    --resource-group <resource-group> \
    --nsg-name my-vmNSG \
    --name allow-http \
    --protocol tcp \
    --priority 100 \
    --destination-port-ranges 80 \
    --access Allow
```

## 1.22 Cumplimiento de privacidad

Hacer aquello que determina una obligación, una ley, una orden, un castigo, un
compromiso, una promesa.

* Globales
* Gubernamentales
* Sectoriales
* Regionales

### 1.22.1 Declaración de privacidad

Explica qué datos personales recopila Microsoft, cómo los usa y para qué. Abarca
todos sus servicios, sitios, software, servidores y dispositivos.

### 1.22.2 Términos de los servicios en línea

* Contrato legal entre Microsoft y el cliente.
* Detalla las obligaciones de ambas partes respecto al procesamiento y
    seguridad de los datos.
* Aplica a servicios bajo licencia.

### 1.22.3 Anexo de protección de datos (Data Protection Addendum)

Define términos de seguridad y procesamiento de datos para servicios en línea:

* Cumplimiento de leyes
* Revelación de datos
* Seguridad de datos

## 1.23 Gobernanza

El término gobernanza describe el proceso general por el que se establecen
reglas y directivas y se garantiza que esas reglas y directivas se aplican.

* RBAC (Quien)
* Policy (Que)
* Budget (Cuanto)

### 1.23.1 RBAC

Permite crear roles que definen permisos de acceso. El control de acceso basado
en roles se aplica a un ámbito. Donde un ambito pueden ser:

* Un grupo de administración (una colección de varias suscripciones)
* Una sola suscripción
* Un grupo de recursos.
* Un solo recurso

Los permisos se extienden hacia abajo, un propietario de una suscripción será
dueño también de todos sus grupos de recursos y recursos.

RBAC de Azure se aplica a cualquier acción que se inicie en un recurso de Azure
que pasa por Azure Resource Manager, funciona para grupos e individuos.

Los permisos de acceso se administran en el panel Control de acceso (IAM) de
Azure Portal.

### 1.23.2 Bloqueos de recursos (Resource locks)

Los bloqueos de recursos impiden que se eliminen o modifiquen recursos por
error.

### 1.23.3 Niveles de bloqueo

* CanNotDelete: Se necesita desbloquear para eliminar, la lectura y
    modificación no se ven afectados.
* ReadOnly: Solo lectura, la modificación y la eliminación están bloqueados,
    similar a aplicar a todos los usuarios autorizados el rol Lector en RBAC de
    Azure.

### 1.23.4 Azure blueprints

Para evitar la desactivación de bloqueos accidental podemos usar Azure
blueprints. Azure Blueprints nos permite definir el conjunto recursos estándar
de Azure que la organización necesita.

Azure Blueprints puede definir un conjunto repetible de herramientas de
gobernanza y recursos de Azure estándar que la organización necesita.

Azure Blueprints organiza la implementación de varias plantillas de recursos y
de otros artefactos, como son los siguientes:

* Asignaciones de roles
* Asignaciones de directivas
* Plantillas de Azure Resource Manager
* Grupos de recursos

Para implementar un proyecto en Azure Blueprints hay que realizar estos tres
pasos:

1.  Crear una instancia de Azure Blueprints
2.  Asignar ese plano técnico
3.  Llevar un seguimiento de las asignaciones del plano técnico

Azure crea un registro que asocia un recurso con el plano técnico (lo que debe
ser implenentado) que lo define, y gracias a esta conexión podemos realizar el
seguimiento y la auditoría de nuestras implementaciones.

Los planos técnicos están versionados.

Cada componente de la definición de un plano técnico se denomina artefacto y
estos artefactos pueden tener configuraciones de esta manera se pueden tener
planos estandar con la flexibilidad de las configuraciones.

## 1.24 Etiquetas

Las etiquetas proporcionan información extra o metadatos sobre los recursos o
grupos de recursos.

Las etiquetas también se pueden administrar mediante Azure Policy, no son
heredables por defecto, pero podemos usar Azure policy para que lo sean.
Funcionan como pares nombre-valor.

Un uso de estas es la identificación de costos de facturación.

## 1.25 Azure policy

Azure Policy es un servicio de Azure que permite crear, asignar y administrar
directivas que controlan o auditan recursos de acuerdo a una serie de reglas.
Por ejemplo: especificar los tamaños de SKU permitidos.

``` bash
<app-name><label>
```

La implementación de una directiva en Azure Policy conlleva tres tareas:

1.  Crear una definición de directiva
2.  Asignar la definición a los recursos
3.  Revisar los resultados de evaluación

### 1.25.1 Iniciativas

Una iniciativa de Azure Policy es una forma de agrupar las directivas
relacionadas, una directiva es una característica de reestricción. Por ejemplo:
Solo se pueden crear recursos en la región East de USA.

## 1.26 Cloud Adoption Framework para Azure

Sirve para estandarizar la migración a la nube. Consta de 5 pasos

Cloud Adoption Framework incluye estas fases:

1.  Definir la estrategia.

    > -   Definir y documentar nuestras motivaciones
    > -   Documentar los resultados empresariales
    > -   Evaluación de las consideraciones financieras
    > -   Comprensión de las configuraciones

2.  Crear un plan.

    > -   Bienes digitales
    > -   Alineación incial de la organización
    > -   Plan de preparación de aptitudes
    > -   Plan de adopción de la nube
    > -   Preperación de la organización

3.  Preparar la organización.

    > -   Guia de instalación de Azure
    > -   Zona de aterrizaje de Azure. Creación de suscripciones y capacidades
    >     de gobernanza, cuentas y seguridad.
    > -   Expansión de la zona de aterrizaje. Optimización del punto anterior
    > -   Procedimientos recomendados

4.  Adoptar la nube.

    > -   Migrar la primera carga de trabajo
    > -   Escenarios de migración
    > -   Procedimientos recomendados
    > -   Mejoras del proceso
    > -   Innovar
    >     -   Consenso en torno al valor empresarial
    >     -   Guia de innovación de Azure
    >     -   Procedimientos recomendados
    >     -   Bucles de comentarios

5.  Controlar y administrar los entornos de nube.

    > -   Metodología
    >
    > -   Banco de pruebas
    >
    > -   Base de gobernanza inicial
    >
    > -   Mejora de la base de gobernanza
    >
    > -   Administración
    >
    >     > -   Establecer una linea base de administración
    >     > -   Definciión de los compromisos empresariales
    >     > -   Expandir la línea base de administración
    >     > -   Operaciones y principios de diseño avanzado

## 1.27 Creación de una estrategia de gobernanza

La creación de una estrategia de gobernanza puede echar mano de varios recursos
de Azure

* El control de acceso basado en roles de Azure (RBAC de Azure) para definir
    permisos de acceso.
* Los bloqueos de recursos para prevenir accidentes de eliminación de recursos
    por error.
* Las etiquetas de recursos para conseguir metadata de los recursos.
* Azure Policy es un servicio de Azure que permite crear, asignar y
    administrar directivas que controlan o auditan los recursos.
* Azure Blueprints establece un conjunto repetible de herramientas de
    gobernanza y recursos de Azure en una organización.

Hay tres aspectos principales que deben considerarse al crear y administrar
suscripciones

* Facturación
* Control de acceso
* Límites de suscripción

## 1.28 Estándares de privacidad, cumplimiento y protección de datos en Azure

Azure cuenta con una serie de ofertas de cumplimiento, agrupadas en 4
categorias:

* Global
* Gobierno de USA
* Sector
* Regional

Los datos que recopila Microsoft se encuentran en su declaración de privacidad.

Todos los protocolos y la información de auditoria y protección de datos de la
nube de Microsofot se encuentran en el centro de confianza.

La documentación de cumplimiento proporciona proyectos de referencia, o
definiciones de directivas, para estándares comunes que puede aplicar a su
suscripción de Azure.

### 1.28.1 Azure Government

es una instancia independiente del servicio de Microsoft Azure. Aborda las
necesidades de seguridad y cumplimiento de las agencias federales de EE. UU

## 1.29 Administración de costos de servicio

Azure cuenta con una calculadora de costo total de propiedad (TOC)

* Ayuda a calcular los costos de Azure vs. local.
* Deben considerarse costos indirectos, diferencias de zona, promedios, etc.

### 1.29.1 Calculadora de costos

La calculadora se encuentra en la sección de Total Cost of Ownership (TCO)
Calculator en el menú de pricing.

![image](Notes/Azure/img/TOCAzureCalculator.png)

#### 1.29.1.1 Definir cargas de trabajo

En esta parte definiremos las características generales de los servidores.
**Recuerda que la licencia de windows tiene costo**.

![image](Notes/Azure/img/TOCWorloadAzureCalculator1.png)

A continuación definimos las características de las bases de datos.

![image](Notes/Azure/img/TOCWorloadAzureCalculator2.png)

Y para finalizar las características del almacenaje.

![image](Notes/Azure/img/TOCWorloadAzureCalculator3.png)

#### 1.29.1.2 Ajustar supuestos

En esta parte verificamos características, tales como la ubicación geográfica el
costo de la electricidad.

![image](Notes/Azure/img/TOCWorloadAzurePremisas.png)

#### 1.29.1.3 Consultar informe

Al finalizar obtendremos un estimado por región y periodo de tiempo.

![image](Notes/Azure/img/TOCWorloadAzureResumen.png)

Tanto como su desglose por sección.

![image](Notes/Azure/img/TOCWorloadAzureDesglose.png)

La Calculadora de precios proporciona estimaciones y no cotizaciones de precios
reales. Los precios reales pueden variar en función de la fecha de compra, la
moneda de pago que use y el tipo de cliente de Azure en el que se encuentre.

### 1.29.2 Calculadora de servicios

También existe una calculadora de servicios.

![image](Notes/Azure/img/PricingCalculatorAzure.png)

Podemos colocar la región, el sistema operativo e inclusive un estimado de horas
de uso.

![image](Notes/Azure/img/PricingCalculatorEstimador.png)

Esto nos arrojará un costo mensual.

![image](Notes/Azure/img/PricingCalculatorResumen.png)

### 1.29.3 Compra de servicios

Los tres tipos de clientes principales para contratar productos y servicios de
Azure son:

* Contratos Enterprise (B2b)
* En la web
* Proveedor de soluciones con un Microsoft Partner

### 1.29.4 Reducción de costos

Hay estrategias de reducción de costos tales como:

* Azure advisor.
* Desasignar VM cuando no se usen. Se conservan los discos duros y los datos
    asociados en Azure.
* Limitar los presupuestos a una cantidad. Si supera el límite de gasto, se
    desasignarán los recursos activos
* Pago por adelantado.
* Migración de licencias.
* Ubicaciones de bajo costos.
* Ofertas eventuales de microsoft.
* Desaginar y cambiar el tamaño de recursos.
* Migración de IaaS a PaaS.
* Azure Cost Management + Billing

### 1.29.5 ¿Afecta el tráfico de red o la ubicación al costo?

Las transferencias de datos salientes (datos que salen de los centros de datos
de Azure), el precio de la transferencia de datos se basa en las zonas.

### 1.29.6 Azure Cost Management

Servicio que ayuda a comprender su factura de Azure, administrar su cuenta y sus
suscripciones, supervisar y controlar los gastos de Azure, y optimizar el uso de
recursos.

Permite ver un desglose histórico de los servicios en los que se está gastando
dinero

Sus características son:

* Reporting
* Enriquecimiento de datos
* Presupuestos
* Alertas
* Recomendaciones

## 1.30 Acuerdos de nivel de servicio y ciclo de vida

Contrato formal entre empresa de servicios y cliente. Define estándares de
rendimiento que Microsoft se compromete a brindar.

Cada servicio de Azure define su propio acuerdo de nivel de servicio y se
encuentran disponibles en [Acuerdos
SLA](https://azure.microsoft.com/support/legal/sla/)

### 1.30.1 ¿Qué incluyen?

* Introducción donde se plantean los términos generales y las palabras clave,
    y detalles del nivel de servicio.
* Términos generales.
* Detalles del SLA (Service Level Agreement).

### 1.30.2 Importancia

Es importante entender:

* Garantías de servicio, donde nos especifican numéricamente las garantías del
    servicio. Por ejemplo, porcentajes de inactividad.
* Hacerlas efectivas.
* Disponibilidades.

### 1.30.3 Elementos para aumentar SLA

* Tipo de discos, cambiar magnéticos por premium.
* Niveles superiores de servicio.
* Redundancia en regiones mediante replicación de servicios.
* Redundancia en zonas de disponibilidad.

### 1.30.4 ¿Qué pasa si falla un SLA?

Se otorgan créditos de acuerdo al porcentaje, siendo los porcentajes menores los
que mayor cantidad de crédito otorgan, para solicitarlos debe hacerse antes del
mes natural donde se produjo el incidente.

### 1.30.5 ¿Cómo se visualiza la interrupción de un servicio?

Esta información se encuentra disponible en el [estado de
Azure](https://status.azure.com/status) en formato RSS y puede conectarse a
Microsoft Teams o Slack.

### 1.30.6 Cálculo del SLA compuesto

Para garantizar cierto porcentaje de servicio podemos calcularlo con la
siguiente fórmula.

Tip: SLA compuesto = Sumatoria del SLA de cada una de las instancias

Ejemplo: 0.999 x 0.999 x 0.995 = 0.993010995

Para solucionar la caida del tiempo se puede usar una máquina virtual en otra
zona de disponibilidad; si una zona de disponibilidad se ve afectada, la
instancia de la máquina virtual de la otra zona de disponibilidad no se verá
afectada.

### 1.30.7 Ciclo de vida

Todos los servicios de Azure cuentan con una

Fases:

* Desarrollo
* Preliminar pública, donde recibe retroalimentación.
* Disponibilidad general (GA) como servicio.
* Desaconsejado

La fase preliminar aplica para servicios, características de servicios e incluso
al [Portal de Azure](https://preview.portal.azure.com/). En la [página de
actualizaciones de Azure](https://azure.microsoft.com/updates) se puede estar al
tanto de las novedades de productos, servicios y características de Azure, y
hojas de ruta y anuncios de productos.

Es posible que algunas versiones preliminares no estén cubiertas por el soporte
técnico al cliente y puedan estar sujetas a compromisos de seguridad,
cumplimiento y privacidad reducidos o diferentes. Por estos motivos, no se
recomienda usar esas versiones preliminares para cargas de trabajo críticas para
la empresa.
