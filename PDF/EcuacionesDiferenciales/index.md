# Ecuaciones diferenciales

La ecuaciones diferenciales nos sirven para crear modelos matemáticos de
cosas que existen en la realidad que dependen de alguna variable como el
tiempo, un ejemplo de esto sería saber la variación en la temperatura de
un objeto a lo largo de diferentes rangos de tiempo.


## Ecuaciones diferenciales lineales homogeneas de coeficientes constantes.

Una ecuación homogenea consiste en una ecuación que es igualada a cero

$a(x)^"+b(x)y^`-c(x)y=0$

Los coeficientes constantes se refieren a coeficientes de la misma clase

$y^"+5y^`-6y$

## 1.1 Que es una ecuación diferencial

Son ecuaciones con las que podemos representar problemas, que cambian en
el tiempo y que tienen alguna dependencia con otras variables. Es una
igualdad en la que relacionamos una función, variables y derivadas. Las
derivadas nos expresan como la función y las variables cambian en el
tiempo. Relacionamos estos tres aspectos en una sola ecuación.

### 1.1.1 Tipos de variables

-   Variable dependiente: siempre que estemos derivando con respecto a
    una función, esa será nuestra variable dependiente.
-   Variable independiente: es aquella cuyo valor no depende del de otra
    variable.

### 1.1.2 Tipos de ecuaciones diferenciales

-   Ecuaciones diferenciales ordinarias (EDO): Tienen una sola variable
    independiente.
-   Ecuaciones diferenciales parciales (EDP): Tienen más de una variable
    independiente.

### 1.1.3 Tipos de ecuaciones diferenciales por orden y linealidad

Para saber el tipo de ecuación, dependerá de dos factores, el orden y la
linealidad:

-   Orden: Se refiere a la máxima derivada que aparece en la ecuación
-   Linealidad: Nos basaremos en la variable dependiente, si la variable
    dependiente nos esta modificada y no tiene exponentes, la ecuación
    será lineal.

### 1.1.4 Que significa solucionar una ecuación diferencial

Cuando tenemos una ecuación normal, solucionarla significaba encontrar
ese número que satisfacía la igualdad de la ecuación:

$y + 5 = 2$

$y =  − 3$

Cuando hablamos de ecuaciones diferenciales, no vamos a buscar un
número, vamos a buscar una función. Un conjunto de funciones que me
satisfagan esa igualdad.

Es encontrar una función donde la variable dependiente cambie con
respecto a la variable independiente.

### 1.1.5 Tipos de soluciones

-   Solución general: Se produce cuando tenemos varias soluciones para
    una misma ecuación, donde la constante © puede tener cualquier
    valor, que no afectara a la solución de la ecuación.
-   Solución especifica: Cuando nos dan una condición inicial, ya no
    valdrá cualquier valor de la constante como posible solución, si no
    ese valor en especifico es el que le dará la solución a la ecuación.

## 1.2 Métodos de resolución

Estos metodos son para resolver ecuaciones de primer orden:

> 1.  Separación de variables
> 2.  Homogéneas
> 3.  Ecuaciones lineales
> 4.  Ecuaciones exactas
> 5.  Ecuación de Bernoulli

## 1.3 Ecuaciones Diferenciales Separables

Son las E.D. más sencillas, se dan cuando podemos expresar la ecuación
de manera que tengamos en cada término únicamente expresiones de una
variable de manera que podamos integrar directamente.

$\frac{dy}{dx} = f(x,y)$.

$\frac{dy}{dx} = g(x)p(y)$.

$\frac{dy}{p(y)} = g(x)dx$.

$\frac{1}{p(y)} = h(y)$.

$h(y)dy = g(x)dx.$

### 1.3.1 Procedimiento para saber si una ecuación es separable

Asignaremos valores a (x, y), tal que la función de (x,y) sea diferente
de cero. Calcularemos una nueva función en la que multiplicaremos el
resultado de cambiar la variable (x) por el nuevo valor y multiplicarlo
por la variable (y). Haremos lo mismo para el nuevo valor de (y) que lo
multiplicaremos por (x). Comprobar si la función del primer paso con los
nuevos valores por la función inicial, es igual a la ecuación obtenida
en el segundo paso.

Lo que estamos haciendo es comprobar si

$f(xo,yo)f(x,y) = f(xo,y)f(x,yo)$

Si los tres pasos salen correctos sabremos si la ecuación es separable o
no.

## 1.4 Método de sustitución lineal

Aplicable para ecuaciones de la forma

