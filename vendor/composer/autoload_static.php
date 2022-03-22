<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit116305b54fac0c4abb97732d0e2e6be7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit116305b54fac0c4abb97732d0e2e6be7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit116305b54fac0c4abb97732d0e2e6be7::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit116305b54fac0c4abb97732d0e2e6be7::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit116305b54fac0c4abb97732d0e2e6be7::$classMap;

        }, null, ClassLoader::class);
    }
}
