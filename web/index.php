<?php
/**
 * Это единая точка входа для нашего приложения.
 * На этот файл будут переадресованы все запросы нашего сайта.
 */

// Подключили файл из папки app
require __DIR__ . '/../app/App.php';

// создали новый объект класса из папки vendor
$app = new app\App();

// Имеем доступ к родительскому методу.
$app->run(); // выведет страницу со статусом 404, т.к. маршрут не указан
