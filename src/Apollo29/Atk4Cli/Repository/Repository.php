<?php

namespace Apollo29\Atk4Cli\Repository;

use PDO;

class Repository
{
    public PDO $db;

    /**
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    public function tables(): array
    {
        $query = $this->db->prepare('show tables');
        $query->execute();

        $rows = $query->fetchAll(PDO::FETCH_ASSOC);

        return array_map(function ($row) {
            $key = array_key_first($row);
            return $row[$key];
        }, $rows);
    }

    public function table(string $table): array
    {
        $query = $this->db->prepare('describe ' . $table);
        $query->execute();

        $rows = $query->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }
}