<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurrencyHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Currency\LegacyHandler\CurrencyHandler' shared autowired service.
     *
     * @return \App\Currency\LegacyHandler\CurrencyHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Currency/LegacyHandler/CurrencyHandler.php';

        return $container->privates['App\\Currency\\LegacyHandler\\CurrencyHandler'] = new \App\Currency\LegacyHandler\CurrencyHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ??= new \App\Engine\LegacyHandler\LegacyScopeState()), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