$\frac{dy}{dx}=f(x+y+c)$.

*v* = *x* + *y* + *c*.

*d**v* = *d*(*x*+*y*+*c*).

*d**v* = *d**x* + *d**y*.

$\frac{dv}{dx}=\frac{dx}{dx}+\frac{dy}{dx}$.

$\frac{dv}{dx}=1+\frac{dy}{dx}$.

$\frac{dy}{dx}=1-\frac{dv}{dx}$.

$\frac{dv}{dx}-1=f(x+y+c)$.

$\frac{dv}{dx}-1=f(v)$.

$\frac{dv}{dx}=f(v)+1$.

*d**v* = (*f*(*v*)+1)*d**x*.

$\frac{dv}{f(v)+a}=dx$.

$\int \frac{dv}{f(v)+a}=\int dx$.

*l**n*(*v*+1) = *x* + *C*.

*v* = *x* + *y* + 4.

*l**n*(*x*+*y*+4+1) = *x* + *C*.

*e*<sup>*l**n*(*x*+*y*+4+1)</sup> = *e*<sup>*x* + *c*</sup>.

*x* + *y* + 5 = *e*<sup>*x* + *c*</sup>.

*y* = *e*<sup>*x*</sup>*C* − *x* − 5.

## 1.5 Ecuaciones diferenciales exactas

Estas ecuaciones cumplen dos condiciones:

1.  Puedan ser representadas de la forma
    *M*(*x*,*y*)*d**x* + *N*(*x*,*y*)*d**y* = 0.
2.  La derivada de M con respecto a la derivada de y sea igual a la
    derivada de N con la derivada de x

$\frac{dM}{dy} = \frac{dN}{dx}$.

Para resolver una ecuación exacta primero debemos verificar que, si sea
una ecuación exacta, una vez verificada debemos integrar a M o a N.

Una vez integrada M o N, debemos derivar a F con respecto a la otra
variable que no integramos.

Por último, integramos la ecuación para obtener nuestra solución.

## 1.6 Funciones homogeneas

Cuando tenemos una función homogenea todos los términos de la ecuación
tienen el mismo grado y podemos generar una ecuacinó diferencial
separable.

*M*(*x*,*y*)*d**x* + *N*(*x*,*y*)*d**y* = 0.

*f*(*t**x*,*t**y*) = *t*<sup>*n*</sup>*f*(*x*,*y*).

Antes de llegar a la ecuación homogénea deberemos observar las
siguientes características de la ecuación:

> Separación -\> ecuación separable Lineal -\> ecuación lineal Exacta
> -\> ecuación exacta

En caso de que no se cumplan estas características, pasaremos a
comprobar si es homogénea.

Una vez hemos confirmado que la ecuación es homogénea, realizaremos los
siguientes pasos:

Cambiaremos una de las variables:

*x* = *y**v*.

*y* = *x**v*.

Realizaremos una sustitución: No solo remplazaremos la variable, si no
también su derivada, que será la derivada del producto de dos funciones.

*x* = *y* \* *v* −  \> *d**x* = *y**d**v* + *v**d**y*.

Una vez conseguimos su ecuación separable, integraremos.

## 1.7 Ecuaciones con coeficientes lineales

Para reconocer esta ecuación veremos que al igual que las ecuaciones de
sustitución lineal, la ecuación con coeficientes lineales cuenta un x, y
y una constante, además los coeficientes que acompañan esas variables
son constantes.

La sustitución lineal nos funciona cuando tenemos un solo polinomio que
reemplazar, en este caso al encontrarnos con dos polinomios queda
totalmente descartado el método de sustitución lineal.

Para resolver esta ecuación debemos reemplazar la variable x por una
nueva variable más una constante, hacemos lo mismo con la variable y
para poder obtener una ecuación homogénea y con ello poder buscar una
ecuación separable que nos dará la solución.

Aunque parezca una ecuación lineal, no podemos hacer una sustitución
lineal porque tenemos más de una polinomio.

Entonces realizaremos una traslación de ejes con cambio de variable.

La traslación consiste en substituir (x) o (y) por una nueva variable
mas una constante.

Con este proceso obtendremos una ecuación homogénea.
## Factor integrante

Es un termino por el cual puedes multiplicar una ecuación para convertirla en una ecuación exacta, para posteriormente resolverla, ya siendo exacta.

$x(2y^2 + 3x)dx + x(2xy) dy = 0$

$(2xy^2 + 3x^2)dx + (2x^2y) = 0$

$M(x, y) + N(x, y) = 0$

