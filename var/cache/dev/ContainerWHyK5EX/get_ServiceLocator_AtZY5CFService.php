<?php

namespace ContainerWHyK5EX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AtZY5CFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.atZY5CF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.atZY5CF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reservaRepository' => ['privates', 'App\\Repository\\ReservaRepository', 'getReservaRepositoryService', true],
        ], [
            'reservaRepository' => 'App\\Repository\\ReservaRepository',
        ]);
    }
}
