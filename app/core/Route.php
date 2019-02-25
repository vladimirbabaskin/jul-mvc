<?php

class Route {

    static public function init() {
	// контроллер и действие по умолчанию
	$controller_name = 'Main';
	$action_name = 'index';
	$path = strtolower($_SERVER['REQUEST_URI']);
	$routes = explode('/', $path);
	// получаем имя контроллера
	if (!empty($routes[1])) {
	    $controller_name = ucfirst($routes[1]);
	}
	// получаем имя экшена
	if (!empty($routes[2])) {
	    $action_name = $routes[2];
	}
	// добавляем префиксы
	$model_name = $controller_name . '_Model';
	$controller_name = $controller_name . '_Controller';
	// подцепляем файл с классом модели (файла модели может и не быть)	
	$model_path = "../app/models/" . $model_name . '.php';
	if (file_exists($model_path)) {
	    include_once $model_path;
	}
	$controller_path = "../app/controllers/" . $controller_name . '.php';
	if (file_exists($controller_path)) {
	    include_once $controller_path;
	} else {
	    self::error404();
	}
	// создаем контроллер
	$controller = new $controller_name;
	if (method_exists($controller, $action_name)) {
	    // вызываем действие контроллера
	    $controller->$action_name();
	} else {
	    // здесь также разумнее было бы кинуть исключение
	    self::error404();
	}
    }

    static public function error404() {
	header('HTTP/1.1 404 Not Found');
	header("Status: 404 Not Found");
	exit();
    }

}
