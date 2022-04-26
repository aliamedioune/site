<?php

namespace ContainerCjsl3Ln;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DFxYwWsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dFxYwWs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dFxYwWs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'settingRepository' => ['privates', 'App\\Repository\\SettingRepository', 'getSettingRepositoryService', true],
        ], [
            'settingRepository' => 'App\\Repository\\SettingRepository',
        ]);
    }
}