En este caso el factor común es x y ambas derivadas parciales M o N producen 4xy 

$\frac{dM}{dy} = \frac{dN}{dx} = 4xy$

### Tres tipos de factor integrante

* Caso 1: Cuando el factor integrante depende de x 
* Caso 2: Cuando el factor integrante depende de y
* Caso 3: Cuando el factor integrante depende de xy


#### Caso 1

La formula para resolver el caso uno es la siguiente.

$\frac{{\frac{dM}{dy}}-{\frac{dN}{dx}}}{N}=g(x)$

Y el factor integrante será

$μ=\mathrm{e}^{\int^\ g(x)dx}$

#### Caso 2

La formula para resolver el caso dos es la siguiente.

$\frac{{\frac{dM}{dy}}-{\frac{dN}{dx}}}{-M}=g(y)$

Y el factor integrante será

$μ=\mathrm{e}^{\int^\ g(y)dx}$

#### Caso 3

La formula para resolver el caso tres es la siguiente.

$\frac{{\frac{dM}{dy}}-{\frac{dN}{dx}}}{Ny-Mx}=g(xy)=g(z)$

Y el factor integrante será

$μ=\mathrm{e}^{\int^\ g(z)dx}$

## El factor integrante en las ecuaciones lineales

Una ecuación diferencial lineal es aquella en la que la variable dependiente no se encuentra con exponente

$f1(x)\frac{dy}{dx}+f(x)y=f3(x)$

El factor integrante además de ayudarnos a solucionar ecuaciones que en un principio no eran exactas, también nos ayudara a solucionar ecuaciones diferenciales lineales.

La ecuación diferencial lineal va a tener una función que multiplica por la derivada de y con respecto a la derivada de x, más una segunda función que multiplica a y todo esto que es igual a una tercera función, cada función va a depender de x.

### Formula del factor integrante para ecuaciones lineales

La formula para resolver ecuaciones lineales con el factor de integración es la siguiente:

$y=\frac{1}{μ(x)}\int μQ(x)dx+C$## Ecuaciones linealmente independientes

Cuando una solución de una ecuación diferencial es linealmente independiente significa que una de las soluciones para la ecuacion diferencial no puede ser obtenida a partir de otra solución multiplicando simplemente por una constante.

Las ecuaciones diferenciales de n orden solo tiene n soluciones.

$y^"+5y^`-6y= 0$

Con soluciones lineales

$Ce^x$ y $Ce^-6x$

Y la solución general consiste en la suma de las soluciones.

$Ce^x + Ce^-6x$

Ejemplo:
$y^"+5y^`-6y= 0$

