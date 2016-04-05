<?php
/**
 * @author: xiongzuomang@youzan.com
 * @since: 16/4/5 下午6:48
 */
namespace airylinus\singletonloggertrait;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

trait SingletonLoggerTrait {

    private static $singletonLogger = null;

    /**
    * @param LoggerInterface $logger
    * @return bool
    */
    public static function setLogger(LoggerInterface $logger) {
        if (self::$singletonLogger === null) {
            self::$singletonLogger = $logger;
        }
        return true;
    }

    /**
     * @return LoggerInterface
     */
    public static function getLogger() {
        if (self::$singletonLogger) {
            return self::$singletonLogger;
        } else {
            $logger = new NullLogger();
            return $logger;
        }
    }
}
