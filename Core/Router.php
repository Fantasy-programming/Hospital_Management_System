<?php

namespace Core;

class Router
{

    protected $routes = [];

    public function add($method, $url, $action, $controller)
    {
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'action' => $action,
            'method' => strtoupper($method)
        ];
    }

    public function get($url, $controller, $action)
    {
        $this->add('GET', $url, $action, $controller);
    }

    public function post($url, $controller, $action)
    {
        $this->add('POST', $url, $action, $controller);
    }

    public function put($url, $controller, $action)
    {
        $this->add('PUT', $url, $action, $controller);
    }

    public function delete($url, $controller, $action)
    {
        $this->add('DELETE', $url,  $action, $controller);
    }

    public function patch($url, $controller, $action)
    {
        $this->add('PATCH', $url, $action, $controller);
    }


    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method) {
                $params = $this->matchRoute($url, $route);
                if ($params !== false) {
                    
                    
                    $controllerClassName = $route['controller'];
                    $controller = new $controllerClassName();
                    $action = $route['action'];
                    $controller->handle($action, $params);
                    exit();
                }
            }
        }

        // Return 404 page if no route found
        $this->abort();
    }

    protected function abort($code = Response::NOT_FOUND)
    {
        http_response_code($code['code']);
        view("error", $code);
        die();
    }

    protected function matchRoute($url, $route)
    {
        // Split the route and URL into segments
        $routeSegments = explode('/', trim($route['url'], '/'));
        $urlSegments = explode('/', trim($url, '/'));

        // If segment counts are different, the route doesn't match
        if (count($routeSegments) !== count($urlSegments)) {
            return false;
        }

        $params = [];

        // Compare segments and extract route parameters
        foreach ($routeSegments as $index => $routeSegment) {
            if (strpos($routeSegment, '{') === 0 && strpos($routeSegment, '}') === strlen($routeSegment) - 1) {
                $paramName = trim($routeSegment, '{}');
                $params[$paramName] = $urlSegments[$index];
            } elseif ($routeSegment !== $urlSegments[$index]) {
                return false;
            }
        }

        return $params;
    }
}
