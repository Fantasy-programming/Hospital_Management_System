<?php


namespace Core;

class Container
{
    protected $bindings = [];

    /**
     * @return void
     * @param callable(): mixed $factoryfunc
    */

    public function bind(string $key, callable $factoryfunc): void
    {
        $this->bindings[$key] = $factoryfunc;
    }

    /**
     * @return mixed
     * @param string $key
    */

    public function resolve(string $key)
    {
        if (!array_key_exists($key, $this->bindings)) {

            throw new \Exception("No {$key} is bound in the container.");
        }

        if (array_key_exists($key, $this->bindings)) {
            return call_user_func($this->bindings[$key]);
        }
    }
}
