<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c7dea85ce79d9557b99a737d738b957
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Riseuplabs\\UrlHitCounter\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Riseuplabs\\UrlHitCounter\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c7dea85ce79d9557b99a737d738b957::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c7dea85ce79d9557b99a737d738b957::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c7dea85ce79d9557b99a737d738b957::$classMap;

        }, null, ClassLoader::class);
    }
}
