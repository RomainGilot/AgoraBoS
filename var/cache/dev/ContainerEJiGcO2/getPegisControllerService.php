<?php

namespace ContainerEJiGcO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPegisControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PegisController' shared autowired service.
     *
     * @return \App\Controller\PegisController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PegisController'] = $instance = new \App\Controller\PegisController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\PegisController', $container));

        return $instance;
    }
}
