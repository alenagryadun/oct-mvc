<?php

namespace core;

class Route {

    static public function start() {
        // контроллер и действие по умолчанию
        $controller_name = 'main';
        $action_name = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if(count($routes)>3){
            self::errorPege404();
        }
        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = strtolower($routes[1]);
        }
        // получаем имя экшена
        if (!empty($routes[2])) {
         
            $action_name = strtolower($routes[2]);
        }
        echo 'controller = '.$controller_name;//TODO debug delete
        echo 'action = '.$action_name;//TODO debug delete
        exit ();//TODO debug delete
        // добавляем префиксы
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;
        // подцепляем файл с классом модели (файла модели может и не быть)
        $model_file = strtolower($model_name) . '.php';
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            include "application/models/" . $model_file;
        }
        // подцепляем файл с классом контроллера
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "application/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include "application/controllers/" . $controller_file;
        } else {
            /*
              правильно было бы кинуть здесь исключение,
              но для упрощения сразу сделаем редирект на страницу 404
             */
            Route::errorPage404();
        }
        // создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;
        if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }
    }
    static public function errorPage404() {
        echo '404';
        exit();
    }
}
