<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8f2a65207134e3530900a00dd5af2c9
{
    public static $files = array (
        'f61431ae35714ebe66a223a5c374b5e5' => __DIR__ . '/..' . '/soberwp/intervention/intervention.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sober\\Intervention\\Module\\' => 26,
            'Sober\\Intervention\\' => 19,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sober\\Intervention\\Module\\' => 
        array (
            0 => __DIR__ . '/..' . '/soberwp/intervention/src/modules',
        ),
        'Sober\\Intervention\\' => 
        array (
            0 => __DIR__ . '/..' . '/soberwp/intervention/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8f2a65207134e3530900a00dd5af2c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8f2a65207134e3530900a00dd5af2c9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
