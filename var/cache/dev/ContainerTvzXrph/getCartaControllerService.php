<?php

namespace ContainerTvzXrph;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CartaController' shared autowired service.
     *
     * @return \App\Controller\CartaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CartaController.php';

        $container->services['App\\Controller\\CartaController'] = $instance = new \App\Controller\CartaController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\CartaController', $container));

        return $instance;
    }
}
