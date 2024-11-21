<?php

namespace Container1JJpuOC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8OoAnMcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8OoAnMc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8OoAnMc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AccueilController::index' => ['privates', '.service_locator.mBk6gb2', 'get_ServiceLocator_MBk6gb2Service', true],
            'App\\Controller\\ConnecteController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\DashboardController::index' => ['privates', '.service_locator.NDmick5', 'get_ServiceLocator_NDmick5Service', true],
            'App\\Controller\\HabitatController::index' => ['privates', '.service_locator.2S3es2t', 'get_ServiceLocator_2S3es2tService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AccueilController:index' => ['privates', '.service_locator.mBk6gb2', 'get_ServiceLocator_MBk6gb2Service', true],
            'App\\Controller\\ConnecteController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\DashboardController:index' => ['privates', '.service_locator.NDmick5', 'get_ServiceLocator_NDmick5Service', true],
            'App\\Controller\\HabitatController:index' => ['privates', '.service_locator.2S3es2t', 'get_ServiceLocator_2S3es2tService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AccueilController::index' => '?',
            'App\\Controller\\ConnecteController::login' => '?',
            'App\\Controller\\DashboardController::index' => '?',
            'App\\Controller\\HabitatController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccueilController:index' => '?',
            'App\\Controller\\ConnecteController:login' => '?',
            'App\\Controller\\DashboardController:index' => '?',
            'App\\Controller\\HabitatController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}