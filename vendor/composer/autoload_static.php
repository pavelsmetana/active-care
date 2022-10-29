<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ab43ab0dacbba337b5b448ccec54a56
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ab43ab0dacbba337b5b448ccec54a56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ab43ab0dacbba337b5b448ccec54a56::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ab43ab0dacbba337b5b448ccec54a56::$classMap;

        }, null, ClassLoader::class);
    }
}