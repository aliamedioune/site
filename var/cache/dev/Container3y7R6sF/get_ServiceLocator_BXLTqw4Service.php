<?php

namespace Container3y7R6sF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BXLTqw4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bXLTqw4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bXLTqw4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hotel' => ['privates', '.errored..service_locator.bXLTqw4.App\\Entity\\Hotel', NULL, 'Cannot autowire service ".service_locator.bXLTqw4": it references class "App\\Entity\\Hotel" but no such service exists.'],
        ], [
            'hotel' => 'App\\Entity\\Hotel',
        ]);
    }
}
