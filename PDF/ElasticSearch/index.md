# Elastic Search

Búsquedas y analíticas en tiempo real Interfaz HTTP con documentos JSON
usando GET, POST, PUT, DELETE, etc. Guardado e indexación eficiente, la
búsqueda es 
## 1.1 Casos de uso

Búsqueda de información en una app o sitio web Motor de almacenamiento
para automatizar flujos de negocios Machile Learning para modelar
comportamiento de datos Uso de GIS

## 1.2 Configuración a nivel físico

Es un cluster agrupa nodos, mientras que los nodos agrupan los shards,
las piezas; las distintas divisiones de un índice, operan por si solas.
La primera contiene la información, las réplicas es un backup en caso de
que falle la primaria. Asegurándose que cada nodo tenga la información
del resto respaldada para poder restaurar la información completamente.

![image](Notes/ElasticSearch/img/elasticSearchCluster.png)

## 1.3 Instalación

Podemos instalarla elastic search por medio de Docker usando el
siguiente archivo *docker-compose.yml*

``` bash
version: '2.2'
services:
  es01:
    image: docker.elastic.co/elasticsearch/elasticsearch:7.6.0
    container_name: es01
    environment:
      - node.name=es01
      - cluster.name=es-docker-cluster
      - cluster.initial_master_nodes=es01
      - bootstrap.memory_lock=true
      - "ES_JAVA_OPTS=-Xms512m -Xmx512m"
    ulimits:
      memlock:
        soft: -1
        hard: -1
    volumes:
      - data01:/usr/share/elasticsearch/data
    ports:
      - 9200:9200
    networks:
      - elastic

volumes:
  data01:
    driver: local

networks:
  elastic:
    driver: bridge
```

Después de esto levantamos el servicio con

``` bash
docker-compose up
```

Si tenemos un error de memoria insuficiente la documentación oficial
recomienda utilizar el siguiente comando. Cabe recordar que este comando
solo modificará la memoria para la sesión actual, si se desea hacer el
cambio de manera permanente hay que modificar el archivo de
configuración correspondiente.

``` bash
sudo sysctl -w vm.max_map_count=262144
```

## 1.4 Creación de índices y documentos

Elastic search crea un índice por defecto si no existe, al nosotros
hacer una petición. Hacemos una llamada PUT con datos en formato JSON.

``` json
{
"nombre": "Rick",
"Apellido": "Sánchez"
}
```

Para crear un documento usaremos la palabra \_doc después del nombre de
nuestro índice. Podemos especificar un id también

``` bash
localhost:9200/usuarios/_doc/1
```

Una creación exitosa nos devolverá

``` json
{
    "_index": "usuarios",
    "_type": "_doc",
    "_id": "1",
    "_version": 1,
    "result": "created",
    "_shards": {
        "total": 2,
        "successful": 1,
        "failed": 0
    },
    "_seq_no": 0,
    "_primary_term": 1
}
```

Si no especificamos un id, elasticsearch creará uno por nosotros.

``` bash
localhost:9200/usuarios/_doc
```

``` json
{
    "_index": "usuarios",
    "_type": "_doc",
    "_id": "j-Ds8XIBALchyRGT9Lz-",
    "_version": 1,
    "result": "created",
    "_shards": {
        "total": 2,
        "successful": 1,
        "failed": 0
    },
    "_seq_no": 1,
    "_primary_term": 1
}
```

### 1.4.1 Creación múltiple

Para crear varios documentos crearemos un archivo *usuarios.json* Este
archivo debe terminan con una linea vacia.

``` javascript
{"index": {"_id": "3"}}
{"nombre": "Beth", "apellido": "Smith"}
{"index": {"_id": "4"}}
{"nombre": "Jerry", "apellido": "Smith"}
```

Mandaremos este archivo con método POST a la dirección

``` bash
localhost:9200/usuarios/_bulk
```

Lo anterior nos generará una respuesta de este tipo

``` json
{
    "took": 273,
    "errors": false,
    "items": [
        {
            "index": {
                "_index": "usuarios",
                "_type": "_doc",
                "_id": "3",
                "_version": 1,
                "result": "created",
                "_shards": {
                    "total": 2,
                    "successful": 1,
                    "failed": 0
                },
                "_seq_no": 2,
                "_primary_term": 1,
                "status": 201
            }
        },
        {
            "index": {
                "_index": "usuarios",
                "_type": "_doc",
                "_id": "4",
                "_version": 1,
                "result": "created",
                "_shards": {
                    "total": 2,
                    "successful": 1,
                    "failed": 0
                },
                "_seq_no": 3,
                "_primary_term": 1,
                "status": 201
            }
        }
    ]
}
```

