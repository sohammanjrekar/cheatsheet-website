# Arquitectura de Software



## 1.1 Etapas del desarrollo de Software

El proceso de desarrollo tradicional sigue un modelo donde cada salida
es la entrada del siguiente paso, como un pipeline.

Análisis de requerimientos: Necesitamos entender cuál es el problema que
queremos resolver, es decir, la necesidad del negocio.

Diseño de la solución: Análisis profundo de los problemas y sus posibles
soluciones. El resultado de esto debe ser el detalle de la solución, a
través de requerimientos, modelado, etc.

Desarrollo y evolución: Implementación de la solución. Al final de esta
etapa tendremos software como salida.

Despliegue: Aquí vamos a necesitar de infraestructura y de roles de
operación para poner a disponibilidad nuestro software.

Mantenimiento y evolución: Estamos en espera de mejoras. El software
permanecerá en esta etapa hasta que concluya su periodo de vida.

## 1.2 Dificultades en el desarrollo de software

Cuando estamos identificando los problemas que queremos resolver,
podemos dividir los problemas en 2

### 1.2.1 Esenciales

Los podemos dividir en:

-   La complejidad: Cuando el problema es complejo en si mismo, por
    ejemplo del problema del vendedor viajero aplicado. Manejo del
    problema de complejidad: Usar un sistema existente o aprovechar
    código Open Source.
-   La conformidad: en qué contexto se usa el software y cómo se adapta
    al entorno. Manejo del problema: Prototipado rápido, feedback e
    iteraciones rápidas para soluciones pequeñas, generalmente usando
    metodologías ágiles.
-   Tolerancia al cambio: Cambio de el mismo software y el contexto
    donde se usa. Manejo del problema: Desarrollo Evolutivo, desarrollos
    pequeños. Paso a paso pero de manera firme e ir haciendo crecer el
    software.
-   Invisibilidad: Problemas de tangibilidad nula.
-   Manejo del problema: Grandes diseñadores, Arquitectos que saben
    abstraer el problema y que realiza soluciones elegantes, de manera
    eficiente.

### 1.2.2 Accidentales

Está relacionado con la plataforma que vamos a implementar, tecnología,
lenguajes, frameworks, integraciones, entornos, etc.

## 1.3 Roles en metodologías tradicionales y ágiles

Las Metodologías Ágiles Redifinieron los Roles para acomodarlos a su
filosofia de Trabajo. Es necesario separar el rol del puesto de trabajo.
Una misma persona puede desempeñar varios roles.

### 1.3.1 Tradicional

Experto de Dominio: Era la persona a la que consultabamos para resolver
las necesidades de los requerimientos. Su contraparte en metodologías
ágiles es el stakeholder.

Analista: Es la persona que se encarga de definir el problema y con
ellos los requerimientos. Su contraparte en metodologías ágiles es el
product owner.

Administrador de sistemas: Se encargaban de toda la operación del
sistema: servidores, librerarías, lectura de logs y feedback al equipo
de desarrollo. Su contraparte en metodologías ágiles es el DevOps o el
Site Reliability Engineer.

QA-Tester: Se encargaban de asegurar la calidad el producto, había área
de QA, testing, desarrolladores y arquitectos de software. Su
contraparte en metodologías ágiles es el equipo de desarrollo.

Gestor del Proyecto: Se ecargaba de todo lo que era la entrega, además
de gestionar el ciclo de vida del proyecto. Su contraparte en
metodologías ágiles es el SCRUM master o facilitador.

### 1.3.2 Metodologías ágiles

Stakeholders/Partes interesadas: Expertos en el área del producto.

Dueño del producto: Cliente. Es la persona que define los requerimientos
. Determina las historias y las prioriza.

Devops: Es la persona responsable de Entender la Infraestructura a la
que se dirige nuestra app, así como de entender los requerimientos de
infraestructura asociados.

Administrador de sistemas: Fue reemplazado por el SRE (Ing. de la
Confianza del Sitio), es similar al Administrador de Sistemas pero
conectando el mundo de sistemas con el mundo del dia a dia de la app.

Equipo de desarrollo: Equipo autogestionado que diseña la solución y
análisis de los requerimientos, es un papel más estratégico. La
arquitectura a usar emergerá del consenso del equipo.

Facilitador o SCRUM master: Acompaña al equipo a través de las
iteraciones, para entender y motivar al equipo.

## 1.4 ¿Qué es arquitectura de software?

Hay diferentes definiciones para definir el término de arquitectura de
Software.

El libro Software Architecture in Practice se enfoca en la estructura y
los elementos del sistema.

> “La estructura del sistema, compuesta por elementos de software, sus
> propiedades visibles y sus relaciones”
>
> Software Architecture in Practice

