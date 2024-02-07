[![Video](https://img.youtube.com/vi/j59tQzimkKI/0.jpg)](https://www.youtube.com/watch?v=j59tQzimkKI)


Marvel Superheroes
===================================

Descripción
-----------

Este proyecto consiste en un sitio web de los superhéroes de Marvel, donde tienen datos sobre diferentes personajes, como sus nombres, imágenes, frases y su fuerza. El proyecto utiliza PHP, MySQL y Apache para gestionar la base de datos y el servidor web.

Requisitos del Sistema
----------------------

Entorno de desarrollo

-   Apache
-   MySQL
-   PHP

Configuración de la Base de Datos
---------------------------------

1.  Abre el archivo PHP (`index.php`) y revisa la sección PHP al inicio del archivo.
2.  Ajusta las variables `$server`, `$bbdd`, `$user`, y `$passwd` con la configuración de tu base de datos.

$server = "localhost"; $bbdd = "superheroes"; $user = "root"; $passwd = ""; $conn = mysqli_connect($server, $user, $passwd, $bbdd);

¿Como puedes utilizarlo?
---

1.  Inicia tu servidor Apache y MySQL.
2.  Importa la base de datos proporcionada (`superheroes.sql`) en tu sistema de gestión de bases de datos.
3.  Coloca el proyecto en el directorio raíz de tu servidor web (en mi caso htdocs).
4.  Accede al sitio a través de tu navegador (`http://localhost/tu_ruta`).

Funcionalidades
---------------

-   Página de inicio: Muestra algunos de los superhéroes de Marvel.
-   Explorar Personajes: Sección que presenta a algunos superhéroes con sus nombres, imágenes y frases características.
-   Filtrar por Fuerza: Muestra a los superhéroes con una fuerza igual o superior a 2.
-   Filtrar por Categoría: Presenta a los superhéroes ordenados por categoría.
-   Filtrar Dinámicamente: Permite al usuario filtrar los superhéroes por categoría, fuerza o frase a través de un boton.

¡Gracias por visitarme!
