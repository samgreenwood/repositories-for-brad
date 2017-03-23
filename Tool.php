<?php

class Tool
{
    public function __construct($name, $path, $repository)
    {
        $this->name = $name;
        $this->path = $path;
        $this->repository = $repository;
    }

    public $name;

    public $path;

    public $repository;
}