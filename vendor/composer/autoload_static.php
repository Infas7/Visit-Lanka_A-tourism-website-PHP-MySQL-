<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc14e56a4f5fa51166f29bac9805e0e53
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc14e56a4f5fa51166f29bac9805e0e53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc14e56a4f5fa51166f29bac9805e0e53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc14e56a4f5fa51166f29bac9805e0e53::$classMap;

        }, null, ClassLoader::class);
    }
}
