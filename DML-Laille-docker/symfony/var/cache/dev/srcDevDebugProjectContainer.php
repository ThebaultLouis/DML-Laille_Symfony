<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIsQCnr8\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIsQCnr8/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIsQCnr8.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIsQCnr8\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerIsQCnr8\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'IsQCnr8',
    'container.build_id' => '84423f8e',
    'container.build_time' => 1545560988,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerIsQCnr8');
