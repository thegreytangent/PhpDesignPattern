<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd901245c793ced4b5d1565a9eea17f57
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd901245c793ced4b5d1565a9eea17f57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd901245c793ced4b5d1565a9eea17f57::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
