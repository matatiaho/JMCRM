<?php

namespace ContainerP6Dryyl;

include_once \dirname(__DIR__, 3).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/TwoFactorConditionInterface.php';
include_once \dirname(__DIR__, 3).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Condition/IpWhitelistCondition.php';
class IpWhitelistConditionGhost06de030 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\IpWhitelistCondition implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'ipWhitelistProvider' => [parent::class, 'ipWhitelistProvider', null],
        'ipWhitelistProvider' => [parent::class, 'ipWhitelistProvider', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('IpWhitelistConditionGhost06de030', false)) {
    \class_alias(__NAMESPACE__.'\\IpWhitelistConditionGhost06de030', 'IpWhitelistConditionGhost06de030', false);
}
