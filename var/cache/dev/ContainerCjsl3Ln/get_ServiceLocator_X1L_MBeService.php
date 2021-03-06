<?php

namespace ContainerCjsl3Ln;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X1L_MBeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X1L.MBe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X1L.MBe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationRepository' => ['privates', 'App\\Repository\\Admin\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'reservationRepository' => 'App\\Repository\\Admin\\ReservationRepository',
        ]);
    }
}
