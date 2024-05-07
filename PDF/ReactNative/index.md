# React Native



## 1.1 Características que lo hacen atractivo

Hay ciertas características que lo hacen bastante atractivo para
desarrollar

-   Hot/live reloading
-   Depuración de javascript
-   Inspector de elementos
-   Network inspector
-   Stack trace

## 1.2 Instalación en GNU/Linux

Necesitamos instalar Node, JDK (java development kit), Android Studio y
el cliente de React Native.

### 1.2.1 Node

Node lo descargas desde aquí
<https://nodejs.org/en/download/package-manager/>

Ya que tienes Node tambien tienes npm ahora instala el cliente de React
Native Watchman Este es opcional pero te recomiendo que lo instales
tambien
<https://facebook.github.io/watchman/docs/install.html#buildinstall>:

``` bash
npm install -g react-native-cli
```

### 1.2.2 JDK (java development kit)

Java Development Kit lo descargas desde aquí
<http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html>

Recuerda usar una versión igual o superior a la 8

### 1.2.3 Android Studio

Lo descargas desde aquí
<https://developer.android.com/studio/index.html> En la instalación
elige la modalidad personalizada y ten activados estos items

-   Android SDK
-   Android SDK Platform
-   Android Virtual Device

Luego de instalar Android studio vamos al SDK manager para instalar un
par de cosas más Appearance & Behavior → System Settings → Android SDK.

Ten estos elementos seleccionados

-   Google APIs
-   Android SDK Platform 26
-   Intel x86 Atom_64 System Image
-   Google APIs Intel x86 Atom_64 System Image

Dale al botón de aceptar / apply y esto se descargará

Ahora configuremos unas variables de entorno para que puedas usar mejor
react native desde tu terminal HOME/.bash_profile

-   export ANDROID_HOME=$HOME/Android/Sdk
-   export PATH=$PATH:$ANDROID_HOME/tools
-   export PATH=$PATH:$ANDROID_HOME/tools/bin
-   export PATH=$PATH:$ANDROID_HOME/platform-tools

Guardas el archivo y ahora ejecutas source $HOME/.bash_profile para que
la terminal tome las nuevas consiguraciones

Es todo.

## 1.3 Creacion de una App

Para hacerlo usamos el comando:

``` bash
react-native init nombreDelProyecto
```
