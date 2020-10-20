<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48ed156f0390ad9fd1e646bd617b675f
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48ed156f0390ad9fd1e646bd617b675f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48ed156f0390ad9fd1e646bd617b675f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit48ed156f0390ad9fd1e646bd617b675f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
