<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMergeRecordsBulkActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\BulkActions\MergeRecordsBulkAction' shared autowired service.
     *
     * @return \App\Process\Service\BulkActions\MergeRecordsBulkAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/BulkActions/MergeRecordsBulkAction.php';

        $container->privates['App\\Process\\Service\\BulkActions\\MergeRecordsBulkAction'] = $instance = new \App\Process\Service\BulkActions\MergeRecordsBulkAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? self::getModuleNameMapperHandlerService($container)));

        $instance->setLogger(($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        return $instance;
    }
}
