<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangeLogActionService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Process\Service\RecordActions\ChangeLogAction' shared autowired service.
     *
     * @return \App\Process\Service\RecordActions\ChangeLogAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/ProcessHandlerInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Process/Service/RecordActions/ChangeLogAction.php';

        return $container->privates['App\\Process\\Service\\RecordActions\\ChangeLogAction'] = new \App\Process\Service\RecordActions\ChangeLogAction(($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? self::getModuleNameMapperHandlerService($container)));
    }
}
