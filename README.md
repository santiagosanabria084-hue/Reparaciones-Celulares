 Sistema de Gestión de Reparaciones de Celulares

Aplicación web desarrollada con **Laravel y MySQL** para administrar reparaciones de dispositivos móviles. Permite registrar clientes, cargar equipos, describir fallas y realizar un seguimiento del estado de cada reparación.

 Descripción del proyecto

Este proyecto fue desarrollado como práctica académica durante la carrera de Analista de Sistemas, con el objetivo de aplicar conceptos de desarrollo web, arquitectura MVC y operaciones CRUD.

El sistema permite centralizar la información de las reparaciones y facilitar su administración mediante una interfaz sencilla e intuitiva.

 Funcionalidades

 Registrar reparaciones: cargar los datos del cliente, marca, modelo y falla del dispositivo.
 Listar reparaciones: visualizar todas las reparaciones registradas.
 Consultar detalles: acceder a la información individual de cada reparación.
 Editar registros: modificar los datos de una reparación existente.
 Eliminar registros: eliminar reparaciones del sistema.
 Seguimiento de estados: actualizar el estado de cada reparación.

 Estados de reparación

 Ingresado
 En reparación
 Reparado
 Entregado

 Tecnologías utilizadas

 Tecnología  Uso 

 PHP  Lenguaje de programación del backend 
 Laravel  Framework de desarrollo web 
 MySQL  Sistema de gestión de base de datos 
 HTML5  Estructura de las vistas 
 CSS3  Estilos y diseño de la interfaz 
 Blade  Motor de plantillas de Laravel 

 Arquitectura

El proyecto utiliza el patrón **MVC (Modelo-Vista-Controlador)** proporcionado por Laravel.

 Modelo: gestiona los datos y las operaciones sobre las reparaciones.
 Vista: presenta la información mediante plantillas Blade.
 Controlador: procesa las solicitudes y coordina la lógica de la aplicación.

También se utiliza Eloquent ORM para interactuar con la base de datos.

 Instalación y ejecución

Para ejecutar el proyecto localmente, necesitás tener instalado PHP, Composer, MySQL y Laravel.

1. Clonar el repositorio:

   ```bash
   git clone URL_DEL_REPOSITORIO
   ```

2. Ingresar a la carpeta del proyecto:

   ```bash
   cd reparaciones-celulares
   ```

3. Instalar las dependencias:

   ```bash
   composer install
   ```

4. Crear el archivo de configuración:

   ```bash
   copy .env.example .env
   ```

5. Generar la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

6. Configurar las credenciales de MySQL en el archivo `.env` y crear la base de datos `reparaciones`.

7. Ejecutar las migraciones:

   ```bash
   php artisan migrate
   ```

8. Iniciar el servidor:

   ```bash
   php artisan serve
   ```

9. Abrir en el navegador:

   ```text
   http://127.0.0.1:8000
   ```

 Objetivo académico

Este proyecto permitió poner en práctica conocimientos de PHP, Laravel, bases de datos relacionales, operaciones CRUD, validaciones y arquitectura MVC.



Autor: Santiago Sanabria

Proyecto académico  Analista de Sistemas
