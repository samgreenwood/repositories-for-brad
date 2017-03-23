<?php

class DbToolRepository implements ToolRepository
{

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * DbToolRepository constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param Tool $save
     * @return bool
     */
    public function save(Tool $save)
    {
        $pdo = $this->pdo->prepare("INSERT INTO BLAH");

        return true;
    }

    /**
     * @param $name
     * @return Tool
     */
    public function findByRepository($name)
    {
        $q = $this->pdo->prepare("SELECT * FROM tools WHERE repository = :repository");
        $q->bindParam('repository', $name);
        $q->execute();

        $data = $q->fetchAll();

        return new Tool(
            $data->name,
            $data->path,
            $data->repository
        );
    }
}