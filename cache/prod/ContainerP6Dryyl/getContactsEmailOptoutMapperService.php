<?php

namespace ContainerP6Dryyl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactsEmailOptoutMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Module\Contacts\Service\MassUpdate\ContactsEmailOptoutMapper' shared autowired service.
     *
     * @return \App\Module\Contacts\Service\MassUpdate\ContactsEmailOptoutMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/ModuleAwareRegistryItemInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/MassUpdateDefinitionMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/FieldDefinitionsInjectorTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/MassUpdate/MassUpdateFieldDefinitionsInjectorTrait.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/Service/MassUpdate/EmailOptoutMapper.php';
        include_once \dirname(__DIR__, 3).'/core/modules/Contacts/Service/MassUpdate/ContactsEmailOptoutMapper.php';

        return $container->privates['App\\Module\\Contacts\\Service\\MassUpdate\\ContactsEmailOptoutMapper'] = new \App\Module\Contacts\Service\MassUpdate\ContactsEmailOptoutMapper(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'SCRMSESSID', 'SCRMSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ??= new \App\Engine\LegacyHandler\LegacyScopeState()), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\ViewDefinitions\\Service\\FieldAliasMapper'] ?? $container->load('getFieldAliasMapperService')));
    }
}
