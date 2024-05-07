# Curso Avanzado de Django

Las decisiones que tomes son muy costosas de cambiar y pueden impactar
fuertemente en el desempeño de una aplicación.



## 1.1 Django extensions

Es un paquete que nos permite extender las capacidades de Django.

## 1.2 Web services

Web Services es la manera en que se implementan las arquitecturas
orientadas a servicios, se crean bloques que son accesibles a través de
la web, son independientes del lenguaje de programación.

-   SOAP: Tiene su propio estándar, conocido por utilizar XML.
-   REST: Representational State Transfer, el objetivo es que nuestras
    operaciones sean Stateless. REST depende mucho más del protocolo
    HTTP.
-   GraphQL: Es el más moderno, desarrollado por Facebook. Funciona más
    como un Query Language para las API, un lenguaje de consultas.

## 1.3 Proxy model

Un proxy model permite agregar funciones a otro modelo, dado que tambien
hereda el object manager podemos usar la clase indistintamente. Al usar
la clase meta proxy NO se crea una base de datos.

``` python
class PersonaQueSaluda(Persona):

    class Meta:
        proxy = True

    def funcion_exclusiva():
        return "Hola, solo aparezco aquí"
```

Ahora podremos ver la diferencia al usar una instancia de la clase
Persona

``` python
Persona.funcion_exclusiva() #No existe la funcion

PersonaQueSaluda.funcion_exclusiva() #aquí si se ejecuta
```

## 1.4 Abstract model

Un Abstract model permite agregar un model de atributos que sean comunes
para todos los modelos que hereden

``` python
class CRideModel(models.Model):
    created = models.DatetimeField(auto_now_add=True)
    modified = models.DatetimeField(auto_now=True)

    class Meta:
        abstract = True
        get_latest_by = 'created'
        ordering = ['-created', '-modified']


class Derivada(CrideModel):
    name = models.CharField()

    class Meta(CrideModel.META):
        db_table = 'student_role'
```

Ahora podremos ver la diferencia al usar una instancia de la clase
Persona

``` python
Persona.funcion_exclusiva() #No existe la funcion

PersonaQueSaluda.funcion_exclusiva() #aquí si se ejecuta
```

## 1.5 Modelo personalizado de usuario

Para crear un modelo de usuario personalizado podemos heredar de
AbstractUser

``` python
from django.contrib.authmodels import AbstractUser

class User(CRideModel, AbstractUser):
    email = models.EmailField(
        'email_adress',
        unique=True,
        error_messages={
            'unique': 'A user with that email already exist.'
        }
    )
    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = ['username', 'first_name', 'last_name']
```

Luego en el archivo settings debemos especificar el AUTH_USER_MODEL

``` python
AUTH_USER_MODEL = 'users.User'
```

## 1.6 Validación personalizada de campos

Podemos especificar una lista de validadores en un modelo usando la
función RegexValidator y pasándola como un argumento de nombre
validators al campo

``` python
phone_regex = RegexValidator(
    regex=r'\+?1?\d{9,15}',
    message = "Phone number must be entered in the format: +999999999'. Up to 15 digits allowed."
)

phone_number = models.CharField(validators = [phone_regex], max_length=17, blank=True)
```

## 1.7 JWT

En lugar de utilizar el generador de tokens de Django Rest Framework, es
más seguro utilizar la libreria JWT para poder utilizarla solo la
descargamos usando pip y luego generamos un token con la función.

``` bash
pip install pyjwt
```

Y luego para generarlo

``` python
token = jwt.encode({'algo': 'datos', 'exp': 'segundos_unix_time'}, settings.SECRET_KEY, encode='HS256')
token.decode() #para pasarlo a string
```

Para validarlo podemos usar un serializer y usar try catch a la hora de
decodificar el token que recibimos

``` python
class AccountVerificationSerializer(serializers.Serializer):
     """Account verification serializer."""

     token = serializers.CharField()

     def validate_token(self, data):
         """Verify token is valid."""
         try:
             payload = jwt.decode(data, settings.SECRET_KEY, algorithms=['HS256'])
         except jwt.ExpiredSignatureError:
             raise serializers.ValidationError('Verification link has expired.')
         except jwt.PyJWTError:
             raise serializers.ValidationError('Invalid token')
         if payload['type'] != 'email_confirmation':
             raise serializers.ValidationError('Invalid token')

         self.context['payload'] = payload
         return data

     def save(self):
         """Update user's verified status."""
         payload = self.context['payload']
         user = User.objects.get(username=payload['user'])
         user.is_verified = True
         user.save()
```

## 1.8 Permisos

Podemos crear permisos personalizados instanciando una clase como base
de BasePermission y haciendo que retorne un booleano

``` python
from rest_framework.permissions import BasePermission

class IsAccountOwner(BasePermission):
    """Allow access only to objects owned by the requesting user."""

    def has_object_permission(self, request, view, obj):
        """Check obj and user are the same."""
        return request.user == obj
```

Y luego usar ese permiso en las vistas reemplazando la función
**get_permissions**, que debe regresar una lista de permisos

``` python
def get_permissions(self):
    """Assign permissions based on action."""
    if self.action in ['signup', 'login', 'verify']:
        permissions = [AllowAny]
    elif self.action in ['retrieve', 'update', 'partial_update']:
        permissions = [IsAuthenticated, IsAccountOwner]
    else:
        permissions = [IsAuthenticated]
    return [p() for p in permissions]
```

## 1.9 Celery

Es posible crear tareas periódicas con celery usando el decorador
periodic_task

``` python
@periodic_task(name='name', run_every=timedelta(seconds=5))
def tarea():
    hace_cosas()
```

## 1.10 Acciones

Una acción nos permite ejecutar una funcionalidad en el panel de Admin
de Django. Para registrar acciones se crea una lista con el nombre de
las acciones

``` python
actions = ['make_verified']
```

Cada elemento de la lista será una función que recibirá los argumentos
de self, request y queryset. Las action no tienen que modificar
necesariamente el queryset, sino que pueden usarlo para filtrar datos o
cualquier otra funcionalidad que queramos, inclusive pueden retornar
respuestas HTTP (pdf, csv, json, etc) En este ejemplo asumimos un
queryset con una propiedad boleana llamada verified

``` python
def make_verified(self, request, queryset):
    queryset.update(verified=True)
    return HttpResponse("Opcional")
make_verified.short_description = "Make selected objets verified True"
```
