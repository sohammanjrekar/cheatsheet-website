# Diseño para programadores



## 1.1 Pasos del Proceso Creativo

-   Preparación: Investigar y recopilar información del problema.
-   Incubación: experimentar y sintetizar ideas
-   Iluminación: Idear e imaginar soluciones
-   Evaluación: criticar y replantear solución
-   Implementación: construir y trabar en la solución.

## 1.2 Conceptos de diseño

-   Balance: estructura donde la posición de cada elemento se da por su
    peso visual.
-   Constraste: Diference marcada entre dos elementos, puede ser por
    concepto, colores, etc.
-   Alineación: ruta visual entre elementos que queremos señarlarle al
    usuario.
-   Proximidad: agrupación de diferentes elementos, no tiene que ser
    física, puede ser por color, tipo de elemento u otra característica.
-   Repetición: usos de mismos elementos; logos, colores, diseño, etc.
-   Espacio: lugar donde se aplican los conceptos básicos de diseño,
    puede

## 1.3 Diseño responsivo

Es mejor empezar por dispositivos móviles, separar las capas del
contenido y funcionalidad.

### 1.3.1 Metodología progresiva

Metodología Progressive Enhancement: Consiste en partir de una base
sólida a la que se le van añadiendo mejoras dependiendo de factores como
tamaño de pantalla o sistema operativo. Esto nos garantiza que los
usuarios que tienen baja memoria o dispositivo más pequeño puedan
acceder al contenido y los usuarios que tienen mejores dispositivos
puedan ver el mismo contenido pero con la experiencia más enriquecida
como animaciones y otras funcionalidades. Este es el escenario ideal
para empezar nuevas aplicaciones.

### 1.3.2 Metodología Graceful Degradation

Consiste en partir de una versión completa a la que se le van removiendo
capas de complejidad para garantizar su funcionamiento en todos los
tamaños de pantalla y sistemas operativos. El escenario ideal para usar
ésta metodología es en aplicaciones que ya existen y deben mejorarse.

## 1.4 Accesibilidad y diseño

-   Usar HTML5 semántico, con jerarquias.
-   Tamaño de fuente adecuados
-   Contraste adecuado, para diferenciar entre fondo y contenido.
-   Agrega otro tipo de agrupaciones además del color, puede ser el
    borde.
-   Contenido descriptivo que pueda reemplazar videos e imágenes
-   Animaciones que no bloqueen el contenido.

## 1.5 Brief

Hoja de ruta que incluye descripción del cliente o empresa, objetivos o
retos, target, competencia y distrubición. Cualquier persona que lea el
brief tiene que entender perfectamente el contexto.

## 1.6 Diseño UX

Es el diseño centrado en el usuario.

El diseño UX tiene 4 etapas: 1. Investigación: para recopilar datos
sobre el comportamiento del usuario. 2. Análisis: Analizar la
información recopilada 3. Diseño: Se crean prototipos y flujos de
usuario. 4. Pruebas de usuario: Por lo general se hacen prototipos en
papel o interactivos pero no con el producto final con el propósito de
hacer ajustes al diseño

## 1.7 Diagramas de flujo

En el *site map* definimos cuales son las secciones principales, las
secciones secundarias y las paginas externas a nuestro sitio.

El siguiente es el *user flow*. Estos nos permiten hacer un diagrama de
flujo de todos los pasos que hace un usuario para completar una tarea.
Con este flujo podemos saber cuántas pantallas o componentes tenemos
para realizar una acción de usuario.

## 1.8 Wireframes

Es el plano de la aplicación, un boceto de cada pantalla que nos
arrojaron los diagramas de flujo anteriores.

Estos pueden ser de baja fidelidad, donde sean más bien bocetos en
papel.

![image](Notes/DiseñoParaProgramadores/img/wireframesDeBajaFidelidad.jpg)

O de alta fidelidad, creados con programas de diseño, donde esté más
detallado cada elemento y la forma final. No especifican capas de color,
ni fuentes, solo elementos, espaciado.

