<?php

namespace Core;

class App
{
    protected static $container;

    /**
     * This method is used to set the container
     * @return void
     * @param Container $container
    */

    public static function setContainer(Container $container): void
    {
        static::$container = $container;
    }

    public static function container(): Container
    {
        return static::$container;
    }

    /**
     * @return void
     * @param string $key
     * @param mixed $resolver
    */

    public static function bind(string $key, $resolver): void
    {
        static::container()->bind($key, $resolver);
    }

    /**
     *  @return mixed
     * @param string $key
    */

    public static function resolve(string $key): mixed
    {
        return static::container()->resolve($key);
    }
}
