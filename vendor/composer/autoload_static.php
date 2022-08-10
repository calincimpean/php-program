<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68b8efdce6130ab808efc1ebed854934
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68b8efdce6130ab808efc1ebed854934::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68b8efdce6130ab808efc1ebed854934::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68b8efdce6130ab808efc1ebed854934::$classMap;

        }, null, ClassLoader::class);
    }
}