# Protobuffers y gRPC en Go

Protocol Buffers (abreviado como Protobuf) es un formato binario de intercambio de datos disponible en múltiples lenguajes de programación.

Protobuf se utiliza en combinación con HTTP y RPC (Remote Procedure Call o llamada a procedimiento remoto) para llevar a cabo el proceso de comunicación cliente-servidor local y remota.

Al estar en formato binario, se requiere su deserialización y serialización para su manejo. Sin embargo este proceso es mucho más rápido que el que ocurre en JSON.



## 1.1 gRPC

gRPC es un protocolo creado por Google basado en RPC.

### 1.1.1 ¿Qué es RPC?


Es protocolo que oculta la implementación en el backend de la petición realizada por cliente, aunque el cliente sepa como hacer la petición y pueda llamarla como si fuera suya.

### 1.1.2 Protocolo gRPC

Usando como base RPC, Google creó una versión de mejorada llamada gRPC donde resaltan dos aspectos HTTP2 y Protobuffers:

* El transporte de datos funciona con HTTP2.
    * Permite crear multiplexación a la hora de enviar mensajes: más mensajes en la conexión TCP de manera simultanea.
    * Permite serializar datos.
* Usa los protobuffers como estructura para intercambio de datos.
    * Permite serializar y deserializar datos más rápido.

## 1.2 Métodos de gRPC

Existen dos métodos unary y streaming.

### 1.2.1 Unary

Similar a como funciona una API con arquitectura REST; el cliente envía una petición al servidor y el servidor la responde.

Se define

``` go
rpc Nombre(Request) returns (Response)
```

### 1.2.2 Streaming

Permite constante envío de data en un canal.

* Del lado del cliente: el cliente envía muchas peticiones, y el servidor responde una sola vez. rpc Nombre(stream Request) returns (Response)
* Del lado del servidor: el cliente realiza una sola petición, y el servidor responde enviando la data en partes. rpc Nombre(Request) returns (stream Response)
* Bidireccional: cliente y servidor deciden ambos comunicarse por streaming de data. rpc Nombre(stream Request) returns (stream Response)

La serialización y deserialización de ambos formatos siempre ocurre, con la ventaja de que los protobbufers tienen mucha menor latencia que los JSON al hacerlo.

## 1.3 Comparación de protobuffers y JSON

JSON es un formato de mensajes eficiente para JavaScript con las siguientes características

* Pares de key-value o llave y valor.
* Es más fácil de leer y entender por humanos.
* Debido a que implica serialización y deserialización con otros lenguajes, es más costoso en rendimiento si se quiere trabajar con otro lenguaje.

Protobuffers es un formato de mensaje agnóstico a cualquier lenguaje de programación.

* Un compilador se encarga de convertir la sintaxis de protobuffer al lenguaje correspondiente.
* Esta compilación solo ocurre en tiempo de creación o modificación, no en tiempo de ejecución.
* Se puede llamar archivos .proto desde otros archivos .proto.

### 1.3.1 ¿Cuando usar JSON y cuando Protobuffer?

Usa JSON cuando la aplicación requiere que la data sea más flexible, por ejemplo REST APIs directo al cliente
Usa Protobuffers cuando el rendimiento sea un factor crítico, ideal para microservicios.


## 1.4 Instalación del compilador

```bash
apt install -y protobuf-compiler
protoc --version
```

También es recomendable instalar las dependencias en el proyecto

```bash
go install google.golang.org/protobuf/cmd/protoc-gen-go@latest
go install google.golang.org/grpc/cmd/protoc-gen-go-grpc@latest
```

## 1.5 Estructura de un Protobuffer

Un protobuffer es un archivo con terminación .proto

Este requiere ciertas propiedades definidas, como la sintaxis, y el paquete de go que lo contendrá.

```javascript
syntax = "proto3";

package student;

option go_package = "github.com/EduardoZepeda/protobuffers-grpc;studentpb";
```

### 1.5.1 Messages

Un message servirá como un struct con las propiedades de nuestros mensajes a intercambiar entre cliente y servidor.

```javascript
message Student {
    string id = 1;
    string name = 2;
    int32 age = 3;
}
```

Al compilar un protobuffer obtenemos un paquete en el lenguaje de programación que estemos usando.

### 1.5.2 Servicios

Los servicios definen las funciones que utilizará el cliente para interaccionar con el servidor, debemos especificar los servicios con la palabra *service*, el nombre del servicio. Y dentro de este, anteponer la palabra rpc al nombre del servicio, su argumento y su valor de retorno entre paréntesis.

```javascript

message GetStudentRequest {
    string id = 1;
}

message SetStudentResponse {
    string id = 1;
}

service StudentService {
    rpc GetStudent(GetStudentRequest) returns (Student);
    rpc SetStudent(Student) returns (SetStudentResponse);
}
```

Nota como se usa *returns*, en plural, en lugar del más conocido return.

### 1.5.3 Compilación

La compilación se lleva a cabo con el siguiente comando:

```bash
protoc --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative proto/student.proto
```

Cuyo comportamiento podemos modificar con los siguientes flags:

* --go_out. Especifica que se use código de go
* --go_opt. Índica que la búsqueda debe hacerse de manera relativa
* --go-grpc_opt. Índica la ubicación del output
* source_relative. Para usar el directorio de trabajo actual como base

Tras correr el comando se crearán archivos con extensión go, estos archivos son generados de manera automática y no necesitan modificarse.

## 1.6 Creación de un servidor gRPC

Para crear un servidor necesitamos llamar al método NewServer y posteriormente registrar un servidor de servicio en el modelo gRPC creado anteriormente.

```go
s := grpc.NewServer()
studentpb.RegisterStudentServiceServer(s, server)
```

El objeto server que implementa debe heredar UnimplementedStudentServiceServer del protobuffer generado

type Server struct {
    // ...
    studentpb.UnimplementedStudentServiceServer
}

### 1.6.1 Usando reflection para obtener los métodos

El paquete reflection puede ser de mucha utilidad para leer los métodos del servidor gRPC usando herramientas como Postman.

```go
s := grpc.NewServer()
testpb.RegisterTestServiceServer(s, server)
reflection.Register(s)
```

## 1.7 Streaming

Para manejar el streaming se usa la palabra stream en el argumento de nuestro método rpc. De esta manera le decimos al servidor que el cliente puede enviar un stream de data, del tipo del argumento.

```go
rpc SetQuestions(stream Question) returns (SetQuestionResponse);
```

### 1.7.1 Cerrar el streaming

Escucharemos eternamente por un error de tipo EOF, que se dispara cuando el cliente cancela la conexión y lo manejaremos cerrando el stream.

```go
func (s *TestServer) SetQuestions(stream testpb.TestService_SetQuestionsServer) error {
    for {
    	msg, err := stream.Recv()
    	// Error cuando el cliente finaliza la conexión
    	if err == io.EOF {
    		return stream.SendAndClose(&testpb.SetQuestionResponse{
    			Ok: true,
    		})
    	}
    }
}
```

## 1.8 Usar gRPC en Web

El proyecto grpc-web o un proxy grpc/rest nos permiten usar directamente gRPC en el navegador web, como si se tratara de REST. 
