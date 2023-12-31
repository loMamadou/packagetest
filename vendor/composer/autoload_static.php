<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd34f3e3c076eacff5cc7bbb7a930c7fe
{
    public static $files = array (
        '88254829cb0eed057c30eaabb6d8edc4' => __DIR__ . '/..' . '/amphp/amp/src/functions.php',
        '429ae5f14a13a9076791c19422e10996' => __DIR__ . '/..' . '/amphp/amp/src/Future/functions.php',
        'c8601a4144b50a7b548da082c89c4dc1' => __DIR__ . '/..' . '/amphp/amp/src/Internal/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Revolt\\' => 7,
        ),
        'M' => 
        array (
            'Mlo\\TestMontantFrais\\' => 21,
        ),
        'A' => 
        array (
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Revolt\\' => 
        array (
            0 => __DIR__ . '/..' . '/revolt/event-loop/src',
        ),
        'Mlo\\TestMontantFrais\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd34f3e3c076eacff5cc7bbb7a930c7fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd34f3e3c076eacff5cc7bbb7a930c7fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd34f3e3c076eacff5cc7bbb7a930c7fe::$classMap;

        }, null, ClassLoader::class);
    }
}
