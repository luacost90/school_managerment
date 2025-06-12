<?php
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    // Elimina ruta base si estás en subcarpeta
    $basePath = '/sistema_aped';
    $uri = str_replace($basePath, '', $uri);

    $routes = require 'core/routes/web.php';

    
    if(isset($routes[$uri])){
        $route = $routes[$uri];
        $controllerName = 'modules/'. $route['module']. $route['controller'] . '.php';
        if(file_exists($controllerName)){
            require_once $controllerName;
            $controllerClass = $route['controller'];
            $method = $route['method'];
            $controller = new $controllerClass();

            if(method_exists($controller, $method)){
                $controller->$method();
                exit;
            }
        }
    }

    http_response_code(404);
    echo 'Página no encontrada';

?>