Mientras que el libro Software Architecture: Foundations, Theory and
Practice se centra más bien en las decisiones.

> “El conjunto de decisiones principales de diseño tomadas para el
> sistema”
>
> Software Architecture: Foundations, Theory and Practice

## 1.5 La importancia de la comunicación - Ley de Conway

La ley de Comway dice que:

> “Cualquier pieza de software refleja la estructura organizacional que
> la produjo.”

Por lo que un equipo único producirá un monolito, mientras que un equipo
separado producirá una aplicación modularizada.

## 1.6 Objetivos del Arquitecto

Cada uno de los stakeholder tiene que ser conectado por el Arquitecto
con sus requerimientos.

Stakeholder -\> Arquitecto -\> Requerimientos = Implementaciónes en el
Sistema.

Los Requerimientos de cada stakeholder afectan de forma única el
sistema.

-   Cliente: Entrega a tiempo y dentro del presupuesto.
-   Manager: Permite equipos independientes y comunicación clara.
-   Dev: Que sea fácil de implementar y de mantener.
-   Usuario: Es confiable y estará disponible cuando lo necesite.
-   QA: Es fácil de comprobar.

La unión de todos estos requerimientos llevarán al arquitecto a tomar
sus decisiones.

## 1.7 Entender el problema

Es muy importante separar la comprensión del problema de la propuesta de
solución.

### 1.7.1 Problema

Detalla lo que queremos resolver, no entra en detalles del como, y el
alcance de nuestro problema, además de como va a agregar valor a
nuestros usuarios

-   Idea: ¿Qué queremos solucionar?
-   Criterios de éxito: ¿Cómo sabremos si resolvemos el problema?
-   Historias de usuario: Enfasis en los beneficios del usuario respecto
    a su problema.

### 1.7.2 Solución

Entra y aisla los detalles sobre como se va a resolver el problema
teniendo en cuenta todos los detalles técnicos del problema.

Consta de:

-   Diseño: Planificacion del software, desde diseño UI, UX hasta diseño
    de sistemas.
-   Desarrollo: escribir el codigo, configuraciones y contrataciones de
    servicios.
-   Evaluación: medir la eficiencia y eficacia del software frente al
    problema.
-   Criterios de aceptación: medir el impacto del software centrado en
    el usuario.
-   Despliegue (deploy): lanzar el software en ambientes productivos y
    mejorar por medio de iteraciones.

## 1.8 Requerimientos

### 1.8.1 Requerimientos de producto

Se puede dividir en 3.

#### 1.8.1.1 Requerimientos de negocio

Los objetivos y problemas que la empresa quiere resolver con el
producto. Están basados en una necesidad del usuario.

#### 1.8.1.2 requerimientos del usuario

Describen las expectativas de los usuarios y como se interactuará con el
producto.

#### 1.8.1.3 requerimientos funcional

Proporcionan detalle de como debe comportarse un producto y especifican
lo que se necesita para su desarrollo.

### 1.8.2 Requerimientos de proyecto

Tienen que ver más con el rol de gestor de proyectos, se usan para dar
prioridad a los requerimientos del producto.

Estos dos mundos de requerimientos hablan de las prioridades del equipo
de trabajo del proyecto.

### 1.8.3 Requerimientos de acuerdo a funcionalidad

-   requisitos funcionales, relacionados con las historias de usuario.
-   no funcionales, tienen que ver con las características del sistema y
    vienen de atributos cualitativos, o sea que modifican a los
    requerimientos funcionales para asignarles características, están
    muy relacionados con la arquitectura. Ejemplos: acceder de forma
    segura, en tiempo real u otros atributos que modifiquen la historia
    del usuario.

## 1.9 Riesgos

Es necesario identificar los riesgos para poder **priorizarlos** y
atacarlos en orden y asegurar que las soluciones arquitectónicas que
propongamos resuelvan los problemas más importantes.

Podemos usar un framework para identificar los riesgos:

-   Toma de Requerimientos (Requerimientos funcionales): Se calificará
    de acuerdo a su dificultad o complejidad.
-   Atributos de calidad (Requerimientos NO funcionales): Se calificará
    de acuerdo a la incertidumbre que genere, a mayot incertidumbre
    mayor riesgo.
-   Conocimiento del dominio: Riesgo prototípico, son aquellos que
    podemos atacar de forma estándar.

Una vez identificados debemos priorizarlos para resolver aquellos
riesgos que ponen en riesgo el éxito de la solución.No todos los riesgos
podrán cubrirse en un inicio.

## 1.10 Reestricciones

Las limitaciones a las opciones de diseño disponibles para desarrollar
no se limitan a la parte tecnológica, pueden ser también legales o
relacionadas con el contexto de negocio.

## 1.11 Estilos de arquitectura

