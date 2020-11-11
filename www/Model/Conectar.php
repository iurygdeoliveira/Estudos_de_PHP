<?php

namespace model;

use PDO;
use PDOException;

class Conectar
{

    private static $instance;
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }

    final private function __wakeup()
    {
    }

    public static function getInstance(): PDO
    {

        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . getenv('MYSQL_HOST') .
                        ";dbname=" . getenv('MYSQL_DATABASE'),
                    getenv('MYSQL_USER'),
                    getenv('MYSQL_PASSWORD'),
                    self::OPTIONS
                );
            } catch (PDOException $exception) {
                var_dump($exception);
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }
        }

        return self::$instance;
    }
}