<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTvzXrph\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTvzXrph/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTvzXrph.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTvzXrph\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTvzXrph\App_KernelDevDebugContainer([
    'container.build_hash' => 'TvzXrph',
    'container.build_id' => '76b09c4d',
    'container.build_time' => 1738147890,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTvzXrph');
