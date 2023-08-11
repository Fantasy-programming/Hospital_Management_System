<?php


namespace Core;

class Container
{
    protected $bindings = [];
    public function bind($key, $factoryfunc)
    {
        $this->bindings[$key] = $factoryfunc;
        
    }

    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            
            throw new \Exception("No {$key} is bound in the container.");
        }

        if (array_key_exists($key, $this->bindings)) {
            // Call the function
            return call_user_func($this->bindings[$key]);
        }
    }
}
