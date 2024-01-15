<?php

namespace Core;

class Controller
{
    /**
     * @return void
     * @param array<int,mixed> $params
    */

    protected function renderView(string $path, array $params = []): void
    {
        extract($params);
        require base_path("Views/{$path}.php");
    }

    /**
     * @return void
     * @param array<int,mixed> $params
    */

    public function handle(string $action, array $params = []): void
    {
        $methodName = $action . 'Action';


        if (method_exists($this, $methodName)) {
            $this->$methodName($params);
        } else {
            $this->notFoundAction();
        }
    }

    /**
     * This render 404 page not found
     * @return void
    */

    public function notFoundAction(): void
    {
        $this->abort();
        exit();
    }

    /**
     * This function render error pages
     * @return void
     * @param array<int,mixed> $code
    */

    public function abort(array $code = Response::NOT_FOUND): void
    {
        http_response_code($code['code']);
        view("error", $code);
        die();
    }
}
