<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52d9d8cb4e008b489611487c6ad56712
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Loo\\Douyin\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Loo\\Douyin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Loo/Douyin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52d9d8cb4e008b489611487c6ad56712::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52d9d8cb4e008b489611487c6ad56712::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}