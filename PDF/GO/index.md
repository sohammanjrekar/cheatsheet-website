# Go

Go es un lenguaje compilado desarrollado por google. Es un lenguaje
bastante apreciado según los desarrolladores de acuerdo a las últimos
encuestas de Stackoverflow (2021).

Go está fuertemente orientado a las buenas prácticas de código. El
compilador de Go fuerza buenas prácticas en el código, impidiendo que el
código compile si hay variables que no se usan, o si falta documentación
en structs públicos.

La mascota oficial es una ardilla de tierra. La comunidad ama tanto su
mascota que creó una herramienta para crear avatares personalizados en
[Gopherizme](https://gopherize.me) y es apreciado por la comunidad. Sin
embargo el [logo oficial de go](https://blog.golang.org/go-brand) ya ha
sido definido.



## 1.1 Instalación

Go se encuentra en la mayoría de los repositorios de las distribuciones
de GNU/Linux. En debian se instala como cualquier otro paquete.

``` bash
sudo apt install golang
```

## 1.2 Estructura de un archivo de go

Los archivos de go se estructuran de la siguiente manera y en este
orden:

### 1.2.1 Nombre del paquete

Una sección donde se declara el nombre del paquete después de la palabra
*package*

``` go
package main
```

### 1.2.2 Importaciones

Una sección donde se importan todos los paquetes que se usarán. Para
ello usamos la palabra *import*.

``` go
import "fmt"
```

múltiples importaciones pueden colocarse dentro de parentesis, sin
comas.

``` go
import (
    "strconv"
    "fmt"
)
```

### 1.2.3 Contenido

El contenido del archivo, es decir declaraciones de variables, types,
funciones, constantes, etc.

## 1.3 El paquete principal

Go requiere de un paquete principal llamado main, que se especificará
colocando *package main* al principio de nuestro código fuente.

``` go
package main
```

### 1.3.1 La función main

La función main es el punto de partida de un archivo de go y no retorna
nada.

``` go
package main

import "fmt"

func main() {
    fmt.Println("Hello world")
}
```

### 1.3.2 Función de Inicialización

Antes del punto de entrada del programa se ejecuta una función init,
esta puede contener todas las inicializaciones necesarias para la
ejecución del programa.

``` go
package main

import "fmt"

func init() {
    fmt.Println("Inicializando el programa principal")
}

func main() {
    fmt.Println("Ejecutando el programa")
}
```

## 1.4 Ejecutar un archivo de go

Dado que go es un lenguaje compilado, requiere que se ejecute un
compilado antes de poder ejecutar el código. El compilado se realiza con
el comando build.

``` bash
go build src/main.go
```

También es posible compilar y correr el código en un solo paso usando
run en lugar de go.

``` bash
go run src/main.go
```

### 1.4.1 Diferencias entre run y build

Go run compila el código y lo ejecuta desde un directorio temporal,
posteriormente limpia los archivos generados. Si agregamos la opción
--work, podremos ver la ubicación de este directorio.

``` bash
go run --work src/main.go
# WORK=/tmp/go-build983014220
```

## 1.5 Variables, constantes y zero values

### 1.5.1 Variables

Go permite definir variables especificando el tipo de dato y la keyword
var.

``` go
var gravedad int
```

La asignación de variables puede realizarse en un solo paso.

``` go
var gravedad int = 123
```

También es posible dejar que go intuya el tipo de dato con el operador
walrus. Este tipo de asignación **solo es posible dentro del scope de
una función**.

``` go
gravedad := 123
```

En Go no puedes asignar una variable al valor nulo de go; nil.

``` go
var gravedad = nil // error
```

### 1.5.2 Constantes

Con las constantes funciona de manera similar, pero se caracterizan
porque no pueden modificarse. Se usa la keyword const. **Es necesario
asignar un valor a una constante al momento de declararla**.

``` go
const gravedad int = 123
```

Si no especificamos un tipo de constante go intentará intuirlo.

``` go
const pi = 3.14159
```

### 1.5.3 Zero values

Si no asignamos un valor go usará valores predeterminados diferentes
para cada tipo de dato.

-   int: 0
-   float: 0
-   string: ""
-   bool: false

### 1.5.4 Valor nulo

Go usa la palabra nil para referirse a un valor nulo.

## 1.6 comentarios

Los comentarios se marcan usando dos diagonales seguidas

``` go
// Este es un comentario en go.
```

Los comentarios multilinea se realizan con una diagonal seguida de
asterisco

``` go
/*
Este es un comentario multilinea
*/
```

## 1.7 Operadores aritméticos en go

Los operadores de go son similares al resto de los lenguajes.

-   +, suma
-   -, resta
-   \*, multiplicación
-   /, división
-   \<, menor que
-   \<=, menor o igual que
-   \>, mayor que
-   \>=, mayor o igual que
-   %, el módulo o residuo
-   !=, inequivalencia
-   ==, igualdad
-   !, negación
-   &&, operador AND
-   \|\|, operador OR
-   ++, incremental
-   --, decremental

## 1.8 Tipos primitivos de datos

Los datos primitivos de go nos permiten definir un tipo de dato para una
constante o varible.

### 1.8.1 Entero

Para valores enteros con o sin signo.

-   int, se asigna de acuerdo al SO (32 o 64 bits)
-   int8,
-   int16
-   int32
-   int64

### 1.8.2 Entero sin signo

Para valores sin signo, es decir, positivos.

-   uint, se asigna de acuerdo al SO (32 o 64 bits)
-   uint8
-   uint16
-   uint32
-   uint64

### 1.8.3 Decimal

Para números decimales

-   float32
-   float64

### 1.8.4 Textos

Para textos existe únicamente string

### 1.8.5 Boolean

Para valores true or false

### 1.8.6 Números complejos

Permite manejar números reales e imaginarios:

-   Complex64
-   Complex128

Por ejemplo: c:=100+2i

### 1.8.7 Funciones

Las funciones pueden ser un tipo de dato en un struct.

``` go
table := []struct {
            id               int
            dni              string
            mockFunc         func()
            }
```

## 1.9 Paquete fmt

Es el paquete encargado de manejar entradas y salidas en la terminal.
Incluye todo lo necesario para lidiar con caracteres especiales, como el
idioma chino.

### 1.9.1 Println

Print que agrega un salto de linea al final, es posible separar
variables por comas.

``` go
fmt.Println("Hello wired")
```

### 1.9.2 Printf

Permite agregar operadores de posición

``` go
fmt.printf("Hello %s %d", texto, numero)
```

### 1.9.3 Sprintf

No imprime en la terminal, sino que genera un string con los operadores
de posición.

``` go
var message string = fmt.Sprintf("Hello %s %d", texto, numero)
```

### 1.9.4 Operadores de posición

Hay algunos operadores de posición destacables.

-   %T, tipo de variable
-   %v, valor en el formato predeterminado
-   %t, la palabra false o true
-   %x, número de base 16
-   %o, número de base 8
-   %e, notación científica
-   %9.2f, flotante con ancho de 9 y precisión de 2
-   %.2f, flotante con ancho predeterminado y precisión de 2
-   % q, un string escapado

Puedes ver más en la [página oficial de go](https://pkg.go.dev/fmt)

## 1.10 Funciones en Go

Las funciones se declaran con la siguiente sintaxis

``` go
func suma(){

}
```

Los argumentos requieren tipo de dato y pueden separarse por comas

``` go
func suma(a int, b int){

}
```

Es posible asignar dos argumentos a un mismo tipo de dato omitiendo el
tipo de la primera.

``` go
func suma(a, b int){

}
```

Para retornar valores se usa la variable return

``` go
func suma(a, b int){
    return a + b
}
```

Go requiere establecer un tipo de retorno después de los argumentos.

``` go
func suma(a, b int) int{
    return a + b
}
```

Para especificar dos valores como retorno usamos parentesis

``` go
func suma(a, b int) (int, int){
    return a, b
}
```

Es posible retornar dos valores con una función separándolos por comas.

``` go
func double(a, b int){
    return a * 2, b * 2
}
```

Una función puede retornar una función pasándole el tipo de dato func()

``` go
func returnFunction() func() {
    return func() {
        fmt.Println("gola")
    }
}


func main() {
    returnFunction()()
}
```

Y podemos asignar esos valores en dos variables diferentes llamando a la
función

``` go
value1, value2 = double(2, 3)
```

### 1.10.1 returns sin nombre

Una función puede implementar que retorne lo que le pasamos como tipo
por defecto. En este caso le indicamos que devolverá una variable x y
una variable y de tipo int. Si go detecta que no hay nada después de la
palabra return, devolverá x y y.

``` go
func split(sum int) (x, y int) {
    x = sum * 4 / 9
    y = sum - x
    return
}
```

### 1.10.2 Cantidad variable de argumentos

Si no sabemos la cantidad de argumentos que va a recibir una función,
colocamos el nombre del argumento, seguido del operador ... y a
continuación el tipo de variable.

``` go
func Sum(nums ...int) int {
    res := 0
    for _, n := range nums {
        res += n
    }
    return res
}
```

## 1.11 Strings, runes y bytes

### 1.11.1 Bytes

Un byte en go es sinónimo de un *uint8*. Es decir, 8 bits que podemos
asignar de manera directa a diferentes notaciones. El hecho de que sea
un uint8 nos permite usar cualquier número entre 0 y 255

``` go
var ch byte = 90 // decimal
var ch1 byte = 0b01011010 // Binaria
var ch2 byte = 0o132      // Octadecimal
var ch3 byte = 0x5a       // hexadecimal
```

#### 1.11.1.1 Array de bytes

Así como tenemos el tipo de dato byte, también podemos crear un array de
bytes.

``` go
// Instanciado directamente de un string
t1 := []byte("ABCDE")
// Como si fuera un array de caracteres
t2 := []byte{'A', 'B', 'C', 'D', 'E'}
// como si fuera un array de números ord()
t3 := []byte{65, 66, 67, 68, 69}
// Con la función copy
var t4 = make([]byte, 5)
copy(t4, "ABCDE")
```

### 1.11.2 Runes

Las runes son sinónimo de un tipo *int32*. Es el tipo de **variable por
defecto cuando defines un caracter**. Si no especificas byte u otro, Go
dará por sentado que se trata de una rune.

``` go
runa := 'A'
fmt.Printf("type:%T, value:%v\n", runa, runa)
// type:int32, value:65
```

#### 1.11.2.1 Array de Runes

Go permite, de la misma manera manejar un array de runes que es
totalmente modificable

``` go
arrayRunas := []rune("Jello, World")
arrayRunas[0] = 'H'
arrayRunas = append(arrayRunas, '!', '?')
```

### 1.11.3 Strings

Un string es un slice de bytes de solo lectura, se declara usando
comillas dobles.

Cada índice del slice de un array se refiere a un byte, por lo que si,
iteramos sobre un string, vamos a obtener muchos más bytes que los
caracteres que conforman nuestro string.

``` go
s := "ID彼氏彼女の事情"

for i := 0; i < len(s); i++ {
    fmt.Printf("%x ", s[i])   
}
// 49 44 e5 bd bc e6 b0 8f e5 bd bc e5 a5 b3 e3 81 ae e4 ba 8b e6 83 85
```

Por otro lado, la función range se encarga de iterar runa por runa,
decodificando el caracter.

``` go
for index, runeValue := range s {
    fmt.Printf("%#U empieza en el byte de posición %d\n", runeValue, index)
}
//U+0049 'I' starts at byte position 0
//U+0044 'D' starts at byte position 1
//U+5F7C '彼' starts at byte position 2
//U+6C0F '氏' starts at byte position 5
//U+5F7C '彼' starts at byte position 8
//U+5973 '女' starts at byte position 11
//U+306E 'の' starts at byte position 14
//U+4E8B '事' starts at byte position 17
//U+60C5 '情' starts at byte position 20    
```

## 1.12 Paquete strings

Go cuenta con un paquete para manejar strings, con múltiples métodos.
Aquí dejo algunos de los más importantes:

-   func Contains(s, substr string) bool Revisa si una cadena de texto
    se encuentra en otra.
-   func Count(s, substr string) int Cuenta las ocurrencias de una
    cadena de texto en otra.
-   func HasPrefix(s, prefix string) bool Revisa si un string empieza un
    string
-   func HasSuffix(s, suffix string) bool Revisa si un string termina
    con otro string
-   func Join(elems \[\]string, sep string) string Une todos los
    elementos de una lista en un string, usando un separador entre cada
    par de elementos
-   func Split(s, sep string) \[\]string Separa un string en una lista
    por un separador que le indiquemos
-   func Index(s, substr string) int Devuelve el indice de una cadena de
    texto en otra
-   func Replace(s, old, new string, n int) string Reemplaza la primera
    ocurrencia de una cadena de texto por otra
-   func ReplaceAll(s, old, new string) string Reemplaza todas las
    ocurrencias de una cadena de texto por otra
-   func ToLower(s string) string Convierte en minúsculas
-   func ToUpper(s string) string Convierte en mayúsculas
-   func Trim(s, cutset string) string Remueve los espacios al principio
    y al final

Revisa las funciones completas en [la documentación de strings en
go](https://pkg.go.dev/strings)

## 1.13 Paquete strconv

Permite convertir strings en otros tipos de datos:

-   func Atoi(s string) (int, error) convierte un string en un entero
-   func Itoa(i int) string convierte un número entero en un string
-   func ParseBool(str string) (bool, error) Convierte 1, t, T, TRUE,
    true, True en True o 0, f, F, FALSE, false, False en False

Mira el resto de funciones en [la documentación de strconv en
go](https://pkg.go.dev/strconv)

## 1.14 Función len

La función len se encarga de devolver el número de elementos que tiene
un string, un slice, un array, un channel. Sin embargo, en el caso de
los strings, devuelve el número de bytes, para caracteres que no formen
parte de utf-8, para solucionar este problema usamos el método
RuneCountInString.

``` go
package main

import (  
    "fmt"
    "unicode/utf8"
)

func main() {  
    data := "♥"
    fmt.Println(len(data)) // Imprime 3
    fmt.Println(utf8.RuneCountInString(data)) // imprime 1
```

## 1.15 Ignorando variables

Para ignorar una variable le pasamos un guión bajo o underscore y el
compilador no tendrá en cuenta si la usamos o no.

``` go
value1, _ = double(2, 3)
```

## 1.16 godoc

Godoc es una página que nos muestra detalles de cada función que compone
un paquete, así como un parseo de la información de github. Para hacerlo
debemos ir a la [sección packages](https://golang.org/pkg/) de la página
oficial de golang.

## 1.17 Ciclos

En go solamente existen los ciclos for, hay varios tipos de ciclos for.

### 1.17.1 Con contador

Es el clásico ciclo en el que existe un contador y el código se ejecuta
mientras se cumpla un contador

``` go
for i:= 0; i < 10; i++ {

}
```

### 1.17.2 Con condición

El ciclo se ejecuta mientras se cumpla una condición

``` go
counter := 0
for counter < 10 {
    counter ++
}
```

### 1.17.3 counterForever

El ciclo se ejecuta indefinidamente

``` go
counterForever := 0
for {
    counterForever++
}
```

## 1.18 Condicional if

Usado para manejar el flujo del código de acuerdo a una condición

``` go
num := 9
if num % 2 == 0 {
    fmt.Println("es par")
} else {
    fmt.Println("es impar")
```

## 1.19 Switch

Para manejar múltiples casos para una condición específica

``` go
var mes int8 = 10
switch {
case mes <= 3:
    fmt.Println("Primer Trimestre")
case mes > 3 && mes <= 6:
    fmt.Println("Segundo Trimestre")
case mes > 6 && mes <= 9:
    fmt.Println("Tercer Trimestre")
case mes > 9 && mes <= 12:
    fmt.Println("Cuarto Trimestre")
default:
    fmt.Println("Este no es un mes valido")
}
```

## 1.20 defer, break y continue

### 1.20.1 defer

Se usa para retrasar la ejecución de código hasta el final de la
operación. Defer es perfecta para cerrar base de datos u operaciones que
necesitas que se ejecuten siempre.

``` go
defer CloseDatabase()
```

### 1.20.2 break

Se usa para romper un ciclo

``` go
counter := 0
for counter < 10 {
    counter ++
    if counter == 9 {
        break
    }
}
```

Es posible designar un nombre de un ciclo para luego usar break en ese
ciclo.

``` go
loop:
    for {
        switch {
            case true:
                break loop
            }
        }
```

### 1.20.3 continue

Se usa para interrumpir una iteración de un ciclo y continuar con la
siguiente iteración

``` go
counter := 0
for counter < 10 {
    counter ++
    if counter == 2 {
        continue
    }
    // lo siguiente no se ejecutará si counter es igual a 2
}
```

## 1.21 make

La función make asigna e inicializa un objeto del tipo slice, map o chan
y lo retorna.

## 1.22 Array y slices

Los array y los slices son estructuras para manejar colecciones de tipos
de datos.

### 1.22.1 Array

Los arrays son inmutables, debemos definir un tamaño y un tipo de dato.
Una vez creados no se pueden modificar.

``` go
var array [4]int
```

Podemos asignar valores haciendo referencia a la posición del array.

``` go
array[0] = 1
array[1] = 2
```

### 1.22.2 slices

Los slices son colecciones mutables de tipos de datos.

La creación puede hacerse de forma dinámica dentro del scope de una
función. No tenemos que especificar una longitud.

``` go
list := []int{0,1,2,3,4}
```

Para declarar y posteriormente modificar un slice es necesario hacerlo
con la función make, especificando la cantidad máxima del slice.

``` go
var slice = make([]int, 4)
slice[0] = 1
fmt.Println(slice)
// [1,0,0,0]
```

Si intentamos asignar un elemento más allá del tamaño del slice
obtendremos un error

``` go
slice[4] = 4
// panic: runtime error: index out of range [4] with length 4
```

#### 1.22.2.1 Particionado de slices

Los slices pueden partirse en un estilo similar al de Python,
especificando una posición incluyente para el primer dígito y excluyente
para el segundo.

Si no especificamos uno de los dos, tomará la primera posición para el
primer dígito y la última para el segundo dígito.

``` go
list[2:] // {2, 3, 4}
list[:2] // {0, 1}
list[2:3]// { 2 }
```

#### 1.22.2.2 Append

Los slices son mutables, por lo que es posible agregar nuevos elementos.
Esto se hace con append, y recibe cualquier número de elementos,
separados por comas.

``` go
list := append(list, 6)
list := append(list, 5, 6, 7)
```

Podemos crear un nuevo slice a partir de la desestructuración de un
slice. La desestructuración se lleva a cabo poniendo tres puntos (...)
al final del slice.

``` go
otherSlice :=[]int{7, 8, 9}
slice = append(slice, otherSlice...)
```

#### 1.22.2.3 Recorriendo slices con range

Parecido a la sintaxis de Python, podemos recorrer un array donde
asignamos cada elemento a una variable.

``` go
slice := []string = ["aldo", "javier", "marti"]
    for index, nombre := range slice {
}
```

## 1.23 Maps

Los maps o hash tables son el equivalente de los diccionarios. Poseen un
valor, encerrado e corchetes, que sirve como llave o key, seguido de
otro valor que es el valor o value.

También podemos crear un map con llaves y valores predeterminados
directamente colocándolo después del tipo del value en el diccionario.
Este diccionario es extendible y modificable.

``` go
cuenta := map[string]int{
        "Paloma": 100,
        "Renee": 200,
        "Kakuro": 300,
        "Manuela": 400,
}
cuenta["Paloma"] = 500
cuenta["Colombe"] = 900
```

Para crear un map vacio e irlo modificando posteriormente necesitamos
usar make y especificar el tipo de map.

``` go
diccionario := make(map[string]int)
diccionario["hidrogeno"] = 1
diccionario["Helio"] = 2
```

Si intentamos acceder a una llave que no existe, go nos devolverá su
respectivo zero value

``` go
diccionario := make(map[string]int)
fmt.Println(m["no_existe"])
// 0
```

Para distinguir entre un zero value, go nos provee de un segundo valor
de retorno, que nos indica si existe una llave. Este segundo valor es de
tipo booleano.

``` go
value, exist := diccionario["Helio"]
```

### 1.23.1 Capacidad opcional

Para establecer uan capacidad máxima en un map, le pasamos la máxima
capacidad como segundo argumento.

``` go
m := make(map[string]int,99)
```

Esta capacidad es solo indicativa para que el compilador asigne un
mínimo de memoria, si agregamos más llaves del valor máximo se seguirán
añadiendo, aunque no tan eficientemente.

### 1.23.2 delete

La función delete borra una llave del diccionarios

``` go
delete(diccionario, "Helio")
```

### 1.23.3 Recorrer map con range

De la misma manera que con un slice, podemos recorrer los maps con
range, asignando una variable para la llave y otra para el valor. El
contenido no se devolverá con un orden en particular.

``` go
for k, v := range m {
    (k,v)
}
```

Recuerda que se puede ignorar el valor de una llave o valor con el guión
bajo o underscore.

``` go
for _, v := range m {
    fmt.Println(v)
}
```

## 1.24 Structs

Los structs son colecciones de campos, se definen con el keyword type
seguido del nombre a asignar y la palabra struct.

``` go
type Videogame struct {
    Genre string
    Year int
}
```

### 1.24.1 Creación de un struct

Para crear un struct existen dos maneras

``` go
myVideogame := Videogame{Genre: "Horror", Year: 2021}
```

También es posible primero declarando el tipo de dato y después
accediendo a los campos. Si no especificamos un valor go le asignará el
respectivo zero value al tipo de variable.

``` go
var myVideogame Videogame
myVideogame.Genre = "Horror"
```

### 1.24.2 campos anónimos en structs

En go, es posible no especificar el nombre del campo de nuestro struct y
colocar únicamente el tipo de dato. Hecho así, los campos adoptarán el
nombre del tipo de dato y podemos acceder a ellos usándolos.

``` go
type Videogame struct {
    string
    int
}

myVideogame := Videogame{string: "Titulo", int: 2000}
fmt.Println(myVideogame)
// imprime {Titulo 2000}
```

## 1.25 Privacidad en structs, funciones y variables

Para marcar un struct, función o variable como privada o pública, igual
que sus respectivos campos para el struct, basta con declarar la primera
letra del campo con mayúsculas o minúsculas, para público y privado,
respectivamente.

Acceder a una entidad privada desde otro módulo, ajeno a donde se
declara, será imposible. Mientras que las entidades públicas son
accesibles desde cualquier modulo, incluso si el struct no se declaró
ahí

-   mayúsculas, público, accesible dentro y fuera del paquete donde se
    declara.
-   minúsculas, privado, solo accesible dentro del paquete donde se
    declara.

Si queremos declarar un struct como público es buena práctica agregar un
comentario en su parte superior.

``` go
// Videogame struct que representa a videogame
type Videogame struct {
    Genre string
    Year int
}
```

## 1.26 Manejo de errores con go

Go nos permite manejar errores creando una segunda variable de retorno
para la función que queremos probar. Si ocurre un error lo obtendremos y
err será diferente de nil.

``` go
message, err := greetings.Hello("")
if err != nil {
    log.Fatal(err)
}
```

## 1.27 Variables de entorno de go

Go maneja dos variables de entorno:

-   GOROOT, establece donde está localizado el SDK. Solo debe cambiarse
    para usar diferentes versiones de go.
-   GOPATH, define la raliz del espacio de trabajo. Por defecto es un
    directorio llamado go, dentro de home. Aquí se descargan los
    paquetes.

## 1.28 Importacion de paquetes con go mod

En go no existen las importaciones relativas. Se debe usar la ruta
absoluta considerando la variable de entorno GOPATH o usar go mod.

### 1.28.1 Creación de un archivo go.mod

Un archivo de go.mod nos permite establecer un directorio afuera de
GOPATH para tomar los paquetes. El comando go mod init, seguido del
nombre que tomará como la ruta base para nuestro paquete, creará un
archivo *go.mod* en el directorio donde lo ejecutemos.

Por ejemplo, si le pasamos como nombre mypackage, todas las carpetas que
estén al mismo nivel que el archivo y que declaren un package al inicio
de su archivo, se considerarán modulos.

``` go
go mod init mypackage 
```

Es buena práctica colocar el path completo en caso de que se trate de
una dirección de github

``` go
go mod init github.com/usuario/paquete
```

Si creamos un archivo *go.mod* en la raiz de nuestro proyecto,
terminaremos con la siguiente estructura. Aprecia que los archivos
*go.mod* y *main.go* están dentro del mismo nivel; la raiz del proyecto.

``` go
.
├── go.mod
├── main.go
└── videogame
    └── videogame.go

1 directory, 3 files
```

### 1.28.2 Contenido del archivo go.mod

Dentro del archivo go.mod que creo go se encuentra el nombre del modulo
a partir del cual crearemos la ruta de importación, así como la versión
de go.

``` go
module mypackage

go 1.15
```

### 1.28.3 Definir nombre de los modulos

El nombre de cada modulo se establecerá al principio de cada archivo,
colocándolo después de la palabra package. En este ejemplo será
*videogame*. Una vez definido el nombre del modulo, podemos crear un
modelo o struct en *videogame.go*. Considera las reglas de privacidad de
los structs.

``` go
package videogame

type Videogame struct {
    Id          int32
    Title       string
}
```

### 1.28.4 Importando el contenido de un paquete

Para importar el contenido de un paquete hacemos referencia a su ruta,
\<nombre_del_modulo_como_aparece_en_go_mod\>/\<nombre_del_package\>, es
decir mypackage/videogame. Observa como la ruta empieza con el nombre
que aparece en el archivo *go.mod*

``` go
package main

import (
    "mypackage/videogame"
    "fmt"
)

func main() {
    var videojuego = videogame.Videogame{
        Id:          1,
        Title:       "Life is strange",
    }
    fmt.Println(videojuego.Title)
}
```

### 1.28.5 Alias al importar paquetes

Podemos declarar un alias a la hora de importar un paquete anteponiendo
el alias antes de la importación

``` go
import nuestroAlias "ruta/a/paquete"
```

## 1.29 Structs y punteros

Cuando se crea una variable se le asigna una dirección de memoria, a la
que podemos acceder con el operador ampersand

``` go
a := 50
b := &a
```

Para modificar la variable usamos el caracter de desestructuración.

``` go
*b = 100
```

## 1.30 Composición en Go

Para acceder a instancias de structs en las funciones necesitamos
colocar un parentesis entre la keyword func y el nombre de la función.
Este paréntesis contiene el nombre que usaremos para acceder al struct
seguido del caracter asterisco y el nombre del struct.

Tip: Recuerda que debes cuidar la privacidad de la función, si la declaras
con minúsculas no podrás acceder a ella desde un archivo externo.

``` go
func (myStructVariable *Videogame) PrintYear(){
    fmt.Println(myStructVariable.Year)
}
```

Podemos acceder a sus valores mediante punteros lo pasamos dentro del
parentesis con el caracter de desestructuración.

``` go
func (myStructVariable *Videogame) IncreaseYear(){
    myStructVariable.Year = myStructVariable.Year + 1
}
```

Para posteriormente llamar al método a través de una instancia del
struct.

``` go
videogame.IncreaseYear()
```

### 1.30.1 Constructor en structs

Go no tiene un mecanismo de constructores implementados. Pero puede
crearse una función que devuelva un objeto ya inicializado con los
parámetros que querramos aplicar.

``` go
func NewVideogame(year int, genre string) *Videogame {
    return &Videogame{
        Genre: genre,
        Year: year,     
    }
}
```

### 1.30.2 Herencia en structs

Para que un struct en go posea todos los campos que declara otro struct,
le pasamos este último como un campo anónimo.

``` go
type Persona struct {
    Nombre string
    Sexo string
}

type Profesor struct {
    Persona
}
```

## 1.31 Polimorfismo usando interfaces

Las interfaces son un método para especificar el comportamiento de
diferentes objetos. Una interface se encargará de llamar al método que
le especificamos correspondiente a su tipo de struct. Un type puede
implementar múltiples interfaces.

``` go
type figuras4Lados interface{
    area() float64
}
```

Teniendo dos structs, y un método area diferente para cada uno: uno para
el cuadrado y otro para el rectángulo.

``` go
type rectangulo struct {
    base float64
    altura float64
}

type cuadrado struct {
    base float64
    altura float64
}

func (c cuadrado) area() float64 {
    return c.base * c.base 
}

func (r rectangulo) area() float64 {
    return r.base * r.altura 
}
```

La función que crearemos recibirá cualquiera de nuestros structs que
cuente con un método llamado area y, posteriormente, lo ejecutará.

``` go
func calcular (f figuras4Lados) {
    fmt.Println("Area", f.area())
}
```

Para llamar al método respectivo solo llamamos la función pasándole una
instancia del struct

``` go
miCuadrado := cuadrado{base: 2}
calcular(miCuadrado)
miRectangulo := rectangulo{base:2, altura: 4}
calcular(miRectangulo)
// Area 4
// Area 8
```

## 1.32 String en structs

La función para personalizar el output en consola en los structs debe
llamarse String(). Nota la ausencia del operador de desestructuración.

``` go
func (myStructVariable Videogame) String() string { 
    return fmt.Sprintf("Titulo: %s, Año: %d", myStructVariable.Title, myStructVariable.Year) 
}
```

### 1.32.1 slice de interfaces

Existen los slice de interfaces, que nos permiten guardar diferentes
tipos de datos en un solo slice. Un slice de interfaces lleva doble par
de llaves

``` go
myInterface := []interface{}{"Hola", 1, 3.4}
fmt.Println(myInterface...)
```

## 1.33 Concurrencia

Go es un lenguaje diseñado para ser concurrente, no paralelo. A las
corrutinas de go se les conoce como goroutines. La función main se
ejecuta dentro de una goroutine.

La manera de ejecutar una goroutine es agregando el keyword *go* antes
de una función.

``` go
fmt.Println("hey")
go write("hey again")
```

Aunque si nada más hacemos esto, el programa finalizará sin que se
ejecute nuestra goroutine. Para detener la ejecución del programa hasta
que se termine de ejecutar nuestra goroutine necesitamos un *WaitGroup*.

### 1.33.1 sync

Un WaitGroup acumula un conjunto de goroutines y las va liberando
paulatinamente. Un WaitGroup funciona con un contador que
incrementaremos por medio de su método add, y esperará al término de las
goroutines mientras ese contador sea mayor a cero.

El método Add incrementa el contador del WaitGroup.

``` go
var wg sync.WaitGroup
wg.Add(1)
wg.Wait()
```

Para indicarle cuando se ha finalizado una goroutine, usaremos el método
Done; que se encarga de disminuir una unidad del contador del WaitGroup.

``` go
go say("hey again", &wg)
```

Podemos usar defer sobre el método Done para garantizar que sea lo
último que se ejecute.

``` go
say(text string, wg *sync.WaitGroup) {
    defer wg.Done()
    fmt.Println(text)
}
```

### 1.33.2 Funciones anónimas en goroutines

Se usan frecuentemente en goroutines.

``` go
go func() {
}()
```

Los parentesis del final ejecutan la función anónima que declaramos y
reciben sus argumentos.

``` go
go func(text string) {
}("Texto")
```

## 1.34 Channels

Los channels o canales son conductos, que aceptan un único tipo de dato,
a através de los cuales introducimos información, que posteriormente
podremos sacar en otras goroutines.

``` go
c := make(chan string, 1)
```

cuando querramos hacer referencia al canal como argumento de otra
función tenemos que pasar el tipo de dato

``` go
func say(text string, c chan string) {

}
```

El tipo de dato de un canal también puede ser uno definido en un struct.

``` go
func say(text string, c chan MiStruct) {

}
```

Y para indicar la entrada de datos a través del channel usamos \<-

``` go
func say(text string, c chan string) {
    c <- text
}
```

Para obtener la respuesta del canal invertimos el orden de \<-

``` go
fmt.Println(<-c)
```

### 1.34.1 Canales de entrada y de salida

Hay canales que reciben información y canales que sacan información, de
manera predeterminada un canal es bidireccional, pero podemos declarar
canales de entrada y de salida. Para identificarlos, observa el flujo de
la flecha alrededor de la palabra chan; una entra a chan y la otra sale
de chan.

Este de entrada.

``` go
func say(text string, c chan<- string) {

}
```

Y este es un canal de salida.

``` go
func say(text string, c <-chan string) {

}
```

En ocasiones es importante definir el tipo de canal pues, con los
canales bidireccionales corremos el riesgo de ocasionar un bloqueo en
nuestro programa.

### 1.34.2 Deadlocks o bloqueos

La capacidad por defecto de un canal es de 0, esto provoca que no
podamos almacenar datos en los canales predeterminadamente. Si
intentamos almacenar un dato en un canal, obtendremos un error por parte
del compilador.

``` go
package main

import "fmt"

func main() {
    var channel = make(chan int)
    channel <- 42
    fmt.Println(<-channel)
    fmt.Println("Finished")
}
```

Esto devolverá un error

``` bash
fatal error: all goroutines are asleep - deadlock!
```

### 1.34.3 Previniendo deadlocks

Podemos usar inmediatamente el dato del canal usando una goroutine.
Observa el uso de la palabra *go* y como esta función recibe el canal
como argumento.

``` go
package main

import "fmt"

func main() {
    var channel = make(chan int)
    go func(channel chan int) {
        channel <- 42
    }(channel)
    fmt.Println(<-channel)
    fmt.Println("Finished")
}
```

Otra manera de evitar el error es usar canales con buffer (buffered
channels).

``` go
package main

import "fmt"

func main() {
    var channel = make(chan int, 1)
    channel <- 42
    fmt.Println(<-channel)
    fmt.Println("Finished")
}
```

### 1.34.4 Canales con buffer

Un canal con buffer es solo un canal que cuenta con una capacidad. Para
establecer cuantos datos soporta un canal, se lo pasamos como argumento
al método make.

``` go
package main

import "fmt"

func main() {
    var channel = make(chan int, 1)
    channel <- 42
    fmt.Println(<-channel)
    fmt.Println("Finished")
}
```

### 1.34.5 canal de canales

Es posible tener un canal de canales

``` go
type Worker struct {
    WorkerPool chan chan Job
}
```

### 1.34.6 Conocer el número de CPU's con GO

El método runtime nos permite devolver el número de procesadores de
nuestro sistema.

``` go
var numCPU = runtime.NumCPU()
```

## 1.35 Operaciones bloqueantes

Las operaciones que mandan o reciben valores de canales son bloqueantes
dentro de su propia goroutine.

-   Si una operación recibe información de un canal, se bloqueará hasta
    que la reciba.
-   Si una operación manda información a un canal, esperará hasta que la
    información enviada sea recibida.

``` go
package main

import (
    "fmt"
)

func multiplyByTwo(num int, out chan<- int) {
    result := num * 2

    // redirige el resultado al canal out
    out <- result
}

func main() {
    n := 2

    out := make(chan int)

    // La llamamos como una goroutine
    go multiplyByTwo(n, out)

    // Una vez que se reciba el resultado del canal out, se puede proceder
    fmt.Println(<-out)
}
```

La función que imprime el canal bloqueará la ejecución del código hasta
que reciba la información del canal out.

### 1.35.1 Usando structs vacios para bloquear

Entre algunos programadores se suelen usar structs vacios para el
bloqueo de un programa

``` go
// Creamos el canal
done := make(chan struct{})
// Le pasamos un struct vacio
done <- struct{}{}
// El programa se bloquea hasta que leamos ese valor
<-done
```

## 1.36 Range, close y select en channels

La función len nos dice cuantos datos hay en un channel y cap nos
devuelve la capacidad máxima, respectivamente.

``` go
c := make(chan string, 2)
c <- "dato1"
c <- "dato2"
fmt.Println(len(c), cap(c))
```

### 1.36.1 close

close cierra el canal, incluso aunque tenga capacidad

``` go
c :=make(chan string, 3)
c <- "dato1"
c <- "dato2"
close(c)
```

### 1.36.2 Range

Range es ideal para iterar sobre los datos de los canales.

``` go
for message := range c {

}
```

Sin embargo **no existe certeza sobre que dato recibiremos**

### 1.36.3 Select

Select nos permite definir acciones diferentes para cada canal, a esto
se le llama **multiplexación**. Por lo que es importante conocer el
número de canales y de datos para poder procesarlos.

``` go
func message(text string, c chan string) {
    c <- text
}
funct main() {
    email1 := make(chan string)
    email2 := make(chan string)

    go message("mensaje1", email1)
    go message("mensaje2", email2)

    for i:= 0; i < 2; i++ {
        select {
            case m1 := <- email1:
                fmt.Println("Recibido email1", m1)
            case m2 := <- email2:
                fmt.Println("Recibido email1", m2)
        }
    }
}
```

## 1.37 Go get: manejador de paquetes

El equivalente de pip y npm pero en go.

Para obtener paquetes se obtienen corriendo el comando go get en
consola. **Recuerda configurar el GOPATH o correr go mod init proyecto**
en la raiz de tu proyecto antes de obtener los paquetes.

``` go
go get golang.org/x/website/tour
```

Si quieres más nivel de verbosidad agrega la opción -v.

Para especificar una versión necesitamos agregarla como parte de la ruta

``` go
go get rsc.io/quote/v3
```

## 1.38 Librerías

Hay un directorio de frameworks, librerías y utilidades en [Awesome
go](http://awesome-go.com/)

## 1.39 Go modules: Ir más allá del GoPath con Echo

Para reemplazar librerías hacemos un git clone de la libreríaa que
necesitamos, lo editamos y, posteriormente, usamos replace. Esto creará
una redirección en el archivo go.mod

``` go
go mod edit -replace github.com/usuario/proyecto=./libreriaLocal
```

Para cancelar un replace usamos dropreplace y especificamos cual
queremos cancelar.

``` go
go mod edit -dropreplace github.com/usuario/proyecto
```

Si queremos verificar los modulos

``` go
go mod verify
```

Imprime las dependencias del módulo actual.

``` go
go list -m all
```

Para empaquetar todo el código del proyecto, incluyendo librerías de
terceros y el código de go, usamos vendor.

``` go
go mod vendor
```

Esto creará una carpeta vendor con los archivos necesarios para que el
proyecto se pueda ejecutar de la manera correcta.

``` go
vendor/
├── github.com
│   ├── golang-jwt
│   │   └── jwt
│   │       ├── claims.go
```

En go.sum se listarán todos los archivos y sus hashes.

``` go
github.com/davecgh/go-spew v1.1.0/go.mod h1:J7Y8YcW2NihsgmVo/mv3lAwl/skON4iLHjSsI+c5H38=
```

El comando para limpiar librerías no utilizadas.

``` go
go mod tidy
```

## 1.40 Librerías de desarrollo web

-   [Hugo](https://gohugo.io/)
-   [Hugo themes](https://themes.gohugo.io/)
-   [Echo](https://echo.labstack.com/)
-   [Gin gonic](https://gin-gonic.com/)
-   [Beego](https://beego.me/)
-   [Revel](https://revel.github.io/)
-   [Buffalo](https://gobuffalo.io/en/)

## 1.41 Enlaces útiles

-   [Atour of go](http://tour.golang.com/)
-   [Play with go](https://play-with-go.dev/)
-   [Go by example](https://gobyexample.com/)
-   [Comunidad go slack](http://gophers.slack.com/)
-   [Podcast de
    go](https://open.spotify.com/show/2cKdcxETn7jDp7uJCwqmSE?si=q88UkEYQTxS0t1QVws22tw&amp;nd=1)


## 1.2 Race conditions

Sucede cuando dos diferentes procesos leen y modifican un mismo dato,
podemos tener resultados impredecibles dependiendo de que proceso
modifique primero. Por ejemplo un programa que determina el saldo total
leyendo el saldo inicial y sumandole un valor, si ambos procesos leen un
saldo X y le suman el depósito, puede ocurrir que tengamos un resultado
igual a X + Y o X + Z, cuando el resultado correcto debería ser X + Y +
Z.

## 1.3 Netcat

Netcat es una librería que nos permite leer y escribir de una conexión
TCP especificada.

### 1.3.1 Conectarse con netcat

Netcat nos permite conectarnos por medio de su método Dial

``` go
conn, err := net.Dial("tcp", fmt.Sprintf("%s:%d", *site, port))
if err != nil {
    return
}
```

### 1.3.2 Servir contenido con netcat

También nos permite escuchar conexiones usando su método Listen

``` go
listener, err := net.Listen("tcp", fmt.Sprintf("%s:%d", *host, *port))
if err != nil {
    log.Fatal(err)
}
```

Una vez creado el listener de conexiones, podemos escucharlas usando un
bucle infinito. Mira como si ocurre un error continuamos el bucle en
lugar de terminar el programa. Además, para evitar bloqueos del programa
las conexiones son manejadas de manera concurrente.

``` go
for {
        conn, err := listener.Accept()
        if err != nil {
            log.Print(err)
            // continue is needed instead of return,
            //otherwise the chat server will finish its execution
            continue
        }
        go HandleConnection(conn)
```

## 1.4 Sync Mutex: Lock y Unlock

Podemos ver si nuestro programa crea una condición de carrera con el
comando build.

``` go
go build --race main.go
```

Para solucionar el problema de las condiciones de carrera, creamos una
variable de tipo *sync.Mutex*

``` go
var lock sync.Mutex

func (wg *sync.WaitGroup, lock *sync.Mutex)
```

Dentro de la función usaremos un modelo de candado para bloquear la
modificación de los datos que son accesados desde diferentes goroutines.

``` go
lock.Lock()
```

El lock es un candado que bloquea el programa en determinada linea hasta
que ocurra un Unlock.

Para desbloquear llamamos al método Unlock.

``` go
lock.Lock()
// Todo lo que está aquí está bloqueado para el resto de las goroutines
lock.Unlock()
```

### 1.4.1 Mutex de lectura y escritura

Go provee locks que permiten una sola goroutine que escriba y múltiples
lectores por medio de RWMutex

``` go
var lock sync.RWMutex
```

Ahora podemos llamar a los métodos de Lectura:

``` go
lock.RLock()
//
lock.RUnlock()
```

El contenido dentro del candado de lectura puede ser leído múltiples
veces.
## 1.1 Servidor básico de Go

Go puede crear un servidor básico usando la librería estándar.

Para crear un servidor basta usar el método ListenAndServe, pasándole el puerto sobre el que se servirá el contenido.

``` go
func main() {

    port := ":8080"
    err := http.ListenAndServe(port, nil)
    if err != nil {
    	log.Fatal(err)
    }
}
```

### 1.1.1 Handler para cada ruta

La configuración anterior no hace prácticamente nada, necesitamos asignar una URI con una función de go.

Para esto necesitamos crear una función que servirá como handler, esta debe recibir un objeto de respuesta (w) y un objeto de petición (r)

``` go
func MyHandler(w http.ResponseWriter, r *http.Request) {}
```

Mediante el objeto de respuesta podemos establecer headers e incluso devolver JSON. Colocamos los headers accediendo al método Header y luego con Set estableciendo la llave valor.

Mientras que para devolver JSON, creamos un nuevo codificador que recibe el objeto de respuesta (w) como parámetro. 

``` go
type HomeResponse struct {
    Message string
    Status  bool
}

func MyHandler(w http.ResponseWriter, r *http.Request) {
    w.Header().Set("Content-Type", "application/json")
    json.NewEncoder(w).Encode(HomeResponse{
    	Message: "Welcome to homepage",
    	Status:  true,
    })
}
```

Una vez creado el handler, necesitamos asignarlo a una ruta que se colocará antes del método ListenAndServe.

``` go
func main() {

    http.HandleFunc("/", MyHandler)
    port := ":8080"
    err := http.ListenAndServe(port, nil)
    if err != nil {
    	log.Fatal(err)
    }
}
```

### 1.1.2 Manejo de sesiones

Para el manejo de sesiones podemos usar gorilla

``` bash
go get github.com/gorilla/sessions
```

Primero necesitamos crear un objeto store, este objeto recibirá una llave secreta, que probablemente deberías almacenar como una variable de entorno en tu sistema.

``` bash
var store = sessions.NewCookieStore([]byte("ThisIsMysecretKey"))
```

El objeto go nos permite establecer una cookie para asignarla a una sesión y realizar cambios en el objeto session, que se comporta parecido a un map. 

Todos los cambios en la sesión deben guardarse para persistir.

``` go
func MySessionHandler(w http.ResponseWriter, r *http.Request) {
    session, _ := store.Get(r, "<nombre_cookie>")
    session.Values["foo"] = "bar"
    session.Values[42] = 43
    err := session.Save(r, w)
    if err != nil {
    	http.Error(w, err.Error(), http.StatusInternalServerError)
    	return
    }
```

## 1.2 Testing en go

Go ya cuenta con un modulo de testing en su librería estándar que está
lista para nuestro uso, solo hace falta importarla y usarla.

### 1.2.1 Preparación del testing en go

Para que se lleven a cabo los tests necesitamos:

-   Un archivo que termine en \_\_test.go\_
-   Correr el comando *go test*

Si vas a asignarle un nombre a tu módulo **, nunca uses el nombre
testing**. ¿Por qué? si lo haces, go revisará primero su propio modulo
*testing* con el tuyo, devolviéndote esos resultados en lugar de los
tuyos.

``` go
.├── go.mod
├── main.go
└── testing
    ├── main.go
    └── main_test.go

1 directory, 5 files
```

Dentro del archivo *testing/main_test.go* vamos a crear nuestros tests;
una función que reciba de argumento nuestro paquete de testing con el
carácter de desestructuración.

``` go
package main

import "testing"

func TestDivision(t *testing.T) {
    total := Division(10, 2)
    if total != 5 {
        t.Errorf("División incorrecta, obtuvimos %d pero se esperaba %d", total, 5)
    }
}
```

Dentro de *testing/main.go* colocamos nuestra función a probar.

``` go
package main

func Division(a int, b int) int {
    return a / b
}
```

### 1.2.2 Ejecutar los tests

Para ejecutar los tests necesitamos estar en el directorio donde se
encuentran nuestros archivos terminados en \_\_test.go\_ y correr el
comando *go test*. Si el test aprueba obtendremos este resultado:

``` go
cd testing/
go test

PASS
ok      main/testing    0.001s
```

Si modificamos la función para que falle, obtendremos:

``` go
--- FAIL: TestDivision (0.00s)
    main_test.go:14: División incorrecta, obtuvimos 12 pero se esperaba 5
FAIL
exit status 1
FAIL    main/testing    0.001s
```

### 1.2.3 Manejo de casos con tablas

En el ejemplo anterior necesitariamos una función por cada test, pero
eso se puede volver tedioso si los casos a manejar son demasiados. Para
ello podemos usar un array compuesto de structs, donde cada struct
representa un caso a probar.

En el código siguiente, observa como cada struct de nuestra lista son
solo tres números; los primeros dos representan los argumentos, y el
último el resultado.

``` go
tables := []struct {
    x int
    y int
    r int
}{
    {100, 10, 10}, // 100 / 10 = 10
    {200, 20, 10}, // 200 / 20 = 10
    {300, 30, 10},
    {1000, 100, 10},
}
```

De seguro ya notaste que no estamos cubriendo la división entre cero,
pero déjalo así por ahora.

Ya que contamos con nuestro array de structs, iteraremos sobre cada uno
de sus elementos usando range

``` go
for _, table := range tables {
        total := Division(table.x, table.y)
        if total != table.r {
            t.Errorf("División de %d entre %d incorrecta, obtuvimos: %d, pero el resultado es: %d.", table.x, table.y, total, table.r)
        }
    }
```

Si todo salió bien, pasaremos todas las pruebas.

### 1.2.4 Coverage

Coverage ya forma parte del código en go, por lo que no necesitamos
librerías externas. Si no sabes que es Coverage, piensa en él como el
porcentaje de tu código que pasa por pruebas.

Para calcular el coverage basta con agregar el flag *-cover* al comando
*go test*

``` bash
go test -cover

PASS
coverage: 100.0% of statements
ok      _/home/eduardo/Programacion/goTesting/testing   0.002s
```

Como nuestra función es muy corta, obtenemos un resultado de 100%, sin
desglosar, de coverage

#### 1.2.4.1 Exportar resultados de coverage

Podemos mandar el toda la información en bruto de nuestro test de
coverage a un archivo externo con el flag *-coverprofile*.

``` bash
go test -coverprofile=coverage.out

mode: set
/home/eduardo/Programacion/goTesting/testing/main.go:3.33,5.2 1 1
```

Este archivo, de nombre *coverage.out* , que fue generado, es un archivo
que contiene información en bruto y que **será necesario para visualizar
los resultados** de una manera más detallada.

#### 1.2.4.2 Visualización de resultados con go tool

Para resumir de una manera más legible la información del archivo que
contiene nuestro test de coverage, usaremos el comando tool, acompañado
del flag *-func* , seguido del nombre del archivo. Lo que nos devolverá
un resultado de coverage desglosado.

``` bash
go tool cover -func=coverage.out

/home/eduardo/Programacion/goTesting/testing/main.go:3: Division        100.0%
total:                                                  (statements)    100.0%
```

Go también nos permite visualizar el coverage en formato HTML, con
colores, directo en nuestro navegador. Para ello usamos la opción -html,
seguido del archivo con los datos de coverage.

Al ejecutar el comando, se abrirá una pestaña de nuestro navegador y nos
mostrará los resultados testeados en verde y los no testeados en rojos.

``` bash
go tool cover -html=coverage.out
```

Si decidimos modificar nuestra función para que maneje los casos de la
división por cero, y corremos los tests de coverage de nuevo,
obtendremos un esquema diferente al anterior. Ahora sí aparece una
sección de código no cubierto por los tests en colo rojo y nuestro
coverage bajó a 50%.

### 1.2.5 Profiling

go nos permite perfilar la eficiencia de nuestro código analizando el
desempeño del código.

``` go
go test -cpuprofile=cpu.out
```

Para ver el resumen del uso de cpu usamos tool pprof.

``` go
go tool pprof cpu.out
```

Nos devolverá una consola, si escribimos top veremos el comportamiento
de los programas.

``` go
(pprof) top
```

Dentro de pprof podemos inspeccionar el tiempo promedio de ejecución de
cada línea de una función, usando:

``` go
list <nombre_funcion>
```

Con web podemos ver una visualización de nuestros resultados en el
navegador.

``` go
(pprof) web
```

Y exportarlo a pdf con

``` go
(pprof) pdf
```

### 1.2.6 Mock

Si queremos emular el comportamiento de base de datos api usamos una
función mock.

Para eso vamos a declararla en nuestro struct como tipo de dato func() y
a continuación vamos a ponerle un contenido que retorne lo que
necesitamos para emular la respuesta.

``` go
package main

import "testing"

func TestGetFullTimeEmployeeById(t *testing.T) {
    table := []struct {
        id               int
        dni              string
        mockFunc         func()
        expectedEmployee FullTimeEmployee
    }{
        {
            id:  1,
            dni: "12345678",
            mockFunc: func() {
                GetEmployeeByID = func(id int) (Employee, error) {
                    return Employee{
                        Id:       1,
                        Position: "CEO",
                    }, nil
                }

                GetPersonByDNI = func(dni string) (Person, error) {
                    return Person{
                        Name: "John Doe",
                        Age:  30,
                        DNI:  "12345678",
                    }, nil
                }
            },
        },
    }

}
```

## 1.3 Asincronía en go

### 1.3.1 Unbuffered channels y buffered channels

Es un canal sin una capacidad máxima definida. Un canal sin buffer
transmite un mensaje en cuanto lo recibe. Tenemos que estar seguros de
que hay una función lista para recibir los datos del canal.

``` go
// no se imprime el 1 
// Error: fatal error: all goroutines are asleep - deadlock!
c := make(chan int)
c <- 1
fmt.Println(<-c)
```

Un buffered channel es una cola que cuenta con una cantidad fija de
espacios, sirve para imitar la cantidad de GoRoutines siendo ejecutadas.
Mientras que un canal con buffer recibe su capacidad total y no se
bloquea esperando la función.

``` go
// Se imprime el 1
c := make(chan int 3)
c <- 1
fmt.Println(<-c)
```

### 1.3.2 Waitgroups

Los Waitgroups sirven para sincronizar las goroutines.

Podemos crear un grupo de espera a través del paquete sync

``` go
var wg sync.WaitGroup
```

<div class="warning">

<div class="title">

Warning

</div>

Los valores de wg como argumento a funciones deben pasarse por
referencia.

</div>

``` go
var wg sync.WaitGroup
myFuncion(&go)
func(wg *sync.WaiGroup)
```

Con el método Add podemos añadir un contador al WaitGroup

``` go
wg.Add(1)
```

Para remover un contador usamos el método Done

``` go
wg.Done()
```

El método wg.Wait detendrá la ejecución del código hasta que no haya más
contadores.

``` go
wg.Wait()
```

### 1.3.3 canales de lectura y escritura

Canal de solo escritura: Flecha \<- a la derecha de chan. Como si
entrara en el canal

``` go
func Generator(c chan<- int)
```

Canal de solo lectura: Flecha \<- a la izquierda de chan como si saliera
del canal.

``` go
func Print(c <-chan int)
```

### 1.3.4 Worker pools

Es un modelo que permite que un conjunto de workers, implementados con
goroutines, efectuen tareas en una cola de tareas, implementada con
channels.

``` go
func Worker(id int, jobs <-chan int, results chan<- int) {
    for j := range jobs {
        fmt.Println("worker", id, "started  job", j)
        fib := Fibonacci(j)
        results <- fib
        fmt.Println("worker", id, "finished job", j, "result", fib)
    }
}
```

Primero definimos las tareas a ejecutar, creamos los canales.

``` go
// numeros de fibonacci 
tasks := []int{2, 3, 4, 5, 7, 10, 12, 35, 37, 40, 41, 42}

// tareas
nWorkers := 3
jobs := make(chan int, len(tasks))
results := make(chan int, len(tasks))
```

Inicializamos los workers

``` go
for w := 1; w <= nWorkers; w++ {
    go Worker(w, jobs, results)
}
```

Les asignamos las tareas

``` go
// give the workers jobs
for _, t := range tasks {
    jobs <- t
}
close(jobs)
```

### 1.3.5 Multiplexación

Se usa la palabra reservada select y case en conjunto para identificar
canales y actuar en consecuencia.

``` go
select {
        case res := <-c1:
            fmt.Println("Received", res, "from c1")
        case res := <-c2:
            fmt.Println("Received", res, "from c2")
        }
    }
```

## 1.4 Patrón workers, jobs y dispatchers

### 1.4.1 Jobs

Un job representa una tarea a ser ejecutada. Posee un nombre, un tiempo
de duración entre jobs y un número.

``` go
type Job struct {
    Name   string        // nombre del job
    Delay  time.Duration // retraso entre cada job
    Number int           // número que se procesará 
}
```

### 1.4.2 Worker

Un worker representa la unidad que se va a encargar de obtener los jobs
del JobQueue y procesarlos usando su método Start. En el método Start se
ejecutará la función encargada de procesar los números, en este caso
fibonacci

``` go
type Worker struct {
    Id         int           
    JobQueue   chan Job      // Jobs a procesar
    WorkerPool chan chan Job // Pool de workers (canal de canales de Job)
    Quit       chan bool     // Finalizar worker
}
```

### 1.4.3 Dispatcher

El dispatcher se encarga de asignar jobs a los workers.

``` go
type Dispatcher struct {
    WorkerPool chan chan Job // Pool de workers
    MaxWorkers int           // Máximo número de workers
    JobQueue   chan Job      // Trabajos a ser procesados
}
```

### 1.4.4 NewWorker

Crea un nuevo worker con id y su pool de workers.

``` go
func NewWorker(id int, workerPool chan chan Job) *Worker {
    return &Worker{
        Id:         id,
        WorkerPool: workerPool, // workerPool al que pertenece
        JobQueue:   make(chan Job),  // Crea una cola de jobs
        Quit:       make(chan bool), // Channel para finalizar los jobs
    }
}
```

### 1.4.5 Método Start del Worker

Comienza la ejecución de los workers.

``` go
func (w Worker) Start() {
    go func() {
        for {
            w.WorkerPool <- w.JobQueue // Agregar un Job de la cola de Jobs al pool de workers

            // Multiplexing
            select {
            case job := <-w.JobQueue: // Sacar un Job de la cola
                fmt.Printf("worker%d: started %s, %d\n", w.Id, job.Name, job.Number)
                fib := Fibonacci(job.Number) // Le pasamos la propiedad Number a la función que procesará nuestros datos
                time.Sleep(job.Delay) // Dormimos el retraso especificado por cada job
                // Imprimimos el valor fib que obtuvimos
                fmt.Printf("worker%d: finished %s, %d with result %d\n", w.Id, job.Name, job.Number, fib)
            case <-w.Quit: // Si el worker tiene quit, lo finalizamos.
                fmt.Printf("Worker with id %d Stopped\n", w.Id)
                return
            }
        }
    }()
}
```

### 1.4.6 Método Stop del worker

Cambia la propiedad Quit del worker.

``` go
func (w Worker) Stop() {
    go func() {
        w.Quit <- true
    }()
}
```

### 1.4.7 Creador del dispatch

Crea un nuevo dispatcher con los argumentos que le pasamos.

``` go
func NewDispatcher(jobQueue chan Job, maxWorkers int) *Dispatcher {
    workerPool := make(chan chan Job, maxWorkers) // Hacemos un pool de workers.
    return &Dispatcher{
        WorkerPool: workerPool,
        MaxWorkers: maxWorkers,
        JobQueue:   jobQueue,
    }
}
```

### 1.4.8 Método dispatch del Dispatcher

El método dispatch creará un loop infinito, en el cual escuchará por
objetos de la cola de Jobs y los asignará a un worker

``` go
func (d *Dispatcher) dispatch() {
    for {
        select {
        case job := <-d.JobQueue: // Obtén un job de la cola de Jobs del dispatcher
            // Asigna el Job a un worker
            go func() {
                jobChannel := <-d.WorkerPool // Obten un jobChannel del Worker Pool
                jobChannel <- job // Pasale el job a ese jobChannel 
            }()
        }
    }
}
```

### 1.4.9 Método run del dispatch

Crea un worker hasta que alcancemos el máximo número de workers y
córrelo.

``` go
func (d *Dispatcher) Run() {
    for i := 0; i < d.MaxWorkers; i++ {
        worker := NewWorker(i+1, d.WorkerPool) //Asignalo al workerPool del dispatcher
        worker.Start() // Haz que el worker procese los jobs pendientes
    }

    go d.dispatch()
}
```

## 1.5 Creando un servidor web

Creamos una función llamada RequestHandler que reciba un objeto
ResponseWriter que escribe en la respuesta HTTP, un objeto Request, que
contiene la petición HTTP y una cola de tareas jobQueue.

``` go
func RequestHandler(w http.ResponseWriter, r *http.Request, jobQueue chan Job) {
    if r.Method != "POST" {
        w.Header().Set("Allow", "POST")
        w.WriterHeader(http.StatusMethodNotallowed)
    }
```

La función parseDuration parsea texto como "3s" y lo transforma en
tiempo real. El método FormValue devolverá obtendrá valor del argumento
que le enviemos.

Si el valor delay es incorrecto, devolverá un error

``` go
delay, err := time.ParseDuration(r.FormValue("delay"))
if err != nil {
    http.Error(w, "Invalid delay", http.StatusBadRequest)
    return
}
```

La función Atoi transforma un string de un número en su valor númerico.

``` go
value, err := strconv.Atoi(r.FormValue("value"))
if err != nil {
    http.Error(w, "Invalid value", http.StatusBadRequest)
    return
}
```

Revisamos también que no recibamos un string vacio.

``` go
name := r.FormValue("name")
if name == "" {
    http.Error(w, "Invalid name", http.StatusBadRequest)
    return
}
```

Ahora creamos un Job y se lo pasamos a la cola de jobs y devolvemos un
estado 201 mediante el objeto http que indica que se creo un job.

``` go
job := Job{Name: name, Delay: delay, Number: value}
jobQueue <- job
w.WriterHeader(http.StatusCreated)
}
```

Y ahora la función main, que se encargará de crear un jobQueue, un
dispatcher y lo correrá.

``` go
funct main () {
    const (
        maxWorkers = 4
        maxQueueSize = 20
        port = ":8081"
    )

    jobQueue := make(chan Job, maxQueueSize)
    dispatcher := newDispatcher(jobQueue, maxWorkers)

    dispatcher.Run()
```

Por último, la creación de un servidor se hace con el método HandleFunc
del objeto http. Este recibe una ruta y necesita como argumento una
función que reciba los objetos ResponseWriter y Request, como primer y
segundo parámetro, respectivamente. El tercer parámetro será al cola de
Jobs.

``` go
http.HandleFunc("/fib", func (w http.ResponseWriter, r*http.Request){
    RequestHandler(w, r, jobQueue)
})
```

### 1.5.1 Middleware en un servidor web

En Go podemos declarar un middleware como una función que reciba un
http.Handler y retorne un http.Handler. Para pasar al siguiente
httpHandler vamos a ejecutar el método ServeHTTP del http.Handler que el
middleware recibe como argumento.

``` go
func middleware(originalHandler http.Handler) http.Handler {
return http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
        fmt.Println("Running before handler")
        w.Write([]byte("Hijacking Request "))
        originalHandler.ServeHTTP(w, r)
        fmt.Println("Running after handler")
})
}
```

Y ahora basta con envolver nuestra http.Handler original en el
middleware.

``` go
func main() {
    // converting our handler function to handler 
    // type to make use of our middleware 
    myHandler := http.HandlerFunc(handler)
    http.Handle("/", middleware(myHandler)) 
    http.ListenAndServe(":8000", nil)
}
```

Para evitar anidar múltiples middlewares podemos usar programación
funcional.

## 1.6 Peticiones http

Go puede realizar peticiones http usando su método GET. Observa como se
cierra la conexión **solo tras haber verificando que no hubo un error**
con la petición, porque si la petición falla, resp será nulo y estaremos
llamando a un método de un objeto nulo.

``` go
func main() {  
    resp, err := http.Get("https://example.org")
    if err != nil {
        fmt.Println(err)
        return
    }

    defer resp.Body.Close() //Es necesario cerrar la conexión.
```

Sin embargo si hay un fallo de redirección ambas respuestas, resp y err,
serán no nulas, por lo que es necesario manejar también esa situación

``` go
if resp != nil {
    defer resp.Body.Close()
}

if err != nil {
    fmt.Println(err)
    return
}
```

Ahora ya podemos leer la respuesta de la propiedad Body.

``` go
body, err := ioutil.ReadAll(resp.Body)
if err != nil {
    fmt.Println(err)
    return
}

fmt.Println(string(body))
```

## 1.7 Panic

Podemos recuperarnos de errores tipo panic llamando a la función
recover. **recover solo puede usarse dentro de una función con defer
directa**, es decir no puede estar dentro de una función que llame a
otra función, incluso si la función original tiene el atributo defer.

``` go
defer func() {
        fmt.Println("recovered:",recover())
    }()
```

## 1.8 JSON

Para crear un json usaremos el paquete json y su método Marshal

``` go
package main

import (
"encoding/json"
"fmt"
)

objeto = slice | array | map

nuestroJson, _ := json.Marshal(objeto) 
```

Podemos convertir cualquiera de los objetos slice, array o map en un
json. Sin embargo, si lo creamos, será un array de números. Necesitamos
convertirlo primero en un string

``` go
[123 34 117 110 111 34 58 49 125]
```

Si queremos obtener la representación real de un objeto JSON usamos el
método string para convertirlo.

``` go
jsonString := string(nuestroJson)
fmt.Println(jsonString)
//{"uno":1}
```

### 1.8.1 Serialización

Cuando go requiere establecer como se llamará un campo tras
serializarlo, lo especificamos con una cadena de texto usando backticks
de la siguiente manera:

``` go
type HomeResponse struct {
Message string `json:"mesage"`
Status  bool   `json:"status"`
```

}

## 1.9 Argumentos en Go

Go provee un objeto llamado flag para recibir argumentos

``` go
import "flag"

var (
    port = flag.Int("p", 3090, "port")
    host = flag.String("h", "localhost", "host")
)
```

El método que llama depende del tipo de dato que queremos capturar y
cada método toma 3 argumentos: 1. El nombre del flag 2. El valor por
defecto 3. La descripción

Ahora ya podemos llamar a los flags de nuestro programa

``` go
go run main.go --port 80 --host example.org
```
## Go Protobuffers y gRPC

[GoProtoBuffersYgRPC](../../GoProtobuffersYgRPC/1.-Protobuffers-y-gRPC-en-Go.md)## Go REST Web Sockets

[Go Rest Web Sockets](../../GoRestWebSockets/1.-Go-Web-sockets-y-REST-con-Gorilla.md)## Crear tareas períodicas con Go

Para crear tareas periódicas echamos manos de la librería [gocron](https://github.com/go-co-op/gocron).

### Creación de un Scheduler

El primer paso es crear un NewScheduler, este requiere un objeto timezone para funcionar.

``` go
s := gocron.NewScheduler(time.UTC)
```

### Configurando periodicidad

A continuación programamos la periodicidad de nuestra scheduler. Y le pasamos la función que queremos que se ejecute

``` go
s.Every(1).
	Seconds().
	Do(func() {})
```

Este mismo scheduler puede recibir más tareas, para ello solamente hay que escribirle el tiempo.

También es posible ejecutar una fecha exacta

``` go

scheduledTime := time.Now().UTC().Add(1*time.Minute)

s.Every(1).
	Day().
    At(scheduledTime.Format("15:04"))
	Do(func() {})
```

### Especificando el modo

Esta librería permite dos modos, el modo bloqueante y el modo asíncrono

``` go
// ...
s.StarBlocking()
```

``` go
// ...
s.StartAsync()
```

### Agregando tags

Para colocar etiquetas entre los tags podemos agregarlas

``` go
s.Every(2).
	Seconds().
    Tag("<nombre>").
	Do(func() {})
```

### Remover tag

Para remover un tag de un scheduler usamos el método

``` go
s.RemoveByTag("<nombre>")
```

