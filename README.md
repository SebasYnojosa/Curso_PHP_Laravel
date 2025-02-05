# Como iniciar el proyecto

## Instalar PHP

1. Se descarga XAMPP desde este [enlace](https://www.apachefriends.org/es/index.html)
2. Se coloca la carpeta **php** que está en el directorio de instalación de XAMPP en la variable de entorno PATH
3. Confirma que se instalo PHP correctamente con el comando `php --version`

## Instalar Composer (npm de PHP)

1. Se descarga Composer desde este [enlace](https://getcomposer.org/download/) (*Se necesita tener instalado Git y PHP previamente*)
2. Confirma que se instalo Composer correctamente con el comando `composer --version`

Para ejecutar un archivo `.php` se usa el comando `php archivo.php`

## Configuración en la carpeta del proyecto

1. Se busca el archivo `php.ini` en el directorio `xampp/php`
2. Se busca la línea con el siguiente código: `extension=zip` y se descomenta
3. Se accede a la carpeta del proyecto
4. Se ejecuta el comando `composer install`, si no funciona trata desactivando el antivirus temporalmente
5. Copia el contenido del archivo `.env.example` en otro archivo `.env`
6. Ejecuta el comando `php artisan key:generate`
7. Ejecuta el comando `php artisan migrate` y acepta crear el archivo `database.sqlite`
8. Ejecuta el comando `php artisan serve` para poder ver las páginas
