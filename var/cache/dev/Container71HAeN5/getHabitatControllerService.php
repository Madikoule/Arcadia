<?php

namespace Container71HAeN5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HabitatController' shared autowired service.
     *
     * @return \App\Controller\HabitatController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HabitatController.php';

        $container->services['App\\Controller\\HabitatController'] = $instance = new \App\Controller\HabitatController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\HabitatController', $container));

        return $instance;
    }
}
