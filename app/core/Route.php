<?php
    //define("_EXTENSION", ".php");
    class Route
    {
        //const _EXTENSION = ".php";
        static public function init()
        {
            //self::_EXTENSION;
            //_EXTENSION;
            // контроллер и действие по умолчанию
            $controller_name = 'Main';
            var_dump(8, $controller_name);
            $action_name = 'index';
            var_dump(10, $action_name);
            $path = strtolower($_SERVER['REQUEST_URI']);
            var_dump(12, $path);
            $routes = explode('/', $path);
            var_dump(14, $routes);
            // получаем имя контроллера
            if (!empty($routes[1])) {
                $controller_name = ucfirst($routes[1]);
                var_dump(18, $controller_name);
            }
            // получаем имя экшена
            if (!empty($routes[2])) {
                $action_name = $routes[2];
                var_dump(23, $action_name);
            }
            // добавляем префиксы
            $model_name = $controller_name . '_Model';
            var_dump(27, $controller_name);
            var_dump(28, $model_name);
            var_dump(29, $controller_name);
            // $controller_name .= '_Controller';
            $controller_name = $controller_name . '_Controller';
            var_dump(31, $controller_name);
            // подцепляем файл с классом модели (файла модели может и не быть)
            $model_path = "../app/models/" . $model_name . '.php';
            var_dump(34, $model_path);
            if (file_exists($model_path)) {
                var_dump(36, $model_path);
                include_once $model_path;
            }
            $controller_path = "../app/controllers/" . $controller_name . '.php';
            var_dump(40, $controller_path);
            if (file_exists($controller_path)) {
                var_dump(42, $controller_path);
                include_once $controller_path;
            } else {
                self::error404();
            }
            // создаем контроллер
            $controller = new $controller_name;
            var_dump(49, $controller_name);
            var_dump(49, $controller);
            var_dump(50, $action_name);
            if (method_exists($controller, $action_name)) {
                // вызываем действие контроллера
                var_dump(53, $controller->$action_name());
                $controller->$action_name();
            } else {
                // здесь также разумнее было бы кинуть исключение
                self::error404();
            }
        }
        static public function error404()
        {
            header('HTTP/1.1 404 Not Found');
            header('Status: 404 Not Found');
            include_once '../app/views/not_found.php';
            exit();
        }
    }
