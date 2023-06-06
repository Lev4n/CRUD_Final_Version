<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b4a149ed2d0dcb340ece1dcd68a155b
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b4a149ed2d0dcb340ece1dcd68a155b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b4a149ed2d0dcb340ece1dcd68a155b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b4a149ed2d0dcb340ece1dcd68a155b::$classMap;

        }, null, ClassLoader::class);
    }
}