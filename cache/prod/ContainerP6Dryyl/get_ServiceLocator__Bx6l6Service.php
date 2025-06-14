<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Bx6l6Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator..bx6l6_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..bx6l6_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'totpAuthenticator' => ['services', 'scheb_two_factor.security.totp_authenticator', 'getSchebTwoFactor_Security_TotpAuthenticatorService', true],
            'user' => ['privates', 'App\\Module\\Users\\Entity\\User', 'getUserService', true],
        ], [
            'security' => '?',
            'totpAuthenticator' => '?',
            'user' => 'App\\Module\\Users\\Entity\\User',
        ]);
    }
}
