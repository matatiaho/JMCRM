<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilesToDeleteCheckService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\Service\Upgrade\Steps\FilesToDeleteCheck' autowired service.
     *
     * @return \App\Install\Service\Upgrade\Steps\FilesToDeleteCheck
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Upgrade/UpgradeStepInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Model/ProcessStepTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Install/Service/Upgrade/Steps/FilesToDeleteCheck.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/FolderSync/FolderComparatorInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Engine/Service/FolderSync/FolderComparator.php';

        $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\FilesToDeleteCheck'] = function ($container) {
            return new \App\Install\Service\Upgrade\Steps\FilesToDeleteCheck(($container->privates['App\\Install\\Service\\Upgrade\\UpgradePackageHandler'] ?? $container->load('getUpgradePackageHandlerService')), \dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/tmp/package/upgrade'), new \App\Engine\Service\FolderSync\FolderComparator(), $container->parameters['upgrades']);
        };

        return $container->factories['service_container']['App\\Install\\Service\\Upgrade\\Steps\\FilesToDeleteCheck']($container);
    }
}