## 1.5 Mappeo de datos

Es bueno crear un mapeo explícito para tener un rendimiento óptimo.
Podemos guardar el texto con *text* y *keyword*

-   text (Búsquedas de texto completo)
-   keyword (valores exactos)

### 1.5.1 Tipos de datos

Hay de tipo

|             |                             |
|-------------|-----------------------------|
| Tipos       | Valor                       |
| texto       | text,keyword                |
| fechas      | date                        |
| número      | integer,float, double, long |
| boleanos    | boolean                     |
| objetos     | object,nested               |
| geográficos | geopoint,geoshape           |

Los especificamos de la siguiente manera

``` json
{
    "mappings": {
        "properties": {
            "nombre": {"type": "text"},
            "descripción": {"type": "text"},
            "pedidosUltimaHora": {"type": "integer"},
            "ultimaModificacion": {
                "properties": {
                    "usuario": {"type": "text"},
                    "fecha": {"type": "date"}
                }
            }
        }   
    }
}
```

Eso lo mandamos a la dirección por medio de una petición PUT

``` bash
localhost:9200/nombre_del_indice
```

Recibiremos una respuesta con el siguiente esquema

``` json
{
    "acknowledged": true,
    "shards_acknowledged": true,
    "index": "platos"
}
```

Para modificar el mapping haremos una petición PUT a

``` bash
localhost:9200/nombre_del_indice/_mapping
```

Con la siguiente estructura

``` json
{
    "properties": {
        "estado": {"type": "keyword"}
    }
}
```

Recibiremos una respuesta si todo salió bien

``` json
{
    "acknowledged": true
}
```

Si ya hemos creado un mapping podemos crear objetos de la siguiente
manera

``` json
{
    "nombre": "",
    "descripcion": "",
    "estado": "",
    "pedidosUltimaHora": "",
    "ultimaModificacion": {
        "usuario": "",
        "fecha": ""
    }
}
```

Esto lo mandaremos por medio de una petición PUT a

``` bash
localhost:9200/nombre_del_indice/_doc/1
```

Donde el número 1 es el id

## 1.6 Puntaje

Nos especifica que tan bien coincide un documento con la búsqueda. Los
resultados se ordenan por puntaje de manera descendente, acorde con su
relevancia

Podemos especificar una búsqueda haciendo una petición GET a la
dirección

``` bash
localhost:9200/nombre_del_indice/_search
```

Con los siguientes datos en formato JSON

``` json
{
    "query": {
        "simple_query_string": {"query": "terminos"}
    }
}
```

Nos devolverá un objeto con la siguiente estructura, donde el término
\_score tendrá el puntaje.

``` json
{
    "took": 1007,
    "timed_out": false,
    "_shards": {
        "total": 1,
        "successful": 1,
        "skipped": 0,
        "failed": 0
    },
    "hits": {
        "total": {
            "value": 2,
            "relation": "eq"
        },
        "max_score": 0.88251114,
        "hits": [
            {
                "_index": "",
                "_type": "_doc",
                "_id": "1",
                "_score": 0.88251114,
                "_source": {
                    "nombre": "terminos",
                    "descripcion": "terminos",
                    "estado": "activo",
                    "pedidosUltimaHora": 1,
                    "ultimaModificacion": {
                        "usuario": "",
                        "fecha": ""
                    }
                }
            },
            {
                "_index": "platos",
                "_type": "_doc",
                "_id": "2",
                "_score": 0.17578414,
                "_source": {
                    "nombre": "terminos",
                    "descripcion": "",
                    "estado": "activo",
                    "pedidosUltimaHora": 2,
                    "ultimaModificacion": {
                        "usuario": "",
                        "fecha": ""
                    }
                }
            }
        ]
    }
}
```

Podemos especificar ponderaciones para nuestras búsquedas agregando un
campo extra llamado *fields* que es una lista de los campos en donde
queremos buscar, usamos la notación ^n para especificar el peso de los
campos.

``` json
{
    "query": {
        "simple_query_string": {
            "query": "terminos",
            "fields": ["nombre^2", "descripcion"]

        }
    }
}
```

## 1.7 Clausulas

Las clausulas de búsqueda son las siguientes: Must, Filter, Should y
Must Not

Para una consulta

> {} Usar un objeto

Para más de una consulta

> \[\] Usar una lista

### 1.7.1 Must

