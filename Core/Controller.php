<?php

namespace Core;

class Controller
{
    protected function renderView(string $path, array $params = [])
    {
        extract($params);
        require base_path("Views/{$path}.php");
    }

    public function handle(string $action, array $params = [])
    {
        $methodName = $action . 'Action';

        if (method_exists($this, $methodName)) {
            $this->$methodName($params);
        } else {
            $this->notFoundAction();
        }
    }

    public function notFoundAction()
    {
        http_response_code(404);
        $this->abort();
        exit();
    }

    public function abort(array $code = Response::NOT_FOUND)
    {
        http_response_code($code['code']);
        view("error", $code);
        die();
    }
}