Si $y=e^rx$
Entonces:
La primera derivada = $y^`=re^rx$
La segunda derivada $y^"=r^2e^rx$

Esto nos deja con una ecuación de la siguiente manera.

Con la ecuación característica.

$r^2+2r-1=0$

Esta se puede resolver de la misma forma que una ecuación cuadrática.

Lo que nos da dos soluciones:

$y=c{e}^{(-1+\sqrt2x)}$

y esta:

$y=c{e}^{(-1-\sqrt2x)}$

Y la solución general será

$y=c{e}^{(-1+\sqrt2x)} + c{e}^{(-1-\sqrt2x)}$

## Ecuaciones lineales homogeneas con raices

Al obtener como resultado una raiz compleja con números imaginarios. al final la solución se asume como 

$y={e}^{ax}(C*Cosbx+C2Senbx)$

Se selecciona la solución positiva de la ecuación y se reemplaza "a" como la parte real de la solución y "b" por la parte imaginaria.

El origen viene de una relación que se obtiene de las matemáticas complejas.## Ecuaciones diferenciales no homogéneas

Son aquellas que no estan igualadas a 0, sin embargo es posible tratar con ellas

$xy^"+5y'-13y=3x^2$

Con la ecuación diferencial homogénea relacionada

$xy^"+5y'-13y=0$

### Resolución de ecuación no homogéneas relacionada

1. Encontrar la solución general de la EHR. ($y_h$)
2. Encontrar una solución particular ED no homogénea. ($y_p$)

    1. Coeficientes indeterminados
    2. Variación de parámetros

3. La solución general será $y=y_h+y_p$




## Ecuaciones diferenciales no homogéneas con Coeficientes no determinados

Primero encontramos la solución para la EHR

Solo sirve para polinomios, exponenciales y senos y cosenos.

Por ejemplo para:

$y"+3y'+2y=0$

$r²+3r+2=0$

Y ahora podemos asumir que

$r1=e^{-2x}$

y

$r2=e^{-x}$

Por lo que la solución general.

$y=e^{-2x}+e^{-x}$

Ahora con la solución particular asumimos que la solución es del mismo grado que la parte que no es igual a 0.

En este caso es de la forma:

$y_p=Ax+B$

Por lo que $y_p'=A$ y $y_p"=0$

Y ahora resolvemos

$0 + 3(A) +2(Ax+B)=3x$

$3A+2Ax+2B=3x$

$2Ax+(3A+2B)=3x$

Observamos que 

$2A=3$

$A=\frac{3}{2}$

Y por eso

$3A+2B=0$

$B=-\frac{9}{4}$

Ahora tenemos la solución particular

$y_p=Ax+B$

$y_p=\frac{3}{2}x-\frac{9}{4}$

A esto le tenemos que sumar la suma de la solución general y la solución particular

$y=C_1e^{-x}+C_2e^{-2x}+\frac{3}{2}x-\frac{9}{4}$

## Variación de parámetros

Este método sirve para cualquier no homonogénea.

El primer paso es dividir todo por el coeficiente de la segunda derivada, con el propṕsito de dejar sin coeficiente la segunda derivada

$a(x)y"+b(x)y'+c(x)y=d(x)$

$\frac{a(x)}{a(x)}y"+\frac{b(x)}{a(x)}y'+\frac{c(x)}{a(x)}y=\frac{d(x)}{a(x)}$

$y"+p(x)y'+q(x)y=f(x)$

$y"+p(x)y'+q(x)y=0$

Y ahora tenemos que por el método de soluciones linealmente independientes tendremos una solución general

Mientras que la solución homogenea

$y_h=c_1y_1(x)+c_2y_2(x)$

Y para la solución particular

$y_p=u_1y_1+u_2y_2$

$y=y_h+y_p$

Y ahora tenemos que la solución de los coeficientes $u_1$

$u_1=-\int\frac{y_2f(x)}{W}dx$

Mientras que $u_2$

$u_2=\int\frac{y_1f(x)}{W}dx$

Donde la W es el término Wronskiano, un sistema que relaciona funciones con sus derivadas.

$W=\begin{bmatrix}y_1 & y_2\\y_1 & y_2\end{bmatrix}$

Donde el determinante será el término Wronskiano:

$W=(y_1*y_2')-(y_1'*y_2)$

### Ejemplo:

$y"+3y+2y=8e^{2x}$

La solución de la ecuación homogenea relacionada será

$y_1=e^{-2x}$
$y_2=e^{-x}$

$y_h=C_1e^{-2x}+C_2e^{-x}$

Y ahora asumimos una solucoón particular de la misma forma que la solución homogenea, reemplazando las constantes por la $u_1$ y $u_2$

$y_p=u_1e^{-2x}+u_2e^{-x}$

Ahora solo queda encontrar el término Wronskiano.

$W=\begin{bmatrix}e^{-2x} & e^{-x}\\-2e^{-2x} & -e^{-x}\end{bmatrix}$

Siendo el determinante

$W=(y_1*y_2')-(y_1'*y_2)$

Lo que da como resultado

$w=e^{-3x}$

$u_1=-\int\frac{e^{-x}8e^{2x}}{e^{-3x}}dx$

Y resolviendo esto para $u_1$:

$u_1=\frac{-8e^{4x}}{4}=-2e^{4x}$

Y para $u_2$

$u_2=8\int{e^{3x}}dx=\frac{8e^{3x}}{3}$

Y ahora la solución será la suma de la particular y la homogénea.

$y_p=-2e^{4x}e^{-2x}+\frac{8e^{3x}}{3}e^{-x}$

$y=\frac{2}{3}e^{2x}+C_1e^{-2x}+C_2e^{-x}$## Transformada de Laplace

La transformada de Laplace permite transformar una función de una variable, normalmente tiempo, a otro dominio. 

Solamente sirve para condiciones iniciales $T_0$

$\mathcal {L}\{f\}(s)=\int _{0}^{\infty }f(t)e^{-st}\,dt.$

La de arriba es una integral impropia porque uno de los límites es infinito.

Se tiene que cuidar que el resultado de la ecuación sea convergente, es decir que obtengamos un número fijo, y que no sea infinito (divergente). Por lo anterior, podemos asumir que no todas las funciones tienen transformadas de Laplace.

Existen transformadas:

* unilaterales (de cero a infinito), usada generalmente porque se corresponde con el mundo real.
* bilaterales

