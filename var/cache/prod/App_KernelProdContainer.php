<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGq1x5nA\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGq1x5nA/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerGq1x5nA.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerGq1x5nA\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerGq1x5nA\App_KernelProdContainer([
    'container.build_hash' => 'Gq1x5nA',
    'container.build_id' => 'df113878',
    'container.build_time' => 1617803379,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGq1x5nA');