<?php

namespace ContainerWHyK5EX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hz5btgeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Hz5btge' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hz5btge'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', 'App\\Entity\\User', 'getUserService', true],
        ], [
            'user' => 'App\\Entity\\User',
        ]);
    }
}
