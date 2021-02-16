<?php

declare(strict_types=1);

namespace app\classes;

class Flash
{
    private $flash;

    public static function set($key, $message)
    {
        if (!isset($_SESSION['flashes'][$key])) {
            $_SESSION['flashes'][$key] = [
                'message' => $message
            ];
        }
    }

    public static function get($key)
    {
        if (isset($_SESSION['flashes'][$key])) {
            self::$flash = $_SESSION['flashes'][$key];
            unset($_SESSION['flashes'][$key]);
            return self::$flash;
        }
    }

    public static function setflashes(array $flashes)
    {
        foreach ($flashes as $key => $message) {
            self::set($key, $message);
        }
    }

    public static function getAll()
    {
        if (isset($_SESSION['flashes'])) {
            $messages = [];
            foreach ($_SESSION['flashes'] as $key => $message) {
                $messages['flashes'][$key] = $message;
                unset($_SESSION['flashes'][$key]);
            }

            // retorna $messages['flashes'] ou vazio
            return $messages['flashes'] ?? [];
        }
    }
}