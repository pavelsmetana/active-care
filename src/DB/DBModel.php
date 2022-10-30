<?php

namespace App\DB;

use PDO;

class DBModel
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=db;dbname=blank5;charset=utf8mb4", "root", "Ayse1994@");
    }

    /**
     * @param string $query
     * @param array $params
     * @return array|false
     */
    public function query(string $query, array $params = [])
    {
        $stm = $this->pdo->prepare($query);
        $stm->execute($params);

        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $query
     * @param array $params
     * @return void
     */
    public function execute(string $query, array $params = [])
    {
        $stm = $this->pdo->prepare($query);
        $stm->execute($params);
    }
}