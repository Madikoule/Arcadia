<?php

use App\Kernel;

error_reporting(E_ALL & ~E_DEPRECATED);
ini_set('assert.exception', '1');

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
