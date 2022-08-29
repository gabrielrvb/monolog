<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44fb94d9db097700f290b8b9eceebc34
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Roberto\\Primeiroprojetocomposer\\' => 32,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Roberto\\Primeiroprojetocomposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44fb94d9db097700f290b8b9eceebc34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44fb94d9db097700f290b8b9eceebc34::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit44fb94d9db097700f290b8b9eceebc34::$classMap;

        }, null, ClassLoader::class);
    }
}
