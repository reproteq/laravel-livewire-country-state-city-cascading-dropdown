# Laravel 9 Livewire Country/State/City Linked Dropdown

Livewire define los datos que se vincularán en ambas direcciones a través del atributo `wire:model`, y los nombres de las variables correspondientes son país, estado y ciudad. Si el servidor devuelve esta variable, su valor se mostrará en el cuadro de entrada; de lo contrario, si la entrada El marco modifica estos datos, también se actualizará en el servidor, y luego el resultado se representará en la plantilla de vista.En el servidor, los atributos de país, estado y ciudad se definen en la clase de componente para implementar datos Además, , y también inicializa el valor de esta propiedad mediante el método `mount()`.

## Cómo utilizar
- Copie todo el proyecto a su computadora. El "contenido" aquí se refiere no solo a los archivos, sino a todos los registros históricos, ramas, etiquetas, etc. de todo el proyecto.
````sh
$ git clone https://github.com/reproteq/laravel-livewire-country-state-city-cascading-dropdown.git  [directorio-app]
````
- Cambie el nombre del archivo __.env.example__ a __.env__, sus sesiones de usuario y otros datos cifrados no son seguros si la clave de la aplicación no está configurada.
- Cuando ya tenga composer.lock en su proyecto, puede ejecutar directamente el comando para permitir que Composer instale el paquete y la versión especificados en composer.lock.
- 
````sh
$ composer install
````

````sh
sudo chmod -R 777 bootstrap/cache
sudo chmod -R 777 storage/
````

- Genere una cadena aleatoria de 32 caracteres APP_KEY para ser utilizada por Laravel y guárdela en .env.

````sh
$ php artisan key:generate
````
- Ejecutar __migrate__ de la directiva __Artisan__ para ejecutar todas las migraciones pendientes.
````sh
$ php artisan migrate
 
php artisan db:seed
````
- Ejecutar instala las dependencias a las que hace referencia Laravel Mix y ejecuta todas las tareas de Mix.
````sh
$ npm install && npm run build && npm run dev
````
- Introduzca la URL de la ruta definida en el navegador para acceder, por ejemplo: http://127.0.0.1:8000.
- Puedes agregar casas a través de `/houses/create`.

----

## captura de pantalla
![](https://i.imgur.com/rBiwhsg.gif)
> Cree un menú desplegable vinculado para que lo completen los clientes, que es menos propenso a errores
