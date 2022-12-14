<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0356ec594840ff4ea0196774e7fd0795
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Niuzilong\\DouyinStorePackage\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Niuzilong\\DouyinStorePackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0356ec594840ff4ea0196774e7fd0795::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0356ec594840ff4ea0196774e7fd0795::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0356ec594840ff4ea0196774e7fd0795::$classMap;

        }, null, ClassLoader::class);
    }
}
