<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLineItemsListApiMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Service\Fields\LineItems\Mappers\LineItemsListApiMapper' shared autowired service.
     *
     * @return \App\Module\Service\Fields\LineItems\Mappers\LineItemsListApiMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['App\\Module\\Service\\Fields\\LineItems\\Mappers\\LineItemsListApiMapper'] = $container->createProxy('LineItemsListApiMapperGhost6288369', static fn () => \LineItemsListApiMapperGhost6288369::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseModuleMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/Mappers/BaseFieldTypeMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Data/Service/Record/ApiRecordMappers/ApiRecordFieldTypeMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/Fields/LineItems/Mappers/LineItemsListApiMapper.php';

        return $lazyLoad;
    }
}
