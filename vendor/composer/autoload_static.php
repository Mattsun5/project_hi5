<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd03aee5c664a2d7363276209d18df565
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd03aee5c664a2d7363276209d18df565::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd03aee5c664a2d7363276209d18df565::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
