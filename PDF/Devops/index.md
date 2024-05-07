# Devops

Antes de empezar a implementar devops debemos asegurarnos de tener
cubiertos los siguientes aspectos

-   Ambientes homogéneos (Docker).
-   Testing.
-   Versionado del código (Git o mercurial).
-   Servidor de automatización (Circle CI, Jenkins, TravisCI)



## 1.1 Continuous integration y artifacts

El flujo consiste en

-   Bajar la última versión del código.
-   Ejecutar las pruebas.
-   Análisis de código

La salida del CI es un artifact. Un artifact es como una build estable
comprimida relacionado con un release. Un artifact es inmutable, y es
necesario conservarlo, en caso de que necesitemos realizar un rollback.

## 1.2 Code coverage

Además del coverage, que da una falsa sensación de seguridad, puede ser
necesario montar code reviews.

## 1.3 Continouos delivery

Es la extensión de CI que automatiza el proceso de añador código a la
rama principal.

## 1.4 Continuous deployment

Automatiza el despliegue o deployment. Los cambios se ven en minutos.

## 1.5 Implementación de CI con Jenkins

Para ello es necesario instalar ambos paquetes.

Dado que docker solo se puede usar por root, es necesario dotarle de los
permisos.

``` bash
usermod -a -G docker jenkins
```

Montamos un pipeline multibranch en Jenkins, para tener todo el proceso
de manera **centralizada**.

Tip: Recuerda que es buena práctica colocar un timeout, para que el código
falle si demora demasiado.


``` bash
pipeline {
    agent any

    options {
        timeout(time: 2, unit: 'MINUTES')
    }

    environment {
        ARTIFACT_ID = "usuario/app:${env.BUILD_NUMBER}"
    }

    stages {
        stage('Build') {
        steps {
            script {
            dir("webapp") {
                dockerImage = docker.build "${env.ARTIFACT_ID}"
            }
            }
        }
        }
        stage('Run tests') {
            steps {
                sh "docker run ${dockerImage.id} npm test"
            }
        }
        stage('Publish') {
            when {
                branch 'master'
            }
        steps {
            script {
            docker.withRegistry("", "DockerHubCredentials") {
                dockerImage.push()
            }
            }
        }
        }
        stage('Schedule Staging Deployment') {
        when {
            branch 'master'
        }
        steps {
            build job: 'deploy-webapp-staging', parameters: [string(name: 'ARTIFACT_ID', value: "${env.ARTIFACT_ID}")], wait: false
        }
        }
    }
    }
```

La diferencia entre "docker.build" y "docker run" es que docker.build se
corre nativamente en Jenkins, en el background, mientras que "docker
run" corre a través del shell, para que nos avise si falla.

Una vez hecho, ejecutamos el job y podemos corroborar que todo se
ejecutó de manera perfecta.

## 1.6 Artifacts[Docker hub](https://hub.docker.com/) es una buena opción para almacenar
los artifacts.

En global credentials podemos agregar los datos para autentificarnos en
docker hub.
