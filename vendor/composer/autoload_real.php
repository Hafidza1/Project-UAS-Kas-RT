<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita887ca258e88fcab4cfbeff9727a5c51
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

        spl_autoload_register(array('ComposerAutoloaderInita887ca258e88fcab4cfbeff9727a5c51', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita887ca258e88fcab4cfbeff9727a5c51', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita887ca258e88fcab4cfbeff9727a5c51::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
