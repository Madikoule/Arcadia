<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTwyELNT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTwyELNT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTwyELNT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTwyELNT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTwyELNT\App_KernelDevDebugContainer([
    'container.build_hash' => 'TwyELNT',
    'container.build_id' => '8b56c542',
    'container.build_time' => 1725386142,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTwyELNT');
