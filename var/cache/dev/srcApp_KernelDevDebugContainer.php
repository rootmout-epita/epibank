<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVtHoYr8\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVtHoYr8/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVtHoYr8.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVtHoYr8\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVtHoYr8\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'VtHoYr8',
    'container.build_id' => '6b9ce81b',
    'container.build_time' => 1550699058,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVtHoYr8');
