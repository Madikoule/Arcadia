<?php

namespace Container71HAeN5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmployéControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmployéController' shared autowired service.
     *
     * @return \App\Controller\EmployéController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EmployéController.php';

        $container->services['App\\Controller\\EmployéController'] = $instance = new \App\Controller\EmployéController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EmployéController', $container));

        return $instance;
    }
}
