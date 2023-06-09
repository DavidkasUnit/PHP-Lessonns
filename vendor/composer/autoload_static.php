<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1167eb511471a4fbffa25130363a9c87
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Myproject\\App\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Myproject\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/MyProject',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1167eb511471a4fbffa25130363a9c87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1167eb511471a4fbffa25130363a9c87::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1167eb511471a4fbffa25130363a9c87::$classMap;

        }, null, ClassLoader::class);
    }
}
