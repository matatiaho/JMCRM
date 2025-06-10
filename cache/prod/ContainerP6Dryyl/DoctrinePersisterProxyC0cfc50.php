<?php

namespace ContainerP6Dryyl;

include_once \dirname(__DIR__, 3).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
include_once \dirname(__DIR__, 3).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';
class DoctrinePersisterProxyC0cfc50 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'om' => [parent::class, 'om', null],
        'om' => [parent::class, 'om', null],
    ];
    public function persist(object $user): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->persist(...\func_get_args());
        } else {
            parent::persist(...\func_get_args());
        }
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DoctrinePersisterProxyC0cfc50', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersisterProxyC0cfc50', 'DoctrinePersisterProxyC0cfc50', false);
}
