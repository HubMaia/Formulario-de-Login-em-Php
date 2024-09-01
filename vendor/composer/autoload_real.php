<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9425e9646bdaa0b4eaef0f954ba05fef
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit9425e9646bdaa0b4eaef0f954ba05fef', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9425e9646bdaa0b4eaef0f954ba05fef', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9425e9646bdaa0b4eaef0f954ba05fef::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
