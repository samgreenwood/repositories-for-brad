<?php

class FileToolRepository implements ToolRepository
{
    /**
     * @param Tool $tool
     * @return int
     */
    public function save(Tool $tool)
    {
        $json = file_get_contents('tools.json');

        $data = json_decode($json);

        $data[$tool->name] = $tool;

        return file_put_contents('tools.json', json_encode($data));
    }

    /**
     * @param $name
     * @return Tool
     */
    public function findByRepository($name)
    {
        $data = json_decode(file_get_contents('tools.json'));

        return $data[$name] ?? null;
    }
}