Citando a Software Architecture: Foundations, Theory and Practice
(Taylor, 2010)

> Un estilo de arquitectura es una colección de decisiones de diseño,
> aplicables en un contexto determinado, que restringen las decisiones
> arquitectónicas específicas en ese contexto y obtienen beneficios en
> cada sistema resultante.

Existen diferentes estilos de arquitectura:

### 1.11.1 Llamado y retorno

Los componentes invocan a componentes externos y reciben la información
que les proporcionan.

#### 1.11.1.1 Programa principal y subrutinas

Estilo más básico evolucionado de un script. Se tiene una rutina y se
manda a llamar otra subrutina en donde la subrutina puede retornar o no
un resultado, pero la rutina principal continua hasta que acabe la
subrutina.

#### 1.11.1.2 Orientado a objetos

Tratamos de juntar el estado de la aplicación creando objetos los cuales
tienen una interfaz pública y los objetos interactúan entre si.

#### 1.11.1.3 Arquitectura multinivel

Son diferentes componentes que se van a comunicar en un orden en
especifico donde un componente principal crea el llamado a un componente
inferior en algún momento, un ejemplo de esto son las aplicaciones
cliente-servidor, donde una aplicación le habla a un servidor mediante
una petición y el servidor le devuelve una respuesta.

### 1.11.2 Flujo de datos

Este estilo se utiliza cuando tenemos un proceso con una salida clara;
la salida puede procesarse por partes.

#### 1.11.2.1 Secuencial

Se basa en dividir el trabajo en subproceso llamados lotes los cuales se
procesan uno tras otro y dan un resultado que sirve como entrada para el
siguiente

#### 1.11.2.2 Tubos y filtros

Igualmente se divide el trabajo en subproceso pero la principal ventaja
es que es continuo, y puede haber procesos en paralelo además se pueden
añadir o remover procesos sin afectar el comportamiento del resto.

### 1.11.3 Centrados en datos

#### 1.11.3.1 Pizarrón

Múltiples componentes que interactuan con un componente central, cada
componente tiene la responsabilidad de procesar, calcular o recibir un
dato y escribirlo al componente central; el pizarrón. Una vez que todos
los componentes hayan procesado su información, el pizarrón puede o no
devolver una salida de acuerdo a su propia lógica.

Es un estilo poco común.

#### 1.11.3.2 Centrado en datos

Toda la información se centra en una única base de datos. Ideal para
aplicaciones que tienen una segunda aplicación con la misma base de
datos.

Los componentes involucrados en este estilo **no se comunican entre
sí**, sino que utilizan la base de datos y así pueden leer que hizo el
otro componente.

#### 1.11.3.3 Experto o basado en reglas

Un componente de tipo cliente se comunica con un segundo componente, que
intentará inferir si recibe una regla o una consulta, para saberlo
consulta con un tercer componente; la base de datos de reglas o
knowledge database.

Generalmente usado en Inteligencia Artificial.

### 1.11.4 Componentes independientes

Se trata de un estilo que busca el desacoplamiento de los componentes.

Existen dos tipos: invocación implícita e invocación explicíta.

#### 1.11.4.1 Invocación implícita

Es parecido al patrón observer, con un bus central de eventos sobre el
cual escriben los componentes, el bus comunica los eventos, de manera
reactiva, a los componentes que estén suscritos pero los componentes
desconocen a donde se les están comunicando los eventos.

Existen buses sencillos donde un componente publica un evento y los
componentes suscritos reciben la notificación

También hay buses inteligentes que funcionan de acuerdo a cierta lógica
(Enterprise Service Bus). El cual tiene componentes registrados que
interactúan con el bus, los componentes no se conocen entre si, pero
están programados para cumplir con su objetivo.

#### 1.11.4.2 Invocación explícita

Está basado en comunicación entre componentes pero, a diferencia de la
invocación implicita, las aplicaciones saben con qué aplicación se están
comunicando, incluso aunque se hayan desarrollado independientemente. Lo
anterior se consigue registrando cada componente a una central donde
indica sus relaciones entre si, al cual se puede consultar para ubicar
al componente a utilizar.

## 1.12 ¿Cómo elegir un estilo?

Se dividen en estilos monolíticos y distribuidos

### 1.12.1 monolíticos

Es fácil priorizar eficiencia en comunicaciones Sencillos de testear
Curva de aprendizaje baja Capacidad de modularización muy complicada
Desafio para el despliegue pues todo el sistema tiene que coincidir

### 1.12.2 Distribuidos

Para testear se tienen que tener todos los componentes Curva de
aprendizaje más elevada Cada servicio se versionea de manera diferente,
lo que complica su modificación Su modularización es sencilla.
Adaptabilidad más fácil por la diferencia de contextos en cada
despliegue.
