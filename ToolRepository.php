<?php

interface ToolRepository
{
    public function save(Tool $save);

    public function findByRepository($name);
}