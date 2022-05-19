<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitecba893bb7b6d765c9ada13c2cd7ad40
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

        spl_autoload_register(array('ComposerAutoloaderInitecba893bb7b6d765c9ada13c2cd7ad40', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitecba893bb7b6d765c9ada13c2cd7ad40', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitecba893bb7b6d765c9ada13c2cd7ad40::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitecba893bb7b6d765c9ada13c2cd7ad40::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireecba893bb7b6d765c9ada13c2cd7ad40($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireecba893bb7b6d765c9ada13c2cd7ad40($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