![image](Notes/DiseñoParaProgramadores/img/wireframesDeAltaFidelidad.jpg)

## 1.9 UX y UI

El diseño UI crea la apariencia del contenido, diseño visual, colores,
layouts, tipografía. Por otro lado, el UX se enfoca en la interacción
prototipado, arquitectura de información.

## 1.10 Moodboard

Es una colección de referencias visuales con proposito de inspiración.
Pinterest es una excelente referencia para crear un moodboard.

## 1.11 Teoría del color

Area de estudio que asocia la forma en que el cerebro percibe los
colores y los asocia a emociones y sentimientos.

Hay colores:

-   primarios
-   secundarios
-   terciarios

### 1.11.1 Color para web

Es mejor usar RGB y hexadecimales para web. Crea un código consistente y
apegate a él Mantén tu paleta de colores simple, con pocos colores.

### 1.11.2 Paleta de color

> Combinación monocrómatica. Un color en diferentes opacidades
> Combinación análoga. Un color primario, secundario y terciario que
> estén contiguos en el círculo cromático Combinación
> complementaria-Color primario más uno secundario, opuestos en el
> círculo cromático Combinación triádica, creación de un triangulo en el
> circulo cromático Combinación tétrada. Creando un rectándulo con dos
> colores primarios y 2 secundarios.

## 1.12 Tipografía

Implementa el menor número de fuentes posible Usa fuentes estándar
Limita la cantidad de texto Elige tipografías legibles en diferentes
tamaños Recuerda mantener el alto de línea adecuado Crea contraste
suficiente entre fondo y tipografías.

### 1.12.1 Serif

Tradicional, sofisticada, confiable formal. Se puede combinar con Sans
Serif script, display.

### 1.12.2 Sans serif

Moderna, limpia, geométrica, universal. Combina bien con Serif, script,
slab serif.

### 1.12.3 Script

Elegante, clásica, formal, sofisticada, estilizada. Se recomienda en
logos, títulos o invitaciones, no es adecuada para párrafos.

### 1.12.4 Fuentes

Podemos obtener en Google fonts.

## 1.13 Componentes

Es importante tenerlos encapsulados y tenerlos en un styleguide. Deben
de funcionar como unidades individuales de funcionalidad.

## 1.14 Theme

Capa de colores que nos permite hacer variaciones sin tener cambios
importantes de código, un ejemplo es la versión oscura y clara de una
página. Para hacer esto podemos hacer uso de *css variables* o tener dos
archivos con diferentes variables.

## 1.15 Imágenes

Hay que elegir correctamente las imágenes para el sitio web. Hay varios
aspectos a tomar en cuenta para imágenes

Imágenes para Web - JPG: Imágenes con degradados, suelen ser de baja
calidad - PNG: Para fondo transparente - SVG: Vectores, se pueden editar
en css - GIF: No se recomienda si son muy pesados

Como elegir - Aporten al contenido - Dirigido al cliente - Consistente
con la paleta de colores - Licencias

Rendimiento y accesibilidad - Evitar imágenes con texto - Exportar al
tamaño del contenedor final - Considera usar lazy loading: Cargando
dinámico - Asegurate de usar el atributo *alt text*

## 1.16 Gráficos en movimiento para web

Hay diferentes formatos  
CSS animado: para animaciones sencillas y transiciones SVG animado: para
animaciones de vectores JS (Canvas, WebGL): Animaciones complejas o 3D
Videos: Filmaciones y animaciones de alta complejidad y corta duración,
aumentan mucho el peso

Factores a tomar en cuenta \* Hay que tomar en cuenta el performance,
una página que tarda en cargar es penalizada por los usuarios. \*
Priorizar el silencio, colocar sonido en una página es invasivo para el
usuario. \* Tener cuidado con los destellos intermitentes, puede haber
usuarios con epilepsia. \* Si tenemos animaciones es ideal agregarle
subtítulos o transcripciones. \* Evita que las animaciones impidan la
lectura del contenido
