<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecordListResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\Resolver\RecordListResolver' shared autowired service.
     *
     * @return \App\Data\Resolver\RecordListResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/GraphQl/Resolver/QueryItemResolverInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Resolver/RecordListResolver.php';

        return $container->privates['App\\Data\\Resolver\\RecordListResolver'] = new \App\Data\Resolver\RecordListResolver(($container->privates['App\\Data\\LegacyHandler\\RecordListHandler'] ?? $container->load('getRecordListHandlerService')), ($container->privates['App\\Data\\Service\\Record\\ApiRecordMappers\\ApiRecordMapperRunner'] ?? $container->load('getApiRecordMapperRunnerService')));
    }
}
