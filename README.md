
# Proyecto Sistema de Gestión Taller Mecánico SERVIEXPRESS

Proyecto realizado en segundo semestre del 2023 para el ramo "Automatización" de pruebas.


## Instalacion de forma local
#### Programas necesarios:

- Visual Studio Code
- Laragon o Xampp (Tutorial hecho con laragon)
- phpMyAdmin
- Composer
- Git (Opcional)

#### Orden instalacion programas

   1. Instalar Laragon https://laragon.org/download/index.html
2. Instalar phpMyAdmin https://www.phpmyadmin.net/downloads/
Descomprimir y la carpeta `phpMyAdmin-5.2.1-all-languages` renombrarla a `phpMyAdmin` y moverla a la siguiente carpeta `C:\laragon\etc\apps`.
3. Instalar composer y adjuntar ruta de php `C:\laragon\bin\php\php-8.1.10-Win32-vs16-x64`

#### Clonacion del proyecto

Hay dos formas de realizarlo, la primera descargar el zip y pegarlo en la siguiente ruta: `C:\laragon\www`.

Y la segunda en esta ruta `C:\laragon\www` abrir el cmd y escribir: 
```bash
  git clone https://github.com/luxcho1/ProyectoAutomaticacion.git
```

## Configurar proyecto y base de datos
En Laragon abrirmos Base de Datos y en la pagina de phpmyadmin le damos a click "nueva" y creamos una base de datos llamada `automatizacion`.

En la siguiente ubicacion `C:\laragon\www\ProyectoAutomaticacion` ya sea CMD de Windows o en la terminal de Visual Studio Code ejecutar los siguientes comandos:
```bash
  composer install
```
```bash
  cp .env.example .env
```
```bash
  php artisan key:generate
```

El archivo `.env` debe quedar de la siguiente forma:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=automatizacion
DB_USERNAME=root
DB_PASSWORD=
```
Una vez creada la conexion con la base de datos ejecutamos el siguiente comando: 
```bash
  php artisan migrate:fresh --seed
```
## Ejecutar

Para levantar el proyecto ejecutar el siguiente comando:

```bash
  php artisan serve
```


## Licencia

Este proyecto es de uso gratuito.

