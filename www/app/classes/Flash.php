<?php

declare(strict_types=1);

namespace app\classes;

class Flash
{
    private $flash;

    public static function set($key, $message, $alert = "success")
    {
        if (!isset($_SESSION[$key])) {
            $_SESSION[$key] = [
                'message' => $message,
                'alert' => $alert
            ];
        }
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            self::$flash = $_SESSION[$key];
            unset($_SESSION[$key]);
            return self::$flash;
        }
    }

    public static function getMessage()
    {
        return (isset(self::$flash) ? self::$flash['message'] : false);
    }
}