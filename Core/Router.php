<?php

namespace Core;

class Router
{

    protected $routes = [];

    public function add($method, $url, $controller)
    {
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => strtoupper($method)
        ];
    }

    public function get($url, $controller)
    {
        $this->add('GET', $url, $controller);
    }

    public function post($url, $controller)
    {
        $this->add('POST', $url, $controller);
    }

    public function put($url, $controller)
    {
        $this->add('PUT', $url, $controller);
    }

    public function delete($url, $controller)
    {
        $this->add('DELETE', $url, $controller);
    }

    public function patch($url, $controller)
    {
        $this->add('PATCH', $url, $controller);
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['url'] === $url && $route['method'] === $method) {
                require base_path($route['controller']);
                exit();
            }
        }

        // Return 404 page if no route found
        $this->abort();
    }

    protected function abort($code = 404)
    {
        http_response_code($code);
        view($code);
        die();
    }
}
