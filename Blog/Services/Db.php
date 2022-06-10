<?php

namespace Blog\Services;

use mysql_xdevapi\Exception;

class Db
{
    private $pdo;

    public function __construct()
    {
        $dbOptions = (require __DIR__ . '/../settings.php')['db'];

        $this->pdo = new \PDO(
            'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params = []): array
    {
        try {
            $sth = $this->pdo->prepare($sql);
            $result = $sth->execute($params);

            if (false === $result) {
                return [];
            }

        } catch (\Exception $exception ) {
            var_dump($exception);
        }

        return $sth->fetchAll();
    }
}