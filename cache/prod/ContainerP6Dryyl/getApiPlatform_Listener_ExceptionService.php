<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_ExceptionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.listener.exception' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/Symfony/EventListener/ExceptionListener.php';
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/Symfony/EventListener/ErrorListener.php';

        return $container->privates['api_platform.listener.exception'] = new \ApiPlatform\Symfony\EventListener\ExceptionListener(new \ApiPlatform\Symfony\EventListener\ErrorListener('api_platform.action.placeholder', ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)), false, [], ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), $container->parameters['api_platform.error_formats'], $container->parameters['api_platform.exception_to_status'], NULL, ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)), NULL, true), false);
    }
}
