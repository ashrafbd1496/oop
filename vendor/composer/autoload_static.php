<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7afd04bc7a60891b1d9265ec83c4decc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AppFolder\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AppFolder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7afd04bc7a60891b1d9265ec83c4decc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7afd04bc7a60891b1d9265ec83c4decc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7afd04bc7a60891b1d9265ec83c4decc::$classMap;

        }, null, ClassLoader::class);
    }
}