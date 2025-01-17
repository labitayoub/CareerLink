<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite37cfb44c125a3bc491e8036d3d143af
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite37cfb44c125a3bc491e8036d3d143af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite37cfb44c125a3bc491e8036d3d143af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite37cfb44c125a3bc491e8036d3d143af::$classMap;

        }, null, ClassLoader::class);
    }
}
