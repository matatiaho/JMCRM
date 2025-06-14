<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getThemeImageServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Themes\Service\ThemeImageService' shared autowired service.
     *
     * @return \App\Themes\Service\ThemeImageService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Themes/Service/ThemeImageService.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Themes/Service/ThemeImageFinder.php';

        return $container->privates['App\\Themes\\Service\\ThemeImageService'] = new \App\Themes\Service\ThemeImageService($container->parameters['themes.image_paths'], $container->parameters['themes.image_supported_types'], \dirname(__DIR__, 3), new \App\Themes\Service\ThemeImageFinder($container->parameters['themes.image_supported_types']), ($container->services['cache.app'] ?? $container->load('getCache_AppService')));
    }
}
