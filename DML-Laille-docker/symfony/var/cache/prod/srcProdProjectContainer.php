<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHiziCyZ\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHiziCyZ/srcProdProjectContainer.php') {
    touch(__DIR__.'/ContainerHiziCyZ.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\ContainerHiziCyZ\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \ContainerHiziCyZ\srcProdProjectContainer(array(
    'container.build_hash' => 'HiziCyZ',
    'container.build_id' => '06f1fa7a',
    'container.build_time' => 1543058475,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerHiziCyZ');
