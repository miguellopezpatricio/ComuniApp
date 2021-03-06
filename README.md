# ComuniApp 2.0 beta
Aplicación de gestión de Comunidades de propietarios

![imaxe da aplicación](comuniapp.gif)

Realizada en PHP siguiendo el patrón de diseño MVC

* MySQL
* Bootstrap
* Uso de la librería DOMPDF para generar pdf. 
* Uso de PHPMailer para envío de correos desde la aplicación.

## Script SQL para creación de tablas necesarias
 Se debe crear una BBDD llamada "comunidad_beta" en el gestor
~~~
    Descargar desde repositorio el archivo comunidad.sql
~~~

## Estructura de la aplicación
~~~
./controladores -- Clases con las diferentes funciones de la app
./modelos -- Clases de la app
./vistas -- front de las diferentes opciones
./vistas/template.php -- plantilla que incluye el menú de la app
conexion.php -- conexión a BBDD
index.php
login.php 
login_proceso.php -- proceso de login
logout_proceso.php -- proceso de logout
rooteador.php -- redireccionamiento en función del rol de usuario
~~~

## Últimas actualizaciones:
* Aviso en icono de envío de recibos
* Rediseño apartado CONTADORES
* Añadida opción ADMINISTRAR USUARIOS APLICACIÓN solo para admin de la app
* Añadido script javascript para búsqueda en tabla opción DATOS PERSONALES
* Genera pdf de recibo y envía por mail
* Implementada conexión segura en hosting
* Creación de diferentes roles de usuario

## TO-DO:
* Modales para previsualización de recibos
* Botón envío masivo de recibos mensuales
* Opción de gestión de BBDD desde aplicación


