<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d88994b16769764d9f42e4bf0620e78
{
    public static $classMap = array (
        'Zebra_Image' => __DIR__ . '/..' . '/stefangabos/zebra_image/Zebra_Image.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9d88994b16769764d9f42e4bf0620e78::$classMap;

        }, null, ClassLoader::class);
    }
}
