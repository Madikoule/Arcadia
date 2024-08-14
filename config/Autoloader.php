<?php 

namespace Config;

class Autoloader {
    public static function register() {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    public static function autoload($class)
    {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $rootDir = dirname(__DIR__);
        $file = $rootDir . DIRECTORY_SEPARATOR . $class . '.php';
        /* quand je ien chercher la class sa me retire les point php */

        if (file_exists($file)) {
        require_once $file;
        return true;
        }
        return false;
    }

}