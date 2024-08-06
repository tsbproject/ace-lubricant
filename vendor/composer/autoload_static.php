<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e4d406204e87b3a3ce8668e1f2a8148
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e4d406204e87b3a3ce8668e1f2a8148::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e4d406204e87b3a3ce8668e1f2a8148::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e4d406204e87b3a3ce8668e1f2a8148::$classMap;

        }, null, ClassLoader::class);
    }
}
