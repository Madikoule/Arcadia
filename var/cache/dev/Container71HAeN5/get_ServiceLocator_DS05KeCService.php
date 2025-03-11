<?php

namespace Container71HAeN5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DS05KeCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DS05KeC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DS05KeC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'product' => ['privates', '.errored..service_locator.DS05KeC.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.DS05KeC": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'em' => '?',
            'product' => 'App\\Entity\\Product',
        ]);
    }
}
