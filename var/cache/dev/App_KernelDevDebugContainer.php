<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1JJpuOC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1JJpuOC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1JJpuOC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1JJpuOC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1JJpuOC\App_KernelDevDebugContainer([
    'container.build_hash' => '1JJpuOC',
    'container.build_id' => '0fdaf06f',
    'container.build_time' => 1732213942,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1JJpuOC');
