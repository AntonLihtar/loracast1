<?php

class Database {
    public $connection;

    public function __construct($config, $username, $password) {

        // Формируем строку подключения (DSN) из массива настроек.
        // Например:
        // mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // Создаём объект PDO и устанавливаем соединение с базой данных.
        // PDO::FETCH_ASSOC означает, что результаты запросов
        // по умолчанию будут возвращаться как ассоциативные массивы.
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query) {
        // Подготавливаем SQL-запрос к выполнению
        $statement = $this->connection->prepare($query);

        // Выполняем подготовленный запрос
        $statement->execute();

        // Возвращаем PDOStatement.
        // После этого можно, например, вызвать fetch() или fetchAll().
        return $statement;
    }
}