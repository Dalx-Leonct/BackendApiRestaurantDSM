README - BACKEND API RESTAURANT DSM

## Get Started

## ***** Nota ****
Deberás tener descargadas las siguientes aplicaciones antes de poder correr el proyecto correctamente:
- Composer.
- Xampp.
**********************************************************************************************************************************

----------------------------------------------------------------------------------------------------------------------------------
## Configuracion Xammp:

1. Abre Xampp.
2. En el apartado 'Apache' haz click en start.
3. En el apartado 'MySQL' haz click en start.
4. En el apartado 'MySQL' haz click en admin.
5. Se abrirá una ventana en tu navegador, ahí podrás crear una nueva base de datos, pon un nombre para la
   nueva base de datos y haz clic en crear.
6. Debes recordar el nombre que pusiste a la base de datos, pues este lo usaremos más tarde en el proyecto.

----------------------------------------------------------------------------------------------------------------------------------

----------------------------------------------------------------------------------------------------------------------------------
## Correr el proyecto:

1. Descarga el proyecto.
2. Abre la carpeta del proyecto en visual studio code.
3. Copia el archivo '.env example'.
4. Luego cambia el nombre del archivo por '.env'
5. En el siguiente apartado, en la línea de DB_DATABASE pon el nombre de la base de datos que creaste antes en Xampp.
   (ejemplo: baseapp).
   Si nunca antes has configurado nada de esto entonces no es necesario que cambies algo más aparte del nombre de la base de datos.

            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=baseapp
            DB_USERNAME=root
            DB_PASSWORD= 

6. Abre una terminal dentro de la carpeta del proyecto.
7. En la terminal pon los siguientes comandos 
	> composer install
	> php artisan key:generate
	> php artisan migrate

----------------------------------------------------------------------------------------------------------------------------------
## Seeders 

8. Si quieres correr los seeders deberás poner el siguiente comando:
	> php artisan migrate:fresh --seed

----------------------------------------------------------------------------------------------------------------------------------
## Iniciar aplicacion

9. Finalmente para encender el servidor pon en la terminal:
	> php artisan serve


    > php artisan serve --host 0.0.0.0

*(Este y solo este comando deberás utilizarlo una vez cada que quieras usar el proyecto)

## ¡Felicitaciones ahora tu proyecto está corriendo!

