<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PwPK5aKService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.PwPK5aK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PwPK5aK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'totpAuthenticator' => ['services', 'scheb_two_factor.security.totp_authenticator', 'getSchebTwoFactor_Security_TotpAuthenticatorService', true],
            'user' => ['privates', 'App\\Module\\Users\\Entity\\User', 'getUserService', true],
        ], [
            'totpAuthenticator' => '?',
            'user' => 'App\\Module\\Users\\Entity\\User',
        ]);
    }
}
