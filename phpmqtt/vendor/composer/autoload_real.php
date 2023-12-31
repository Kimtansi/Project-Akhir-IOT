<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderIniteb1ce7f472b53d3af7e8f2c30846765a
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

        spl_autoload_register(array('ComposerAutoloaderIniteb1ce7f472b53d3af7e8f2c30846765a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderIniteb1ce7f472b53d3af7e8f2c30846765a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticIniteb1ce7f472b53d3af7e8f2c30846765a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
