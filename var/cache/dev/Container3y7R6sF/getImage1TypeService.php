<?php

namespace Container3y7R6sF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImage1TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Image1Type' shared autowired service.
     *
     * @return \App\Form\Image1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Image1Type.php';

        return $container->privates['App\\Form\\Image1Type'] = new \App\Form\Image1Type();
    }
}
