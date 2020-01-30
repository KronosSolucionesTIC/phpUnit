# phpUnit
Ejemplo básico de phpUnit

# Pasos para la prueba
1. Instalar composer https://getcomposer.org/
2. Ingresar a la url https://phpunit.de/ y https://phpunit.de/getting-started/phpunit-8.html 
3. Mediante composer "composer require --dev phpunit/phpunit ^8"
4. Mediante composer "./vendor/bin/phpunit --version"
5. Ubicados en la carpeta de php "./vendor/bin/phpunit --bootstrap ../htdocs/ejemplos/phpunit/calculadora.php ../htdocs/ejemplos/phpunit/calculadoraTest.php" se pasa el archivo a probar y tambien el archivo del test
6. Resultado de la prueba "1 / 1 (100%)Calculadora numerica
Time: 44 ms, Memory: 4.00 MB
OK (1 test, 1 assertion)"
7. Video basado en tutorial https://www.youtube.com/watch?v=TGUcOe5rL7c