AND lógico Debe aparecer en los documentos retornados Influye en el
puntaje

### 1.7.2 Filter

AND lógico Debe aparecer en los documentos retornados No influye en el
puntaje Permite caché

### 1.7.3 Should

OR lógico Alguna de las consultas debería aparecer en los documentos
retornados Influye en puntaje *minimum_should_match* especifica cuantos
términos de búsqueda deben aparecer Si hay un término AND en la consulta
booleana este valor se volverá cero

### 1.7.4 Must Not

NOT lógico La consulta no debe aparecer No influye en el puntaje Permite
caché

## 1.8 Consultas booleanas

Una consulta booleana puede contar con varias clausulas

``` json
{
  "query": {
    "bool": {
      "must": {
        "match": {
          "descripcion": "termino"
        }
      },
      "filter": {
        "term": "active"
      },
      "must_not": {
        "term": {
          "pedidosUltimaHora": 0
        }
      },
      "should": [
        {
          "match": {
            "descripcion": "termino"
          }
        },
        {
          "match": {
            "descripcion": "termino2"
          }
        }
      ],
      "minimum_should_match": 1
    }
  }
}
```

## 1.9 Consultas compuestas

Hay consultas compuestas donde podemos especificar una serie de
condiciones que deben de reunir las consultas

``` json
{
  "query": {
    "bool": {
      "must": [
        {
          "bool": {
            "should": [
              {"term": {"estado": "activo"}},
              {"term": {"estado": "pendiente"}}
            ]
          }
        },
        {
          "bool": {
            "should": [
              {"match": {"ultimaModificacion.usuario": "mail.com"}},
              {"match": {"ultimaModificacion.usuario": "vendor.com"}}          
            ]
          }
        }
      ]
    }
  }
}
```

## 1.10 Consultas anidadas

Guardar una lista de objetos dentro de un documentos. Esta consulta
encuentra documentos usando los objetos anidados, al encontrar una
coincidencia devolverá el objeto padre. Al crear un mapping
especificamos el typo *nested* y más abajo definimos sus propiedades.
Por ejemplo:

``` json
{
    "mappings": {
        "properties": {
            "nombre": {"type": "text"},
            "categorias": {
                "type": "nested",
                "properties": {
                    "nombre": {"type": "keyword"},
                    "principal": {"type": "boolean"}
                }
            }
        }   
    }
}
```

La búsqueda de estos campos anidados se haría con el siguiente formato

``` json
{
  "query": {
    "nested": {
      "path": "nombre del campo anidado",
      "query": {
        "bool": {
          "must": {
            "term": {"categorias.nombre": "Término a buscar"}
          }
        }
      }
    }
  }
}
```

La consulta se envia mediante el método GET a

``` bash
localhost:9200/indice/_search
```

## 1.11 Unificación de datos

## 1.12 Consultas de rango y agregaciones

### 1.12.1 Rangos

Podemos especificar los campos que queremos buscar y únicamente nos
devolverá esos. En el ejemplo de abajo filtramos calificación para
colocarla más que 3.5 y menor o igual que 4.5.

``` json
{
    "_source": ["nombre", "calificacion"], 
    "query": {
        "range": {
            "calificacion" : {
                "gt": 3.5,
                "lte": 4.5
            }
        }
    }
}
```

Podemos usar los mismos parámetros, gt y lte, para buscar por fechas

``` json
{
    "_source": ["nombre", "ultimaModificacion.fecha"], 
    "query": {
        "range": {
            "ultimaModificacion.fecha" : {
                "gt": "2020-01-15",
                "lte": "2020-03-01"
            }
        }
    }
}
```

### 1.12.2 Agregaciones

No son consultas, sino métricas que se calculan sobre los resultados de
una consulta. Para ellos usaremos la palabra *aggs* y determinaremos la
función a aplicar y el campo sobre el cual queremos que se aplique.

``` json
{

    "aggs": {
        "calificacionPromedio": {"avg": {"field": "calificacion"}},
        "calificacionMaxima": {"max": {"field": "calificacion"}},
        "calificacionMinima": {"min": {"field": "calificacion"}}
     }
}
```

Esto lo enviaremos por medio del método GET, a la dirección

``` bash
localhost:9200/indice/_search
```

Podemos colocar un valor por defecto usando la palabra *missing*

``` javascript
"aggs": {
    "calificacionPromedio": {"avg": {"field": "calificacon", "missing": 3.0}},
    "calificacionMaxima": {"max": {"field": calificación}},
    "calificacionMinima": {"min": {"field": calificación}}
}
```
