<?php

namespace Container3y7R6sF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RA0depHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rA0depH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rA0depH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservation' => ['privates', '.errored..service_locator.rA0depH.App\\Entity\\Admin\\Reservation', NULL, 'Cannot autowire service ".service_locator.rA0depH": it references class "App\\Entity\\Admin\\Reservation" but no such service exists.'],
        ], [
            'reservation' => 'App\\Entity\\Admin\\Reservation',
        ]);
    }
}