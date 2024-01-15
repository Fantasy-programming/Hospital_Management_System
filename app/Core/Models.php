<?php

namespace Core;

class Models
{
    protected $db;

    public function __construct()
    {
        $this->db = App::resolve(Database::class);
    }

}
