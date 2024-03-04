<?php
namespace IbyteNovaCom\App;
trait SingletonTrait
{
    // TeamOne 单例
    private static $instance;

    // TeamOne 禁止实例化
    private function __construct()
    {
    }

    // TeamOne 禁止克隆
    private function __clone()
    {
    }

    /**
     * @author TeamOne technical department
     * @param mixed ...$args
     *
     * @return static
     */
    public static function getInstance(...$args)
    {
        if (!isset(static::$instance)) {
            static::$instance = new static(...$args);
        }

        return static::$instance;
    }
}
