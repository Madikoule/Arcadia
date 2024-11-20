<?php


namespace App\Util;

class SessionHelper
{
    public static function startSession(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function setSessionData(string $key, $value): void
    {
        self::startSession();
        $_SESSION[$key] = $value;
    }

    public static function getSessionData(string $key)
    {
        self::startSession();
        return $_SESSION[$key] ?? null;
    }
}

?>





