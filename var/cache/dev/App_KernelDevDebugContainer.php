<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPmrZ1xW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPmrZ1xW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPmrZ1xW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPmrZ1xW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPmrZ1xW\App_KernelDevDebugContainer([
    'container.build_hash' => 'PmrZ1xW',
    'container.build_id' => 'ff6a048e',
    'container.build_time' => 1683120181,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPmrZ1xW');
