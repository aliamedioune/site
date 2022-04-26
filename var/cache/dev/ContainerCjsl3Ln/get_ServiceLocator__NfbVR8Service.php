<?php

namespace ContainerCjsl3Ln;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__NfbVR8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..NfbVR8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..NfbVR8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'room' => ['privates', '.errored..service_locator..NfbVR8.App\\Entity\\Admin\\Room', NULL, 'Cannot autowire service ".service_locator..NfbVR8": it references class "App\\Entity\\Admin\\Room" but no such service exists.'],
        ], [
            'room' => 'App\\Entity\\Admin\\Room',
        ]);
    }
}
