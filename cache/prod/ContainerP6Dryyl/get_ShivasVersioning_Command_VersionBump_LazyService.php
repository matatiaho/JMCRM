<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ShivasVersioning_Command_VersionBump_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.shivas_versioning.command.version_bump.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 3).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.shivas_versioning.command.version_bump.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:version:bump', [], 'Manually bump the application version', false, #[\Closure(name: 'shivas_versioning.command.version_bump', class: 'Shivas\\VersioningBundle\\Command\\VersionBumpCommand')] fn (): \Shivas\VersioningBundle\Command\VersionBumpCommand => ($container->privates['shivas_versioning.command.version_bump'] ?? $container->load('getShivasVersioning_Command_VersionBumpService')));
    }
}
