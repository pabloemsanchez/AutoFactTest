# AutoFactTest
Prueba para AutoFact

Este codigo fue hecho con Laravel 5.7 y PHP 7.2

Para ejecutarlo:

1. Clonar
2. Crear archivo .env (usar como base el arhivo .env-example), esto es para configurar la aplicacion, aca se debe configurar la base de datos a utilizar
3. Ejecutar composer update
4. Correr las migraciones de Laravel php artisan migrate
5. Correr el seeder de laravel php artisan db:seed

Con esto ya se puede comenzar a usar la aplicacion.

Los usuarios normales se registan desde el website.
El usuario administrador por defecto es admin@test.com y la clave 123456




Pendiente
1. Las preguntas siempre salen, lo hice de esta forma para poder comprobar el funcionamiento del sistema,
para limitar esto salga continuamente podria usarse cookies con una validez de 30 dias para evitar este mensaje de forma seguida, esto permite 2 escenarios, si usan un nuevo navegador saldrian los quiz o si expira el cookie

2. Logs de aplicacion, los crearia en base de datos para mejor almacenamiento y posible depuracion. crearia una tabla y un modelo para almacenar los logs y en base a esto en cualquier parte requerida solo se accesaria a una funcion para registrar el evento.

3. API, lo resolveria con el mismo laravel, creando una ruta para el consumo webservice, validando un token de seguridad y permitiendo las opciones requeridas.

4. Aunque es sencillo, acabo de darme cuenta que solicitaron mostrar las respuestas guardadas en la vista admin. simplemente usar el modelo para obtener todos las respuestas de la base de datos y mostrarlos en un grid o mas sencillo en una simple tabla desde la visa.
El grafico de pie funciona dinamicamente leyendo los resultados desde la base de datos.

