<?php

namespace ContainerJwhysUz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteurServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CompteurService' shared autowired service.
     *
     * @return \App\Service\CompteurService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CompteurService.php';

        return $container->privates['App\\Service\\CompteurService'] = new \App\Service\CompteurService();
    }
}
