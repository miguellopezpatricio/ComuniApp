# ComuniApp
Aplicación de gestión de Comunidades de propietarios

![imaxe da aplicación](comuniapp.gif)

Realizada en PHP siguiendo el patrón de diseño MVC

* MySQL
* Bootstrap
* Uso de la librería DOMPDF para generar pdf. 
* Uso de PHPMailer para envío de correos desde la aplicación.

# Script SQL para creación de tablas necesarias
 Se debe crear una BBDD llamada "comunidad_beta" en el gestor
~~~
    Descargar desde repositorio el archivo comunidad.sql
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
* Botón envío masivo de recibos mensuales
* Opción de gestión de BBDD desde aplicación


