<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLnj4Z90\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLnj4Z90/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLnj4Z90.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLnj4Z90\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLnj4Z90\App_KernelDevDebugContainer([
    'container.build_hash' => 'Lnj4Z90',
    'container.build_id' => '5c033b33',
    'container.build_time' => 1733312452,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLnj4Z90');
