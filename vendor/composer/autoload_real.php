<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfba7c36441e0b5bf57b80580a9fac1ae
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitfba7c36441e0b5bf57b80580a9fac1ae', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfba7c36441e0b5bf57b80580a9fac1ae', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfba7c36441e0b5bf57b80580a9fac1ae::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
