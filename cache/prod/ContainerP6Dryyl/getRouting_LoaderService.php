<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/Configurator/Traits/HostTrait.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/http-kernel/Config/FileLocator.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/Symfony/Routing/ApiLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/AttributeClassLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/framework-bundle/Routing/AttributeRouteControllerLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/AttributeFileLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/AttributeDirectoryLoader.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/config/Loader/DirectoryAwareLoaderInterface.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/routing/Loader/Psr4DirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($container->services['kernel'] ?? $container->get('kernel', 1));

        $c = new \Symfony\Component\HttpKernel\Config\FileLocator($b);
        $d = new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('prod');

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel' => ['services', 'kernel', 'getKernelService', true],
            'security.route_loader.logout' => ['privates', 'security.route_loader.logout', 'getSecurity_RouteLoader_LogoutService', true],
        ], [
            'kernel' => 'App\\Kernel',
            'security.route_loader.logout' => 'Symfony\\Bundle\\SecurityBundle\\Routing\\LogoutRouteLoader',
        ]), 'prod'));
        $a->addLoader(new \ApiPlatform\Symfony\Routing\ApiLoader($b, ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), $container, $container->parameters['api_platform.formats'], $container->parameters['api_platform.resource_class_directories'], true, true, true, false, true, NULL));
        $a->addLoader($d);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeDirectoryLoader($c, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeFileLoader($c, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($c));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
