<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_SystemconfigsService extends App_KernelProdContainer
{
    /*
     * Gets the public 'app.system-configs' shared autowired service.
     *
     * @return \App\SystemConfig\LegacyHandler\SystemConfigHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/SystemConfig/Service/SystemConfigProviderInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/SystemConfig/LegacyHandler/SystemConfigHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/Routes/LegacyHandler/ClassicViewRoutingExclusionsHandler.php';
        include_once \dirname(__DIR__, 3).'/core/backend/SystemConfig/LegacyHandler/SystemConfigMappers.php';

        $a = ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ??= new \App\Engine\LegacyHandler\LegacyScopeState());
        $b = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());

        return $container->services['app.system-configs'] = new \App\SystemConfig\LegacyHandler\SystemConfigHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', $a, $container->parameters['legacy.exposed_system_configs'], ($container->privates['App\\Engine\\LegacyHandler\\ActionNameMapperHandler'] ?? self::getActionNameMapperHandlerService($container)), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? self::getModuleNameMapperHandlerService($container)), new \App\Routes\LegacyHandler\ClassicViewRoutingExclusionsHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', $a, $b), new \App\SystemConfig\LegacyHandler\SystemConfigMappers(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\SystemConfig\\LegacyHandler\\AuthTypeConfigMapper'] ??= new \App\SystemConfig\LegacyHandler\AuthTypeConfigMapper());
            yield 1 => ($container->privates['App\\SystemConfig\\LegacyHandler\\DateFormatConfigMapper'] ?? $container->load('getDateFormatConfigMapperService'));
            yield 2 => ($container->privates['App\\SystemConfig\\LegacyHandler\\DefaultCurrencyConfigMapper'] ?? $container->load('getDefaultCurrencyConfigMapperService'));
            yield 3 => ($container->privates['App\\SystemConfig\\LegacyHandler\\DefaultModuleConfigMapper'] ?? $container->load('getDefaultModuleConfigMapperService'));
            yield 4 => ($container->privates['App\\SystemConfig\\LegacyHandler\\RecordPaginationConfigMapper'] ??= new \App\SystemConfig\LegacyHandler\RecordPaginationConfigMapper());
            yield 5 => ($container->privates['App\\SystemConfig\\LegacyHandler\\TimeFormatConfigMapper'] ?? $container->load('getTimeFormatConfigMapperService'));
        }, 6)), ($container->privates['App\\Currency\\LegacyHandler\\CurrencyHandler'] ?? $container->load('getCurrencyHandlerService')), ($container->privates['App\\Install\\LegacyHandler\\InstallHandler'] ?? $container->load('getInstallHandlerService')), $container->parameters['legacy.system_config_key_map'], $container->parameters['legacy.cache_reset_actions'], $container->parameters['themes.navigation_tab_limits'], $container->parameters['module.filter.range_search_types'], $container->parameters['module.listview.column_limits'], $container->parameters['module.listview.settings_limits'], $container->parameters['module.listview.actions_limits'], $container->parameters['module.recordview.actions_limits'], $container->parameters['module.subpanelview.actions_limits'], $container->parameters['module.listview.line_actions_limits'], $container->parameters['module.listview.url_query_filter_mapping'], $container->parameters['ui'], $container->parameters['notifications'], $container->parameters['notifications_reload_actions'], $container->parameters['global_recently_viewed_reload_actions'], $container->parameters['extensions'], $container->parameters['auth.logout'], $container->parameters['auth.session-expired'], $container->parameters['module.recordview.convert_ignore'], $container->parameters['module.recordview.subpanel_button_limits'], $b, ($container->privates['App\\Navbar\\LegacyHandler\\NavbarHandler'] ?? $container->load('getNavbarHandlerService')));
    }
}
